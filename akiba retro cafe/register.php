<?php
require_once 'header.php';
?>

<!-- Hero Banner (Standardized Theme across pages) -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1543007630-9710e4a00a20?q=80&w=1000&auto=format&fit=crop');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content animate-fade">
        <p>JOIN THE AKIBA CIRCLE</p>
        <h1>CREATE AN ACCOUNT</h1>
    </div>
</section>

<!-- Registration Form Section -->
<section class="register-section">
    <div class="container">
        <div class="register-card reveal">
            <div class="register-title">
                <h2>REGISTRATION</h2>
                <p>Register to order your favorite ramen and coffee online.</p>
            </div>

            <?php if (isset($_SESSION['register_error'])): ?>
                <div class="alert alert-danger">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <?php 
                        echo $_SESSION['register_error']; 
                        unset($_SESSION['register_error']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="auth.php?action=register" method="POST">
                <div class="register-grid">
                    <!-- Full Name -->
                    <div class="form-group">
                        <label class="form-label" for="regName">FULL NAME</label>
                        <input class="form-input" type="text" id="regName" name="full_name" required placeholder="John Doe">
                    </div>
                    
                    <!-- Email -->
                    <div class="form-group">
                        <label class="form-label" for="regEmail">EMAIL ADDRESS</label>
                        <input class="form-input" type="email" id="regEmail" name="email" required placeholder="john@example.com">
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label class="form-label" for="regPassword">PASSWORD</label>
                        <input class="form-input" type="password" id="regPassword" name="password" required placeholder="At least 6 characters">
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label class="form-label" for="regConfirmPassword">CONFIRM PASSWORD</label>
                        <input class="form-input" type="password" id="regConfirmPassword" name="confirm_password" required placeholder="Confirm password">
                    </div>

                    <!-- Date of Birth -->
                    <div class="form-group">
                        <label class="form-label" for="regDob">DATE OF BIRTH</label>
                        <input class="form-input" type="date" id="regDob" name="dob" required>
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <label class="form-label">GENDER</label>
                        <div class="radio-group">
                            <label class="radio-option">
                                <input type="radio" name="gender" value="Male" required> Male
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="gender" value="Female"> Female
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="gender" value="Other"> Other
                            </label>
                        </div>
                    </div>

                    <!-- Favorite Food/Drink -->
                    <div class="form-group col-full">
                        <label class="form-label" for="regFood">FAVORITE FOOD/DRINK IN CAFE</label>
                        <input class="form-input" type="text" id="regFood" name="favorite_food" required placeholder="e.g. Spicy Shio Ramen, Matcha Latte">
                    </div>

                    <!-- Address -->
                    <div class="form-group col-full">
                        <label class="form-label" for="regAddress">SHIPPING / DELIVERY ADDRESS</label>
                        <textarea class="form-input" id="regAddress" name="address" rows="3" required placeholder="123 Street Name, City, Country"></textarea>
                    </div>

                    <div class="form-group col-full">
                        <button class="btn-submit" type="submit">CREATE ACCOUNT</button>
                    </div>
                </div>
            </form>
            <div class="modal-footer-text" style="margin-top: 20px;">
                Already have an account? <a href="#" onclick="document.getElementById('loginModal').classList.add('active'); return false;">Sign In here</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
