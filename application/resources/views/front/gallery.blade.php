@section('title', 'Photo Gallery - Bedford Kindergarten Qatar | Doha')
@section('description', 'Explore the photo gallery of Bedford Kindergarten Qatar, showcasing our vibrant indoor and outdoor learning environments and student activities.')
@section('gallery', 'active')
@include('front.layouts.header')

<style>
    /* Premium Montessori Gallery Theme */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap');

    body {
        background-color: #F8FAFC !important; /* Clean Slate Background */
    }

    .gallery-page {
        background-color: #F8FAFC;
        padding-top: 80px;
        padding-bottom: 100px;
        position: relative;
        overflow: hidden;
    }

    /* Subtitle (Cursive) */
    .gallery-page .sxt {
        font-family: 'Great Vibes', cursive !important;
        font-size: 3rem;
        color: #F59F1E; /* Bedford Sunny Gold */
        margin-bottom: -15px;
        display: block;
        text-transform: capitalize;
        text-align: center;
    }

    /* Main Title */
    .gallery-page h1 {
        font-family: 'Playfair Display', serif !important;
        font-size: 3.8rem;
        color: #2F348B; /* Bedford Royal Indigo */
        text-align: center;
        font-weight: 500;
        letter-spacing: 1px;
        position: relative;
        z-index: 2;
    }

    /* Elegant Leaf Icon under title */
    .title-icon {
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
    }
    
    .title-icon svg {
        width: 35px;
        height: 35px;
        fill: #F59F1E; /* Bedford Sunny Gold */
        opacity: 0.9;
    }

    /* Gallery Card Styling - Polaroid Effect */
    .gallery-list {
        overflow: hidden;
        border-radius: 4px; /* Slight rounding for a realistic photo look */
        box-shadow: 0 10px 25px rgba(47, 52, 139, 0.06);
        border: 10px solid #ffffff; 
        border-bottom: 25px solid #ffffff; /* Thicker bottom for polaroid style */
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        background: #fff;
        height: 250px;
        position: relative;
    }

    .gallery-list img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    /* Hover Effects */
    .col-md-3:hover .gallery-list {
        transform: translateY(-8px) rotate(-1.5deg); /* Gentle float and tilt */
        box-shadow: 0 15px 35px rgba(47, 52, 139, 0.15); /* Indigo tinted shadow */
    }

    .col-md-3:hover .gallery-list img {
        transform: scale(1.05); /* Slight zoom on image */
    }

    /* Elegant Button below photo */
    .gallery-btn {
        display: block;
        padding: 10px 20px;
        margin-top: 20px !important;
        border-radius: 30px;
        background-color: transparent;
        color: #2F348B;
        text-align: center;
        font-family: 'Montserrat', sans-serif !important;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 1px solid rgba(47, 52, 139, 0.2);
        transition: all 0.3s ease;
    }

    .gallery-btn:hover {
        background-color: #2F348B; /* Bedford Royal Indigo */
        color: #ffffff;
        border-color: #2F348B;
        text-decoration: none;
    }
    
    /* Background decorative subtle circles */
    .bg-circle-1 {
        position: absolute;
        top: 10%;
        left: -5%;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(47, 52, 139, 0.04);
        z-index: 0;
        pointer-events: none;
    }
    
    .bg-circle-2 {
        position: absolute;
        bottom: 10%;
        right: -5%;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: rgba(245, 159, 30, 0.04);
        z-index: 0;
        pointer-events: none;
    }
</style>

<section class="explore gallery-page section-100 ">
    
    <!-- Decorative Backgrounds -->
    <div class="bg-circle-1"></div>
    <div class="bg-circle-2"></div>

    <div class="container position-relative z-2">
        <div class="row g-md-5 mt-2">
            <div class="col-md-12 " data-aos="fade-up">
                
                <!-- Premium Heading Section -->
                <span class="sxt">Discover Our Spaces</span>
                <h1 class="mt-0 mb-3 fw-600">Photo Gallery</h1>
                
                <!-- Minimalist Leaf Icon -->
                <div class="title-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,21,5,19.22,7.31,17,8Z"/>
                    </svg>
                </div>

                <div class="row g-4 mt-2">
                    
                    @foreach ($galleries as $gallery)
                        <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                            <!-- Polaroid Style Photo Frame -->
                            <div class="gallery-list">
                                <img src="{{ url('upload/' . $gallery->image) }}" alt="{{ $gallery->title }}" />
                            </div>
                            <!-- Elegant Outlined Button -->
                            <a href="{{route('photo_gallery_details',$gallery->id)}}" class="gallery-btn">{{ $gallery->title }}</a>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
