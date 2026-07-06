<?php
require_once 'header.php';
?>

<!-- Hero Banner (Standardized Theme) -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('data:image/jpeg;base64,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');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content animate-fade">
        <p>WE ARE HERE FOR YOU</p>
        <h1>CONTACT US</h1>
        <h2>TO ANY HELP</h2>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section-padding container">
    <div class="section-title reveal">
        <p>GET IN TOUCH</p>
        <h2>SEND US A MESSAGE</h2>
        <p style="font-size: 0.9rem; margin-top: 10px; color: var(--text-muted);">Have questions or feedback? Send us a message, and we'll reply shortly.</p>
    </div>

    <!-- Alert Messages -->
    <?php if (isset($_SESSION['contact_success'])): ?>
        <div class="alert alert-success reveal">
            <i class="fa-solid fa-circle-check"></i>
            <?php 
                echo $_SESSION['contact_success']; 
                unset($_SESSION['contact_success']);
            ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['contact_error'])): ?>
        <div class="alert alert-danger reveal">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <?php 
                echo $_SESSION['contact_error']; 
                unset($_SESSION['contact_error']);
            ?>
        </div>
    <?php endif; ?>

    <div class="contact-grid">
        <!-- Left Column: Contact Info & Map Mock -->
        <div class="contact-info-panel reveal">
            <h3 style="font-size: 1.3rem; color: var(--accent-gold); border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 15px; margin-bottom: 10px;">BISTRO DETAILS</h3>
            
            <!-- Address -->
            <div class="contact-info-item">
                <div class="contact-icon-wrapper"><i class="fa-solid fa-map-location-dot"></i></div>
                <div class="contact-info-text">
                    <h4>ADDRESS</h4>
                    <p>Akiba Street, Greater Lucknow, India</p>
                </div>
            </div>

            <!-- Phone -->
            <div class="contact-info-item">
                <div class="contact-icon-wrapper"><i class="fa-solid fa-phone"></i></div>
                <div class="contact-info-text">
                    <h4>PHONE</h4>
                    <p>+91 89330 06408</p>
                </div>
            </div>

            <!-- Email -->
            <div class="contact-info-item">
                <div class="contact-icon-wrapper"><i class="fa-solid fa-envelope"></i></div>
                <div class="contact-info-text">
                    <h4>EMAIL</h4>
                    <p>decodelabs.tech@gmail.com</p>
                </div>
            </div>

            <!-- Styled Map Mockbox -->
            <div class="map-mock-box">
                <i class="fa-solid fa-location-crosshairs"></i>
                <div>
                    <h4>INTERACTIVE MAP MOCK</h4>
                    <p style="font-size: 0.8rem; margin-top: 5px;">Map coordinates synchronized with server database location.</p>
                </div>
            </div>
        </div>

        <!-- Right Column: Interactive Form -->
        <div class="contact-form-panel reveal">
            <form action="process_contact.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="contactName">YOUR NAME</label>
                    <input class="form-input" type="text" id="contactName" name="name" required placeholder="John Doe">
                </div>

                <div class="form-group">
                    <label class="form-label" for="contactEmail">EMAIL ADDRESS</label>
                    <input class="form-input" type="email" id="contactEmail" name="email" required placeholder="john@example.com">
                </div>

                <div class="form-group">
                    <label class="form-label" for="contactSubject">SUBJECT</label>
                    <input class="form-input" type="text" id="contactSubject" name="subject" required placeholder="e.g. Table Reservation, Food Feedback">
                </div>

                <div class="form-group">
                    <label class="form-label" for="contactMsg">MESSAGE</label>
                    <textarea class="form-input" id="contactMsg" name="message" rows="5" required placeholder="Write your message here..."></textarea>
                </div>

                <button class="btn-submit" type="submit" style="margin-top: 10px;">SEND MESSAGE</button>
            </form>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
