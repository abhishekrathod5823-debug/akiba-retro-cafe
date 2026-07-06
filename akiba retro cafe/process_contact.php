<?php
// Akiba Retro Cafe - Contact Form Request Handler
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Basic Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['contact_error'] = "Please fill in all the fields.";
        header("Location: contact.php");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['contact_error'] = "Invalid email format.";
        header("Location: contact.php");
        exit;
    }

    try {
        // Parameterized query to prevent SQL injection
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ]);

        $_SESSION['contact_success'] = "Thank you! Your message has been sent successfully. We will get back to you soon.";
        header("Location: contact.php");
        exit;

    } catch (\PDOException $e) {
        $_SESSION['contact_error'] = "Database error: could not save message. " . $e->getMessage();
        header("Location: contact.php");
        exit;
    }
} else {
    header("Location: contact.php");
    exit;
}
?>
