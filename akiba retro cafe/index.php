<?php
require_once 'header.php';
?>

<!-- Success Alert Messages -->
<?php if (isset($_SESSION['success_message'])): ?>
    <div class="container" style="margin-top: 100px; margin-bottom: -60px; position: relative; z-index: 100;">
        <div class="alert alert-success" id="successAlert">
            <i class="fa-solid fa-circle-check"></i>
            <?php 
                echo $_SESSION['success_message']; 
                unset($_SESSION['success_message']);
            ?>
            <button onclick="document.getElementById('successAlert').style.display='none';" style="background:none; border:none; color:inherit; font-size:1.1rem; margin-left:auto; cursor:pointer;">&times;</button>
        </div>
    </div>
<?php endif; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=1200&auto=format&fit=crop');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content animate-fade">
        <p>A SHOWA-ERA RETRO JAPANESE BISTRO</p>
        <h1>CHARMING SPOT SPECIALIZING IN SUSHI AND RAMEN</h1>
        <div style="margin-top: 30px; display: flex; gap: 20px; justify-content: center;">
            <a href="menu.php" class="btn-primary">EXPLORE MENU</a>
            <a href="order.php" class="btn-outline">ORDER ONLINE</a>
        </div>
    </div>
</section>

<!-- Akiba Cafe Historical -->
<section class="section-padding container">
    <div class="historical-grid">
        <div class="historical-img reveal">
            <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?q=80&w=600&auto=format&fit=crop" alt="Akiba Cafe Cozy Interior">
        </div>
        <div class="historical-content reveal">
            <div class="section-title" style="text-align: left; margin-bottom: 30px;">
                <p>EST. 1982 | TOKYO ORIGINS</p>
                <h2 style="margin-bottom: 0;">AKIBA CAFE HISTORICAL</h2>
            </div>
            <h3>Steeped in nostalgia, brewed with precision.</h3>
            <p>Akiba Retro Cafe first opened its heavy oak doors in 1982 in the retro back alleys of Akihabara, Tokyo. Originally a vinyl-listening "Kissaten" (coffee shop), it evolved into a sanctuary where retro culture and culinary craftsmanship meet. We specialize in rich, slow-simmered Tonkotsu Ramen, hand-crafted Nigiri Sushi, and signature Kyoto-style dark roast coffee blends.</p>
            <p>Step away from the fast-paced modern world and slide into a booth surrounded by retro arcade cabinets, vintage showa-era posters, and the warm crackle of vinyl records.</p>
            <a href="about.php" class="btn-outline">READ MORE</a>
        </div>
    </div>
</section>

<!-- Authentic Menu Section -->
<section class="section-padding home-menu">
    <div class="container">
        <div class="section-title reveal">
            <p>CHEF'S SIGNATURES</p>
            <h2>OUR AUTHENTIC MENU</h2>
        </div>
        
        <div class="menu-preview-grid reveal">
            <!-- Left Column: Ramen & Bowls -->
            <div class="menu-col">
                <h3 style="font-family: var(--font-heading); color: var(--accent-gold); font-size: 1.2rem; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px; margin-bottom: 10px;">RAMEN & MAIN BOWLS</h3>
                
                <div class="menu-item-row">
                    <span class="menu-item-name">SPICY SHIO RAMEN</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">$14.50</span>
                </div>
                <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: -15px; margin-bottom: 15px;">Light sea salt broth, slow-cooked chashu pork belly, bamboo shoots, soft-boiled egg, and house-made chili oil.</p>

                <div class="menu-item-row">
                    <span class="menu-item-name">CLASSIC TONKOTSU</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">$15.00</span>
                </div>
                <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: -15px; margin-bottom: 15px;">Rich 16-hour pork bone broth, black garlic oil, wood ear mushrooms, green onions, and tender chashu pork.</p>

                <div class="menu-item-row">
                    <span class="menu-item-name">TRADITIONAL UNAGI DON</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">$18.50</span>
                </div>
                <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: -15px; margin-bottom: 15px;">Grilled freshwater eel glazed with sweet unagi eel sauce, served over a steaming bowl of premium Japanese rice.</p>
            </div>

            <!-- Right Column: Sushi & Drinks -->
            <div class="menu-col">
                <h3 style="font-family: var(--font-heading); color: var(--accent-gold); font-size: 1.2rem; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px; margin-bottom: 10px;">SUSHI & CRAFT DRINKS</h3>
                
                <div class="menu-item-row">
                    <span class="menu-item-name">SIGNATURE AKIBA SUSHI PLATTER</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">$22.00</span>
                </div>
                <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: -15px; margin-bottom: 15px;">Chef's selection of 6 premium nigiri (Tuna, Salmon, Yellowtail) and a classic Spicy Salmon Roll.</p>

                <div class="menu-item-row">
                    <span class="menu-item-name">KYOTO DRIP ESPRESSO</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">$5.00</span>
                </div>
                <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: -15px; margin-bottom: 15px;">Slow-dripped dark roast coffee beans sourced directly from independent farmers in Kyoto, Japan.</p>

                <div class="menu-item-row">
                    <span class="menu-item-name">MATCHA CREAM LATTE</span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price">$6.00</span>
                </div>
                <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: -15px; margin-bottom: 15px;">Uji ceremonial grade matcha whisked to perfection, topped with silky steamed milk and vanilla foam.</p>
            </div>
        </div>

        <div style="text-align: center;" class="reveal">
            <a href="menu.php" class="btn-primary">VIEW FULL MENU</a>
        </div>
    </div>
</section>

<!-- Our Store Akira Cafe -->
<section class="section-padding container">
    <div class="section-title reveal">
        <p>EXPLORE OUR SPACES</p>
        <h2>OUR STORE AKIBA CAFE</h2>
    </div>
    
    <div class="store-cards">
        <!-- Card 1 -->
        <div class="store-card reveal">
            <div class="store-card-img">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=500&auto=format&fit=crop" alt="Showa Dining Room">
                <div class="store-card-icon"><i class="fa-solid fa-arrows-to-eye"></i></div>
            </div>
            <div class="store-card-content">
                <h3>THE SHOWA ROOM</h3>
                <p>Dine in a vintage 80s environment surrounded by retro records, cassette tapes, and warm glowing neon lights.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="store-card reveal">
            <div class="store-card-img">
                <img src="data:image/jpeg;base64,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" alt="Ramen Bar Counter">
                <div class="store-card-icon"><i class="fa-solid fa-arrows-to-eye"></i></div>
            </div>
            <div class="store-card-content">
                <h3>THE RAMEN BAR</h3>
                <p>Pull up a stool at our traditional wooden counter and watch our chefs prepare steaming bowls of ramen in real time.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="store-card reveal">
            <div class="store-card-img">
                <img src="https://images.unsplash.com/photo-1560624052-449f5ddf0c31?q=80&w=500&auto=format&fit=crop" alt="Vinyl Listening Corner">
                <div class="store-card-icon"><i class="fa-solid fa-arrows-to-eye"></i></div>
            </div>
            <div class="store-card-content">
                <h3>THE VINYL CORNER</h3>
                <p>Browse our extensive collection of classic Japanese City Pop and jazz fusion vinyls while sipping slow-dripped coffee.</p>
            </div>
        </div>
    </div>
</section>

<!-- Customer Testimonials -->
<section class="section-padding home-menu">
    <div class="container">
        <div class="section-title reveal">
            <p>GUEST DIARIES</p>
            <h2>CUSTOMER SAYS ABOUT AKIBA CAFE</h2>
        </div>
        
        <div class="testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card reveal">
                <i class="fa-solid fa-quote-right quote-icon"></i>
                <p class="testimonial-text">"The Tonkotsu Ramen is hands down the best I have ever had outside of Tokyo. The broth is incredibly rich, and the vintage jazz records playing in the background make the atmosphere unmatched."</p>
                <div class="testimonial-user">
                    <img class="testimonial-avatar" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=150" alt="Sarah Miller">
                    <div class="testimonial-info">
                        <h4>SARAH MILLER</h4>
                        <span>Food Blogger</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card reveal">
                <i class="fa-solid fa-quote-right quote-icon"></i>
                <p class="testimonial-text">"Akiba Cafe is a absolute gem. The combination of premium sushi, artisanal Kyoto coffee, and the Showa-era aesthetic creates a unique dining experience that feels like time travel."</p>
                <div class="testimonial-user">
                    <img class="testimonial-avatar" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150" alt="Takahiro Sato">
                    <div class="testimonial-info">
                        <h4>TAKAHIRO SATO</h4>
                        <span>Regular Patron</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card reveal">
                <i class="fa-solid fa-quote-right quote-icon"></i>
                <p class="testimonial-text">"As a fan of retro Japanese culture, this place is heaven. The detail in their design is astonishing. Make sure to try their Matcha Latte and the Unagi Don!"</p>
                <div class="testimonial-user">
                    <img class="testimonial-avatar" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150" alt="Jessica Chen">
                    <div class="testimonial-info">
                        <h4>JESSICA CHEN</h4>
                        <span>Artist & Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Banner -->
<section class="footer-banner" style="background-image: url('https://images.unsplash.com/photo-1569718212165-3a8278d5f624?q=80&w=1200&auto=format&fit=crop');">
    <div class="footer-banner-overlay"></div>
    <div class="container reveal">
        <h2>ELEVATE YOUR PALATE WITH AKIBA CAFE<br>CULINARY DELIGHTS!</h2>
        <a href="order.php" class="btn-primary">PLACE ORDER NOW</a>
    </div>
</section>

<?php
require_once 'footer.php';
?>
