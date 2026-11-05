@section('title', 'Why Choose Us - Bedford Kindergarten Qatar | Doha')
@section('description', 'Discover why Bedford Kindergarten Qatar is the premier choice for your child. British EYFS framework, Montessori learning, child safeguarding, and a caring community.')
@section('why_choose_us', 'active')
@include('front.layouts.header')

<style>
    /* ==========================================
       UNIFIED PREMIUM MONTESSORI STYLING 
       ========================================== */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        color: #4A5568;
        background-color: #F8FAFC;
    }

    h1, h2, h3, h4, h5, h6, .banner-title, .lead-text {
        font-family: 'Playfair Display', serif;
        color: #2F348B;
    }

    /* Page Specific Styles */
    .why-choose-page {
        font-family: 'Montserrat', sans-serif;
        color: #4A5568;
        background-color: #F8FAFC;
        position: relative;
        overflow: hidden;
    }

    /* Floating Icons & Animations */
    .aesthetic-icon {
        position: absolute;
        z-index: 0;
        opacity: 0.9;
        pointer-events: none;
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    /* ==========================================
       HERO BANNER (Consistent with other pages)
       ========================================== */
    .why-banner {
        position: relative;
        width: 100vw;
        margin-left: calc(-50vw + 50%);
        max-width: 100vw;
        height: 450px; 
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
        background: linear-gradient(180deg, rgba(30, 36, 75, 0.5) 0%, rgba(47, 52, 139, 0.25) 50%, rgba(30, 36, 75, 0.6) 100%); 
        z-index: 1;
    }

    .banner-text {
        position: relative;
        z-index: 2;
        text-align: center;
        width: 100%;
        padding-bottom: 20px;
    }

    .banner-title {
        font-family: 'Playfair Display', serif; 
        color: #ffffff;
        font-size: 4.5rem; 
        font-weight: 500;
        margin: 0;
        text-shadow: 0px 4px 15px rgba(0,0,0,0.4);
    }

    @media (max-width: 768px) {
        .banner-title {
            font-size: 2.5rem; 
        }
        .why-banner {
            height: 300px;
        }
    }

    /* ==========================================
       INTRO SECTION
       ========================================== */
    .hero-section {
        padding: 3rem 0 4rem; 
        background: #F8FAFC;
    }

    .subtitle-label {
        color: #A89F91;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-size: 0.9rem;
        margin-bottom: 1rem;
        display: block;
        font-family: 'Montserrat', sans-serif;
    }

    /* Highlight Quote Box */
    .highlight-quote {
        background: rgba(47, 52, 139, 0.06); /* Indigo tint */
        border-left: 5px solid #2F348B;
        padding: 2.5rem;
        border-radius: 0 20px 20px 0;
        margin: 1.5rem auto;  
        max-width: 800px; 
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        position: relative;
    }

    /* ==========================================
       FEATURES GRID SECTION 
       ========================================== */
    .features-section {
        position: relative; 
        overflow: hidden;   
        padding: 2rem 0 5rem; 
        background: #F8FAFC;
    }

    .features-section .container {
        position: relative; 
        z-index: 2; 
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem; 
        margin-top: 1.5rem;
    }

    /* Bedford Card Styling */
    .features-item {
        background: #ffffff;
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        border: 1px solid rgba(47, 52, 139, 0.12);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        flex-direction: column;
    }

    .features-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(47, 52, 139, 0.12); /* Indigo glow */
        border-color: rgba(47, 52, 139, 0.3);
    }

    .features-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 1.5rem;
    }

    .features-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .features-title {
        font-weight: 600;
        font-size: 1.3rem;
        margin-bottom: 1rem;
        color: #1E244B;
        font-family: 'Playfair Display', serif;
    }

    .body-text {
        font-size: 1rem;
        line-height: 1.8;
        color: #4A5568;
        font-family: 'Montserrat', sans-serif;
    }

    /* ==========================================
       FINAL QUOTES SECTION (SPLIT BOX LAYOUT)
       ========================================== */
    .final-quotes-section {
        padding: 3rem 0 7rem;
        background: #F8FAFC; 
    }

    .enroll-box {
        background: #ffffff;
        border: 1px solid rgba(47, 52, 139, 0.15);
        border-radius: 24px;
        padding: 4rem;
        box-shadow: 0 15px 40px rgba(0,0,0,0.03);
        position: relative;
    }

    .enroll-image {
        border-radius: 16px;
        border: 4px solid #ffffff;
        box-shadow: 0 10px 30px rgba(47, 52, 139, 0.08);
        width: 100%;
        height: 350px;
        object-fit: cover;
    }

    .enroll-btn {
        display: inline-block;
        background: #F59F1E;
        color: #ffffff !important;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        border: none;
        box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35);
        transition: all 0.3s ease;
    }

    .enroll-btn:hover {
        background: #E28C0A;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(245, 159, 30, 0.45);
    }

    /* Responsive Grid */
    @media (max-width: 992px) {
        .features-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .enroll-box {
            padding: 2.5rem;
        }
        .enroll-image {
            height: 250px;
        }
    }

    @media (max-width: 768px) {
        .features-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="why-choose-page">
    
    <!-- Hero Banner with Bottom Wave & Clouds -->
    <section class="why-banner" style="background: url('{{ asset('Front/images/why13.jpg') }}') center top / cover no-repeat;">
        <div class="banner-overlay"></div>
        <div class="container position-relative h-100 d-flex align-items-center justify-content-center" style="z-index: 2;">
            <!-- Watercolor Cloud 1 (Anchored to Container) -->
            <div class="aesthetic-icon" style="top: 15%; right: 5%; opacity: 0.85;">
                <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <linearGradient id="whyCloud1" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9"/>
                      <stop offset="100%" stop-color="#E8E5DC" stop-opacity="0.9"/>
                    </linearGradient>
                  </defs>
                  <path d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z" fill="url(#whyCloud1)"/>
                </svg>
            </div>

            <div class="banner-text">
                <h1 class="banner-title">Why Choose Us?</h1>
            </div>
        </div>

        <!-- Wavy Bottom Shape Divider -->
        <div style="position: absolute; bottom: -2px; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 3;">
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="display: block; width: 100%; height: 60px; fill: #F8FAFC;">
                <path d="M0,40 C320,100 820,0 1440,60 L1440,100 L0,100 Z" />
            </svg>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="hero-section text-center">
        <div class="container position-relative">
            
            <!-- Rainbow SVG Floating near header -->
            <div class="aesthetic-icon" style="top: -20px; right: 15%; opacity: 0.95; transform: scale(1.1); z-index: 2;">
                <svg width="120" height="80" viewBox="0 0 120 80" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10,80 A50,50 0 0,1 110,80" fill="none" stroke="#2F348B" stroke-width="12" stroke-linecap="round"/>
                    <path d="M26,80 A34,34 0 0,1 94,80" fill="none" stroke="#F59F1E" stroke-width="12" stroke-linecap="round"/>
                    <path d="M42,80 A18,18 0 0,1 78,80" fill="none" stroke="#23276B" stroke-width="12" stroke-linecap="round"/>
                    <path d="M58,80 A2,2 0 0,1 62,80" fill="none" stroke="#EEF2FB" stroke-width="12" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <span class="subtitle-label">Discover Bedford Kindergarten</span>
                    
                    <div class="highlight-quote text-start">
                        
                        <!-- Taupe Caterpillar resting on Quote Box -->
                        <div class="aesthetic-icon" style="bottom: -35px; right: 10px; opacity: 0.95; z-index: 5;">
                            <svg width="130" height="90" viewBox="0 0 150 100" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(5deg);">
                              <defs>
                                <radialGradient id="catG3" cx="30%" cy="30%" r="70%">
                                  <stop offset="0%" stop-color="#E8DCD1"/>
                                  <stop offset="100%" stop-color="#C1AD9D"/>
                                </radialGradient>
                              </defs>
                              <path d="M10,80 Q75,40 140,50" stroke="#B5AFA1" stroke-width="2.5" stroke-linecap="round" fill="none"/>
                              <path d="M40,63 C30,75 25,75 40,63 Z" stroke="#B5AFA1" stroke-width="1.5" fill="#D4C5B9"/>
                              <path d="M100,45 C110,60 120,60 100,45 Z" stroke="#B5AFA1" stroke-width="1.5" fill="#D4C5B9"/>
                              <circle cx="45" cy="55" r="9" fill="url(#catG3)"/>
                              <circle cx="60" cy="50" r="10.5" fill="url(#catG3)"/>
                              <circle cx="76" cy="46" r="11.5" fill="url(#catG3)"/>
                              <circle cx="93" cy="44" r="11.5" fill="url(#catG3)"/>
                              <circle cx="110" cy="45" r="12.5" fill="url(#catG3)"/>
                              <path d="M115,35 Q125,20 130,25 M105,33 Q110,18 115,20" stroke="#4A4A4A" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                              <circle cx="130" cy="25" r="1.5" fill="#4A4A4A"/>
                              <circle cx="115" cy="20" r="1.5" fill="#4A4A4A"/>
                              <circle cx="115" cy="42" r="2" fill="#4A4A4A"/>
                            </svg>
                        </div>

                        <h4 class="fst-italic mb-0" style="color: #1E244B; line-height: 1.6; font-weight: 500; font-family: 'Playfair Display', serif;">
                            “At Bedford Kindergarten, we offer a harmonious blend of the British EYFS curriculum and Montessori methods, delivered by highly trained and qualified teachers who are familiar with Qatari teaching standards, culture, and norms.” 
                        </h4>
                        <p class="fw-bold text-uppercase mt-4 mb-0" style="letter-spacing: 2px; color: #F59F1E; font-family: 'Montserrat', sans-serif;">– Bedford Kindergarten, Doha</p>
                    </div>

                    <div class="lead-text mt-5 mb-0 text-center" style="font-size: 2.2rem; font-weight: 400; line-height: 1.6;">
                        Bedford Kindergarten <br>
                        <span style="color: #2F348B; font-family: 'Great Vibes', cursive; font-size: 3.8rem; display: inline-block; margin-top: 10px;">Where Curiosity Is Cherished.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid Section -->
    <section class="features-section">
        <div class="container position-relative">
            <!-- DECORATIVE WATERCOLOR FLOATING ICONS (Anchored to Container) -->
            
            <!-- Beautiful Blush Pink Watercolor Butterfly -->
            <div class="aesthetic-icon" style="top: -25px; left: -25px; animation: float 5s ease-in-out infinite; z-index: 1;">
                <svg class="montessori-butterfly" width="80" height="80" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(-15deg);">
                  <defs>
                    <filter id="bfShadowWC" x="-20%" y="-20%" width="140%" height="140%">
                      <feDropShadow dx="0" dy="4" stdDeviation="3" flood-color="#887868" flood-opacity="0.3"/>
                    </filter>
                    <linearGradient id="blushTopWingWC" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#EBC4BB" />
                      <stop offset="70%" stop-color="#DCA89E" />
                      <stop offset="100%" stop-color="#C08479" />
                    </linearGradient>
                    <linearGradient id="blushTopWingRightWC" x1="100%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#EBC4BB" />
                      <stop offset="70%" stop-color="#DCA89E" />
                      <stop offset="100%" stop-color="#C08479" />
                    </linearGradient>
                    <linearGradient id="blushBotWingWC" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#F1D1C6" />
                      <stop offset="100%" stop-color="#DCA89E" />
                    </linearGradient>
                    <linearGradient id="blushBotWingRightWC" x1="100%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#F1D1C6" />
                      <stop offset="100%" stop-color="#DCA89E" />
                    </linearGradient>
                  </defs>

                  <g filter="url(#bfShadowWC)">
                    <path d="M 58 55 C 40 30, 10 20, 15 45 C 18 60, 30 70, 58 60 Z" fill="url(#blushTopWingWC)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
                    <path d="M 62 55 C 80 30, 110 20, 105 45 C 102 60, 90 70, 62 60 Z" fill="url(#blushTopWingRightWC)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
                    <path d="M 58 60 C 40 75, 25 105, 45 100 C 55 98, 60 75, 58 60 Z" fill="url(#blushBotWingWC)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
                    <path d="M 62 60 C 80 75, 95 105, 75 100 C 65 98, 60 75, 62 60 Z" fill="url(#blushBotWingRightWC)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
                    <path d="M 58 58 Q 40 40 18 40 M 58 58 Q 35 55 22 55 M 58 62 Q 45 75 40 95 M 58 62 Q 50 80 50 95" stroke="#8C6A5D" stroke-width="0.8" opacity="0.6"/>
                    <path d="M 62 58 Q 80 40 102 40 M 62 58 Q 85 55 98 55 M 62 62 Q 75 75 80 95 M 62 62 Q 70 80 70 95" stroke="#8C6A5D" stroke-width="0.8" opacity="0.6"/>
                    <circle cx="20" cy="48" r="1.5" fill="#FAF5F0"/>
                    <circle cx="25" cy="60" r="1.5" fill="#FAF5F0"/>
                    <circle cx="100" cy="48" r="1.5" fill="#FAF5F0"/>
                    <circle cx="95" cy="60" r="1.5" fill="#FAF5F0"/>
                    <rect x="58" y="45" width="4" height="28" rx="2" fill="#5A473D"/>
                    <path d="M 59 45 Q 52 30 45 25 M 61 45 Q 68 30 75 25" stroke="#5A473D" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                    <circle cx="45" cy="25" r="1.5" fill="#5A473D"/>
                    <circle cx="75" cy="25" r="1.5" fill="#5A473D"/>
                  </g>
                </svg>
            </div>

            <!-- Montessori Blocks -->
            <div class="aesthetic-icon" style="bottom: -25px; left: -30px; z-index: 1;">
                <svg width="90" height="115" viewBox="0 0 100 130" xmlns="http://www.w3.org/2000/svg">
                  <!-- Purple Block -->
                  <path d="M20,110 L50,125 L80,110 L80,80 L50,95 L20,80 Z" fill="#B28BC2"/>
                  <path d="M20,80 L50,95 L80,80 L50,65 Z" fill="#CBB2D6"/>
                  <path d="M20,80 L50,95 L50,125 L20,110 Z" fill="#9B6AAB"/>
                  <!-- Blush/Taupe Block -->
                  <path d="M30,80 L50,90 L70,80 L70,55 L50,65 L30,55 Z" fill="#D4C5B9"/>
                  <path d="M30,55 L50,65 L70,55 L50,45 Z" fill="#E8DCD1"/>
                  <path d="M30,55 L50,65 L50,90 L30,80 Z" fill="#C1AD9D"/>
                </svg>
            </div>

            <!-- Watercolor Cloud -->
            <div class="aesthetic-icon" style="top: 35%; right: -25px; opacity: 0.7; z-index: 1;">
                <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <linearGradient id="cloudFeat" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9"/>
                      <stop offset="100%" stop-color="#E8E5DC" stop-opacity="0.9"/>
                    </linearGradient>
                  </defs>
                  <path d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z" fill="url(#cloudFeat)"/>
                </svg>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    
                    <div class="features-grid">
                        
                        <!-- Feature 1 -->
                        <div class="features-item" data-aos="fade-up">
                            <img src="{{ asset('Front/images/au.jpeg') }}" alt="Authentic AMI-Approved Materials" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">Authentic AMI-Approved Materials</h3>
                                <p class="body-text mb-0">
                                    Purposeful, hands-on materials designed by Maria Montessori to foster independence, concentration, and deep understanding.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="features-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('Front/images/br.jpeg') }}" alt="The Bright Thread Philosophy" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">The Bright Thread Philosophy</h3>
                                <p class="body-text mb-0">
                                    Every child follows a unique learning journey, guided according to their interests, strengths, and developmental readiness.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="features-item" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('Front/images/re.jpeg') }}" alt="Read Write Inc Phonics" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">Read Write Inc Phonics</h3>
                                <p class="body-text mb-0">
                                    A structured and engaging literacy programme from the UK that builds confident readers, writers, and communicators.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="features-item" data-aos="fade-up">
                            <img src="{{ asset('Front/images/wa.jpeg') }}" alt="Warm, Joyful Prepared Environment" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">Warm, Joyful Prepared Environment</h3>
                                <p class="body-text mb-0">
                                    Beautiful, purposeful spaces where children feel safe, respected, and inspired to learn.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 5 -->
                        <div class="features-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('Front/images/inq.jpeg') }}" alt="Inquiry-Based Discovery" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">Inquiry-Based Discovery</h3>
                                <p class="body-text mb-0">
                                    We encourage children to ask questions, investigate ideas, and develop a genuine curiosity about the world.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 6 -->
                        <div class="features-item" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('Front/images/ha.jpeg') }}" alt="Hands-On, Not Screen-On" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">Hands-On, Not Screen-On</h3>
                                <p class="body-text mb-0">
                                    Young children learn best through real experiences, movement, exploration, and meaningful interactions.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 7 -->
                        <div class="features-item" data-aos="fade-up">
                            <img src="{{ asset('Front/images/lowra.jpeg') }}" alt="Low Ratios, High Attention" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">Low Ratios, High Attention</h3>
                                <p class="body-text mb-0">
                                    Smaller guide-child ratios allow our Montessori Guides to truly know, support, and nurture each child.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 8 -->
                        <div class="features-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('Front/images/wearegui.jpeg') }}" alt="We're Guides, Not Teachers" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">We're Guides, Not Teachers</h3>
                                <p class="body-text mb-0">
                                    Our Montessori Guides observe, facilitate, and empower children to become confident, independent learners.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 9 -->
                        <div class="features-item" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('Front/images/ou.jpeg') }}" alt="Outdoor learning & Nature play" class="features-image">
                            <div class="features-content">
                                <h3 class="features-title">Outdoor learning & Nature play</h3>
                                <p class="body-text mb-0">
                                    Daily outdoor experiences promote physical development, creativity, resilience, and a connection with nature.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Quotes Section (Enroll Box) -->
    <section class="final-quotes-section">
        <div class="container position-relative">
            
            <!-- Cute Sitting Bunny resting on the Enroll Box -->
            <div class="aesthetic-icon" style="top: -65px; left: 40px; opacity: 0.95; z-index: 5;">
                <svg width="110" height="110" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <radialGradient id="bunnyG2" cx="40%" cy="30%" r="70%">
                      <stop offset="0%" stop-color="#F2EEE6"/>
                      <stop offset="70%" stop-color="#DBCDBF"/>
                      <stop offset="100%" stop-color="#BEB4A6"/>
                    </radialGradient>
                  </defs>
                  <path d="M60,45 Q50,15 55,10 Q65,25 65,45" fill="#BEB4A6"/>
                  <circle cx="20" cy="80" r="8" fill="#FFFFFF" opacity="0.9"/>
                  <path d="M35,65 C25,65 20,85 35,95 C55,100 75,95 75,75 C75,55 55,50 35,65 Z" fill="url(#bunnyG2)"/>
                  <path d="M55,45 C75,40 85,55 80,70 C70,75 55,75 45,60 C40,50 45,45 55,45 Z" fill="url(#bunnyG2)"/>
                  <path d="M62,45 Q55,10 63,5 Q73,20 68,45" fill="url(#bunnyG2)"/>
                  <circle cx="72" cy="55" r="2" fill="#4A4A4A"/>
                  <circle cx="83" cy="64" r="1.5" fill="#8B7E74"/>
                  <path d="M60,80 Q60,95 65,95 Q70,95 70,85" stroke="#BEB4A6" stroke-width="4" stroke-linecap="round" fill="none"/>
                </svg>
            </div>

            <div class="enroll-box" data-aos="fade-up">
                <div class="row align-items-center">
                    
                    <!-- Left Side: Image -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <img src="{{ asset('Front/images/lege.jpg') }}" alt="Enrollment" class="enroll-image">
                    </div>

                    <!-- Right Side: Content -->
                    <div class="col-lg-7 px-lg-5 text-start">
                        <h3 class="fw-bold mb-4" style="color: #2F348B; font-family: 'Playfair Display', serif; font-style: italic; line-height: 1.5; font-size: 2.2rem;">
                            "Your child's story is waiting to be written. Let's write the first page together."
                        </h3>
                        
                        <!-- Bedford divider line -->
                        <div style="width: 60px; height: 3px; background: linear-gradient(to right, #2F348B, #F59F1E); margin-bottom: 2.5rem; border-radius: 2px;"></div>

                        <a href="{{ route('admission') }}" class="enroll-btn">
                            Enroll Now
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

@include('front.layouts.footer')

