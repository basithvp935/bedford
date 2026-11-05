@section('title', 'Careers - Bedford Kindergarten Qatar | Doha')
@section('description', 'Join the Bedford Kindergarten Qatar team in Barwa Madinatna, Doha! Explore rewarding early childhood education career opportunities.')
@section('career', 'active')
@include('front.layouts.header')

<style>
    /* ==========================================
       UNIFIED PREMIUM MONTESSORI STYLING 
       ========================================== */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        color: #4A4A4A;
        background-color: #F7F5F0; /* Soft warm cream background */
    }

    h1, h2, h3, h4, h5, h6, .main-title {
        font-family: 'Playfair Display', serif;
        color: #3C4A3E; /* Dark Olive/Charcoal */
    }

    /* Page Specific Styles */
    .career-page {
        font-family: 'Montserrat', sans-serif;
        color: #4A4A4A;
        background-color: #F7F5F0;
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
    .career-banner {
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
        background: rgba(0, 0, 0, 0.35); 
        z-index: 1;
    }

    .banner-text {
        position: relative;
        z-index: 2;
        text-align: center;
        width: 100%;
        padding-bottom: 20px;
    }

    .main-title {
        font-family: 'Playfair Display', serif; 
        color: #ffffff;
        font-size: 4.5rem; 
        font-weight: 500;
        margin: 0;
        text-shadow: 0px 4px 15px rgba(0,0,0,0.4);
    }

    /* ==========================================
       VACANCIES SECTION
       ========================================== */
    .career-content-section {
        padding: 5rem 0 7rem 0; 
        background-color: #F7F5F0;
    }

    /* Premium Earthy Vacancy Cards */
    .vacancy-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid rgba(168, 159, 145, 0.2); /* Taupe border */
        padding: 2.5rem; 
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    }

    .vacancy-card:hover {
        box-shadow: 0 15px 35px rgba(155, 106, 171, 0.1); /* Changed to Purple glow */
        transform: translateY(-5px);
        border-color: rgba(155, 106, 171, 0.4); /* Changed to Purple border hover */
    }

    /* Side Accent Line */
    .vacancy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        background: linear-gradient(180deg, #2F348B, #F59F1E); /* Bedford gradient */
        height: 100%;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .vacancy-card:hover::before {
        opacity: 1;
    }

    .job-title {
        font-size: 1.6rem; 
        font-weight: 600;
        color: #1E244B;
        margin-bottom: 0.5rem;
        font-family: 'Playfair Display', serif;
    }

    .job-meta {
        display: flex;
        gap: 15px;
        margin-bottom: 1.2rem;
        font-size: 0.9rem;
        color: #64748B;
        font-weight: 500;
        flex-wrap: wrap;
        font-family: 'Montserrat', sans-serif;
    }

    .job-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .job-desc {
        color: #4A5568;
        font-size: 1rem;
        line-height: 1.8;
        margin-bottom: 1.5rem;
        flex-grow: 1;
        font-family: 'Montserrat', sans-serif;
    }

    .btn-apply {
        display: inline-block;
        background: transparent;
        color: #2F348B;
        border: 2px solid #2F348B;
        padding: 12px 30px; 
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        text-align: center;
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
    }

    .vacancy-card:hover .btn-apply {
        background: #2F348B;
        color: #fff;
        box-shadow: 0 4px 15px rgba(47, 52, 139, 0.35);
    }

    /* Empty State */
    .empty-state {
        background-color: #ffffff;
        border: 2px dashed rgba(168, 159, 145, 0.4); /* Taupe dashed border */
        border-radius: 24px;
        padding: 3.5rem 3rem; 
        width: 100%;
        margin: 0 auto;
        box-shadow: 0 10px 40px rgba(0,0,0,0.03);
        position: relative;
    }

    .empty-state-img {
        width: 100%;
        height: 100%;
        min-height: 260px;
        object-fit: cover;
        border-radius: 16px;
        border: 4px solid #ffffff;
        box-shadow: 0 8px 25px rgba(0,0,0,0.06);
    }

    .empty-state-title {
        color: #9B6AAB; /* Changed to Purple */
        font-weight: 600;
        font-size: 2.2rem;
        margin-bottom: 1.2rem;
        line-height: 1.4;
        font-family: 'Playfair Display', serif;
        font-style: italic;
    }

    .empty-state-text {
        color: #4A4A4A;
        font-size: 1.05rem; 
        line-height: 1.8;
        font-family: 'Montserrat', sans-serif;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .career-banner { height: 300px; }
        .main-title { font-size: 2.5rem; } 
        .career-content-section { padding: 4rem 0; }
        .empty-state { padding: 2.5rem; }
    }
</style>

<div class="career-page">
    
    <!-- Hero Banner with Bottom Wave & Clouds -->
    <section class="career-banner" style="background: url('{{ asset('Front/images/brightban.jpg') }}') center top / cover no-repeat;">
        <div class="banner-overlay"></div>
        
        <!-- Watercolor Cloud 1 -->
        <div class="aesthetic-icon" style="top: 5%; left: 8%; opacity: 0.85;">
            <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="carCloud1" x1="0%" y1="0%" x2="0%" y2="100%">
                  <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9"/>
                  <stop offset="100%" stop-color="#E8E5DC" stop-opacity="0.9"/>
                </linearGradient>
              </defs>
              <path d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z" fill="url(#carCloud1)"/>
            </svg>
        </div>

        <!-- Watercolor Cloud 2 -->
        <div class="aesthetic-icon" style="top: 20%; right: 5%; opacity: 0.7; transform: scale(0.8);">
            <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="carCloud2" x1="0%" y1="0%" x2="0%" y2="100%">
                  <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9"/>
                  <stop offset="100%" stop-color="#E8E5DC" stop-opacity="0.9"/>
                </linearGradient>
              </defs>
              <path d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z" fill="url(#carCloud2)"/>
            </svg>
        </div>

        <div class="banner-text">
            <h1 class="main-title">Careers</h1>
        </div>

        <!-- Wavy Bottom Shape Divider -->
        <div style="position: absolute; bottom: -2px; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 3;">
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="display: block; width: 100%; height: 60px; fill: #F7F5F0;">
                <path d="M0,40 C320,100 820,0 1440,60 L1440,100 L0,100 Z" />
            </svg>
        </div>
    </section>

    <!-- Vacancies Section (Centered) -->
    <section class="career-content-section">
        <div class="container position-relative">
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    @if(isset($vacancies) && count($vacancies) > 0)
                        <!-- Styled Header for Current Openings -->
                        <div class="position-relative text-center mb-5">
                            <!-- Beautiful Watercolor Butterfly -->
                            <div class="aesthetic-icon" style="top: -30px; right: 25%; opacity: 0.95; z-index: 2; animation: float 5s ease-in-out infinite;">
                                <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(15deg);">
                                  <defs>
                                    <linearGradient id="blushWing" x1="0%" y1="0%" x2="100%" y2="100%">
                                      <stop offset="0%" stop-color="#E8DCD1"/>
                                      <stop offset="100%" stop-color="#C1AD9D"/>
                                    </linearGradient>
                                  </defs>
                                  <path d="M48,50 C30,10 5,20 40,48 Z" fill="url(#blushWing)" opacity="0.9"/>
                                  <path d="M48,52 C20,85 10,70 42,55 Z" fill="url(#blushWing)" opacity="0.85"/>
                                  <path d="M52,50 C70,10 95,20 60,48 Z" fill="url(#blushWing)" opacity="0.9"/>
                                  <path d="M52,52 C80,85 90,70 58,55 Z" fill="url(#blushWing)" opacity="0.85"/>
                                  <path d="M48,45 C48,40 52,40 52,45 L51,60 C51,65 49,65 49,60 Z" fill="#7C6B61"/>
                                  <path d="M48,42 Q40,30 45,25 M52,42 Q60,30 55,25" stroke="#7C6B61" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                                  <circle cx="22" cy="32" r="3" fill="#FFFFFF" opacity="0.4"/>
                                  <circle cx="78" cy="32" r="3" fill="#FFFFFF" opacity="0.4"/>
                                  <circle cx="27" cy="70" r="2.5" fill="#FFFFFF" opacity="0.4"/>
                                  <circle cx="73" cy="70" r="2.5" fill="#FFFFFF" opacity="0.4"/>
                                </svg>
                            </div>
                            
                            <span class="text-uppercase fw-bold" style="color: #A89F91; letter-spacing: 3px; font-family: 'Montserrat', sans-serif;">Join Our Team</span>
                            <h2 class="pb-2 mt-2" style="font-family: 'Great Vibes', cursive; color: #9B6AAB; font-size: 4rem; font-weight: 400; line-height: 1.2;">Current Openings.</h2>
                            <div style="width: 80px; height: 3px; background: linear-gradient(to right, #7A8B6F, #D4C5B9); margin: 0 auto; border-radius: 2px;"></div>
                        </div>
                        
                        <!-- Active Vacancies -->
                        <div class="row g-4">
                            @foreach($vacancies as $vacancy)
                                <div class="col-12" data-aos="fade-up">
                                    <div class="vacancy-card">
                                        <h3 class="job-title">{{ $vacancy->title }}</h3>
                                        <div class="job-meta">
                                            <span>
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                {{ $vacancy->location }}
                                            </span>
                                            <span>
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                {{ $vacancy->job_type }}
                                            </span>
                                        </div>
                                        <p class="job-desc">
                                            {{ Str::limit($vacancy->description, 120) }}
                                        </p>
                                        <div class="mt-auto pt-3">
                                            <a href="{{ route('career.apply', $vacancy->id) }}" class="btn-apply">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    @else
                        <!-- No Openings State with Montessori Icons -->
                        <div class="empty-state" data-aos="fade-up">
                            
                            <!-- Cute Sitting Bunny resting on the box -->
                            <div class="aesthetic-icon" style="top: -65px; left: 40px; opacity: 0.95; z-index: 2;">
                                <svg width="110" height="110" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                  <defs>
                                    <radialGradient id="bunnyG" cx="40%" cy="30%" r="70%">
                                      <stop offset="0%" stop-color="#F2EEE6"/>
                                      <stop offset="70%" stop-color="#DBCDBF"/>
                                      <stop offset="100%" stop-color="#BEB4A6"/>
                                    </radialGradient>
                                  </defs>
                                  <path d="M60,45 Q50,15 55,10 Q65,25 65,45" fill="#BEB4A6"/>
                                  <circle cx="20" cy="80" r="8" fill="#FFFFFF" opacity="0.9"/>
                                  <path d="M35,65 C25,65 20,85 35,95 C55,100 75,95 75,75 C75,55 55,50 35,65 Z" fill="url(#bunnyG)"/>
                                  <path d="M55,45 C75,40 85,55 80,70 C70,75 55,75 45,60 C40,50 45,45 55,45 Z" fill="url(#bunnyG)"/>
                                  <path d="M62,45 Q55,10 63,5 Q73,20 68,45" fill="url(#bunnyG)"/>
                                  <circle cx="72" cy="55" r="2" fill="#4A4A4A"/>
                                  <circle cx="83" cy="64" r="1.5" fill="#8B7E74"/>
                                  <path d="M60,80 Q60,95 65,95 Q70,95 70,85" stroke="#BEB4A6" stroke-width="4" stroke-linecap="round" fill="none"/>
                                </svg>
                            </div>

                            <!-- Stacking blocks resting on the right side -->
                            <div class="aesthetic-icon" style="bottom: -10px; right: -30px; opacity: 0.95; z-index: 2;">
                                <svg width="80" height="100" viewBox="0 0 100 130" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M20,110 L50,125 L80,110 L80,80 L50,95 L20,80 Z" fill="#8F9E85"/>
                                  <path d="M20,80 L50,95 L80,80 L50,65 Z" fill="#A9B89D"/>
                                  <path d="M20,80 L50,95 L50,125 L20,110 Z" fill="#7A8B6F"/>
                                  <path d="M30,80 L50,90 L70,80 L70,55 L50,65 L30,55 Z" fill="#D4C5B9"/>
                                  <path d="M30,55 L50,65 L70,55 L50,45 Z" fill="#E8DCD1"/>
                                  <path d="M30,55 L50,65 L50,90 L30,80 Z" fill="#C1AD9D"/>
                                  <path d="M35,55 L50,62 L65,55 L65,35 L50,42 L35,35 Z" fill="#E8E5DC"/>
                                  <path d="M35,35 L50,42 L65,35 L50,28 Z" fill="#F7F5F0"/>
                                  <path d="M35,35 L50,42 L50,62 L35,55 Z" fill="#D4C5B9"/>
                                </svg>
                            </div>

                            <div class="row align-items-center text-center text-md-start">
                                <!-- Left Side: Image (Proportioned to match reference) -->
                                <div class="col-md-5 mb-4 mb-md-0 position-relative">
                                    <img src="{{ asset('Front/images/careers1.jpeg') }}" class="empty-state-img" alt="Careers">
                                </div>
                                
                                <!-- Right Side: Content -->
                                <div class="col-md-7 ps-md-5">
                                    <h3 class="empty-state-title">No new openings at Bedford Kindergarten right now.</h3>
                                    <p class="empty-state-text mb-0">
                                        We are not actively hiring at the moment. However, we are always happy to connect with passionate early childhood educators! Feel free to send your resume to <a href="mailto:school@bedfordqatar.com" style="color: #2F348B; font-weight: 600; text-decoration: underline;">school@bedfordqatar.com</a> for future opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </section>

</div>

@include('front.layouts.footer')
