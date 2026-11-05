@section('title', 'Videos Gallery')
@section('video_gallery', 'active')
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

    h1, h2, h3, h4, h5, h6, .right-menu-head h4 {
        font-family: 'Playfair Display', serif;
        color: #3C4A3E; /* Dark Olive/Charcoal */
    }

    /* ==========================================
       HERO BANNER
       ========================================== */
    .video-banner {
        position: relative;
        width: 100vw;
        margin-left: calc(-50vw + 50%);
        max-width: 100vw;
        height: 400px; 
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
        background: rgba(0, 0, 0, 0.4); 
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

    /* ==========================================
       PAGE CONTENT SECTION
       ========================================== */
    .video-gallery-wrapper {
        background-color: #F7F5F0;
        padding-top: 5rem;
        padding-bottom: 7rem;
        position: relative;
        overflow: hidden;
    }

    /* Subtitles & Headings */
    .video-gallery-wrapper .sxt {
        font-family: 'Great Vibes', cursive !important;
        font-size: 3.5rem;
        color: #F59F1E; /* Bedford Sunny Gold */
        margin-bottom: -20px;
        display: block;
        text-transform: capitalize;
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 3.8rem;
        color: #2F348B; /* Bedford Royal Indigo */
        font-weight: 500;
        margin-bottom: 1rem;
    }

    /* Elegant Leaf Icon */
    .title-icon {
        margin-bottom: 40px;
    }
    
    .title-icon svg {
        width: 35px;
        height: 35px;
        fill: #F59F1E; /* Bedford Sunny Gold */
        opacity: 0.9;
    }

    /* ==========================================
       VIDEO CARDS
       ========================================== */
    .video-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(47, 52, 139, 0.04);
        border: 1px solid rgba(47, 52, 139, 0.12);
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        margin-bottom: 1.5rem;
    }

    .video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(47, 52, 139, 0.12);
        border-color: rgba(47, 52, 139, 0.3);
    }

    .video-card iframe {
        border-bottom: 1px solid rgba(168, 159, 145, 0.15);
    }

    .video-card-title {
        padding: 1.25rem 1.5rem;
        font-weight: 600;
        font-size: 1.05rem;
        color: #3C4A3E;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        margin: 0;
        line-height: 1.5;
    }

    /* ==========================================
       SIDEBAR & RIGHT MENU
       ========================================== */
    .right-menu {
        background: #ffffff;
        border-radius: 16px;
        padding: 2.2rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        border: 1px solid rgba(168, 159, 145, 0.2);
        position: sticky;
        top: 100px;
    }

    .right-menu-head {
        border-bottom: 1px solid rgba(168, 159, 145, 0.15);
        padding-bottom: 1rem;
        margin-bottom: 1.5rem;
    }

    .right-menu-head h4 {
        font-size: 1.4rem;
        margin: 0;
        font-weight: 600;
    }

    .right-menu-head .link a {
        color: #2F348B; /* Bedford Royal Indigo link */
        font-weight: 600;
        text-decoration: none;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: color 0.3s ease;
    }

    .right-menu-head .link a:hover {
        color: #F59F1E;
    }

    /* News List Marquee Items */
    .list-news .item {
        background: #F8FAFC;
        border-radius: 12px;
        padding: 10px;
        transition: all 0.3s ease;
        align-items: center;
        border: 1px solid rgba(47, 52, 139, 0.08);
    }

    .list-news .item:hover {
        background: #ffffff;
        border-color: rgba(47, 52, 139, 0.25);
        box-shadow: 0 5px 15px rgba(47, 52, 139, 0.08);
    }

    .list-news .img {
        width: 70px;
        height: 70px;
        flex-shrink: 0;
        border-radius: 8px;
        overflow: hidden;
        margin-right: 15px;
    }

    .list-news .img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .list-news .txt a {
        color: #1E244B;
        font-weight: 500;
        font-size: 0.95rem;
        text-decoration: none;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: color 0.3s ease;
    }

    .list-news .item:hover .txt a {
        color: #F59F1E; /* Bedford Sunny Gold text on hover */
    }

    .featured-video {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid rgba(47, 52, 139, 0.15);
    }
    
    @media (max-width: 991px) {
        .video-banner { height: 300px; }
        .banner-title { font-size: 3rem; }
        .right-menu { margin-top: 3rem; }
    }
</style>

<!-- Fixed Elegant Banner -->
<section class="video-banner" style="background: url('{{ asset('Front/images/bg/7.jpg') }}') center top / cover no-repeat;">
    <div class="banner-overlay"></div>
    
    <div class="banner-text">
        <h1 class="banner-title">Videos</h1>
    </div>

    <!-- Wavy Bottom Shape Divider -->
    <div style="position: absolute; bottom: -2px; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 3;">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="display: block; width: 100%; height: 60px; fill: #F8FAFC;">
            <path d="M0,40 C320,100 820,0 1440,60 L1440,100 L0,100 Z" />
        </svg>
    </div>
</section>

<!-- Page Content Section -->
<section class="video-gallery-wrapper">
    <div class="container">
        <div class="row g-lg-5">
            
            <!-- Left Side: Videos Grid -->
            <div class="col-lg-8">
                
                <!-- Premium Heading Section -->
                <span class="sxt" data-aos="fade-up">Watch & Learn</span>
                <h2 class="section-title" data-aos="fade-up">Video Gallery</h2>
                
                <!-- Minimalist Leaf Icon -->
                <div class="title-icon" data-aos="fade-up">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,21,5,19.22,7.31,17,8Z"/>
                    </svg>
                </div>

                <div class="row g-4">
                    @foreach ($video_galleries as $video_gallerie)
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="video-card">
                                <iframe src="//www.youtube.com/embed/{{ $video_gallerie->code }}" frameborder="0" allowfullscreen title="{{ $video_gallerie->title }}" allow='autoplay' style="width: 100%; height: 240px; display: block;"></iframe>
                                <h5 class="video-card-title">{{ $video_gallerie->title }}</h5>
                            </div>
                        </div>
                    @endforeach
                    
                    <div class="col-12 mt-4">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            {!! $video_galleries->links('front.pagination') !!}
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Side: Sidebar Menu -->
            <div class="col-lg-4">
                <div class="right-menu" data-aos="fade-left">
                    
                    <!-- Latest News Header -->
                    <div class="right-menu-head d-flex justify-content-between align-items-end">
                        <h4>Latest News</h4>
                        <div class="link aml">
                            <a href="{{route('allnews')}}">View All</a>
                        </div>
                    </div>
                    
                    <!-- News Marquee -->
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="4" style="height: 320px; padding-right: 5px;">
                        @foreach ($newses as $newse)
                        <div class="list-news mb-3">
                            <div class="item d-flex">
                                <div class="img"> 
                                    <a href="{{route('news_details',$newse->news_slug)}}">
                                        <img src="{{ url('upload/' . $newse->thumb_img)}}" alt="{{$newse->news_title}}">
                                    </a>
                                </div>
                                <div class="txt">
                                     <a href="{{route('news_details',$newse->news_slug)}}">{{$newse->news_title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </marquee>

                    <!-- Featured Video Header -->
                    <div class="right-menu-head pt-5 d-flex justify-content-between align-items-end">
                        <h4>Featured Video</h4>
                        <div class="link aml">
                            <a href="{{route('video_gallery')}}">View All</a>
                        </div>
                    </div>
                    
                    <!-- Featured Video Iframe -->
                    <div class="featured-video mt-3">
                        <iframe width="100%" height="220" src="https://www.youtube.com/embed/{{$video_gallery_latest->code}}" frameborder="0" allowfullscreen="" style="display: block;"></iframe>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

@include('front.layouts.footer')
