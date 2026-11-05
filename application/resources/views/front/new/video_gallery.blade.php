@include('front.layouts.header')

<style>
    /* Premium Montessori Video Gallery Theme */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap');

    body {
        background-color: #F7F5F0 !important; /* Elegant Cream Background */
    }

    .gallery-page {
        background-color: #F7F5F0;
        padding-top: 80px;
        padding-bottom: 100px;
        position: relative;
        overflow: hidden;
    }

    /* Subtitle (Cursive) */
    .gallery-page .sxt {
        font-family: 'Great Vibes', cursive !important;
        font-size: 3rem;
        color: #A89F91; /* Soft Taupe */
        margin-bottom: -15px;
        display: block;
        text-transform: capitalize;
        text-align: center;
    }

    /* Main Title */
    .gallery-page h1 {
        font-family: 'Playfair Display', serif !important;
        font-size: 3.8rem;
        color: #3C4A3E; /* Earthy Charcoal */
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
        fill: #7A8B6F; /* Sage Green */
        opacity: 0.8;
    }

    /* Video Card Styling - Polaroid Effect */
    .gallery-list {
        overflow: hidden;
        border-radius: 4px; /* Slight rounding for a realistic photo look */
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        border: 10px solid #ffffff; 
        border-bottom: 0px solid #ffffff; 
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        background: #fff;
        position: relative;
        display: flex;
        flex-direction: column;
    }
    
    .gallery-list iframe {
        border-radius: 4px 4px 0 0;
        flex-grow: 1;
    }

    .gallery-list p {
        font-family: 'Montserrat', sans-serif !important;
        font-size: 0.95rem;
        font-weight: 500;
        color: #3C4A3E;
        text-align: center;
        padding: 20px 15px !important;
        margin-bottom: 0;
        line-height: 1.5;
        border-bottom: 10px solid #ffffff; /* Finish the polaroid frame at the bottom of text */
    }

    /* Hover Effects */
    .col-md-4:hover .gallery-list {
        transform: translateY(-8px); /* Gentle float */
        box-shadow: 0 15px 35px rgba(122,139,111,0.2); /* Sage tinted shadow */
    }

    /* Background decorative subtle circles */
    .bg-circle-1 {
        position: absolute;
        top: 10%;
        left: -5%;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(168, 159, 145, 0.05);
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
        background: rgba(122, 139, 111, 0.05);
        z-index: 0;
        pointer-events: none;
    }
</style>

<section class="explore gallery-page section-100 ">
    
    <!-- Decorative Backgrounds -->
    <div class="bg-circle-1"></div>
    <div class="bg-circle-2"></div>

    <div class="container position-relative z-2">
        <div class="row g-4">
            
            <div class="col-md-12 " data-aos="fade-up">
                <!-- Premium Heading Section -->
                <span class="sxt">Watch & Learn</span>
                <h1 class="mt-0 mb-3 fw-600">Video Gallery</h1>
                
                <!-- Minimalist Leaf Icon -->
                <div class="title-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,21,5,19.22,7.31,17,8Z"/>
                    </svg>
                </div>
            </div>

            @foreach($videoGallery as $item)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-list h-100">
                        <iframe class="m-0 p-0" width="100%" height="268" src="https://www.youtube.com/embed/{{$item->iframe}}" title="Video content" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p class="bg-white p-3 lh-base">{{$item->description}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@include('front.layouts.footer')
