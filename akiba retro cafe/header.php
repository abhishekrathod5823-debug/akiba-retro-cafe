<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Get current page filename to set active class in nav
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akiba Retro Cafe</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Header / Navigation -->
    <header class="main-header" id="mainHeader">
        <div class="container">
            <nav class="navbar">
                <div class="nav-left">
                    <div class="logo">
                        <a href="index.php">
                            <span class="logo-highlight">AKIBA</span> RETRO CAFE
                        </a>
                    </div>
                    <ul class="nav-menu" id="navMenu">
                        <li>
                            <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">HOME</a>
                        </li>
                        <li>
                            <a href="menu.php" class="nav-link <?php echo ($current_page == 'menu.php') ? 'active' : ''; ?>">MENU</a>
                        </li>
                        <li>
                            <a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">ABOUT</a>
                        </li>
                        <li>
                            <a href="order.php" class="nav-link <?php echo ($current_page == 'order.php') ? 'active' : ''; ?>">ORDER</a>
                        </li>
                        <li>
                            <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">CONTACT</a>
                        </li>
                    </ul>
                </div>

                <div class="nav-right">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <div class="user-profile">
                            <span class="user-name">
                                <i class="fa-solid fa-user-ninja"></i> <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                            </span>
                            <a href="auth.php?action=logout" class="btn-logout" title="Logout">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
                        </div>
                    <?php else: ?>
                        <button class="btn-login" id="loginBtn">
                            <i class="fa-solid fa-right-to-bracket"></i> LOGIN
                        </button>
                    <?php endif; ?>
                    <button class="hamburger" id="hamburgerBtn" aria-label="Toggle Menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Login Modal -->
    <div class="modal-overlay" id="loginModal">
        <div class="modal-box">
            <button class="modal-close" id="modalCloseBtn">&times;</button>
            <h3 class="modal-title">SIGN IN</h3>
            
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <?php 
                        echo $_SESSION['login_error']; 
                        unset($_SESSION['login_error']); // Clear after showing
                    ?>
                </div>
                <!-- Automatically reopen modal on error -->
                <script>
                    window.addEventListener('DOMContentLoaded', () => {
                        document.getElementById('loginModal').classList.add('active');
                    });
                </script>
            <?php endif; ?>

            <form action="auth.php?action=login" method="POST">
                <input type="hidden" name="redirect_uri" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                <div class="form-group">
                    <label class="form-label" for="loginEmail">EMAIL ADDRESS</label>
                    <input class="form-input" type="email" id="loginEmail" name="email" required placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label class="form-label" for="loginPassword">PASSWORD</label>
                    <input class="form-input" type="password" id="loginPassword" name="password" required placeholder="••••••••">
                </div>
                <button class="btn-submit" type="submit">SIGN IN</button>
            </form>
            <div class="modal-footer-text">
                Don't have an account? <a href="register.php">Register here</a>
            </div>
        </div>
    </div>
