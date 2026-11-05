@section('title', 'Contact Us – Bedford Kindergarten Qatar | Doha')
@section('description', 'Get in touch with Bedford Kindergarten Qatar in Barwa Madinatna, Doha. Contact us for admissions, campus tours, and enrollment inquiries.')
@section('contact_us', 'active')
@include('front.layouts.header')

<!-- Custom Styles for Premium Contact Page -->
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

    h1, h2, h3, h4, h5, h6, .about-main-title {
        font-family: 'Playfair Display', serif;
        color: #3C4A3E; /* Dark Olive/Charcoal */
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
    .contact-banner {
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
        .contact-banner {
            height: 300px;
        }
    }

    /* ==========================================
       CONTACT FORM & CARDS 
       ========================================== */
    .contact-page-wrapper {
        background-color: #F7F5F0;
        padding-top: 5rem;
        padding-bottom: 5rem;
        position: relative;
        overflow: hidden;
    }

    /* Form Container */
    .premium-contact-form {
        background: #ffffff;
        border-radius: 20px;
        padding: 3.5rem 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        border: 1px solid rgba(168, 159, 145, 0.2); /* Taupe border */
        height: 100%;
        position: relative;
        z-index: 1;
    }

    /* Premium Inputs */
    .premium-contact-form .form-control {
        border-radius: 12px;
        padding: 1rem 1.2rem;
        border: 1px solid rgba(0,0,0,0.08);
        background-color: #F7F5F0;
        transition: all 0.3s ease;
        font-size: 0.95rem;
        color: #3C4A3E;
        font-family: 'Montserrat', sans-serif;
    }
    
    .premium-contact-form .form-control::placeholder {
        color: #A89F91;
    }
    
    .premium-contact-form .form-control:focus {
        background-color: #ffffff;
        border-color: #2F348B;
        box-shadow: 0 0 0 4px rgba(47, 52, 139, 0.15);
        outline: none;
    }

    /* Submit Button (Bedford Sunny Gold) */
    .btn-premium-submit {
        background-color: #F59F1E !important;
        border-color: #F59F1E !important;
        color: #ffffff !important;
        border-radius: 50px;
        padding: 15px 30px;
        font-weight: 600;
        font-size: 1rem;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: 1px;
        text-transform: uppercase;
        box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35);
        transition: all 0.3s ease;
    }
    .btn-premium-submit:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(245, 159, 30, 0.45);
        background-color: #E28C0A !important;
        border-color: #E28C0A !important;
        color: #ffffff !important;
    }
    .btn-premium-submit:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    /* Contact Detail Cards */
    .contact-info-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 1.75rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.02);
        border: 1px solid rgba(47, 52, 139, 0.12);
        transition: all 0.3s ease;
        display: flex;
        align-items: flex-start;
        position: relative;
        z-index: 1;
    }
    
    .contact-info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(47, 52, 139, 0.12);
        border-color: rgba(47, 52, 139, 0.3);
    }

    /* Icon Box with Bedford Palette */
    .contact-icon-box {
        width: 55px;
        height: 55px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-right: 1.25rem;
    }
    
    /* Bedford Color Classes */
    .icon-purple {
        background-color: rgba(47, 52, 139, 0.1);
        color: #2F348B;
    }
    .icon-taupe {
        background-color: rgba(245, 159, 30, 0.12);
        color: #F59F1E;
    }
    .icon-blush {
        background-color: rgba(47, 52, 139, 0.08);
        color: #484EB8;
    }

    .contact-info-text h5 {
        font-size: 1.15rem;
        font-weight: 600;
        color: #1E244B; 
        font-family: 'Playfair Display', serif;
        margin-bottom: 0.35rem;
    }
    .contact-info-text p {
        color: #4A4A4A;
        margin-bottom: 0;
        font-size: 0.95rem;
        line-height: 1.6;
        font-family: 'Montserrat', sans-serif;
        word-break: break-word;
    }

    /* Map Container */
    .map-container {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        border: 1px solid rgba(168, 159, 145, 0.2);
        margin-top: 2rem;
        background: #fff;
        padding: 10px; /* Polaroid effect */
    }
    .map-container iframe {
        border-radius: 12px;
    }
    
    /* Error Text Styling */
    .error {
        color: #e3342f;
        font-size: 0.85rem;
        margin-top: 0.25rem;
        display: block;
        font-family: 'Montserrat', sans-serif;
    }
    
    /* Responsive fixes for aesthetic icons so they don't overlap text on mobile */
    @media (max-width: 768px) {
        .mobile-edge-left {
            left: -10% !important;
            top: -30px !important;
            transform: scale(0.6) !important;
            opacity: 0.6 !important;
        }
        .mobile-edge-right {
            right: -10% !important;
            top: -20px !important;
            transform: scale(0.6) !important;
            opacity: 0.6 !important;
        }
        . {
            display: none !important;
        }
    }
</style>

<!-- Fixed Banner -->
<section class="contact-banner" style="background: url('{{ asset('Front/images/co11.jpeg') }}') center top / cover no-repeat;">
    <div class="banner-overlay"></div>
    
    <div class="banner-text">
        <h1 class="banner-title">Contact Us</h1>
    </div>

    <!-- Wavy Bottom Shape Divider -->
    <div style="position: absolute; bottom: -2px; left: 0; width: 100%; overflow: hidden; line-height: 0; z-index: 3;">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none" style="display: block; width: 100%; height: 60px; fill: #F7F5F0;">
            <path d="M0,40 C320,100 820,0 1440,60 L1440,100 L0,100 Z" />
        </svg>
    </div>
</section>

<section class="contact-page-wrapper">
    
    <!-- Beautiful Watercolor Cloud floating in background -->
    <div class="aesthetic-icon mobile-edge-right" style="top: 5%; right: 5%; opacity: 0.7;">
        <svg width="150" height="80" viewBox="0 0 150 80" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="conCloud1" x1="0%" y1="0%" x2="0%" y2="100%">
              <stop offset="0%" stop-color="#FFFFFF" stop-opacity="0.9"/>
              <stop offset="100%" stop-color="#E8E5DC" stop-opacity="0.9"/>
            </linearGradient>
          </defs>
          <path d="M40,65 C20,65 10,50 20,35 C20,20 40,10 55,20 C70,5 95,5 110,25 C130,25 140,45 125,60 C135,70 120,75 105,65 C95,75 75,70 65,65 C55,75 45,70 40,65 Z" fill="url(#conCloud1)"/>
        </svg>
    </div>

    <div class="container">
        
        <!-- Header Title -->
        <div class="row mb-5 position-relative">
            
            <!-- Montessori Wooden Rainbow Toy resting by the title -->
            <div class="aesthetic-icon mobile-edge-left" style="top: -20px; left: 25%; opacity: 0.95; transform: scale(1.1); z-index: 2;">
                <svg width="120" height="80" viewBox="0 0 120 80" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10,80 A50,50 0 0,1 110,80" fill="none" stroke="#D4C5B9" stroke-width="12" stroke-linecap="round"/>
                    <path d="M26,80 A34,34 0 0,1 94,80" fill="none" stroke="#A9B89D" stroke-width="12" stroke-linecap="round"/>
                    <path d="M42,80 A18,18 0 0,1 78,80" fill="none" stroke="#B5AFA1" stroke-width="12" stroke-linecap="round"/>
                    <path d="M58,80 A2,2 0 0,1 62,80" fill="none" stroke="#E8E5DC" stroke-width="12" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="col-md-12 text-center" data-aos="fade-up">
                <span class="text-uppercase fw-bold" style="color: #F59F1E; letter-spacing: 3px; font-family: 'Montserrat', sans-serif;">Get In Touch</span>
                
                <!-- The beautifully styled cursive title -->
                <h2 class="pb-2 mt-2" style="font-family: 'Great Vibes', cursive; color: #2F348B; font-size: 4rem; font-weight: 400; line-height: 1.2;">Bedford Kindergarten.</h2>
                
                <div style="width: 80px; height: 3px; background: linear-gradient(to right, #2F348B, #F59F1E); margin: 0 auto 1.5rem auto; border-radius: 2px;"></div>
            </div>
        </div>

        <div class="row g-4 g-md-5">
            <!-- Contact Form -->
            <div class="col-lg-7 position-relative">
                
                <!-- Cute Sitting Bunny resting on the form edge -->
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

                <div class="premium-contact-form" data-aos="fade-right">
                    <h4 class="fw-bold mb-4" style="color: #3C4A3E; font-family: 'Playfair Display', serif; font-size: 1.8rem; font-style: italic;">Send Us a Message</h4>
                    
                    <form method="post" action="{{ route('contactus_store') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Your Full Name" required>
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-4">
                                    <input type="text" class="form-control" name="class" value="{{old('class')}}" placeholder="Child's Class/Age" required>
                                    @if ($errors->has('class'))
                                        <span class="error">{{ $errors->first('class') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="mb-4">
                                    <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Phone Number" required>
                                    @if ($errors->has('phone'))
                                        <span class="error">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address" required>
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        
                        <div class="mb-4">
                            <textarea placeholder="Type your message or inquiry here..." class="form-control" name="message" rows="5" required>{{old('message')}}</textarea>
                            @if ($errors->has('message'))
                                <span class="error">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        
                        <div class="mb-4">
                            <div class="g-recaptcha"
                                style="transform:scale(0.85);transform-origin:0;-webkit-transform:scale(0.85);-webkit-transform-origin:0 0;"
                                data-sitekey="{{ env('RecaptchaSitekey') }}" data-callback="recaptchaCallback">
                            </div>
                        </div>
                        
                        <button type="submit" id="Submit_btn" class="btn btn-premium-submit w-100" disabled>Submit Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Information Cards -->
            <div class="col-lg-5 position-relative">
                
                <!-- Beautiful Blush Pink Watercolor Butterfly -->
                <div class="aesthetic-icon " style="top: -20px; right: -20px; opacity: 0.95; z-index: 2; transform: rotate(15deg); animation: float 5s ease-in-out infinite;">
                  <svg class="montessori-butterfly" width="80" height="80" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                      <filter id="bfShadowCon" x="-20%" y="-20%" width="140%" height="140%">
                        <feDropShadow dx="0" dy="4" stdDeviation="3" flood-color="#887868" flood-opacity="0.3"/>
                      </filter>
                      <linearGradient id="blushTopWingCon" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#EBC4BB" />
                        <stop offset="70%" stop-color="#DCA89E" />
                        <stop offset="100%" stop-color="#C08479" />
                      </linearGradient>
                      <linearGradient id="blushTopWingRightCon" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#EBC4BB" />
                        <stop offset="70%" stop-color="#DCA89E" />
                        <stop offset="100%" stop-color="#C08479" />
                      </linearGradient>
                      <linearGradient id="blushBotWingCon" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#F1D1C6" />
                        <stop offset="100%" stop-color="#DCA89E" />
                      </linearGradient>
                      <linearGradient id="blushBotWingRightCon" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#F1D1C6" />
                        <stop offset="100%" stop-color="#DCA89E" />
                      </linearGradient>
                    </defs>

                    <g filter="url(#bfShadowCon)">
                      <path d="M 58 55 C 40 30, 10 20, 15 45 C 18 60, 30 70, 58 60 Z" fill="url(#blushTopWingCon)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
                      <path d="M 62 55 C 80 30, 110 20, 105 45 C 102 60, 90 70, 62 60 Z" fill="url(#blushTopWingRightCon)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
                      <path d="M 58 60 C 40 75, 25 105, 45 100 C 55 98, 60 75, 58 60 Z" fill="url(#blushBotWingCon)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
                      <path d="M 62 60 C 80 75, 95 105, 75 100 C 65 98, 60 75, 62 60 Z" fill="url(#blushBotWingRightCon)" stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round"/>
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

                <div class="contact-details h-100 d-flex flex-column justify-content-center">
                    
                    <!-- Telephone Card -->
                    <div class="contact-info-card" data-aos="fade-left" data-aos-delay="100">
                        <div class="contact-icon-box icon-purple">
                            <i class="bi bi-telephone-fill fs-4"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Telephone / WhatsApp</h5>
                            <p>+974 40022130<br>+974 30737731</p>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="contact-info-card" data-aos="fade-left" data-aos-delay="200">
                        <div class="contact-icon-box icon-taupe">
                            <i class="bi bi-envelope-fill fs-4"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Email Address</h5>
                            <p>school@bedfordqatar.com</p>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="contact-info-card" data-aos="fade-left" data-aos-delay="300">
                        <div class="contact-icon-box icon-blush">
                            <i class="bi bi-geo-alt-fill fs-4"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Address</h5>
                            <p>Bedford Kindergarten,<br>Block E, Barwa Madinatna,<br>Doha, Qatar</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Google Map Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="map-container" data-aos="fade-up">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115474.2162428266!2d51.41452212934915!3d25.25142910396513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45cf1b1f01e37b%3A0x71c41c839ef7f00f!2sBedford%20Kindergarten!5e0!3m2!1sen!2sin!4v1720419874488!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
</section>

@include('front.layouts.footer')

<script>
    function recaptchaCallback() {
        var bookbutton = document.getElementById("Submit_btn");
        if (bookbutton) {
            bookbutton.disabled = false;
        }
    }

    $(function() {
        $("input[name='phone']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
        
        // Failsafe: if recaptcha fails to load or isn't configured, enable the button after 3 seconds anyway
        setTimeout(function() {
            var btn = document.getElementById("Submit_btn");
            if(btn && btn.disabled && !document.querySelector('.g-recaptcha iframe')) {
                btn.disabled = false;
            }
        }, 3000);
    });
</script>

