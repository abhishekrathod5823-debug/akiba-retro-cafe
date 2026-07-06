<?php
require_once 'header.php';
?>

<!-- Hero Banner (Standardized Theme) -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('data:image/jpeg;base64,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');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content animate-fade">
        <p>OUR JOURNEY & TRADITION</p>
        <h1>ABOUT AKIBA RETRO CAFE</h1>
        <h2>WORLD BEST CAFE</h2>
    </div>
</section>

<!-- Mission Section -->
<section class="section-padding container">
    <div class="historical-grid">
        <div class="historical-content reveal">
            <div class="section-title" style="text-align: left; margin-bottom: 30px;">
                <p>OUR PHILOSOPHY</p>
                <h2 style="margin-bottom: 0;">PRESERVING THE SHOWA SPIRIT</h2>
            </div>
            <h3>Vintage Vibe, Modern Standards</h3>
            <p>At Akiba Retro Cafe, our mission is to create a portal to Japan's cozy, slow-paced Showa era (specifically the late 70s and 80s). In a world that is moving faster every day, we provide a warm, comfortable space to slow down, listen to the crackle of vinyl records, and enjoy exceptionally prepared food and beverages.</p>
            <p>We source our ingredients with absolute care, import our ceremonial green teas directly from farms in Kyoto, and cook our stocks for over 16 hours to ensure a taste profile that pays true homage to traditional Tokyo ramen bars.</p>
        </div>
        <div class="historical-img reveal">
            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=600&auto=format&fit=crop" alt="Pouring Siphon Coffee">
        </div>
    </div>
</section>

<!-- Timeline Storytelling Section -->
<section class="section-padding home-menu">
    <div class="container">
        <div class="section-title reveal">
            <p>CHRONOLOGY</p>
            <h2>THE TIME TRAVEL TIMELINE</h2>
        </div>

        <div class="timeline">
            <!-- Item 1: Left -->
            <div class="timeline-item left reveal">
                <div class="timeline-content">
                    <span style="font-family: var(--font-heading); color: var(--accent-red); font-weight: 700; font-size: 1.1rem; display: block; margin-bottom: 5px;">1982</span>
                    <h3>THE VINYL KISSATEN</h3>
                    <p>Akiba Cafe opened in the backstreets of Akihabara, Tokyo as a traditional Kissaten. It housed over 2,000 jazz and city pop vinyl records, serving siphon-brewed coffee and sweet melon sodas to local artists, tech enthusiasts, and music collectors.</p>
                </div>
            </div>

            <!-- Item 2: Right -->
            <div class="timeline-item right reveal">
                <div class="timeline-content">
                    <span style="font-family: var(--font-heading); color: var(--accent-red); font-weight: 700; font-size: 1.1rem; display: block; margin-bottom: 5px;">1995</span>
                    <h3>RAMEN & SUSHI CRAFT</h3>
                    <p>Welcoming veteran Chef Kenji Sato, we expanded our cozy coffee house into a fully-fledged bistro. We integrated his family's secret 16-hour Tonkotsu broth recipe and hand-pressed Nigiri sushi techniques, becoming a local dining sensation.</p>
                </div>
            </div>

            <!-- Item 3: Left -->
            <div class="timeline-item left reveal">
                <div class="timeline-content">
                    <span style="font-family: var(--font-heading); color: var(--accent-red); font-weight: 700; font-size: 1.1rem; display: block; margin-bottom: 5px;">2012</span>
                    <h3>PRESERVING RETRO IN A TECH AGE</h3>
                    <p>As Akihabara transformed into a hyper-modern neon-lit futuristic electronic city, Akiba Cafe remained dedicated to keeping the vintage 80s Showa atmosphere alive, serving as a peaceful oasis of warmth and comfort.</p>
                </div>
            </div>

            <!-- Item 4: Right -->
            <div class="timeline-item right reveal">
                <div class="timeline-content">
                    <span style="font-family: var(--font-heading); color: var(--accent-red); font-weight: 700; font-size: 1.1rem; display: block; margin-bottom: 5px;">2026</span>
                    <h3>THE DIGITAL RETRO UNION</h3>
                    <p>Bridging the past and present. We created our online portal and database system, letting our community check the menu, register accounts, and place orders online while completely preserving the retro dining aesthetic.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team / Chef Section -->
<section class="section-padding container">
    <div class="section-title reveal">
        <p>CRAFT MASTERS</p>
        <h2>OUR KITCHEN LEADERS</h2>
    </div>
    
    <div class="store-cards">
        <!-- Team Member 1 -->
        <div class="store-card reveal">
            <div class="store-card-img" style="height: 300px;">
                <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=500&auto=format&fit=crop" alt="Head Chef Kenji">
            </div>
            <div class="store-card-content">
                <h3>CHEF KENJI SATO</h3>
                <p style="color: var(--accent-gold); font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; margin-bottom: 8px;">Co-Founder & Head Chef</p>
                <p>With over 35 years of culinary experience, Chef Kenji manages the kitchen, ensuring that every bowl of ramen tastes exactly as it did in his family's shop in Tokyo.</p>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="store-card reveal">
            <div class="store-card-img" style="height: 300px;">
                <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?q=80&w=500&auto=format&fit=crop" alt="Sushi Chef Jun">
            </div>
            <div class="store-card-content">
                <h3>JUN TANAKA</h3>
                <p style="color: var(--accent-gold); font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; margin-bottom: 8px;">Master Sushi Chef</p>
                <p>Jun trained for 10 years in Ginza's top restaurants before joining Akiba Cafe. He believes sushi is edible art, focusing on absolute freshness and precision cutting.</p>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="store-card reveal">
            <div class="store-card-img" style="height: 300px;">
                <img src="https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?q=80&w=500&auto=format&fit=crop" alt="Barista Yuka">
            </div>
            <div class="store-card-content">
                <h3>YUKA WATANABE</h3>
                <p style="color: var(--accent-gold); font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; margin-bottom: 8px;">Master Barista</p>
                <p>Yuka manages our coffee roasting and green tea blends. She slow-roasts our Kyoto coffee beans and orchestrates our vinyl playlist to match the cafe's atmosphere.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
