<?php
require_once 'header.php';
?>

<!-- Hero Banner (Standardized Theme) -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1543007630-9710e4a00a20?q=80&w=1200&auto=format&fit=crop');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content animate-fade">
        <p>CONVENIENT BISTRO DISHES</p>
        <h1>PLACE YOUR ORDER</h1>
        <h1>AT AKIBA RETRO CAFE</h1>
    </div>
</section>

<!-- Ordering Section -->
<section class="section-padding container">
    <div class="section-title reveal">
        <p>SELECT YOUR FEAST</p>
        <h2>THE 3D CULINARY CAROUSEL</h2>
        <p style="font-size: 0.9rem; margin-top: 10px; color: var(--text-muted);">(Hover on a card to view recipe details, use arrows to slide through items)</p>
    </div>

    <!-- 3D Coverflow Carousel Container -->
    <div class="coverflow-wrapper reveal">
        <button class="coverflow-nav-btn prev" id="coverflowPrev"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="coverflow-nav-btn next" id="coverflowNext"><i class="fa-solid fa-chevron-right"></i></button>
        
        <div class="coverflow-carousel" id="coverflowCarousel">
            
            <!-- Card 1: Tonkotsu Ramen -->
            <div class="coverflow-card card-center" data-id="1" data-name="Classic Tonkotsu Ramen" data-price="15.00">
                <div class="coverflow-card-img">
                    <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?q=80&w=500" alt="Tonkotsu Ramen">
                </div>
                <div class="coverflow-card-details">
                    <div>
                        <h3>TONKOTSU RAMEN</h3>
                        <span class="coverflow-card-price">$15.00</span>
                    </div>
                    <button class="btn-add-order btn-add-direct">ADD TO ORDER</button>
                </div>
                <!-- Hover Details -->
                <div class="coverflow-card-hover-desc">
                    <div>
                        <h3 style="color: var(--accent-gold); font-size: 1rem; margin-bottom: 8px;">RECIPE DETAILS</h3>
                        <p>Our masterpiece. 16-hour slow-cooked pork bone broth infused with black garlic oil, hand-rolled chashu pork, seasoned soft-boiled egg, fresh scallions, nori, and bamboo shoots.</p>
                    </div>
                    <button class="btn-add-order btn-add-inside">ADD TO ORDER</button>
                </div>
            </div>

            <!-- Card 2: Spicy Shio Ramen -->
            <div class="coverflow-card card-right" data-id="2" data-name="Spicy Shio Ramen" data-price="14.50">
                <div class="coverflow-card-img">
                    <img src="https://images.unsplash.com/photo-1557872943-16a5ac26437e?q=80&w=500" alt="Spicy Shio Ramen">
                </div>
                <div class="coverflow-card-details">
                    <div>
                        <h3>SPICY SHIO RAMEN</h3>
                        <span class="coverflow-card-price">$14.50</span>
                    </div>
                    <button class="btn-add-order btn-add-direct">ADD TO ORDER</button>
                </div>
                <!-- Hover Details -->
                <div class="coverflow-card-hover-desc">
                    <div>
                        <h3 style="color: var(--accent-gold); font-size: 1rem; margin-bottom: 8px;">RECIPE DETAILS</h3>
                        <p>A lighter sea salt base broth cooked with fresh ginger and kelp. Layered with tender pork chashu, soft egg, organic bamboo shoots, and our house chili paste oil.</p>
                    </div>
                    <button class="btn-add-order btn-add-inside">ADD TO ORDER</button>
                </div>
            </div>

            <!-- Card 3: Akiba Sushi Platter -->
            <div class="coverflow-card card-far-right" data-id="3" data-name="Akiba Sushi Platter" data-price="22.00">
                <div class="coverflow-card-img">
                    <img src="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?q=80&w=500" alt="Sushi Platter">
                </div>
                <div class="coverflow-card-details">
                    <div>
                        <h3>AKIBA SUSHI PLATTER</h3>
                        <span class="coverflow-card-price">$22.00</span>
                    </div>
                    <button class="btn-add-order btn-add-direct">ADD TO ORDER</button>
                </div>
                <!-- Hover Details -->
                <div class="coverflow-card-hover-desc">
                    <div>
                        <h3 style="color: var(--accent-gold); font-size: 1rem; margin-bottom: 8px;">RECIPE DETAILS</h3>
                        <p>Hand-sliced fresh cuts of wild bluefin tuna, premium salmon, and yellowtail nigiri (2 pcs each) accompanied by a classic Spicy Salmon Maki roll (8 pcs).</p>
                    </div>
                    <button class="btn-add-order btn-add-inside">ADD TO ORDER</button>
                </div>
            </div>

            <!-- Card 4: Kyoto Drip Espresso -->
            <div class="coverflow-card card-hidden" data-id="4" data-name="Kyoto Drip Espresso" data-price="5.00">
                <div class="coverflow-card-img">
                    <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?q=80&w=500" alt="Kyoto Coffee">
                </div>
                <div class="coverflow-card-details">
                    <div>
                        <h3>KYOTO DRIP ESPRESSO</h3>
                        <span class="coverflow-card-price">$5.00</span>
                    </div>
                    <button class="btn-add-order btn-add-direct">ADD TO ORDER</button>
                </div>
                <!-- Hover Details -->
                <div class="coverflow-card-hover-desc">
                    <div>
                        <h3 style="color: var(--accent-gold); font-size: 1rem; margin-bottom: 8px;">RECIPE DETAILS</h3>
                        <p>Crafted utilizing custom glass siphon towers, this slow-drip dark roast exhibits rich dark chocolate and toasted walnut notes. Perfect for coffee enthusiasts.</p>
                    </div>
                    <button class="btn-add-order btn-add-inside">ADD TO ORDER</button>
                </div>
            </div>

            <!-- Card 5: Matcha Cream Latte -->
            <div class="coverflow-card card-hidden" data-id="5" data-name="Matcha Cream Latte" data-price="6.00">
                <div class="coverflow-card-img">
                    <img src="https://images.unsplash.com/photo-1536256263959-770b48d82b0a?q=80&w=500" alt="Matcha Latte">
                </div>
                <div class="coverflow-card-details">
                    <div>
                        <h3>MATCHA CREAM LATTE</h3>
                        <span class="coverflow-card-price">$6.00</span>
                    </div>
                    <button class="btn-add-order btn-add-direct">ADD TO ORDER</button>
                </div>
                <!-- Hover Details -->
                <div class="coverflow-card-hover-desc">
                    <div>
                        <h3 style="color: var(--accent-gold); font-size: 1rem; margin-bottom: 8px;">RECIPE DETAILS</h3>
                        <p>Authentic stone-ground Uji ceremonial matcha organic powder whisked into steaming creamy whole milk and topped with dense sweet vanilla cream foam.</p>
                    </div>
                    <button class="btn-add-order btn-add-inside">ADD TO ORDER</button>
                </div>
            </div>

            <!-- Card 6: Pork Gyoza -->
            <div class="coverflow-card card-far-left" data-id="6" data-name="Pork Gyoza" data-price="7.00">
                <div class="coverflow-card-img">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=500" alt="Gyoza">
                </div>
                <div class="coverflow-card-details">
                    <div>
                        <h3>PORK GYOZA</h3>
                        <span class="coverflow-card-price">$7.00</span>
                    </div>
                    <button class="btn-add-order btn-add-direct">ADD TO ORDER</button>
                </div>
                <!-- Hover Details -->
                <div class="coverflow-card-hover-desc">
                    <div>
                        <h3 style="color: var(--accent-gold); font-size: 1rem; margin-bottom: 8px;">RECIPE DETAILS</h3>
                        <p>Japanese style dumplings stuffed with minced pork, garlic, ginger, and chives. Pan-seared to crispy golden perfection, served with sweet vinegar soy dip.</p>
                    </div>
                    <button class="btn-add-order btn-add-inside">ADD TO ORDER</button>
                </div>
            </div>

            <!-- Card 7: Tempura Ice Cream -->
            <div class="coverflow-card card-left" data-id="7" data-name="Tempura Ice Cream" data-price="8.00">
                <div class="coverflow-card-img">
                    <img src="https://images.unsplash.com/photo-1560624052-449f5ddf0c31?q=80&w=500" alt="Tempura Ice Cream">
                </div>
                <div class="coverflow-card-details">
                    <div>
                        <h3>TEMPURA ICE CREAM</h3>
                        <span class="coverflow-card-price">$8.00</span>
                    </div>
                    <button class="btn-add-order btn-add-direct">ADD TO ORDER</button>
                </div>
                <!-- Hover Details -->
                <div class="coverflow-card-hover-desc">
                    <div>
                        <h3 style="color: var(--accent-gold); font-size: 1rem; margin-bottom: 8px;">RECIPE DETAILS</h3>
                        <p>A scoop of organic vanilla ice cream flash-frozen, wrapped in a fluffy sponge pound cake, dipped in light tempura batter, and briefly fried. Crisp, hot outer shell with a cold creamy core.</p>
                    </div>
                    <button class="btn-add-order btn-add-inside">ADD TO ORDER</button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Floating Cart Toggle Button -->
<button class="cart-drawer-toggle" id="cartToggle">
    <i class="fa-solid fa-cart-shopping"></i>
    <span class="cart-badge" id="cartCount">0</span>
</button>

<!-- Shopping Cart Drawer -->
<div class="cart-drawer" id="cartDrawer">
    <div class="cart-header">
        <h3>YOUR ORDER CART</h3>
        <button class="btn-close-cart" id="cartClose"><i class="fa-solid fa-xmark"></i></button>
    </div>
    
    <!-- List of items in cart -->
    <div class="cart-items-list" id="cartItemsContainer">
        <!-- Empty cart message -->
        <div style="text-align: center; color: var(--text-muted); margin-top: 50px;" id="emptyCartMsg">
            <i class="fa-solid fa-cookie-bite" style="font-size: 3rem; margin-bottom: 15px; opacity: 0.3;"></i>
            <p>Your cart is empty.</p>
            <p style="font-size: 0.8rem; margin-top: 5px;">Add dishes from the carousel above.</p>
        </div>
    </div>

    <!-- Cart Footer / Total and Checkout -->
    <div class="cart-footer">
        <div class="cart-total-row">
            <span>SUBTOTAL</span>
            <span class="cart-total-price" id="cartTotal">$0.00</span>
        </div>
        
        <!-- Checkout Form submitting to PHP handler -->
        <form id="checkoutForm" action="process_order.php" method="POST">
            <!-- Hidden inputs loaded dynamically by JS -->
            <input type="hidden" name="cart_data" id="cartDataInput">
            
            <?php if (isset($_SESSION['user_id'])): ?>
                <button class="btn-checkout" type="submit" id="checkoutBtn">PLACE ORDER</button>
            <?php else: ?>
                <button class="btn-checkout" type="button" onclick="promptLoginForCheckout();">LOG IN TO PLACE ORDER</button>
            <?php endif; ?>
        </form>
    </div>
</div>

<!-- JavaScript for 3D Coverflow Carousel & Shopping Cart -->
<script>
    /* ==============================================
       1. 3D COVERFLOW CAROUSEL LOGIC
       ============================================== */
    const cards = Array.from(document.querySelectorAll('.coverflow-card'));
    const prevBtn = document.getElementById('coverflowPrev');
    const nextBtn = document.getElementById('coverflowNext');
    let activeIndex = 0; // Starts with Card 1 (id=1) active

    function updateCarousel() {
        const totalCards = cards.length;
        cards.forEach((card, idx) => {
            card.className = 'coverflow-card'; // Reset classes
            
            // Calculate relative index relative to active card
            let relIndex = idx - activeIndex;
            
            // Adjust relative index for circular wrapping
            if (relIndex < -2) relIndex += totalCards;
            if (relIndex > 2) relIndex -= totalCards;

            if (relIndex === 0) {
                card.classList.add('card-center');
            } else if (relIndex === 1) {
                card.classList.add('card-right');
            } else if (relIndex === 2) {
                card.classList.add('card-far-right');
            } else if (relIndex === -1) {
                card.classList.add('card-left');
            } else if (relIndex === -2) {
                card.classList.add('card-far-left');
            } else {
                card.classList.add('card-hidden');
            }
        });
    }

    prevBtn.addEventListener('click', () => {
        activeIndex = (activeIndex - 1 + cards.length) % cards.length;
        updateCarousel();
    });

    nextBtn.addEventListener('click', () => {
        activeIndex = (activeIndex + 1) % cards.length;
        updateCarousel();
    });

    // Let user click on adjacent cards directly to slide to them
    cards.forEach((card, idx) => {
        card.addEventListener('click', (e) => {
            // Only slide if not clicking on the "ADD" button
            if (e.target.classList.contains('btn-add-order')) return;
            if (idx !== activeIndex) {
                activeIndex = idx;
                updateCarousel();
            }
        });
    });

    // Initialize carousel layout
    updateCarousel();

    /* ==============================================
       2. SHOPPING CART LOGIC
       ============================================== */
    let cart = [];

    const cartToggle = document.getElementById('cartToggle');
    const cartDrawer = document.getElementById('cartDrawer');
    const cartClose = document.getElementById('cartClose');
    const cartCount = document.getElementById('cartCount');
    const cartTotal = document.getElementById('cartTotal');
    const cartItemsContainer = document.getElementById('cartItemsContainer');
    const emptyCartMsg = document.getElementById('emptyCartMsg');
    const cartDataInput = document.getElementById('cartDataInput');
    const checkoutForm = document.getElementById('checkoutForm');

    // Load cart from session if exists
    if(localStorage.getItem('akiba_cart')) {
        cart = JSON.parse(localStorage.getItem('akiba_cart'));
        renderCart();
    }

    // Toggle Cart Drawer
    cartToggle.addEventListener('click', () => {
        cartDrawer.classList.add('active');
    });

    cartClose.addEventListener('click', () => {
        cartDrawer.classList.remove('active');
    });

    // Prompt login logic
    function promptLoginForCheckout() {
        cartDrawer.classList.remove('active');
        document.getElementById('loginModal').classList.add('active');
        alert("Please login or sign in first to place your order.");
    }

    // Add to Cart Handlers
    document.querySelectorAll('.btn-add-order').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const card = e.target.closest('.coverflow-card');
            const id = card.getAttribute('data-id');
            const name = card.getAttribute('data-name');
            const price = parseFloat(card.getAttribute('data-price'));

            addToCart(id, name, price);
            
            // Feedback UI
            const originalText = e.target.textContent;
            e.target.textContent = "ADDED ✓";
            e.target.style.backgroundColor = "#2e7559";
            setTimeout(() => {
                e.target.textContent = originalText;
                e.target.style.backgroundColor = "";
            }, 1000);
        });
    });

    function addToCart(id, name, price) {
        const existingItem = cart.find(item => item.id === id);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({ id, name, price, quantity: 1 });
        }
        
        saveAndRender();
        
        // Auto open cart drawer on add
        cartDrawer.classList.add('active');
    }

    function changeQuantity(id, change) {
        const item = cart.find(item => item.id === id);
        if (item) {
            item.quantity += change;
            if (item.quantity <= 0) {
                cart = cart.filter(item => item.id !== id);
            }
        }
        saveAndRender();
    }

    function saveAndRender() {
        localStorage.setItem('akiba_cart', JSON.stringify(cart));
        renderCart();
    }

    function renderCart() {
        // Update badge counts
        let totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCount.textContent = totalItems;

        // Clear list
        const items = cartItemsContainer.querySelectorAll('.cart-item');
        items.forEach(el => el.remove());

        if (cart.length === 0) {
            emptyCartMsg.style.display = 'block';
            cartTotal.textContent = '$0.00';
            cartDataInput.value = '';
        } else {
            emptyCartMsg.style.display = 'none';
            let totalPrice = 0;

            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                totalPrice += itemTotal;

                const itemRow = document.createElement('div');
                itemRow.className = 'cart-item';
                itemRow.innerHTML = `
                    <div class="cart-item-info">
                        <h4>${item.name}</h4>
                        <span>$${item.price.toFixed(2)} x ${item.quantity}</span>
                    </div>
                    <div class="cart-item-qty">
                        <button class="qty-btn" onclick="changeQuantity('${item.id}', -1)">-</button>
                        <button class="qty-btn" onclick="changeQuantity('${item.id}', 1)">+</button>
                    </div>
                `;
                cartItemsContainer.appendChild(itemRow);
            });

            cartTotal.textContent = `$${totalPrice.toFixed(2)}`;
            cartDataInput.value = JSON.stringify(cart);
        }
    }

    // Clear cart on checkout submit
    checkoutForm.addEventListener('submit', () => {
        localStorage.removeItem('akiba_cart');
    });
</script>

<?php
require_once 'footer.php';
?>
