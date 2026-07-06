    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: About -->
                <div class="footer-col footer-about">
                    <h3>AKIBA CAFE</h3>
                    <p>A nostalgia-fueled haven in the heart of the city, serving authentic Japanese street food, signature ramen, and Kyoto-style dark roast coffee blends.</p>
                    <div class="footer-socials">
                        <a href="https://www.bing.com/ck/a?!&&p=a0a1c6fcf6e103416a91d84eb129e340a8eb42bef41ba0925663bc61bb08c10cJmltdHM9MTc4MjA4NjQwMA&ptn=3&ver=2&hsh=4&fclid=1035b6b5-b2aa-65c7-09d9-a07ab35264db&psq=UGF%2cSCF-4%2cSarabha+Nagar+Main+Market%2c+Ldh&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9ha2liYWNhZmVhbmRiaXN0cm8v" class="footer-social-link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/akibacafeandbistro/" class="footer-social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="footer-social-link"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="footer-social-link"><i class="fa-brands fa-pinterest-p"></i></a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="footer-col">
                    <h3>EXPLORE</h3>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Our Menu</a></li>
                        <li><a href="about.php">Our Story</a></li>
                        <li><a href="order.php">Order Online</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Hours -->
                <div class="footer-col">
                    <h3>OPENING HOURS</h3>
                    <ul class="footer-links" style="color: var(--text-muted); font-size: 0.9rem;">
                        <li style="display: flex; justify-content: space-between;"><span>Mon - Thu</span> <span style="color: var(--text-light)">11 AM - 10 PM</span></li>
                        <li style="display: flex; justify-content: space-between;"><span>Friday</span> <span style="color: var(--text-light)">11 AM - 11 PM</span></li>
                        <li style="display: flex; justify-content: space-between;"><span>Saturday</span> <span style="color: var(--text-light)">10 AM - 11 PM</span></li>
                        <li style="display: flex; justify-content: space-between;"><span>Sunday</span> <span style="color: var(--text-light)">10 AM - 9 PM</span></li>
                    </ul>
                </div>

                <!-- Col 4: Newsletter -->
                <div class="footer-col footer-newsletter">
                    <h3>NEWSLETTER</h3>
                    <p>Join the secret circle. Subscribe to receive exclusive recipes, vinyl club updates, and secret menu items.</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Subscribed to the Inner Circle!'); this.reset();">
                        <input class="newsletter-input" type="email" placeholder="Your Email" required>
                        <button class="btn-newsletter" type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Akiba Retro Cafe. All rights reserved. Industrial Training Project.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Global Javascript -->
    <script>
        // 1. Sticky Header scroll behavior
        const header = document.getElementById('mainHeader');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 2. Mobile Menu toggle
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const navMenu = document.getElementById('navMenu');
        if (hamburgerBtn && navMenu) {
            hamburgerBtn.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                hamburgerBtn.querySelector('i').classList.toggle('fa-bars');
                hamburgerBtn.querySelector('i').classList.toggle('fa-xmark');
            });
        }

        // 3. Login Modal Toggle
        const loginBtn = document.getElementById('loginBtn');
        const loginModal = document.getElementById('loginModal');
        const modalCloseBtn = document.getElementById('modalCloseBtn');

        if (loginBtn && loginModal && modalCloseBtn) {
            loginBtn.addEventListener('click', () => {
                loginModal.classList.add('active');
            });

            modalCloseBtn.addEventListener('click', () => {
                loginModal.classList.remove('active');
            });

            // Close modal when clicking outside the box
            loginModal.addEventListener('click', (e) => {
                if (e.target === loginModal) {
                    loginModal.classList.remove('active');
                }
            });
        }

        // 4. Scroll Reveal Animations
        const reveals = document.querySelectorAll('.reveal');
        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            reveals.forEach(reveal => {
                const elementTop = reveal.getBoundingClientRect().top;
                const elementVisible = 100; // Trigger point
                if (elementTop < windowHeight - elementVisible) {
                    reveal.classList.add('active');
                }
            });
        };
        window.addEventListener('scroll', revealOnScroll);
        // Trigger once initially to check for elements already in viewport
        window.addEventListener('DOMContentLoaded', revealOnScroll);
    </script>
</body>
</html>
