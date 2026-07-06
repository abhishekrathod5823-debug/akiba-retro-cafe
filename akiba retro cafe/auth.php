<?php
// Akiba Retro Cafe - Authentication Request Handler
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 1. Process Login
    if ($action === 'login') {
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $redirect_uri = isset($_POST['redirect_uri']) ? $_POST['redirect_uri'] : 'index.php';

        if (empty($email) || empty($password)) {
            $_SESSION['login_error'] = "Please enter email and password.";
            header("Location: " . $redirect_uri);
            exit;
        }

        try {
            // Using prepared statement (parameterized query) to prevent SQL Injection
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                // Successful login
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['full_name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['success_message'] = "Welcome back, " . htmlspecialchars($user['full_name']) . "!";
                
                // Redirect back to page or order
                header("Location: " . $redirect_uri);
                exit;
            } else {
                $_SESSION['login_error'] = "Invalid email or password.";
                header("Location: " . $redirect_uri);
                exit;
            }
        } catch (\PDOException $e) {
            $_SESSION['login_error'] = "An error occurred. Please try again.";
            header("Location: " . $redirect_uri);
            exit;
        }
    }

    // 2. Process Registration
    if ($action === 'register') {
        $full_name = trim($_POST['full_name']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $address = trim($_POST['address']);
        $dob = $_POST['dob'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $favorite_food = trim($_POST['favorite_food']);

        // Basic Validations
        if (empty($full_name) || empty($email) || empty($password) || empty($confirm_password) || empty($address) || empty($dob) || empty($gender) || empty($favorite_food)) {
            $_SESSION['register_error'] = "All fields are required.";
            header("Location: register.php");
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['register_error'] = "Invalid email format.";
            header("Location: register.php");
            exit;
        }

        if ($password !== $confirm_password) {
            $_SESSION['register_error'] = "Passwords do not match.";
            header("Location: register.php");
            exit;
        }

        if (strlen($password) < 6) {
            $_SESSION['register_error'] = "Password must be at least 6 characters long.";
            header("Location: register.php");
            exit;
        }

        try {
            // Check if email already exists
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            if ($stmt->fetch()) {
                $_SESSION['register_error'] = "An account with this email already exists.";
                header("Location: register.php");
                exit;
            }

            // Hash password securely (Pillar 4: The Shield)
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user
            $insert_stmt = $pdo->prepare("INSERT INTO users (full_name, email, password, address, dob, gender, favorite_food) VALUES (:full_name, :email, :password, :address, :dob, :gender, :favorite_food)");
            $insert_stmt->execute([
                'full_name' => $full_name,
                'email' => $email,
                'password' => $hashed_password,
                'address' => $address,
                'dob' => $dob,
                'gender' => $gender,
                'favorite_food' => $favorite_food
            ]);

            // Auto-login new user
            $new_user_id = $pdo->lastInsertId();
            $_SESSION['user_id'] = $new_user_id;
            $_SESSION['user_name'] = $full_name;
            $_SESSION['user_email'] = $email;
            $_SESSION['success_message'] = "Registration successful! Welcome to the Akiba Cafe community!";

            header("Location: order.php");
            exit;

        } catch (\PDOException $e) {
            $_SESSION['register_error'] = "Database error: " . $e->getMessage();
            header("Location: register.php");
            exit;
        }
    }
}

// 3. Process Logout
if ($action === 'logout') {
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
    
    // Redirect to home
    session_start();
    $_SESSION['success_message'] = "You have logged out successfully.";
    header("Location: index.php");
    exit;
}

// If access directly without valid action, redirect to home
header("Location: index.php");
exit;
?>
