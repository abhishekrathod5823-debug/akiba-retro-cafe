<?php
require_once 'header.php';
?>

<!-- Hero Banner (Standardized Theme) -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1569718212165-3a8278d5f624?q=80&w=1200&auto=format&fit=crop');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content animate-fade">
        <p>CRAFTED WITH SOUL</p>
        <h1>THE ARTISANAL KITCHEN BOOK</h1>
    </div>
</section>

<!-- Menu Flipbook Section -->
<section class="section-padding container">
    <div class="section-title reveal">
        <p>INTERACTIVE CHRONICLE</p>
        <h2>THE 3D CULINARY BOOK</h2>
        <p style="font-size: 0.9rem; margin-top: 10px; color: var(--text-muted);">(Click the arrows to flip the pages of our retro menu)</p>
    </div>

    <div class="flipbook-controls mobile-hide reveal">
        <button class="btn-flip" id="prevBtn"><i class="fa-solid fa-chevron-left"></i></button>
        
    <!-- 3D Flipbook Container (Visible on Desktop/Laptops/Tablets Landscape) -->
    <div class="flipbook-container mobile-hide reveal">
        <div class="book" id="menuBook">
            
            <!-- Paper 1: Cover Page -->
            <div class="paper cover-page" id="p1" style="z-index: 5;">
                <div class="front">
                    <div style="border: 2px solid var(--accent-gold); padding: 40px; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; border-radius: 4px;">
                        <span style="font-family: var(--font-heading); color: var(--accent-red); font-weight: 700; letter-spacing: 4px; font-size: 0.95rem; margin-bottom: 10px;">EST. 1982</span>
                        <h2 style="font-size: 2.2rem; font-family: var(--font-heading); margin-bottom: 20px;">AKIBA RETRO</h2>
                        <h3 style="font-family: var(--font-heading); letter-spacing: 6px; font-size: 1.2rem; margin-bottom: 30px; color: var(--text-light);">MENU</h3>
                        <p style="font-size: 0.85rem; max-width: 250px;">A collection of time-honored Showa bistro recipes and Kyoto coffee blends.</p>
                        <i class="fa-solid fa-book-open" style="margin-top: 40px; font-size: 1.8rem; color: var(--accent-gold); animation: pulseGlow 1.5s infinite;"></i>
                    </div>
                </div>
                <div class="back">
                    <div class="menu-page-content">
                        <div class="menu-book-img">
                            <img src="https://images.unsplash.com/photo-1557872943-16a5ac26437e?q=80&w=500&auto=format&fit=crop" alt="Traditional Ramen Prep">
                        </div>
                        <h3 class="menu-page-title">OUR RAMEN HERITAGE</h3>
                        <p style="font-size: 0.85rem; color: #555; text-align: justify; line-height: 1.5; font-family: var(--font-serif); font-style: italic;">
                            "Ramen is not just soup. It is an orchestra of broth, noodles, tare, and oils that tells the story of generations."
                        </p>
                        <p style="font-size: 0.8rem; color: #666; margin-top: 10px;">
                            Our slow-simmered Tonkotsu pork bone broth takes 16 hours of boiling to release its deep collagen richness. Paired with house-cured chashu pork belly and soft, marinated organic eggs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Paper 2: Page 1 (Ramen Details & Sushi Intro) -->
            <div class="paper" id="p2" style="z-index: 4;">
                <div class="front">
                    <div class="menu-page-content">
                        <h3 class="menu-page-title">SIGNATURE RAMEN & SIDES</h3>
                        <div class="menu-book-items">
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>CLASSIC TONKOTSU RAMEN</span>
                                    <span>$15.00</span>
                                </div>
                                <span class="menu-book-item-desc">Rich 16-hour pork bone broth, thin straight noodles, chashu pork, black garlic oil, bamboo.</span>
                            </div>
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>SPICY SHIO RAMEN</span>
                                    <span>$14.50</span>
                                </div>
                                <span class="menu-book-item-desc">Light, clear sea salt broth, slow-cooked chashu, soft-boiled egg, green onions, and chili oil.</span>
                            </div>
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>SHOYU SHITAKE RAMEN (V)</span>
                                    <span>$13.50</span>
                                </div>
                                <span class="menu-book-item-desc">Mellow soy sauce broth, roasted shiitake mushrooms, baby bok choy, nori seaweed, garlic.</span>
                            </div>
                            <div class="menu-book-item" style="margin-top: 10px;">
                                <div class="menu-book-item-header">
                                    <span>PORK GYOZA (5 PCS)</span>
                                    <span>$7.00</span>
                                </div>
                                <span class="menu-book-item-desc">Pan-seared Japanese dumplings served with a house soy-vinegar dipping sauce.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div class="menu-page-content">
                        <div class="menu-book-img">
                            <img src="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?q=80&w=500&auto=format&fit=crop" alt="Sushi Platter Crafting">
                        </div>
                        <h3 class="menu-page-title">THE ART OF SUSHI</h3>
                        <p style="font-size: 0.85rem; color: #555; text-align: justify; line-height: 1.5; font-family: var(--font-serif); font-style: italic;">
                            "To make great sushi, you must understand balance. The temperature of the rice, the thinness of the fish, and the touch of wasabi."
                        </p>
                        <p style="font-size: 0.8rem; color: #666; margin-top: 10px;">
                            We slice our fresh yellowtail, bluefin tuna, and organic salmon daily. We source our fish directly from verified suppliers to ensure absolute freshness.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Paper 3: Page 2 (Sushi Details & Drinks Intro) -->
            <div class="paper" id="p3" style="z-index: 3;">
                <div class="front">
                    <div class="menu-page-content">
                        <h3 class="menu-page-title">HANDCRAFTED SUSHI</h3>
                        <div class="menu-book-items">
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>AKIBA SUSHI PLATTER</span>
                                    <span>$22.00</span>
                                </div>
                                <span class="menu-book-item-desc">Chef's choice of 6 premium nigiri (Tuna, Salmon, Yellowtail) and one Spicy Salmon roll.</span>
                            </div>
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>SPICY TUNA ROLL (8 PCS)</span>
                                    <span>$12.50</span>
                                </div>
                                <span class="menu-book-item-desc">Fresh minced bluefin tuna, spicy mayo, green onion, rolled with sesame seeds.</span>
                            </div>
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>PREMIUM NIGIRI DUO</span>
                                    <span>$9.00</span>
                                </div>
                                <span class="menu-book-item-desc">Two pieces of hand-pressed sushi: choice of sake salmon or maguro tuna.</span>
                            </div>
                            <div class="menu-book-item" style="margin-top: 10px;">
                                <div class="menu-book-item-header">
                                    <span>TEMPURA ICE CREAM</span>
                                    <span>$8.00</span>
                                </div>
                                <span class="menu-book-item-desc">Creamy vanilla ice cream wrapped in pound cake, battered and deep-fried to golden crispy.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div class="menu-page-content">
                        <div class="menu-book-img">
                            <img src="https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?q=80&w=500&auto=format&fit=crop" alt="Coffee Brewing">
                        </div>
                        <h3 class="menu-page-title">KYOTO SLOW BREWS</h3>
                        <p style="font-size: 0.85rem; color: #555; text-align: justify; line-height: 1.5; font-family: var(--font-serif); font-style: italic;">
                            "Coffee is a ritual. In our siphon and drip towers, gravity and steam draw out the deep smoky chocolate notes of dark roasted beans."
                        </p>
                        <p style="font-size: 0.8rem; color: #666; margin-top: 10px;">
                            We import shade-grown, organic beans directly from Kyoto. Our matcha green tea is sourced from Uji, the historic heartland of Japanese tea.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Paper 4: Page 3 (Coffee & Matchas Details) -->
            <div class="paper" id="p4" style="z-index: 2;">
                <div class="front">
                    <div class="menu-page-content">
                        <h3 class="menu-page-title">KYOTO COFFEE & TEAS</h3>
                        <div class="menu-book-items">
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>KYOTO DRIP ESPRESSO</span>
                                    <span>$5.00</span>
                                </div>
                                <span class="menu-book-item-desc">Slow-dripped dark roast coffee beans sourced from Kyoto, served black or with fresh cream.</span>
                            </div>
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>MATCHA CREAM LATTE</span>
                                    <span>$6.00</span>
                                </div>
                                <span class="menu-book-item-desc">Uji ceremonial grade green tea whisked, topped with silky steamed milk and vanilla foam.</span>
                            </div>
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>ORGANIC HOJICHA TEA</span>
                                    <span>$4.50</span>
                                </div>
                                <span class="menu-book-item-desc">Warm roasted green tea infusion with earthy, nutty tasting notes.</span>
                            </div>
                            <div class="menu-book-item" style="margin-top: 10px;">
                                <div class="menu-book-item-header">
                                    <span>HOUSE SAKE (150ML)</span>
                                    <span>$9.00</span>
                                </div>
                                <span class="menu-book-item-desc">Traditional warm or chilled sake, perfect to accompany your ramen and sushi feast.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <!-- Paper 4 Back is the Inside of Back Cover -->
                    <div class="menu-page-content">
                        <div class="menu-book-img">
                            <img src="https://images.unsplash.com/photo-1543007630-9710e4a00a20?q=80&w=500&auto=format&fit=crop" alt="Pouring Beer">
                        </div>
                        <h3 class="menu-page-title">CRAFT BEERS</h3>
                        <div class="menu-book-items">
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>ASAHI SUPER DRY</span>
                                    <span>$6.50</span>
                                </div>
                                <span class="menu-book-item-desc">Japan's premier crisp, clean dry lager beer served ice-cold.</span>
                            </div>
                            <div class="menu-book-item">
                                <div class="menu-book-item-header">
                                    <span>HITACHINO NEST WHITE ALE</span>
                                    <span>$8.50</span>
                                </div>
                                <span class="menu-book-item-desc">Belgian-style wheat ale brewed with orange peel, coriander, and nutmeg.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paper 5: Back Cover -->
            <div class="paper back-cover-page" id="p5" style="z-index: 1;">
                <div class="front">
                    <!-- Blank back of page 4 -->
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height:100%; text-align: center;">
                        <h3 style="font-family: var(--font-heading); color: var(--accent-red); margin-bottom: 20px;">DIETARY INFO</h3>
                        <p style="font-size: 0.85rem; color: #555; max-width: 280px; line-height: 1.6;">
                            Our broths may contain soy, wheat, and shellfish. If you have any food allergies or specific dietary requirements, please inform our team upon ordering.
                        </p>
                    </div>
                </div>
                <div class="back">
                    <div style="border: 2px solid var(--accent-gold); padding: 40px; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; border-radius: 4px;">
                        <h2 style="font-size: 1.8rem; font-family: var(--font-heading); margin-bottom: 15px; color: var(--accent-gold);">DOMO ARIGATO</h2>
                        <p style="font-size: 0.85rem; margin-bottom: 25px;">Thank you for dining with us</p>
                        <a href="order.php" class="btn-primary" style="font-size: 0.75rem; padding: 10px 20px;">PLACE ORDER</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Flipbook Controls (Visible on Desktop) -->
    <button class="btn-flip" id="nextBtn"><i class="fa-solid fa-chevron-right"></i></button>
    </div>

    <!-- Mobile Menu Fallback (Shown on Mobile screens <= 991px instead of 3D flipbook) -->
    <div class="mobile-show-menu" style="display: none;">
        <div class="mobile-book-fallback">
            <h3 style="font-family: var(--font-heading); color: var(--accent-red); font-size: 1.3rem; border-bottom: 2px solid var(--accent-gold); padding-bottom: 8px; margin-bottom: 20px;">RAMEN & MAIN BOWLS</h3>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 20px;">
                <li>
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-family: var(--font-heading);">
                        <span>CLASSIC TONKOTSU RAMEN</span> <span>$15.00</span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 5px;">Rich 16-hour pork bone broth, black garlic oil, bamboo shoots, egg, chashu pork.</p>
                </li>
                <li>
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-family: var(--font-heading);">
                        <span>SPICY SHIO RAMEN</span> <span>$14.50</span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 5px;">Light sea salt broth, egg, scallions, chashu, and signature house chili oil.</p>
                </li>
                <li>
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-family: var(--font-heading);">
                        <span>SHOYU SHITAKE RAMEN (V)</span> <span>$13.50</span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 5px;">Mellow soy sauce broth, roasted shiitake, bok choy, nori, and garlic.</p>
                </li>
            </ul>

            <h3 style="font-family: var(--font-heading); color: var(--accent-red); font-size: 1.3rem; border-bottom: 2px solid var(--accent-gold); padding-bottom: 8px; margin-top: 40px; margin-bottom: 20px;">HANDCRAFTED SUSHI</h3>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 20px;">
                <li>
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-family: var(--font-heading);">
                        <span>AKIBA SUSHI PLATTER</span> <span>$22.00</span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 5px;">Chef's selection of 6 nigiri pieces and a Spicy Salmon maki roll.</p>
                </li>
                <li>
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-family: var(--font-heading);">
                        <span>SPICY TUNA ROLL</span> <span>$12.50</span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 5px;">Fresh minced bluefin tuna, spicy mayo, green onion, and sesame seeds.</p>
                </li>
            </ul>

            <h3 style="font-family: var(--font-heading); color: var(--accent-red); font-size: 1.3rem; border-bottom: 2px solid var(--accent-gold); padding-bottom: 8px; margin-top: 40px; margin-bottom: 20px;">KYOTO COFFEE & TEAS</h3>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 20px;">
                <li>
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-family: var(--font-heading);">
                        <span>KYOTO DRIP ESPRESSO</span> <span>$5.00</span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 5px;">Slow-dripped dark roast coffee beans directly imported from Kyoto, Japan.</p>
                </li>
                <li>
                    <div style="display: flex; justify-content: space-between; font-weight: 700; font-family: var(--font-heading);">
                        <span>MATCHA CREAM LATTE</span> <span>$6.00</span>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 5px;">Uji ceremonial grade matcha whisked, topped with silky steamed milk and vanilla foam.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Flipbook Logic -->
<script>
    // Variables
    let currentLocation = 1;
    const numOfPapers = 5;
    const maxLocation = numOfPapers + 1;

    const prevBtn = document.querySelector("#prevBtn");
    const nextBtn = document.querySelector("#nextBtn");
    const book = document.querySelector("#menuBook");

    const p1 = document.querySelector("#p1");
    const p2 = document.querySelector("#p2");
    const p3 = document.querySelector("#p3");
    const p4 = document.querySelector("#p4");
    const p5 = document.querySelector("#p5");

    // Event Listeners
    prevBtn.addEventListener("click", goPrevPage);
    nextBtn.addEventListener("click", goNextPage);

    // Business Logic
    function openBook() {
        book.style.transform = "translateX(50%)";
        prevBtn.style.transform = "translateX(-20px)";
        nextBtn.style.transform = "translateX(20px)";
    }

    function closeBook(isAtBeginning) {
        if(isAtBeginning) {
            book.style.transform = "translateX(0%)";
        } else {
            book.style.transform = "translateX(100%)";
        }
        prevBtn.style.transform = "translateX(0px)";
        nextBtn.style.transform = "translateX(0px)";
    }

    function goNextPage() {
        if(currentLocation < maxLocation) {
            switch(currentLocation) {
                case 1:
                    openBook();
                    p1.classList.add("flipped");
                    p1.style.zIndex = 1;
                    break;
                case 2:
                    p2.classList.add("flipped");
                    p2.style.zIndex = 2;
                    break;
                case 3:
                    p3.classList.add("flipped");
                    p3.style.zIndex = 3;
                    break;
                case 4:
                    p4.classList.add("flipped");
                    p4.style.zIndex = 4;
                    break;
                case 5:
                    p5.classList.add("flipped");
                    p5.style.zIndex = 5;
                    closeBook(false);
                    break;
                default:
                    throw new Error("unkown state");
            }
            currentLocation++;
        }
    }

    function goPrevPage() {
        if(currentLocation > 1) {
            switch(currentLocation) {
                case 2:
                    closeBook(true);
                    p1.classList.remove("flipped");
                    p1.style.zIndex = 5;
                    break;
                case 3:
                    p2.classList.remove("flipped");
                    p2.style.zIndex = 4;
                    break;
                case 4:
                    p3.classList.remove("flipped");
                    p3.style.zIndex = 3;
                    break;
                case 5:
                    p4.classList.remove("flipped");
                    p4.style.zIndex = 2;
                    break;
                case 6:
                    openBook();
                    p5.classList.remove("flipped");
                    p5.style.zIndex = 1;
                    break;
                default:
                    throw new Error("unkown state");
            }
            currentLocation--;
        }
    }
</script>

<?php
require_once 'footer.php';
?>
