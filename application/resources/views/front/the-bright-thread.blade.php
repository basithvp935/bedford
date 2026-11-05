@section('title', 'Early Learning & Pedagogy - Bedford Kindergarten Qatar | Doha')
@section('description', 'Discover the British EYFS framework and child-centered early learning philosophy at Bedford Kindergarten Qatar.')
@section('the_bright_thread', 'active')
@include('front.layouts.header')
<style>
    /* Import Elegant Fonts including the Handwritten Script */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Great+Vibes&display=swap');

    :root {
        /* Bedford Kindergarten Color Palette */
        --theme-light: #484EB8; 
        --theme-light-alpha: rgba(47, 52, 139, 0.12);
        --theme-dark: #2F348B; 
        --bg-cream: #F8FAFC; 
        --bg-beige: #EEF2FB; 
        --accent-taupe: #E2E8F0; 
        --text-main: #4A5568; 
        --leaf-green: #2F348B; 
        --gold-accent: #F59F1E; 
    }

    /* Page Specific Styles */
    .bright-thread-page {
        font-family: 'Montserrat', sans-serif;
        color: var(--text-main);
        background-color: var(--bg-cream);
        overflow-x: hidden;
        position: relative;
    }

    .cursive-text {
        font-family: 'Great Vibes', cursive;
        color: var(--leaf-green);
        font-size: 4.8rem;
        line-height: 1;
        font-weight: 400;
        margin-bottom: 0;
        text-shadow: 1px 1px 0px rgba(0,0,0,0.03); /* Subtle ink bleed */
    }

    /* Embossed/Letterpress Effect for Icons */
    .embossed-icon {
        color: var(--theme-light);
        filter: drop-shadow(1px 1px 0px rgba(255,255,255,1)) drop-shadow(-1px -1px 2px rgba(0,0,0,0.1));
    }

    /* SVG Overflow Fix to prevent any clipping */
    svg {
        overflow: visible !important;
    }

    /* ==========================================
       HERO BANNER
       ========================================== */
    .bright-banner {
        position: relative;
        width: 100vw;
        margin-left: calc(-50vw + 50%);
        max-width: 100vw;
        height: 500px; 
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background-attachment: fixed;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(55, 70, 91, 0.2) 0%, rgba(55, 70, 91, 0.5) 100%);
        z-index: 1;
    }

    .banner-text {
        position: relative;
        z-index: 2;
        text-align: center;
        width: 100%;
        margin-bottom: 40px; 
    }

    .banner-title {
        font-family: 'Playfair Display', serif; 
        color: #ffffff;
        font-size: 3.8rem;
        font-weight: 500;
        letter-spacing: 3px;
        margin: 0;
        text-transform: capitalize;
        text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
    }

    .sun-icon-accent {
        animation: rotateSlow 60s linear infinite;
        filter: drop-shadow(0px 4px 10px rgba(0,0,0,0.1));
    }

    .banner-bottom-wave {
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 60px;
        z-index: 3;
    }

    @keyframes rotateSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @media (max-width: 768px) {
        .banner-title {
            font-size: 2.2rem;
        }
        .bright-banner {
            height: 380px;
        }
    }

    /* ==========================================
       ARCHED IMAGES (ESTATE VIBE)
       ========================================== */
    .arch-image {
        border-radius: 200px 200px 16px 16px; 
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 8px solid #ffffff; 
        box-shadow: 0 20px 40px rgba(55, 70, 91, 0.08); /* Richer shadow */
        position: relative;
        z-index: 2;
        background-color: var(--bg-cream);
    }
    
    .arch-image-wrapper:hover .arch-image {
        transform: scale(1.02);
    }

    /* ==========================================
       INTRO SECTION
       ========================================== */
    .hero-section {
        padding: 4rem 0 3rem;
        background: var(--bg-cream);
        position: relative;
    }

    .intro-box {
        position: relative;
        z-index: 2;
        background: var(--bg-cream);
        border: 1px solid var(--accent-taupe);
        border-radius: 12px;
        padding: 4rem;
        box-shadow: 0 15px 45px rgba(0,0,0,0.03); /* Enhanced shadow */
    }
    
    /* Elegant corner accents */
    .intro-box::before, .intro-box::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        border: 1px solid var(--theme-light);
        opacity: 0.4;
    }
    .intro-box::before {
        top: 20px;
        left: 20px;
        border-right: none;
        border-bottom: none;
    }
    .intro-box::after {
        bottom: 20px;
        right: 20px;
        border-left: none;
        border-top: none;
    }

    @media (max-width: 991px) {
        .intro-box {
            padding: 2.5rem;
        }
    }

    .subtitle-label {
        color: var(--theme-light);
        font-weight: 500;
        letter-spacing: 4px;
        text-transform: uppercase;
        font-size: 0.85rem;
        margin-bottom: 1.5rem;
        display: block;
    }

    .lead-text {
        font-size: 1.8rem;
        font-weight: 500;
        font-family: 'Playfair Display', serif;
        color: var(--theme-dark);
        line-height: 1.4;
        margin-bottom: 2rem;
    }

    .body-text {
        font-size: 1.05rem;
        line-height: 1.9;
        color: var(--text-main);
        margin-bottom: 1.5rem;
    }

    /* Highlight Quote Box */
    .highlight-quote {
        position: relative;
        padding: 2.5rem 2rem;
        margin: 2.5rem auto;
        text-align: center;
        background-color: var(--bg-beige);
        border-radius: 12px;
        border-top: 1px solid var(--accent-taupe);
        border-bottom: 1px solid var(--accent-taupe);
        box-shadow: 0 5px 20px rgba(0,0,0,0.015);
    }

    .highlight-quote h4 {
        color: var(--theme-dark);
        line-height: 1.7;
        font-weight: 500;
        font-size: 1.4rem;
        font-family: 'Playfair Display', serif;
    }

    /* ==========================================
       HOW IT WORKS GRID
       ========================================== */
    .how-it-works-section {
        position: relative;
        padding: 4rem 0;
        background: var(--bg-beige);
        border-top: 1px solid #ffffff;
    }

    .floating-icon {
        position: absolute;
        z-index: 0;
        color: var(--leaf-green); 
        pointer-events: none; 
    }

    .floating-icon.botanical-1 {
        bottom: -5%;
        right: -2%;
        width: 300px;
        height: auto;
        animation: swayAnim 12s ease-in-out infinite;
        transform-origin: bottom center;
        opacity: 0.6; 
    }

    .floating-icon.botanical-2 {
        bottom: 5%;
        left: -5%;
        width: 250px;
        height: auto;
        animation: swayAnimReverse 15s ease-in-out infinite;
        transform-origin: bottom center;
        opacity: 0.4;
    }

    @keyframes swayAnim {
        0% { transform: rotate(0deg); }
        50% { transform: rotate(1.5deg); }
        100% { transform: rotate(0deg); }
    }

    @keyframes swayAnimReverse {
        0% { transform: scaleX(-1) rotate(0deg); }
        50% { transform: scaleX(-1) rotate(1.5deg); }
        100% { transform: scaleX(-1) rotate(0deg); }
    }

    .how-it-works-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem 2.5rem; 
        margin-top: 4rem;
        position: relative;
        z-index: 2;
    }

    .how-it-works-item {
        position: relative;
        padding: 2.5rem 2.5rem 2.5rem 3.5rem; 
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid var(--accent-taupe); 
        box-shadow: 0 8px 25px rgba(0,0,0,0.02);
        margin-left: 1.5rem; 
        transition: all 0.3s ease;
    }

    .how-it-works-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        border-color: var(--theme-light);
    }

    .how-it-works-icon-wrapper {
        position: absolute;
        left: -1.5rem; 
        top: 2rem;
        width: 60px;
        height: 60px;
        background: #ffffff;
        border: 1.5px solid var(--theme-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(0,0,0,0.04);
        transition: all 0.4s ease; 
    }

    .how-it-works-icon {
        color: var(--theme-light); 
        transition: color 0.4s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .how-it-works-item:hover .how-it-works-icon-wrapper {
        background: var(--theme-light);
        border-color: var(--theme-light);
        box-shadow: 0 8px 20px var(--theme-light-alpha);
        transform: scale(1.1);
    }

    .how-it-works-item:hover .how-it-works-icon {
        color: #ffffff;
    }

    .how-it-works-title {
        font-family: 'Playfair Display', serif;
        font-weight: 500;
        font-size: 1.35rem;
        margin-bottom: 1rem;
        color: var(--theme-dark);
    }

    @media (max-width: 768px) {
        .how-it-works-grid {
            grid-template-columns: 1fr;
            gap: 3rem;
            margin-left: 0;
        }
        .how-it-works-item {
            margin-left: 1rem;
            padding: 2.5rem 1.5rem 2.5rem 3rem; 
        }
        .how-it-works-icon-wrapper {
            left: -1rem;
            width: 50px;
            height: 50px;
            top: 2rem;
        }
    }

    /* ==========================================
       TABLE SECTION
       ========================================== */
    .comparison-section {
        background: var(--bg-cream);
        padding: 5rem 0 4rem;
        position: relative;
    }

    .comparison-label {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: var(--theme-light);
        font-weight: 500;
        margin-bottom: 1.5rem;
        display: block;
        text-align: center;
    }

    .comparison-table {
        background: var(--bg-cream);
        border-radius: 12px;
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 15px 40px rgba(0,0,0,0.03);
        overflow: hidden;
        border: 1px solid var(--accent-taupe);
    }

    .comparison-table th, 
    .comparison-table td {
        padding: 1.8rem 2rem;
        border-bottom: 1px solid var(--bg-beige);
        font-size: 1.05rem;
        text-align: left;
    }

    .comparison-table th {
        font-family: 'Playfair Display', serif;
        font-weight: 500;
        font-size: 1.3rem;
        color: var(--theme-dark);
        background-color: var(--bg-beige);
        border-bottom: 1px solid var(--accent-taupe);
    }

    .comparison-table td:first-child {
        color: var(--text-main);
        width: 45%;
        border-right: 1px solid var(--bg-beige);
    }

    .comparison-table td:last-child {
        color: var(--theme-dark);
        font-weight: 500;
        width: 55%;
    }

    /* UPDATED: Mobile view for comparison table to KEEP side-by-side layout */
    @media (max-width: 768px) {
        .comparison-table th,
        .comparison-table td {
            /* Keep it side-by-side but reduce padding and font size for small screens */
            padding: 1rem 0.8rem;
            font-size: 0.9rem;
        }
        .comparison-table th {
            font-size: 1.1rem;
        }
    }

    .final-quotes-section {
        padding: 3rem 0 5rem;
        text-align: center;
        background: var(--bg-cream);
    }
</style>

<div class="bright-thread-page">
    
    <!-- GLOBAL DEFINITIONS -->
    <svg width="0" height="0" style="position:absolute; display:none;" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <!-- Watercolor-like gradient for leaves -->
            <linearGradient id="leafGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="rgba(123, 142, 112, 0.25)" />
                <stop offset="100%" stop-color="rgba(123, 142, 112, 0.03)" />
            </linearGradient>
        </defs>
    </svg>

    <!-- NEW HERO BANNER -->
    <section class="bright-banner" style="background: url('{{ asset('Front/images/thr10.png') }}') center bottom / cover no-repeat;">
        <div class="banner-overlay"></div>
        
        <div class="banner-text">
            <h1 class="banner-title">The Bright Thread</h1>
        </div>
        
        <!-- Torn Paper Wave at Bottom -->
        <div class="banner-bottom-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 100%;">
                <path d="M0,0 C320,140 1120,-40 1440,80 L1440,121 L0,121 Z" fill="var(--bg-cream)"></path>
            </svg>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="hero-section">
        <div class="container">
            <div class="intro-box">
                <div class="row align-items-center">
                    
                    <!-- Left Side: Content -->
                    <div class="col-lg-7 text-start pe-lg-5 position-relative">
                        
                        <!-- Flawless Botanical Branch Icon offset to the outside -->
                        <div style="position: absolute; top: -60px; left: -80px; z-index: 0; color: var(--leaf-green);">
                            <!-- Highly Detailed Branch with Veins -->
                            <svg width="120" height="240" viewBox="0 0 200 400" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.9; transform: rotate(-25deg);">
                                <path d="M100 380 Q80 230 100 80" stroke-width="1.5" stroke-linecap="round"/>
                                
                                <path d="M96 320 C50 330 20 280 50 250 C70 260 80 290 96 320 Z" fill="url(#leafGrad)" stroke-width="1"/>
                                <path d="M96 320 Q70 300 50 250" stroke-width="0.8"/>
                                <path d="M85 308 Q65 310 55 295" stroke-width="0.4"/>
                                <path d="M75 288 Q55 290 45 275" stroke-width="0.4"/>

                                <path d="M96 260 C140 240 160 190 130 170 C110 190 100 220 96 260 Z" fill="url(#leafGrad)" stroke-width="1"/>
                                <path d="M96 260 Q120 230 130 170" stroke-width="0.8"/>
                                <path d="M110 245 Q130 240 135 220" stroke-width="0.4"/>
                                <path d="M120 220 Q140 215 140 195" stroke-width="0.4"/>

                                <path d="M93 200 C40 200 20 150 50 120 C70 140 80 170 93 200 Z" fill="url(#leafGrad)" stroke-width="1"/>
                                <path d="M93 200 Q60 180 50 120" stroke-width="0.8"/>
                                <path d="M80 188 Q60 190 50 170" stroke-width="0.4"/>
                                <path d="M68 165 Q48 165 40 145" stroke-width="0.4"/>

                                <path d="M98 140 C150 130 170 80 140 50 C120 70 105 100 98 140 Z" fill="url(#leafGrad)" stroke-width="1"/>
                                <path d="M98 140 Q130 110 140 50" stroke-width="0.8"/>
                                <path d="M115 125 Q135 120 140 100" stroke-width="0.4"/>
                                <path d="M125 100 Q145 95 150 75" stroke-width="0.4"/>

                                <path d="M100 80 C70 40 80 0 100 -10 C120 0 130 40 100 80 Z" fill="url(#leafGrad)" stroke-width="1"/>
                                <path d="M100 80 Q100 40 100 -10" stroke-width="0.8"/>
                                <path d="M100 65 Q85 55 90 35" stroke-width="0.4"/>
                                <path d="M100 45 Q115 35 110 15" stroke-width="0.4"/>
                            </svg>
                        </div>

                        <!-- Small Elegant Leaf Divider -->
                        <div class="mb-3">
                            <svg width="40" height="20" viewBox="0 0 40 20" fill="none" stroke="var(--theme-light)" stroke-width="1.5" stroke-linecap="round">
                                <path d="M0 10 L15 10" />
                                <path d="M25 10 L40 10" />
                                <path d="M20 10 C 15 10 15 2 20 2 C 25 2 25 10 20 10 Z" fill="var(--theme-light-alpha)" />
                                <path d="M20 10 C 15 10 15 18 20 18 C 25 18 25 10 20 10 Z" fill="var(--theme-light-alpha)" />
                            </svg>
                        </div>

                        <span class="subtitle-label position-relative z-2">Our Teaching Philosophy</span>
                        
                        <div class="lead-text mt-3 position-relative z-2">
                            "The Bright Thread — Because Every Child Is a One-of-a-Kind Story"
                        </div>

                        <p class="body-text position-relative z-2">
                            Not a curriculum. Not a checklist. A commitment — to seeing each child as a whole, complex, extraordinary individual, and building their learning around who they already are.
                        </p>
                        <p class="body-text position-relative z-2">
                            It answers one essential question we ask about every single child in our care:
                        </p>
                        
                        <!-- HIGHLIGHT QUOTE BOX -->
                        <div class="highlight-quote">
                            <!-- Small Quote Icon Accent -->
                            <div style="position: absolute; top: -14px; left: 50%; transform: translateX(-50%); background: var(--bg-cream); padding: 0 15px; color: var(--theme-light); opacity: 0.7;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M14.017 18L16.41 11.3333H10.5V0H21.5V11.3333L19.017 18H14.017ZM3.517 18L5.91 11.3333H0V0H11V11.3333L8.517 18H3.517Z" />
                                </svg>
                            </div>
                            <h4 class="fst-italic mb-0" style="position: relative; z-index: 2;">
                                "What is the thread that, if we follow it, will lead this child to their fullest potential?"
                            </h4>
                        </div>
                    </div>

                    <!-- Right Side: Arched Image -->
                    <div class="col-lg-5 mt-5 mt-lg-0 arch-image-wrapper" style="position: relative;">
                        <!-- Sun Icon Accent (Moved higher) -->
                        <div style="position: absolute; top: -90px; right: -20px; z-index: 5; color: var(--gold-accent);">
                            <svg class="sun-icon-accent" width="70" height="70" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="50" cy="50" r="18"/>
                                <path d="M50 15 L50 5 M50 95 L50 85 M15 50 L5 50 M95 50 L85 50" />
                                <path d="M25 25 L15 15 M75 75 L85 85 M25 75 L15 85 M75 25 L85 15" />
                                <path d="M33 18 L28 10 M67 18 L72 10 M33 82 L28 90 M67 82 L72 90" />
                                <path d="M18 33 L10 28 M82 33 L90 28 M18 67 L10 72 M82 67 L90 72" />
                            </svg>
                        </div>

                        <img src="{{ asset('Front/images/thr.jpeg') }}" class="arch-image" alt="Teaching Philosophy">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section (Dear Parents Layout) -->
    <section class="py-5" style="background-color: var(--bg-cream);">
        <div class="container position-relative z-2">
            <div class="row align-items-center mb-4">
                
                <!-- Left Content -->
                <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                    <!-- Elegant Cursive Greeting -->
                    <div class="mb-4">
                        <h2 class="cursive-text">Dear Parents,</h2>
                    </div>

                    <h2 class="fw-bold mb-4" style="color: var(--theme-dark); font-family: 'Playfair Display', serif; font-size: 2.1rem; line-height: 1.4;">
                        The Bright Thread <br>
                        <span style="font-weight: 400; font-style: italic; font-size: 1.7rem; color: var(--theme-light);">A Perfect Partnership</span>
                    </h2>
                    
                    <p class="body-text">
                        Maria Montessori showed us that children are not empty vessels — they are natural learners, driven from within. The Montessori method gives us the structure: proven materials, trained guides, a prepared environment. 
                    </p>
                    <p class="body-text">
                        The Bright Thread gives us the intention: ensuring the method is applied to your child, specifically.
                    </p>
                    
                    <!-- Decorative Thin Line -->
                    <div style="width: 40px; height: 1px; background: var(--leaf-green); margin: 2rem 0; opacity: 0.5;"></div>

                    <p class="body-text mt-4" style="color: var(--theme-dark); font-family: 'Playfair Display', serif; font-size: 1.4rem; font-style: italic;">
                        Together, they create something rare — a system that is both rigorously proven and deeply personal.
                    </p>
                </div>
                
                <!-- Right Side: Arched Image with Layers -->
                <div class="col-lg-6 arch-image-wrapper" style="position: relative;">
                    <!-- Enhanced Botanical Branch OUTSIDE -->
                    <div style="position: absolute; bottom: 20px; right: -110px; z-index: 1; color: var(--leaf-green);">
                        <svg width="200" height="400" viewBox="0 0 200 400" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.9; transform: rotate(15deg);">
                            <path d="M100 380 Q80 230 100 80" stroke-width="1.5" stroke-linecap="round"/>
                            
                            <path d="M96 320 C50 330 20 280 50 250 C70 260 80 290 96 320 Z" fill="url(#leafGrad)" stroke-width="1"/>
                            <path d="M96 320 Q70 300 50 250" stroke-width="0.8"/>
                            <path d="M85 308 Q65 310 55 295" stroke-width="0.4"/>
                            <path d="M75 288 Q55 290 45 275" stroke-width="0.4"/>

                            <path d="M96 260 C140 240 160 190 130 170 C110 190 100 220 96 260 Z" fill="url(#leafGrad)" stroke-width="1"/>
                            <path d="M96 260 Q120 230 130 170" stroke-width="0.8"/>
                            <path d="M110 245 Q130 240 135 220" stroke-width="0.4"/>
                            <path d="M120 220 Q140 215 140 195" stroke-width="0.4"/>

                            <path d="M93 200 C40 200 20 150 50 120 C70 140 80 170 93 200 Z" fill="url(#leafGrad)" stroke-width="1"/>
                            <path d="M93 200 Q60 180 50 120" stroke-width="0.8"/>
                            <path d="M80 188 Q60 190 50 170" stroke-width="0.4"/>
                            <path d="M68 165 Q48 165 40 145" stroke-width="0.4"/>

                            <path d="M98 140 C150 130 170 80 140 50 C120 70 105 100 98 140 Z" fill="url(#leafGrad)" stroke-width="1"/>
                            <path d="M98 140 Q130 110 140 50" stroke-width="0.8"/>
                            <path d="M115 125 Q135 120 140 100" stroke-width="0.4"/>
                            <path d="M125 100 Q145 95 150 75" stroke-width="0.4"/>

                            <path d="M100 80 C70 40 80 0 100 -10 C120 0 130 40 100 80 Z" fill="url(#leafGrad)" stroke-width="1"/>
                            <path d="M100 80 Q100 40 100 -10" stroke-width="0.8"/>
                            <path d="M100 65 Q85 55 90 35" stroke-width="0.4"/>
                            <path d="M100 45 Q115 35 110 15" stroke-width="0.4"/>
                            
                            <!-- Golden berries -->
                            <circle cx="85" cy="255" r="3.5" fill="var(--gold-accent)" stroke="none"/>
                            <circle cx="92" cy="248" r="2.5" fill="var(--gold-accent)" stroke="none"/>
                            <circle cx="108" cy="185" r="3.5" fill="var(--gold-accent)" stroke="none"/>
                            <circle cx="114" cy="192" r="2" fill="var(--gold-accent)" stroke="none"/>
                        </svg>
                    </div>

                    <!-- Main Image sits on top (z-index 2) -->
                    <img src="{{ asset('Front/images/env.jpeg') }}" class="arch-image" alt="Montessori Lab">
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works-section">
        
        <!-- Large Background Botanical Branch -->
        <div class="floating-icon botanical-1" style="transform: rotate(25deg);">
            <svg width="300" height="600" viewBox="0 0 200 400" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 380 Q80 230 100 80" stroke-width="1.5" stroke-linecap="round"/>
                
                <path d="M96 320 C50 330 20 280 50 250 C70 260 80 290 96 320 Z" fill="url(#leafGrad)" stroke-width="1"/>
                <path d="M96 320 Q70 300 50 250" stroke-width="0.8"/>
                <path d="M85 308 Q65 310 55 295" stroke-width="0.4"/>
                <path d="M75 288 Q55 290 45 275" stroke-width="0.4"/>

                <path d="M96 260 C140 240 160 190 130 170 C110 190 100 220 96 260 Z" fill="url(#leafGrad)" stroke-width="1"/>
                <path d="M96 260 Q120 230 130 170" stroke-width="0.8"/>
                <path d="M110 245 Q130 240 135 220" stroke-width="0.4"/>
                <path d="M120 220 Q140 215 140 195" stroke-width="0.4"/>

                <path d="M93 200 C40 200 20 150 50 120 C70 140 80 170 93 200 Z" fill="url(#leafGrad)" stroke-width="1"/>
                <path d="M93 200 Q60 180 50 120" stroke-width="0.8"/>
                <path d="M80 188 Q60 190 50 170" stroke-width="0.4"/>
                <path d="M68 165 Q48 165 40 145" stroke-width="0.4"/>

                <path d="M98 140 C150 130 170 80 140 50 C120 70 105 100 98 140 Z" fill="url(#leafGrad)" stroke-width="1"/>
                <path d="M98 140 Q130 110 140 50" stroke-width="0.8"/>
                <path d="M115 125 Q135 120 140 100" stroke-width="0.4"/>
                <path d="M125 100 Q145 95 150 75" stroke-width="0.4"/>

                <path d="M100 80 C70 40 80 0 100 -10 C120 0 130 40 100 80 Z" fill="url(#leafGrad)" stroke-width="1"/>
                <path d="M100 80 Q100 40 100 -10" stroke-width="0.8"/>
                <path d="M100 65 Q85 55 90 35" stroke-width="0.4"/>
                <path d="M100 45 Q115 35 110 15" stroke-width="0.4"/>
            </svg>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    
                    <div class="text-center mb-3">
                        <svg width="40" height="20" viewBox="0 0 40 20" fill="none" stroke="var(--theme-light)" stroke-width="1.5" stroke-linecap="round">
                            <path d="M0 10 L15 10" />
                            <path d="M25 10 L40 10" />
                            <path d="M20 10 C 15 10 15 2 20 2 C 25 2 25 10 20 10 Z" fill="var(--theme-light-alpha)" />
                            <path d="M20 10 C 15 10 15 18 20 18 C 25 18 25 10 20 10 Z" fill="var(--theme-light-alpha)" />
                        </svg>
                    </div>

                    <h2 class="fw-bold mb-4 text-center" style="color: var(--theme-dark); font-family: 'Playfair Display', serif;">How the Bright Thread Works</h2>
                    
                    <div class="how-it-works-grid">
                        
                        <!-- Box 1 (Observe Icon) -->
                        <div class="how-it-works-item">
                            <div class="how-it-works-icon-wrapper">
                                <div class="how-it-works-icon">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"/>
                                        <path d="m21 21-4.3-4.3"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="how-it-works-title">We observe first</h3>
                            <p class="body-text mb-0" style="font-size: 1.05rem;">
                                Before guiding, we watch. What does this child return to? Where do they lose track of time? Observation is where every Bright Thread begins.
                            </p>
                        </div>

                        <!-- Box 2 (Picture/Art Icon) -->
                        <div class="how-it-works-item">
                            <div class="how-it-works-icon-wrapper">
                                <div class="how-it-works-icon">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9.06 11.9 8.07-8.06a2.85 2.85 0 1 1 4.03 4.03l-8.06 8.08"/>
                                        <path d="M7.07 14.94c-1.66 0-3 1.35-3 3.02 0 1.33-2.5 1.52-2 2.02 1.08 1.1 2.49 2.02 4 2.02 2.2 0 4-1.8 4-4.04a3.01 3.01 0 0 0-3-3.02z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="how-it-works-title">We build an individual picture</h3>
                            <p class="body-text mb-0" style="font-size: 1.05rem;">
                                Not a report card — a living portrait. Daily observations, material choices, developmental stage, emotional needs, and your insight as a parent.
                            </p>
                        </div>

                        <!-- Box 3 (Flying/Paper Airplane Icon) -->
                        <div class="how-it-works-item">
                            <div class="how-it-works-icon-wrapper">
                                <div class="how-it-works-icon">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="3 11 22 2 13 21 11 13 3 11"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="how-it-works-title">We follow the child</h3>
                            <p class="body-text mb-0" style="font-size: 1.05rem;">
                                Children are never rushed past a concept or held back from flying. They move on when they're ready. Curiosity is the engine — not an external schedule.
                            </p>
                        </div>

                        <!-- Box 4 (Family/Involve Icon) -->
                        <div class="how-it-works-item">
                            <div class="how-it-works-icon-wrapper">
                                <div class="how-it-works-icon">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="how-it-works-title">We involve you</h3>
                            <p class="body-text mb-0" style="font-size: 1.05rem;">
                                Your child's thread runs through your home too. Regular check-ins and open conversations ensure you're never a bystander in their journey.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="comparison-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    <div class="text-center mb-3">
                        <svg width="40" height="20" viewBox="0 0 40 20" fill="none" stroke="var(--theme-light)" stroke-width="1.5" stroke-linecap="round">
                            <path d="M0 10 L15 10" />
                            <path d="M25 10 L40 10" />
                            <path d="M20 10 C 15 10 15 2 20 2 C 25 2 25 10 20 10 Z" fill="var(--theme-light-alpha)" />
                            <path d="M20 10 C 15 10 15 18 20 18 C 25 18 25 10 20 10 Z" fill="var(--theme-light-alpha)" />
                        </svg>
                    </div>

                    <span class="comparison-label">What Makes This Different</span>
                    
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>Other approaches</th>
                                <th>The Bright Thread</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A fixed plan for all children</td>
                                <td>A living picture unique to each child</td>
                            </tr>
                            <tr>
                                <td>Labelling by ability</td>
                                <td>Honour each child's current place in their journey</td>
                            </tr>
                            <tr>
                                <td>Keeping pace with others</td>
                                <td>Unfolding at their own pace</td>
                            </tr>
                            <tr>
                                <td>Standardised testing</td>
                                <td>Deep observation and individual progress tracking</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Final Quotes Section -->
    <section class="final-quotes-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    
                    <!-- Elegant Sun/Seal Embossed Icon -->
                    <div class="text-center mb-4">
                        <svg class="embossed-icon" width="70" height="70" viewBox="0 0 100 100" fill="none" stroke="var(--gold-accent)" stroke-width="1.5">
                            <circle cx="50" cy="50" r="25"/>
                            <path d="M50 15 L50 5 M50 95 L50 85 M15 50 L5 50 M95 50 L85 50" />
                            <path d="M25 25 L15 15 M75 75 L85 85 M25 75 L15 85 M75 25 L85 15" />
                            <!-- Inner ring -->
                            <circle cx="50" cy="50" r="21" stroke-dasharray="2 4"/>
                        </svg>
                    </div>

                    <h3 class="mb-4" style="color: var(--theme-dark); font-size: 1.7rem; font-style: italic; line-height: 1.5; font-family: 'Playfair Display', serif;">
                        "Your child is not like any other child who has ever walked through our doors. We think that's the whole point."
                    </h3>
                    
                    <!-- Handwritten Cursive Sign-off -->
                    <!--<h4 class="cursive-text" style="color: var(--theme-dark); font-size: 3.2rem;">Maria Montessori</h4>-->
                </div>
            </div>
        </div>
    </section>

</div>

@include('front.layouts.footer')
