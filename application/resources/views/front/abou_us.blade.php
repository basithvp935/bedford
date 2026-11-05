@section('title', 'About Us | Bedford Kindergarten Qatar - Best Kindergarten in Doha')
@section('description', 'Discover Bedford Kindergarten Qatar. Offering British EYFS and Montessori early childhood education in Doha, Qatar. Enroll your child today.')
@include('front.layouts.header')

<style>
    /* Import Elegant Serif, Clean Sans-Serif, and Script Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        color: #4A5568;
        background-color: #F8FAFC; /* Clean modern slate background matching logo palette */
    }
    
    p {
        text-align: justify;
    }

    h1, h2, h3, h4, h5, h6, .about-main-title {
        font-family: 'Playfair Display', serif;
        color: #2F348B; /* Bedford Royal Indigo */
    }

    /* Banner Box Style for About Us Text - Bedford Theme */
    .about-banner-box {
        background: #FFFFFF;
        border-radius: 24px;
        padding: 4rem 5rem;
        border: 1px solid rgba(47, 52, 139, 0.08);
        box-shadow: 0 15px 45px rgba(47, 52, 139, 0.06);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        position: relative;
        overflow: visible;
    }
    
    @media (max-width: 768px) {
        .about-banner-box {
            padding: 2.5rem 1.5rem;
        }
    }
    
    .about-banner-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 25px 55px rgba(47, 52, 139, 0.1);
        border-color: rgba(245, 159, 30, 0.3);
    }
    
    .about-banner-box::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: radial-gradient(circle at top right, rgba(245, 159, 30, 0.04) 0%, transparent 60%);
        z-index: 0;
        border-radius: 24px;
    }
    
    .about-banner-content {
        position: relative;
        z-index: 1;
    }

    /* Hover effect for Mission/Vision boxes */
    .about-box {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        position: relative;
        z-index: 1;
    }
    .about-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(47, 52, 139, 0.12) !important;
    }

    /* Premium Image Effect matching logo scheme */
    .image-sage-shade {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        border: 4px solid #ffffff;
        box-shadow: 0 10px 30px rgba(47, 52, 139, 0.1);
        display: inline-block;
        width: 100%;
        cursor: pointer;
    }
    
    .image-sage-shade img {
        display: block;
        width: 100%;
        object-fit: cover;
        max-height: 450px;
        object-position: center;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    
    .image-sage-shade:hover img {
        transform: scale(1.03);
    }

    /* Aesthetic Floating Icons */
    .aesthetic-icon {
        position: absolute;
        z-index: 2;
        opacity: 0.9;
        pointer-events: none;
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    @media (max-width: 768px) {
        .about-main-title {
            font-size: 2.5rem !important;
        }
    }
</style>

<!-- Fixed Banner -->
<section class="position-relative d-flex align-items-center justify-content-center" style="
    background: url('{{ asset('Front/images/brightbann.jpeg') }}') center 25% / cover no-repeat; 
    width: 100vw; 
    margin-left: calc(-50vw + 50%); 
    max-width: 100vw; 
    height: 480px; 
    min-height: 480px;
    overflow: hidden;
">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(30, 36, 75, 0.5) 0%, rgba(47, 52, 139, 0.25) 50%, rgba(30, 36, 75, 0.6) 100%); z-index: 1;"></div>
    
    <div style="position: relative; z-index: 2; text-align: center; width: 100%; padding-top: 30px; padding-bottom: 20px;">
        <h1 class="about-main-title" style="font-family: 'Playfair Display', serif; color: #ffffff; font-size: 4.2rem; font-weight: 500; margin: 0; text-shadow: 0px 4px 20px rgba(0,0,0,0.5);">
            Our Story
        </h1>
    </div>

    <!-- Wavy Bottom Shape Divider -->
    <div style="position: absolute; bottom: -2px; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 3;">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="display: block; width: 100%; height: 60px; fill: #F8FAFC;">
            <path d="M0,40 C320,100 820,0 1440,60 L1440,100 L0,100 Z" />
        </svg>
    </div>
</section>

<!-- About Us section with Bedford Theme Elements -->
<section class="about section-100 home-about py-5 position-relative" style="background-color: #F8FAFC; overflow: hidden;">
    
    <!-- Beautiful Watercolor Cloud 1 -->
    <div class="aesthetic-icon" style="top: 2%; left: 5%; opacity: 0.85;">
        <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cloudG1" x1="0%" y1="0%" x2="0%" y2="100%">
              <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9"/>
              <stop offset="100%" stop-color="#EEF2FB" stop-opacity="0.9"/>
            </linearGradient>
          </defs>
          <path d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z" fill="url(#cloudG1)"/>
        </svg>
    </div>

    <!-- Beautiful Watercolor Cloud 2 -->
    <div class="aesthetic-icon" style="top: 15%; right: 3%; opacity: 0.7; transform: scale(0.8);">
        <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cloudG2" x1="0%" y1="0%" x2="0%" y2="100%">
              <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9"/>
              <stop offset="100%" stop-color="#EEF2FB" stop-opacity="0.9"/>
            </linearGradient>
          </defs>
          <path d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z" fill="url(#cloudG2)"/>
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row g-md-5 mb-5 mt-lg-3 mt-1">
            <div class="col-md-12 position-relative">
                
                <!-- Montessori Wooden Rainbow in Logo Colors (Top Left) -->
                <div class="aesthetic-icon" style="top: -30px; left: 40px; opacity: 0.95; transform: scale(1.1); ">
                    <svg width="120" height="80" viewBox="0 0 120 80" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10,80 A50,50 0 0,1 110,80" fill="none" stroke="#2F348B" stroke-width="12" stroke-linecap="round"/>
                        <path d="M26,80 A34,34 0 0,1 94,80" fill="none" stroke="#F59F1E" stroke-width="12" stroke-linecap="round"/>
                        <path d="M42,80 A18,18 0 0,1 78,80" fill="none" stroke="#EEF2FB" stroke-width="12" stroke-linecap="round"/>
                        <path d="M58,80 A2,2 0 0,1 62,80" fill="none" stroke="#FFFFFF" stroke-width="12" stroke-linecap="round"/>
                    </svg>
                </div>

                <!-- Elegant Botanical Leaf drawing in Gold and Indigo -->
                <div class="aesthetic-icon" style="top: -40px; right: 10px; opacity: 0.95; transform: scale(1.1); ">
                    <svg width="180" height="350" viewBox="0 0 180 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M140,320 Q90,180 60,60" stroke="#F59F1E" stroke-width="1.5" stroke-linecap="round" fill="none"/>
                        <path d="M105,230 C70,240 40,210 50,180 C70,160 100,190 105,230 Z" stroke="#2F348B" stroke-width="1.2" fill="#EEF2FB" opacity="0.9"/>
                        <path d="M105,230 Q80,200 50,180" stroke="#2F348B" stroke-width="1" fill="none"/>
                        <path d="M95,170 C135,165 145,115 125,90 C95,95 75,135 95,170 Z" stroke="#F59F1E" stroke-width="1.2" fill="#FFF9ED" opacity="0.9"/>
                        <path d="M95,170 Q120,130 125,90" stroke="#F59F1E" stroke-width="1" fill="none"/>
                        <path d="M65,100 C30,90 20,50 35,30 C60,40 75,70 65,100 Z" stroke="#2F348B" stroke-width="1.2" fill="#EEF2FB" opacity="0.9"/>
                        <path d="M65,100 Q45,65 35,30" stroke="#2F348B" stroke-width="1" fill="none"/>
                        <path d="M60,70 C90,55 95,20 75,5 C50,20 45,55 60,70 Z" stroke="#F59F1E" stroke-width="1.2" fill="#FFF9ED" opacity="0.9"/>
                        <path d="M60,70 Q75,35 75,5" stroke="#F59F1E" stroke-width="1" fill="none"/>
                    </svg>
                </div>

                <div class="about-banner-box w-100 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-banner-content">
                        <!-- Banner Image Top, Text Below -->
                        <div class="row">
                            <div class="col-12 mb-5">
                                <div class="image-sage-shade w-100" style="border-radius: 15px;">
                                    <img src="{{ asset('Front/images/ab10.jpeg') }}" alt="Our Story" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="col-12 px-lg-4 text-start">
                                <span class="fw-bold tracking-wider text-uppercase" style="color: #F59F1E; letter-spacing: 3px; font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">OUR STORY & MISSION.</span>
                                
                                <h2 class="pb-2 mt-2" style="font-family: 'Great Vibes', cursive; color: #2F348B; font-size: 3.8rem; font-weight: 400; line-height: 1.2;">Nurture Tiny Minds, Cherish Future.</h2>
                                
                                <div style="width: 90px; height: 4px; background: linear-gradient(to right, #2F348B, #F59F1E); margin: 0 0 1.5rem 0; border-radius: 4px;"></div>
                                
                                <div class="in-txt text-dark mt-4" style="font-size: 1.15rem; line-height: 1.8; color: #4A5568;">
                                    <p>Bedford Kindergarten is a leading early childhood educational institution located in Barwa Madinatna, Doha, Qatar. We are dedicated to providing the highest standard of international preschool and kindergarten education, nurturing young learners throughout their most crucial formative years.</p>
                                    <p>At Bedford Kindergarten, we seamlessly integrate the internationally recognized British Early Years Foundation Stage (EYFS) curriculum with proven Montessori principles. This balanced educational approach fosters intellectual curiosity, sensory exploration, creativity, and foundational cognitive and social abilities.</p>
                                    <p>Rooted in Qatar, we celebrate Arabic language learning, Islamic and moral values, and Qatari cultural heritage within an inclusive, diverse multicultural learning environment.</p>
                                    <p>Our purpose-built campus in Barwa Madinatna provides a safe, welcoming, and inspiring setting equipped with vibrant indoor and outdoor play facilities, digital learning resources, and full healthcare support.</p>
                                    <p>Every educator at <strong style="font-family: 'Playfair Display', serif; font-size: 1.3rem; font-style: italic; color: #2F348B; font-weight: 600;">Bedford Kindergarten</strong> is passionately committed to child safeguarding, personal attention, and inspiring every child to thrive with confidence.</p>
                                    <p class="mb-0"><strong style="font-family: 'Playfair Display', serif; font-size: 1.25rem; color: #2F348B; font-weight: 600;">"Nurture the Tiny Minds; Cherish the Future" — Together shaping a promising future.</strong></p>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="row mb-4 mt-5 pt-4">
                            <div class="col-md-10 mx-auto text-center" data-aos="fade-up">
                                <h3 style="color: #2F348B; font-size: 1.6rem; font-weight: 600; line-height: 1.5; font-family: 'Playfair Display', serif; font-style: italic; word-spacing: -2px;">What sets Bedford Kindergarten apart in Doha, Qatar:</h3>
                            </div>
                        </div>
                        
                        <div class="row g-4 px-lg-3 pb-2 mt-2 position-relative">
                            
                            <!-- Box 1 -->
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="about-box h-100 p-4 shadow-sm" style="background: rgba(47, 52, 139, 0.04); border: 1px solid rgba(47, 52, 139, 0.12); border-radius: 20px;">
                                    <i class="bi bi-patch-check mb-3 d-block" style="font-size: 2.2rem; color: #2F348B;"></i>
                                    <h5 class="fw-bold mb-3" style="color: #2F348B; font-size: 1.15rem; font-family: 'Playfair Display', serif;">British EYFS Framework</h5>
                                    <p class="text-dark mb-0" style="opacity: 0.85; font-size: 14px; line-height: 1.7; font-family: 'Montserrat', sans-serif; text-align: justify; word-spacing: -1px; hyphens: auto;">Structured across 7 prime and specific learning areas with 17 early learning goals tailored for early years excellence.</p>
                                </div>
                            </div>
                            
                            <!-- Box 2 -->
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="about-box h-100 p-4 shadow-sm" style="background: rgba(245, 159, 30, 0.05); border: 1px solid rgba(245, 159, 30, 0.18); border-radius: 20px;">
                                    <i class="bi bi-layers mb-3 d-block" style="font-size: 2.2rem; color: #F59F1E;"></i>
                                    <h5 class="fw-bold mb-3" style="color: #2F348B; font-size: 1.15rem; font-family: 'Playfair Display', serif;">Montessori Method</h5>
                                    <p class="text-dark mb-0" style="opacity: 0.85; font-size: 14px; line-height: 1.7; font-family: 'Montserrat', sans-serif; text-align: justify; word-spacing: -1px; hyphens: auto;">Hands-on, sensory-rich learning materials that empower children to discover, experiment, and develop independence.</p>
                                </div>
                            </div>
                            
                            <!-- Box 3 -->
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="about-box h-100 p-4 shadow-sm" style="background: rgba(47, 52, 139, 0.04); border: 1px solid rgba(47, 52, 139, 0.12); border-radius: 20px;">
                                    <i class="bi bi-house-heart mb-3 d-block" style="font-size: 2.2rem; color: #2F348B;"></i>
                                    <h5 class="fw-bold mb-3" style="color: #2F348B; font-size: 1.15rem; font-family: 'Playfair Display', serif;">Qatari Culture & Values</h5>
                                    <p class="text-dark mb-0" style="opacity: 0.85; font-size: 14px; line-height: 1.7; font-family: 'Montserrat', sans-serif; text-align: justify; word-spacing: -1px; hyphens: auto;">Dedicated Arabic language lessons, Islamic ethics, and cultural pride woven seamlessly into our everyday routine.</p>
                                </div>
                            </div>
                            
                            <!-- Box 4 -->
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="about-box h-100 p-4 shadow-sm" style="background: rgba(245, 159, 30, 0.05); border: 1px solid rgba(245, 159, 30, 0.18); border-radius: 20px;">
                                    <i class="bi bi-shield-check mb-3 d-block" style="font-size: 2.2rem; color: #F59F1E;"></i>
                                    <h5 class="fw-bold mb-3" style="color: #2F348B; font-size: 1.15rem; font-family: 'Playfair Display', serif;">Safe & Inspiring Campus</h5>
                                    <p class="text-dark mb-0" style="opacity: 0.85; font-size: 14px; line-height: 1.7; font-family: 'Montserrat', sans-serif; text-align: justify; word-spacing: -1px; hyphens: auto;">Strict child safeguarding, cyber safety protocols, full-time clinic, and qualified early childhood educators in Doha.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, and Philosophy Section in Bedford Theme -->
<section class="section-100 pb-5" style="background-color: #F8FAFC;">
    <div class="container">
        <div class="row g-5 position-relative">
            
            <!-- Realistic Fluttering Orange Butterfly near Mission -->
            <div class="aesthetic-icon" style="top: -30px; right: 5%; opacity: 0.95;  animation: float 5s ease-in-out infinite;">
                <svg class="colorful-butterfly" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="overflow: visible; transform: rotate(-15deg) scale(0.8);">
                  <defs>
                    <linearGradient id="wingGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#FFB347" />
                      <stop offset="60%" stop-color="#FF7B00" />
                      <stop offset="100%" stop-color="#CC4400" />
                    </linearGradient>
                    <linearGradient id="wingGradLower" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#FFD180" /> 
                      <stop offset="100%" stop-color="#FF8C00" />
                    </linearGradient>
                  </defs>
                  <!-- Left Wing -->
                  <g style="transform-origin: 50px 50px;">
                    <path d="M50 50 C 20 20, 5 25, 10 40 C 15 60, 40 60, 50 50" fill="url(#wingGrad)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>
                    <path d="M50 50 C 35 35, 20 35, 15 42" stroke="#222" stroke-width="1.5" fill="none"/>
                    <path d="M50 50 C 25 45, 15 50, 15 50" stroke="#222" stroke-width="1.5" fill="none"/>
                    <path d="M50 50 C 30 65, 20 85, 35 90 C 45 95, 50 70, 50 50" fill="url(#wingGradLower)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>
                    <path d="M50 50 C 40 70, 30 80, 28 85" stroke="#222" stroke-width="1.5" fill="none"/>
                    <circle cx="12" cy="40" r="1.5" fill="#FFF"/>
                    <circle cx="17" cy="53" r="1.5" fill="#FFF"/>
                    <circle cx="30" cy="86" r="1.5" fill="#FFF"/>
                    <circle cx="40" cy="89" r="1.5" fill="#FFF"/>
                  </g>
                  <!-- Right Wing -->
                  <g style="transform-origin: 50px 50px;">
                    <path d="M50 50 C 80 20, 95 25, 90 40 C 85 60, 60 60, 50 50" fill="url(#wingGrad)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>
                    <path d="M50 50 C 65 35, 80 35, 85 42" stroke="#222" stroke-width="1.5" fill="none"/>
                    <path d="M50 50 C 75 45, 85 50, 85 50" stroke="#222" stroke-width="1.5" fill="none"/>
                    <path d="M50 50 C 70 65, 80 85, 65 90 C 55 95, 50 70, 50 50" fill="url(#wingGradLower)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>
                    <path d="M50 50 C 60 70, 70 80, 72 85" stroke="#222" stroke-width="1.5" fill="none"/>
                    <circle cx="88" cy="40" r="1.5" fill="#FFF"/>
                    <circle cx="83" cy="53" r="1.5" fill="#FFF"/>
                    <circle cx="70" cy="86" r="1.5" fill="#FFF"/>
                    <circle cx="60" cy="89" r="1.5" fill="#FFF"/>
                  </g>
                  <!-- Body -->
                  <rect x="47" y="38" width="6" height="24" rx="3" fill="#333"/>
                  <circle cx="50" cy="35" r="4" fill="#333"/>
                  <!-- Antennae -->
                  <path d="M 48 33 Q 40 15, 36 20 M 52 33 Q 60 15, 64 20" stroke="#333" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Mission Section (Royal Indigo) -->
            <div class="col-md-12">
                <div class="about-box shadow-sm" style="background: linear-gradient(135deg, rgba(238, 242, 251, 0.9) 0%, #FFFFFF 100%); border: 1px solid rgba(47, 52, 139, 0.15); border-radius: 20px; padding: 50px;">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0" data-aos="fade-right">
                            <img src="{{ asset('Front/images/mi.jpeg') }}" alt="Mission" class="img-fluid rounded-circle shadow" style="width: 300px; height: 300px; object-fit: cover; border: 8px solid rgba(47, 52, 139, 0.2);">
                        </div>
                        <div class="col-md-7" data-aos="fade-left">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3 d-flex align-items-center justify-content-center shadow-sm" style="background: #2F348B; color: #ffffff; width: 60px; height: 60px; border-radius: 50%;">
                                    <i class="bi bi-bullseye" style="font-size: 28px;"></i>
                                </div>
                                <h2 class="mb-0 fw-bold" style="color: #2F348B; font-family: 'Playfair Display', serif;">Our Mission</h2>
                            </div>
                            
                            <h4 class="mb-3" style="color: #1E244B; font-weight: 500; font-family: 'Playfair Display', serif; font-style: italic;">Empowering Diverse Young Minds in a Safe & Inclusive World</h4>
                            
                            <p class="text-dark" style="font-size: 16px; line-height: 1.8; opacity: 0.85; color: #4A5568;">
                                Bedford will embolden our diverse student population with a safe, respectful, and inclusive environment that enables them to think critically, to grow intellectually, and to excel in our global society through a world-class learning experience.
                            </p>
                            <p class="text-dark mb-0" style="font-size: 16px; line-height: 1.8; opacity: 0.85; color: #4A5568;">
                                We strive to foster resilience, responsibility, cultural identity, and compassion—laying the ultimate foundation for a lifetime of academic and personal achievement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Section (Sunny Amber/Gold) -->
            <div class="col-md-12">
                <div class="about-box shadow-sm" style="background: linear-gradient(135deg, rgba(254, 248, 238, 0.9) 0%, #FFFFFF 100%); border: 1px solid rgba(245, 159, 30, 0.22); border-radius: 20px; padding: 50px;">
                    <div class="row align-items-center flex-column-reverse flex-md-row">
                        <div class="col-md-7" data-aos="fade-right">
                            <div class="d-flex align-items-center mb-3 position-relative">
                                <div class="icon-box me-3 d-flex align-items-center justify-content-center shadow-sm" style="background: #F59F1E; color: #ffffff; width: 60px; height: 60px; border-radius: 50%;">
                                    <i class="bi bi-eye" style="font-size: 28px;"></i>
                                </div>
                                <h2 class="mb-0 fw-bold" style="color: #F59F1E; font-family: 'Playfair Display', serif;">Our Vision</h2>
                            </div>
                            
                            <h4 class="mb-3" style="color: #1E244B; font-weight: 500; font-family: 'Playfair Display', serif; font-style: italic;">"Nurture the Tiny Minds; Cherish the Future"</h4>
                            
                            <p class="text-dark mb-0" style="font-size: 16px; line-height: 1.8; opacity: 0.85; color: #4A5568;">
                                Our vision is to create a nurturing environment where young minds are cherished, cultivated, and prepared for a promising future. We inspire every child to step forward with self-assurance, curiosity, and joy in their educational path.
                            </p>
                        </div>
                        <div class="col-md-5 text-center mb-4 mb-md-0" data-aos="fade-left">
                            <img src="{{ asset('Front/images/vis.jpeg') }}" alt="Vision" class="img-fluid rounded-circle shadow" style="width: 300px; height: 300px; object-fit: cover; border: 8px solid rgba(245, 159, 30, 0.25);">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core Values Section (Bedford Royal Indigo) -->
            <div class="col-md-12">
                <div class="about-box shadow-sm" style="background: linear-gradient(135deg, rgba(238, 242, 251, 0.9) 0%, #FFFFFF 100%); border: 1px solid rgba(47, 52, 139, 0.15); border-radius: 20px; padding: 50px;">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0" data-aos="fade-right">
                            <img src="{{ asset('Front/images/phis.jpeg') }}" alt="Philosophy" class="img-fluid rounded-circle shadow" style="width: 300px; height: 300px; object-fit: cover; border: 8px solid rgba(47, 52, 139, 0.2);">
                        </div>
                        <div class="col-md-7" data-aos="fade-left">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3 d-flex align-items-center justify-content-center shadow-sm" style="background: #2F348B; color: #ffffff; width: 60px; height: 60px; border-radius: 50%;">
                                    <i class="bi bi-lightbulb" style="font-size: 28px;"></i>
                                </div>
                                <h2 class="mb-0 fw-bold" style="color: #2F348B; font-family: 'Playfair Display', serif;">Our Core Values</h2>
                            </div>
                            
                            <h4 class="mb-3" style="color: #1E244B; font-weight: 500; font-family: 'Playfair Display', serif; font-style: italic;">Excellence, Integrity, Inclusivity & Joyful Discovery</h4>
                            
                            <p class="text-dark mb-0" style="font-size: 16px; line-height: 1.8; opacity: 0.85; color: #4A5568;">
                                At Bedford Kindergarten, we believe capability is uncovered when children are surrounded by encouragement and purposeful learning. Our educators guide each learner with warmth, curiosity, and individual attention, ensuring every child feels valued, capable, and excited to learn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="explore section-100 pb-0" style="background-color: #F8FAFC;">
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-md-12 text-center" data-aos="fade-left">
                <span class="sxt fw-bold text-uppercase tracking-wider" style="color: #F59F1E; font-family: 'Montserrat', sans-serif; letter-spacing: 3px;">Explore</span>
                <h1 class="mt-0 mb-4 fw-600" style="color: #2F348B; font-family: 'Playfair Display', serif; letter-spacing: 2px; text-transform: uppercase;">Gallery</h1>
            </div>
            <div class="col-md-12 text-center">
                <div class="row g-1">
                    @foreach ($galleries as $gallery)
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="hg-img efx mb-0" style="border-radius: 10px; overflow: hidden; border: 2px solid rgba(47, 52, 139, 0.1);">
                            <a href="{{ url('upload/' . $gallery->image) }}" data-fancybox="gallery-a" data-caption="{{ $gallery->title }}">
                                <img src="{{ url('upload/' . $gallery->image) }}" />
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="{{route('photo_gallery')}}" class="btn mt-4 mb-5" style="background: linear-gradient(135deg, #F59F1E 0%, #E28C0A 100%); color: #fff; border-radius: 30px; padding: 12px 30px; font-family: 'Montserrat', sans-serif; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; font-size: 0.85rem; box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35);">View All Photos</a>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
