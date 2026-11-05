@section('title', 'Our Facilities & Campus - Bedford Kindergarten Qatar | Doha')
@section('description', 'Explore the world-class campus and learning environments at Bedford Kindergarten Qatar in Barwa Madinatna, Doha.')
@section('environment', 'active')
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

    p {
        text-align: justify;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .banner-title {
        font-family: 'Playfair Display', serif;
        color: #2F348B;
    }

    /* Floating Icons & Animations */
    .aesthetic-icon {
        position: absolute;
        z-index: 0;
        opacity: 0.9;
        pointer-events: none;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    /* Premium Sage Shade Image Effect (Carried over from About Us) */
    .image-sage-shade {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        border: 4px solid #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        display: inline-block;
        width: 100%;
        cursor: pointer;
    }

    .image-sage-shade img {
        display: block;
        width: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .image-sage-shade::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(122, 139, 111, 0.2);
        pointer-events: none;
        transition: all 0.4s ease;
    }

    .image-sage-shade:hover img {
        transform: scale(1.03);
    }

    .image-sage-shade:hover::after {
        background-color: rgba(122, 139, 111, 0.05);
    }

    /* ==========================================
       HERO BANNER (Consistent with About Us)
       ========================================== */
    .environment-banner {
        position: relative;
        width: 100vw;
        margin-left: calc(-50vw + 50%);
        max-width: 100vw;
        height: 480px;
        min-height: 480px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background-size: cover;
        background-position: center 25%;
        background-repeat: no-repeat;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.15) 50%, rgba(0, 0, 0, 0.45) 100%);
        z-index: 1;
    }

    .banner-text {
        position: relative;
        z-index: 2;
        text-align: center;
        width: 100%;
        padding-top: 30px;
        padding-bottom: 20px;
    }

    .banner-title {
        font-family: 'Playfair Display', serif;
        color: #ffffff;
        font-size: 4.2rem;
        font-weight: 500;
        margin: 0;
        text-shadow: 0px 4px 20px rgba(0, 0, 0, 0.5);
    }

    @media (max-width: 768px) {
        .banner-title {
            font-size: 2.4rem;
        }

        .environment-banner {
            height: 320px;
            min-height: 320px;
            background-position: center center;
        }

        .banner-text {
            padding-top: 20px;
            padding-bottom: 10px;
        }
    }

    /* ==========================================
       LEARNING AREA CARDS - EARTHY THEME
       ========================================== */
    .learning-card {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        background: #000;
        border: 2px solid transparent;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        cursor: pointer;
        padding: 0;
        height: 320px;
        display: block;
        font-family: 'Montserrat', sans-serif;
    }

    .learning-card .img-wrapper {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
    }

    .learning-card .img-wrapper::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        transition: all 0.4s ease;
        z-index: 1;
    }

    .learning-card .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .learning-card .title-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: transparent;
        color: #ffffff;
        padding: 0;
        font-family: 'Playfair Display', serif;
        font-weight: 500;
        font-size: 2.2rem;
        font-style: italic;
        z-index: 3;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        margin: 0;
        width: 100%;
        text-align: center;
        letter-spacing: 1px;
    }

    .learning-card .card-content-wrapper {
        position: absolute;
        inset: 0;
        padding: 2rem 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        text-align: center;
        z-index: 4;
        pointer-events: none;
        background: transparent;
    }

    .learning-card p {
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px);
        margin: 0;
        color: #ffffff;
        font-size: 0.95rem;
        font-weight: 400;
        line-height: 1.6;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    /* Hover & Mobile Active Effects */
    .learning-card:hover,
    .learning-card:focus-within,
    .learning-card:active {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .learning-card:hover .card-img-top,
    .learning-card:focus-within .card-img-top,
    .learning-card:active .card-img-top {
        transform: scale(1.1);
    }

    .learning-card:hover .img-wrapper::after,
    .learning-card:focus-within .img-wrapper::after,
    .learning-card:active .img-wrapper::after {
        background: rgba(0, 0, 0, 0.75);
    }

    .learning-card:hover .title-overlay,
    .learning-card:focus-within .title-overlay,
    .learning-card:active .title-overlay {
        top: 15%;
        transform: translate(-50%, -50%) scale(0.95);
        text-shadow: 0 6px 20px rgba(0, 0, 0, 0.8);
    }

    .learning-card:hover p,
    .learning-card:focus-within p,
    .learning-card:active p {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Earthy Color borders for cards (Replaces Bright Colors) */
    .card-sage {
        border-color: rgba(122, 139, 111, 0);
    }

    .card-sage:hover,
    .card-sage:focus-within {
        border-color: #7A8B6F;
        box-shadow: 0 15px 35px rgba(122, 139, 111, 0.3);
    }

    .card-taupe {
        border-color: rgba(168, 159, 145, 0);
    }

    .card-taupe:hover,
    .card-taupe:focus-within {
        border-color: #A89F91;
        box-shadow: 0 15px 35px rgba(168, 159, 145, 0.3);
    }

    .card-blush {
        border-color: rgba(193, 173, 157, 0);
    }

    .card-blush:hover,
    .card-blush:focus-within {
        border-color: #C1AD9D;
        box-shadow: 0 15px 35px rgba(193, 173, 157, 0.3);
    }

    .card-olive {
        border-color: rgba(90, 107, 79, 0);
    }

    .card-olive:hover,
    .card-olive:focus-within {
        border-color: #5A6B4F;
        box-shadow: 0 15px 35px rgba(90, 107, 79, 0.3);
    }

    .card-terracotta {
        border-color: rgba(139, 126, 116, 0);
    }

    .card-terracotta:hover,
    .card-terracotta:focus-within {
        border-color: #8B7E74;
        box-shadow: 0 15px 35px rgba(139, 126, 116, 0.3);
    }

    @media (max-width: 768px) {
        .learning-card::after {
            content: "Tap to view";
            position: absolute;
            bottom: 10px;
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.8);
            opacity: 1;
            transition: opacity 0.3s ease;
            text-align: center;
            width: 100%;
            z-index: 10;
        }

        .learning-card:hover::after,
        .learning-card:focus-within::after,
        .learning-card:active::after {
            opacity: 0;
        }
    }

    /* Refined Bedford Button */
    .btn-admission {
        background: #F59F1E;
        color: #ffffff !important;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 15px 45px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        text-decoration: none;
        border: none;
        box-shadow: 0 8px 20px rgba(245, 159, 30, 0.35);
        transition: all 0.3s ease;
    }

    .btn-admission:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(245, 159, 30, 0.45);
        background: #E28C0A;
    }
</style>

<div class="environment-page-wrapper">

    <!-- HERO BANNER with Bottom Wave & Clouds -->
    <section class="environment-banner"
        style="background: url('{{ asset('Front/images/brightbann.jpeg') }}') center 25% / cover no-repeat;">
        <div class="banner-overlay"></div>
        <div class="container position-relative h-100 d-flex align-items-center justify-content-center"
            style="z-index: 2;">
            <!-- Watercolor Cloud 1 (Anchored to Container) -->
            <div class="aesthetic-icon" style="top: 10%; left: 10px; opacity: 0.85;">
                <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="envCloud1" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9" />
                            <stop offset="100%" stop-color="#E8E5DC" stop-opacity="0.9" />
                        </linearGradient>
                    </defs>
                    <path
                        d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z"
                        fill="url(#envCloud1)" />
                </svg>
            </div>

            <!-- Watercolor Cloud 2 (Anchored to Container) -->
            <div class="aesthetic-icon" style="top: 20%; right: 10px; opacity: 0.7; transform: scale(0.8);">
                <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="envCloud2" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9" />
                            <stop offset="100%" stop-color="#E8E5DC" stop-opacity="0.9" />
                        </linearGradient>
                    </defs>
                    <path
                        d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z"
                        fill="url(#envCloud2)" />
                </svg>
            </div>

            <div class="banner-text">
                <h1 class="banner-title">Our Environments</h1>
            </div>
        </div>

        <!-- Wavy Bottom Shape Divider -->
        <div
            style="position: absolute; bottom: -2px; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 3;">
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none"
                style="display: block; width: 100%; height: 60px; fill: #F8FAFC;">
                <path d="M0,40 C320,100 820,0 1440,60 L1440,100 L0,100 Z" />
            </svg>
        </div>
    </section>

    <section class="environment-page py-5" style="background-color: #F8FAFC;">
        <div class="container position-relative">



            <!-- Hero Section -->
            @foreach ($facilities as $g_index => $facility)
                @if($g_index % 2 == 0)
                    <div class="row mb-5 pb-4 mt-4 align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0 px-lg-4" data-aos="fade-right">
                            <div class="position-relative">
                                <!-- Realistic Fluttering Orange Butterfly placed specifically above the heading -->
                                <div class="aesthetic-icon"
                                    style="top: -65px; left: 10px; opacity: 0.95; z-index: 2; pointer-events: none; animation: float 5s ease-in-out infinite;">
                                    <svg class="colorful-butterfly" width="100" height="100" viewBox="0 0 100 100" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="overflow: visible; transform: rotate(-15deg) scale(0.75);">
                                        <defs>
                                            <linearGradient id="wingGradLab" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" stop-color="#FFB347" />
                                                <stop offset="60%" stop-color="#FF7B00" />
                                                <stop offset="100%" stop-color="#CC4400" />
                                            </linearGradient>
                                            <linearGradient id="wingGradLowerLab" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" stop-color="#FFD180" />
                                                <stop offset="100%" stop-color="#FF8C00" />
                                            </linearGradient>
                                        </defs>
                                        <!-- Left Wing -->
                                        <g style="transform-origin: 50px 50px;">
                                            <!-- Upper -->
                                            <path d="M50 50 C 20 20, 5 25, 10 40 C 15 60, 40 60, 50 50" fill="url(#wingGradLab)"
                                                stroke="#222" stroke-width="3" stroke-linejoin="round" />
                                            <path d="M50 50 C 35 35, 20 35, 15 42" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <path d="M50 50 C 25 45, 15 50, 15 50" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <!-- Lower -->
                                            <path d="M50 50 C 30 65, 20 85, 35 90 C 45 95, 50 70, 50 50"
                                                fill="url(#wingGradLowerLab)" stroke="#222" stroke-width="3"
                                                stroke-linejoin="round" />
                                            <path d="M50 50 C 40 70, 30 80, 28 85" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <!-- Edge Dots -->
                                            <circle cx="12" cy="40" r="1.5" fill="#FFF" />
                                            <circle cx="17" cy="53" r="1.5" fill="#FFF" />
                                            <circle cx="30" cy="86" r="1.5" fill="#FFF" />
                                            <circle cx="40" cy="89" r="1.5" fill="#FFF" />
                                        </g>
                                        <!-- Right Wing -->
                                        <g style="transform-origin: 50px 50px;">
                                            <!-- Upper -->
                                            <path d="M50 50 C 80 20, 95 25, 90 40 C 85 60, 60 60, 50 50"
                                                fill="url(#wingGradLab)" stroke="#222" stroke-width="3"
                                                stroke-linejoin="round" />
                                            <path d="M50 50 C 65 35, 80 35, 85 42" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <path d="M50 50 C 75 45, 85 50, 85 50" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <!-- Lower -->
                                            <path d="M50 50 C 70 65, 80 85, 65 90 C 55 95, 50 70, 50 50"
                                                fill="url(#wingGradLowerLab)" stroke="#222" stroke-width="3"
                                                stroke-linejoin="round" />
                                            <path d="M50 50 C 60 70, 70 80, 72 85" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <!-- Edge Dots -->
                                            <circle cx="88" cy="40" r="1.5" fill="#FFF" />
                                            <circle cx="83" cy="53" r="1.5" fill="#FFF" />
                                            <circle cx="70" cy="86" r="1.5" fill="#FFF" />
                                            <circle cx="60" cy="89" r="1.5" fill="#FFF" />
                                        </g>
                                        <!-- Body -->
                                        <rect x="47" y="38" width="6" height="24" rx="3" fill="#333" />
                                        <circle cx="50" cy="35" r="4" fill="#333" />
                                        <!-- Antennae -->
                                        <path d="M 48 33 Q 40 15, 36 20 M 52 33 Q 60 15, 64 20" stroke="#333" stroke-width="1.5"
                                            fill="none" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h2 class="pb-2 mt-2"
                                    style="font-family: 'Great Vibes', cursive; color: #2F348B; font-size: 3.8rem; font-weight: 400; line-height: 1.2;">
                                    {{ $facility->title ?? $facility->name ?? '' }}</h2>
                            </div>
                            <div
                                style="width: 80px; height: 3px; background: linear-gradient(to right, #2F348B, #F59F1E); margin: 0 0 1.5rem 0; border-radius: 2px;">
                            </div>

                            <p style="color: #4A5568; font-size: 1.15rem; line-height: 1.8;">
                                {!!$facility->content!!}
                            </p>

                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="image-sage-shade w-100">
                                <img src="{{ url('upload/' . $facility->img) }}" class="img-fluid w-100"
                                    alt="{{ $facility->title ?? $facility->name ?? '' }}">
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row mb-5 pb-4 mt-5 align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                            <div class="image-sage-shade w-100">
                                <img src="{{ url('upload/' . $facility->img) }}" class="img-fluid w-100"
                                    alt="{{ $facility->title ?? $facility->name ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6 px-lg-4" data-aos="fade-left">
                            <div class="position-relative">
                                <!-- Realistic Fluttering Orange Butterfly -->
                                <div class="aesthetic-icon"
                                    style="top: -65px; left: 10px; opacity: 0.95; z-index: 2; pointer-events: none; animation: float 5s ease-in-out infinite;">
                                    <svg class="colorful-butterfly" width="100" height="100" viewBox="0 0 100 100" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="overflow: visible; transform: rotate(-15deg) scale(0.75);">
                                        <defs>
                                            <linearGradient id="wingGradEnh" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" stop-color="#2F348B" />
                                                <stop offset="60%" stop-color="#484EB8" />
                                                <stop offset="100%" stop-color="#1E2260" />
                                            </linearGradient>
                                            <linearGradient id="wingGradLowerEnh" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" stop-color="#F59F1E" />
                                                <stop offset="100%" stop-color="#FFB834" />
                                            </linearGradient>
                                        </defs>
                                        <g style="transform-origin: 50px 50px;">
                                            <path d="M50 50 C 20 20, 5 25, 10 40 C 15 60, 40 60, 50 50" fill="url(#wingGradEnh)"
                                                stroke="#222" stroke-width="3" stroke-linejoin="round" />
                                            <path d="M50 50 C 35 35, 20 35, 15 42" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <path d="M50 50 C 25 45, 15 50, 15 50" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <path d="M50 50 C 30 65, 20 85, 35 90 C 45 95, 50 70, 50 50"
                                                fill="url(#wingGradLowerEnh)" stroke="#222" stroke-width="3"
                                                stroke-linejoin="round" />
                                            <path d="M50 50 C 40 70, 30 80, 28 85" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <circle cx="12" cy="40" r="1.5" fill="#FFF" />
                                            <circle cx="17" cy="53" r="1.5" fill="#FFF" />
                                            <circle cx="30" cy="86" r="1.5" fill="#FFF" />
                                            <circle cx="40" cy="89" r="1.5" fill="#FFF" />
                                        </g>
                                        <g style="transform-origin: 50px 50px;">
                                            <path d="M50 50 C 80 20, 95 25, 90 40 C 85 60, 60 60, 50 50"
                                                fill="url(#wingGradEnh)" stroke="#222" stroke-width="3"
                                                stroke-linejoin="round" />
                                            <path d="M50 50 C 65 35, 80 35, 85 42" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <path d="M50 50 C 75 45, 85 50, 85 50" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <path d="M50 50 C 70 65, 80 85, 65 90 C 55 95, 50 70, 50 50"
                                                fill="url(#wingGradLowerEnh)" stroke="#222" stroke-width="3"
                                                stroke-linejoin="round" />
                                            <path d="M50 50 C 60 70, 70 80, 72 85" stroke="#222" stroke-width="1.5"
                                                fill="none" />
                                            <circle cx="88" cy="40" r="1.5" fill="#FFF" />
                                            <circle cx="83" cy="53" r="1.5" fill="#FFF" />
                                            <circle cx="70" cy="86" r="1.5" fill="#FFF" />
                                            <circle cx="60" cy="89" r="1.5" fill="#FFF" />
                                        </g>
                                        <rect x="47" y="38" width="6" height="24" rx="3" fill="#333" />
                                        <circle cx="50" cy="35" r="4" fill="#333" />
                                        <path d="M 48 33 Q 40 15, 36 20 M 52 33 Q 60 15, 64 20" stroke="#333" stroke-width="1.5"
                                            fill="none" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h2 class="pb-2 mt-2"
                                    style="font-family: 'Great Vibes', cursive; color: #2F348B; font-size: 3.8rem; font-weight: 400; line-height: 1.2;">
                                    {{ $facility->title ?? $facility->name ?? '' }}</h2>
                            </div>
                            <div
                                style="width: 80px; height: 3px; background: linear-gradient(to right, #2F348B, #F59F1E); margin: 0 0 1.5rem 0; border-radius: 2px;">
                            </div>

                            <p style="color: #4A4A4A; font-size: 1.15rem; line-height: 1.8;">
                                {!!$facility->content!!}
                            </p>

                        </div>
                    </div>
                @endif
            @endforeach

            <!-- Enhancement Area Section -->
            <!--<div class="row mb-5 pb-4 mt-5 align-items-center">-->
            <!--    <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">-->
            <!--        <div class="image-sage-shade w-100">-->
            <!--            <img src="{{ asset('Front/images/env.jpeg') }}" class="img-fluid w-100" alt="Enhancement Area">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-6 px-lg-4" data-aos="fade-left">-->
            <!--        <div class="position-relative">-->
            <!-- Realistic Fluttering Orange Butterfly -->
            <!--            <div class="aesthetic-icon" style="top: -65px; left: 10px; opacity: 0.95; z-index: 2; pointer-events: none; animation: float 5s ease-in-out infinite;">-->
            <!--                <svg class="colorful-butterfly" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="overflow: visible; transform: rotate(-15deg) scale(0.75);">-->
            <!--                  <defs>-->
            <!--                    <linearGradient id="wingGradEnh" x1="0%" y1="0%" x2="100%" y2="100%">-->
            <!--                      <stop offset="0%" stop-color="#DDA0DD" />-->
            <!--                      <stop offset="60%" stop-color="#9932CC" />-->
            <!--                      <stop offset="100%" stop-color="#4B0082" />-->
            <!--                    </linearGradient>-->
            <!--                    <linearGradient id="wingGradLowerEnh" x1="0%" y1="0%" x2="100%" y2="100%">-->
            <!--                      <stop offset="0%" stop-color="#E6E6FA" /> -->
            <!--                      <stop offset="100%" stop-color="#8A2BE2" />-->
            <!--                    </linearGradient>-->
            <!--                  </defs>-->
            <!--                  <g style="transform-origin: 50px 50px;">-->
            <!--                    <path d="M50 50 C 20 20, 5 25, 10 40 C 15 60, 40 60, 50 50" fill="url(#wingGradEnh)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 35 35, 20 35, 15 42" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 25 45, 15 50, 15 50" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 30 65, 20 85, 35 90 C 45 95, 50 70, 50 50" fill="url(#wingGradLowerEnh)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 40 70, 30 80, 28 85" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <circle cx="12" cy="40" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="17" cy="53" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="30" cy="86" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="40" cy="89" r="1.5" fill="#FFF"/>-->
            <!--                  </g>-->
            <!--                  <g style="transform-origin: 50px 50px;">-->
            <!--                    <path d="M50 50 C 80 20, 95 25, 90 40 C 85 60, 60 60, 50 50" fill="url(#wingGradEnh)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 65 35, 80 35, 85 42" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 75 45, 85 50, 85 50" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 70 65, 80 85, 65 90 C 55 95, 50 70, 50 50" fill="url(#wingGradLowerEnh)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 60 70, 70 80, 72 85" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <circle cx="88" cy="40" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="83" cy="53" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="70" cy="86" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="60" cy="89" r="1.5" fill="#FFF"/>-->
            <!--                  </g>-->
            <!--                  <rect x="47" y="38" width="6" height="24" rx="3" fill="#333"/>-->
            <!--                  <circle cx="50" cy="35" r="4" fill="#333"/>-->
            <!--                  <path d="M 48 33 Q 40 15, 36 20 M 52 33 Q 60 15, 64 20" stroke="#333" stroke-width="1.5" fill="none" stroke-linecap="round"/>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--            <h2 class="pb-2 mt-2" style="font-family: 'Great Vibes', cursive; color: #9B6AAB; font-size: 3.8rem; font-weight: 400; line-height: 1.2;">Enhancement Area.</h2>-->
            <!--        </div>-->
            <!--        <div style="width: 80px; height: 3px; background: linear-gradient(to right, #7A8B6F, #D4C5B9); margin: 0 0 1.5rem 0; border-radius: 2px;"></div>-->

            <!--        <p style="color: #4A4A4A; font-size: 1.15rem; line-height: 1.8;">-->
            <!--           Our Enhancement Area is where imagination, creativity, and exploration come to life. From our cozy Home Corner and imaginative Dress-Up Corner to Construction, Tuff Tray, and Small World play — every corner is designed to spark creativity, build social skills, and let children lead their own learning. Because the best ideas are born when children are given the space, the freedom, and the invitation to simply play.-->
            <!--        </p>-->
            <!--        <p style="color: #7A8B6F; font-size: 1.15rem; line-height: 1.8; font-weight: 500; font-style: italic; margin-top: 1rem;">-->
            <!--             "The play is the work of the child." — Maria Montessori-->
            <!--        </p>-->
            <!--    </div>-->
            <!--</div>-->

            <!-- Outdoor Play Zone Section -->
            <!--<div class="row mb-5 pb-4 mt-5 align-items-center">-->
            <!--    <div class="col-md-6 px-lg-4 mb-4 mb-md-0" data-aos="fade-right">-->
            <!--        <div class="position-relative">-->
            <!-- Realistic Fluttering Orange Butterfly -->
            <!--            <div class="aesthetic-icon" style="top: -65px; left: 10px; opacity: 0.95; z-index: 2; pointer-events: none; animation: float 5s ease-in-out infinite;">-->
            <!--                <svg class="colorful-butterfly" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="overflow: visible; transform: rotate(-15deg) scale(0.75);">-->
            <!--                  <defs>-->
            <!--                    <linearGradient id="wingGradOut" x1="0%" y1="0%" x2="100%" y2="100%">-->
            <!--                      <stop offset="0%" stop-color="#FFB6C1" />-->
            <!--                      <stop offset="60%" stop-color="#FF69B4" />-->
            <!--                      <stop offset="100%" stop-color="#C71585" />-->
            <!--                    </linearGradient>-->
            <!--                    <linearGradient id="wingGradLowerOut" x1="0%" y1="0%" x2="100%" y2="100%">-->
            <!--                      <stop offset="0%" stop-color="#FFC0CB" /> -->
            <!--                      <stop offset="100%" stop-color="#FF1493" />-->
            <!--                    </linearGradient>-->
            <!--                  </defs>-->
            <!--                  <g style="transform-origin: 50px 50px;">-->
            <!--                    <path d="M50 50 C 20 20, 5 25, 10 40 C 15 60, 40 60, 50 50" fill="url(#wingGradOut)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 35 35, 20 35, 15 42" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 25 45, 15 50, 15 50" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 30 65, 20 85, 35 90 C 45 95, 50 70, 50 50" fill="url(#wingGradLowerOut)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 40 70, 30 80, 28 85" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <circle cx="12" cy="40" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="17" cy="53" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="30" cy="86" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="40" cy="89" r="1.5" fill="#FFF"/>-->
            <!--                  </g>-->
            <!--                  <g style="transform-origin: 50px 50px;">-->
            <!--                    <path d="M50 50 C 80 20, 95 25, 90 40 C 85 60, 60 60, 50 50" fill="url(#wingGradOut)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 65 35, 80 35, 85 42" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 75 45, 85 50, 85 50" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 70 65, 80 85, 65 90 C 55 95, 50 70, 50 50" fill="url(#wingGradLowerOut)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 60 70, 70 80, 72 85" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <circle cx="88" cy="40" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="83" cy="53" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="70" cy="86" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="60" cy="89" r="1.5" fill="#FFF"/>-->
            <!--                  </g>-->
            <!--                  <rect x="47" y="38" width="6" height="24" rx="3" fill="#333"/>-->
            <!--                  <circle cx="50" cy="35" r="4" fill="#333"/>-->
            <!--                  <path d="M 48 33 Q 40 15, 36 20 M 52 33 Q 60 15, 64 20" stroke="#333" stroke-width="1.5" fill="none" stroke-linecap="round"/>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--            <h2 class="pb-2 mt-2" style="font-family: 'Great Vibes', cursive; color: #9B6AAB; font-size: 3.8rem; font-weight: 400; line-height: 1.2;">Outdoor Play Zone.</h2>-->
            <!--        </div>-->
            <!--        <div style="width: 80px; height: 3px; background: linear-gradient(to right, #7A8B6F, #D4C5B9); margin: 0 0 1.5rem 0; border-radius: 2px;"></div>-->

            <!--        <p style="color: #4A4A4A; font-size: 1.15rem; line-height: 1.8;">-->
            <!--           Fresh air, endless fun, and purposeful play. Our outdoor space features a playground, sandpit, water table, mud kitchen and sensory table — giving children the freedom to move, explore, and connect with the world around them. Because some of life's greatest lessons are learned outside the classroom, under the open sky.-->
            <!--        </p>-->
            <!--    </div>-->
            <!--    <div class="col-md-6" data-aos="fade-left">-->
            <!--        <div class="image-sage-shade w-100">-->
            <!--            <img src="{{ asset('Front/images/env.jpeg') }}" class="img-fluid w-100" alt="Outdoor Play Zone">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!-- Story Corner Section -->
            <!--<div class="row mb-5 pb-4 mt-5 align-items-center">-->
            <!--    <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">-->
            <!--        <div class="image-sage-shade w-100">-->
            <!--            <img src="{{ asset('Front/images/env.jpeg') }}" class="img-fluid w-100" alt="Story Corner">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-6 px-lg-4" data-aos="fade-left">-->
            <!--        <div class="position-relative">-->
            <!-- Realistic Fluttering Orange Butterfly -->
            <!--            <div class="aesthetic-icon" style="top: -65px; left: 10px; opacity: 0.95; z-index: 2; pointer-events: none; animation: float 5s ease-in-out infinite;">-->
            <!--                <svg class="colorful-butterfly" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="overflow: visible; transform: rotate(-15deg) scale(0.75);">-->
            <!--                  <defs>-->
            <!--                    <linearGradient id="wingGradSto" x1="0%" y1="0%" x2="100%" y2="100%">-->
            <!--                      <stop offset="0%" stop-color="#AFEEEE" />-->
            <!--                      <stop offset="60%" stop-color="#48D1CC" />-->
            <!--                      <stop offset="100%" stop-color="#008B8B" />-->
            <!--                    </linearGradient>-->
            <!--                    <linearGradient id="wingGradLowerSto" x1="0%" y1="0%" x2="100%" y2="100%">-->
            <!--                      <stop offset="0%" stop-color="#E0FFFF" /> -->
            <!--                      <stop offset="100%" stop-color="#20B2AA" />-->
            <!--                    </linearGradient>-->
            <!--                  </defs>-->
            <!--                  <g style="transform-origin: 50px 50px;">-->
            <!--                    <path d="M50 50 C 20 20, 5 25, 10 40 C 15 60, 40 60, 50 50" fill="url(#wingGradSto)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 35 35, 20 35, 15 42" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 25 45, 15 50, 15 50" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 30 65, 20 85, 35 90 C 45 95, 50 70, 50 50" fill="url(#wingGradLowerSto)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 40 70, 30 80, 28 85" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <circle cx="12" cy="40" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="17" cy="53" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="30" cy="86" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="40" cy="89" r="1.5" fill="#FFF"/>-->
            <!--                  </g>-->
            <!--                  <g style="transform-origin: 50px 50px;">-->
            <!--                    <path d="M50 50 C 80 20, 95 25, 90 40 C 85 60, 60 60, 50 50" fill="url(#wingGradSto)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 65 35, 80 35, 85 42" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 75 45, 85 50, 85 50" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <path d="M50 50 C 70 65, 80 85, 65 90 C 55 95, 50 70, 50 50" fill="url(#wingGradLowerSto)" stroke="#222" stroke-width="3" stroke-linejoin="round"/>-->
            <!--                    <path d="M50 50 C 60 70, 70 80, 72 85" stroke="#222" stroke-width="1.5" fill="none"/>-->
            <!--                    <circle cx="88" cy="40" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="83" cy="53" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="70" cy="86" r="1.5" fill="#FFF"/>-->
            <!--                    <circle cx="60" cy="89" r="1.5" fill="#FFF"/>-->
            <!--                  </g>-->
            <!--                  <rect x="47" y="38" width="6" height="24" rx="3" fill="#333"/>-->
            <!--                  <circle cx="50" cy="35" r="4" fill="#333"/>-->
            <!--                  <path d="M 48 33 Q 40 15, 36 20 M 52 33 Q 60 15, 64 20" stroke="#333" stroke-width="1.5" fill="none" stroke-linecap="round"/>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--            <h2 class="pb-2 mt-2" style="font-family: 'Great Vibes', cursive; color: #9B6AAB; font-size: 3.8rem; font-weight: 400; line-height: 1.2;">Story Corner.</h2>-->
            <!--        </div>-->
            <!--        <div style="width: 80px; height: 3px; background: linear-gradient(to right, #7A8B6F, #D4C5B9); margin: 0 0 1.5rem 0; border-radius: 2px;"></div>-->

            <!--        <p style="color: #4A4A4A; font-size: 1.15rem; line-height: 1.8;">-->
            <!--           Our Story Corner is a warm and inviting space where a love of reading begins. Filled with carefully curated books covering nature, social-emotional learning, diversity and inclusion, cultures, and imaginative adventures, it encourages children to explore ideas, ask questions, and discover new perspectives.-->
            <!--        </p>-->
            <!--    </div>-->
            <!--</div>-->

            <!-- 5 Key Learning Areas -->
            <div class="row mb-4">
                <div class="col-md-12 text-center position-relative" data-aos="fade-up">

                    <!-- Rainbow Toy resting near the heading (Anchored to title) -->
                    <div class="aesthetic-icon"
                        style="top: -25px; left: calc(50% + 140px); opacity: 0.95; transform: scale(0.9); z-index: 2;">
                        <svg width="120" height="80" viewBox="0 0 120 80" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,80 A50,50 0 0,1 110,80" fill="none" stroke="#D4C5B9" stroke-width="12"
                                stroke-linecap="round" />
                            <path d="M26,80 A34,34 0 0,1 94,80" fill="none" stroke="#A9B89D" stroke-width="12"
                                stroke-linecap="round" />
                            <path d="M42,80 A18,18 0 0,1 78,80" fill="none" stroke="#B5AFA1" stroke-width="12"
                                stroke-linecap="round" />
                            <path d="M58,80 A2,2 0 0,1 62,80" fill="none" stroke="#E8E5DC" stroke-width="12"
                                stroke-linecap="round" />
                        </svg>
                    </div>

                    <div class="d-flex justify-content-center align-items-center mb-2 gap-2">
                        <h4 class="mb-0"
                            style="color: #8A5A9E; font-family: 'Playfair Display', serif; font-size: 2.1rem; font-style: italic; font-weight: 500; letter-spacing: 1px;">
                            Montessori Lab</h4>
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#8A5A9E" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                    </div>
                    <h3 class="fw-bold mb-5"
                        style="color: #3C4A3E; font-family: 'Playfair Display', serif; font-size: 2.2rem;">Five Key
                        Learning Areas</h3>
                </div>
            </div>

            <div class="row g-4" data-aos="fade-up" data-aos-delay="100">

                <!-- Card 1: Sensorial (Sage) -->
                <div class="col-lg-4 col-md-6">
                    <div class="learning-card card-sage" tabindex="0">
                        <div class="img-wrapper">
                            <img src="{{ asset('Front/images/sensoriall.jpeg') }}" alt="Sensorial Area"
                                class="card-img-top">
                            <h4 class="title-overlay">Sensorial</h4>
                        </div>
                        <div class="card-content-wrapper">
                            <p>Children refine their senses through iconic Montessori materials such as the Pink Tower,
                                Knobbed Cylinders, Color Tablets, and Sound Boxes, developing concentration,
                                observation, language, and early mathematical thinking.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Practical Life (Taupe) -->
                <div class="col-lg-4 col-md-6">
                    <div class="learning-card card-taupe" tabindex="0">
                        <div class="img-wrapper">
                            <img src="{{ asset('Front/images/practicall.jpeg') }}" alt="Practical Life Area"
                                class="card-img-top">
                            <h4 class="title-overlay">Practical Life</h4>
                        </div>
                        <div class="card-content-wrapper">
                            <p>Through real-life activities such as pouring, polishing, sweeping, flower arranging, and
                                working with Dressing Frames, children build independence, coordination, confidence, and
                                responsibility.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Language (Blush) -->
                <div class="col-lg-4 col-md-6 position-relative">

                    <!-- Taupe Caterpillar resting on the Language Card -->
                    <div class="aesthetic-icon" style="top: -40px; right: -20px; opacity: 0.95; z-index: 5;">
                        <svg width="130" height="90" viewBox="0 0 150 100" xmlns="http://www.w3.org/2000/svg"
                            style="transform: rotate(10deg);">
                            <defs>
                                <radialGradient id="catG2" cx="30%" cy="30%" r="70%">
                                    <stop offset="0%" stop-color="#E8DCD1" />
                                    <stop offset="100%" stop-color="#C1AD9D" />
                                </radialGradient>
                            </defs>
                            <path d="M10,80 Q75,40 140,50" stroke="#B5AFA1" stroke-width="2.5" stroke-linecap="round"
                                fill="none" />
                            <path d="M40,63 C30,75 25,75 40,63 Z" stroke="#B5AFA1" stroke-width="1.5" fill="#D4C5B9" />
                            <path d="M100,45 C110,60 120,60 100,45 Z" stroke="#B5AFA1" stroke-width="1.5"
                                fill="#D4C5B9" />
                            <circle cx="45" cy="55" r="9" fill="url(#catG2)" />
                            <circle cx="60" cy="50" r="10.5" fill="url(#catG2)" />
                            <circle cx="76" cy="46" r="11.5" fill="url(#catG2)" />
                            <circle cx="93" cy="44" r="11.5" fill="url(#catG2)" />
                            <circle cx="110" cy="45" r="12.5" fill="url(#catG2)" />
                            <path d="M115,35 Q125,20 130,25 M105,33 Q110,18 115,20" stroke="#4A4A4A" stroke-width="1.5"
                                fill="none" stroke-linecap="round" />
                            <circle cx="130" cy="25" r="1.5" fill="#4A4A4A" />
                            <circle cx="115" cy="20" r="1.5" fill="#4A4A4A" />
                            <circle cx="115" cy="42" r="2" fill="#4A4A4A" />
                        </svg>
                    </div>

                    <div class="learning-card card-blush" tabindex="0">
                        <div class="img-wrapper">
                            <img src="{{ asset('Front/images/language.jpeg') }}" alt="Language Area"
                                class="card-img-top">
                            <h4 class="title-overlay">Language</h4>
                        </div>
                        <div class="card-content-wrapper">
                            <p>Using Montessori materials such as Sandpaper Letters, the Movable Alphabet, alongside
                                Phonics, children develop strong communication, reading, writing, and storytelling
                                skills.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Mathematics (Olive) -->
                <div class="col-lg-4 col-md-6">
                    <div class="learning-card card-olive" tabindex="0">
                        <div class="img-wrapper">
                            <img src="{{ asset('Front/images/maths.jpeg') }}" alt="Mathematics Area"
                                class="card-img-top">
                            <h4 class="title-overlay">Mathematics</h4>
                        </div>
                        <div class="card-content-wrapper">
                            <p>Concrete materials such as the Golden Beads, Bead Chains, Number Rods, and Stamp Game
                                help children understand mathematical concepts through hands-on exploration, building a
                                love of numbers.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Cultural & Science (Terracotta) -->
                <div class="col-lg-4 col-md-6">
                    <div class="learning-card card-terracotta" tabindex="0">
                        <div class="img-wrapper">
                            <img src="{{ asset('Front/images/culturall.jpeg') }}" alt="Cultural and Science Area"
                                class="card-img-top">
                            <h4 class="title-overlay">Cultural & Science</h4>
                        </div>
                        <div class="card-content-wrapper">
                            <p>Children explore geography, nature, science, history, and world cultures through maps,
                                globes, landform models, botany materials, and zoology cards, nurturing curiosity and
                                wonder.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Quote Section & Admission Button -->
            <div class="text-center mt-5 pt-5 position-relative" data-aos="fade-up">

                <div
                    style="background: rgba(47, 52, 139, 0.06); border-left: 5px solid #2F348B; padding: 2.5rem; border-radius: 0 20px 20px 0; display: inline-block; max-width: 900px; box-shadow: 0 10px 30px rgba(0,0,0,0.02); margin-bottom: 3rem; position: relative;">

                    <!-- Montessori Stacking Blocks SVG -->
                    <div class="aesthetic-icon" style="top: -20px; right: -40px; opacity: 0.95; z-index: 2;">
                        <svg width="90" height="115" viewBox="0 0 100 130" xmlns="http://www.w3.org/2000/svg">
                            <!-- Bedford Indigo Block -->
                            <path d="M20,110 L50,125 L80,110 L80,80 L50,95 L20,80 Z" fill="#2F348B" />
                            <path d="M20,80 L50,95 L80,80 L50,65 Z" fill="#484EB8" />
                            <path d="M20,80 L50,95 L50,125 L20,110 Z" fill="#1E2260" />
                            <!-- Bedford Sunny Gold Block -->
                            <path d="M30,80 L50,90 L70,80 L70,55 L50,65 L30,55 Z" fill="#F59F1E" />
                            <path d="M30,55 L50,65 L70,55 L50,45 Z" fill="#FFB834" />
                            <path d="M30,55 L50,65 L50,90 L30,80 Z" fill="#E28C0A" />
                            <!-- Clean Top Block -->
                            <path d="M35,55 L50,62 L65,55 L65,35 L50,42 L35,35 Z" fill="#EEF2FB" />
                            <path d="M35,35 L50,42 L65,35 L50,28 Z" fill="#FFFFFF" />
                            <path d="M35,35 L50,42 L50,62 L35,55 Z" fill="#EEF2FB" />
                        </svg>
                    </div>

                    <h3 class="fst-italic mb-0"
                        style="color: #1E244B; line-height: 1.6; font-weight: 500; font-family: 'Playfair Display', serif;">
                        "The senses, being the explorers of the world, open the way to knowledge."</h3>
                    <p class="mb-0 mt-4 fw-bold text-uppercase tracking-wider"
                        style="color: #F59F1E; letter-spacing: 2px; font-family: 'Montserrat', sans-serif;">— Maria
                        Montessori</p>
                </div>

                <!-- Beautiful Earthy Admission Button -->
                <div>
                    <a href="{{ route('admission') }}" class="btn-admission">
                        Admission <span>&rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
</div>

@include('front.layouts.footer')