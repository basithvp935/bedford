<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <link rel="canonical" href="#">
    <!--<title>@yield('title')</title>-->
    <title>Bedford Kindergarten - Best Preschool & Kindergarten in Qatar | Doha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon: Bedford Kindergarten Logo --}}
    <link rel="icon" type="image/jpeg" href="{{ asset('Front/images/beadford logo.jpeg') }}">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('Front/images/beadford logo.jpeg') }}">
    <link rel="apple-touch-icon" href="{{ asset('Front/images/beadford logo.jpeg') }}">
    
    <!-- NEW: Elegant Serif & Sans-Serif Fonts for Premium Montessori Aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.min.css') }}">
    <link href="{{ asset('Front/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('Front/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/jquery.fancybox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/slick-theme.css') }}" />
    
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('Front/css/toaster.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('Front/css/toast.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('Front/css/theme.css') }}" type="text/css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">

    <!-- Custom Style for Navbar Font & Topbar Social Icons -->
    <style>
        /* NEW: Apply the modern Sans-Serif font to the Desktop Navbar! */
        .navbar-nav .nav-link {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 500 !important;
            font-size: 0.85rem !important; /* Clean base size */
            padding-left: 0.6rem !important; /* Tighter default spacing */
            padding-right: 0.6rem !important;
            color: #1E244B !important; 
            letter-spacing: 1px;
            transition: color 0.3s ease;
            text-transform: uppercase;
            white-space: nowrap !important;
        }

        .navbar-nav .nav-link:hover, .navbar-nav .dropdown-item:hover {
            color: #F59F1E   !important; 
        }
        
        .navbar-nav .dropdown-item {
            font-family: 'Montserrat', sans-serif !important; 
            font-weight: 500 !important;
            font-size: 0.85rem !important;
            color: #1E244B !important;
            white-space: nowrap !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Desktop Admission Button - Bedford Style */
        .desktop-admission-btn {
            background-color: #F59F1E  !important; 
            background-image: none !important;
            border-color: #F59F1E !important; 
            color: #ffffff !important; 
            border-radius: 30px; 
            padding: 8px 20px !important; /* Slimmer default padding */
            font-weight: 600; 
            font-family: 'Montserrat', sans-serif !important; 
            font-size: 0.85rem !important;
            letter-spacing: 1px;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35);
            white-space: nowrap;
            transition: all 0.3s ease;
        }
        
        .desktop-admission-btn:hover {
            background-color: #E28C0A !important;
            background-image: none !important;
            border-color: #E28C0A !important;
            color: #ffffff !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 159, 30, 0.45);
        }
        
        /* Language Switcher Styling */
        .lang-switcher {
            display: flex;
            align-items: center;
            font-weight: 600 !important;
            color: #2F348B !important;
            padding: 6px 12px !important;
            border-radius: 20px;
            background: rgba(47, 52, 139, 0.08);
            transition: all 0.3s ease;
        }
        
        .lang-switcher:hover {
            background: rgba(47, 52, 139, 0.15);
            color: #F59F1E !important;
        }
        
        .lang-dropdown-menu {
            min-width: 120px !important;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.05);
            padding: 8px;
        }

        /* Topbar Social Buttons */
        .topbar-social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            color: #ffffff !important;
            font-size: 0.85rem;
            text-decoration: none;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }

        .topbar-social-btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .topbar-social-btn.fb { background-color: #1877F2; }
        .topbar-social-btn.x  { background-color: #000000; }
        .topbar-social-btn.in { background-color: #0A66C2; }
        .topbar-social-btn.ig { background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); }
        .topbar-social-btn.wa { background-color: #25D366; }
        .topbar-social-btn.yt { background-color: #FF0000; }

        /* Offcanvas Mobile Polish */
        .offcanvas-body .list-group-item {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.95rem;
            font-weight: 500;
            color: #3C4A3E;
            padding: 12px 16px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .offcanvas-body .list-group-item:hover {
            color: #F59F1E;
            background-color: #f8f9fa;
        }

        /* RESPONSIVE FIX: Prevent navbar items from spilling out on laptop screens (up to 1400px) */
        @media (min-width: 992px) and (max-width: 1400px) {
            .navbar-nav .nav-link {
                font-size: 0.8rem !important; /* Slightly shrink font for laptops */
                padding-left: 0.4rem !important; /* Shrink space between links */
                padding-right: 0.4rem !important;
                letter-spacing: 0.5px;
            }
            .desktop-admission-btn {
                padding: 6px 14px !important; /* Shrink button size */
                font-size: 0.75rem !important;
            }
            .nav-pill {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            /* Reduce gap between logo and links on laptop */
            .nav-pill > .d-flex {
                gap: 0.5rem !important; 
            }
            .brand img {
                max-height: 40px !important; /* Shrink logo slightly on laptop to save space */
            }
        }
        
        /* NEW: Apply the modern Sans-Serif font to the Mobile Navbar! */
        .offcanvas-body .list-group-item {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 500 !important;
            color: #1E244B !important;
            font-size: 1.1rem !important;
            border-color: rgba(0,0,0,0.05);
            text-transform: uppercase;
        }
        
        .offcanvas-body .list-group-item:hover {
            color: #2F348B !important;
            background-color: rgba(47, 52, 139, 0.05);
        }

        /* Language Switcher Button Styling */
        .lang-switcher {
            color: #2F348B !important; 
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 600 !important;
            font-size: 1.05rem !important;
            display: flex !important;
            align-items: center;
            gap: 5px;
            padding-right: 0 !important; 
        }
        
        .lang-switcher:hover {
            color: #F59F1E !important;
        }

        .lang-switcher::after {
            display: none !important; 
        }
        
        .lang-dropdown-menu {
            min-width: 90px !important;
            border-radius: 8px !important;
            margin-top: 10px !important; 
            margin-left: 0px !important; 
            padding: 6px 0 !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08) !important;
            border: none !important;
            z-index: 99999 !important;
        }
        
        .lang-dropdown-menu .dropdown-item {
            color: #2F348B !important;
            font-size: 0.95rem !important;
            font-weight: 600 !important;
            font-family: 'Montserrat', sans-serif !important;
            text-align: center !important;
            transition: all 0.3s ease;
            padding: 4px 10px !important;
        }
        
        .lang-dropdown-menu .dropdown-item:hover {
            background-color: rgba(47, 52, 139, 0.08) !important;
            color: #F59F1E !important;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <!--<div id="preloader">-->
    <!--    <div id="status">-->
    <!--        <div class="loadingio-spinner-ripple-lugcfdxo7g">-->
    <!--            <div class="ldio-l06yklwwb4i">-->
    <!--                <div></div>-->
    <!--                <div></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <header class="smart-header">
     <style>
         .smart-header {
             position: relative;
             width: 100%;
             z-index: 1050;
             transition: transform 0.3s ease-in-out, background-color 0.3s ease;
         }
         .smart-header.is-fixed {
             position: fixed;
             top: 0;
             left: 0;
             box-shadow: 0 4px 20px rgba(0,0,0,0.08);
             background: rgba(255, 255, 255, 0.98);
             backdrop-filter: blur(10px);
         }
         .smart-header.is-fixed.nav-down {
             transform: translateY(0);
         }
         .smart-header.is-fixed.nav-up {
             transform: translateY(-100%);
         }
     </style>
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             var lastScrollTop = 0;
             var header = document.querySelector('.smart-header');
             var delta = 10;

             window.addEventListener('scroll', function() {
                 var st = window.pageYOffset || document.documentElement.scrollTop;
                 
                 if (st > 200) {
                     if (!header.classList.contains('is-fixed')) {
                         header.classList.add('is-fixed');
                     }
                     
                     if (Math.abs(lastScrollTop - st) <= delta) return;
                     
                     if (st > lastScrollTop) {
                         // Scroll Down
                         header.classList.remove('nav-down');
                         header.classList.add('nav-up');
                     } else {
                         // Scroll Up
                         if(st + window.innerHeight < document.body.scrollHeight) {
                             header.classList.remove('nav-up');
                             header.classList.add('nav-down');
                         }
                     }
                 } else {
                     // Top of page
                     header.classList.remove('is-fixed');
                     header.classList.remove('nav-up');
                     header.classList.remove('nav-down');
                 }
                 lastScrollTop = st;
             });
         });
     </script>
      <!-- CRITICAL FIX: Added position: relative and z-index: 1050 to force Topbar to sit ON TOP of the nav-pill below it! -->
      <div style="background: linear-gradient(90deg, #2F348B 0%, #23276B 100%); padding: 3px 0px;">
      <div class="container-xxl topbar d-none d-md-block" style="overflow: visible !important; position: relative; z-index: 1050;">
        <div class="row g-2 align-items-center" style="overflow: visible !important;">
          
          <!-- LEFT SIDE: Email -->
          <div class="col-lg-6">
            <div class="d-flex flex-wrap gap-3 d-md-inline-block d-none">
              <a class="chip text-decoration-none" href="mailto:school@bedfordqatar.com" style="color: #fff !important; font-weight: 600; padding: 4px 15px; border-radius: 50px;">
                <!-- Updated icon color to Bedford Sunny Gold -->
                <i class="bi bi-envelope-fill me-1" style="color: #F59F1E !important; font-size: 1.1rem;"></i>
                <span style="font-family: 'Montserrat', sans-serif; font-size: 0.9rem;">school@bedfordqatar.com</span>
              </a>
            </div>
          </div>
          
          <!-- RIGHT SIDE: Phone + Social Icons -->
          <div class="col-lg-6 col-12">
            <div class="d-flex flex-wrap gap-3 justify-content-lg-end align-items-center">
              
              <!-- Phone Number -->
              <a class="chip d-md-inline-block d-none text-decoration-none" href="tel:+97440022130" style="color: #fff !important; font-weight: 600; margin-right: 0.5rem;  padding: 4px 15px; border-radius: 50px;">
                <!-- Updated icon color to Bedford Sunny Gold -->
                <i class="bi bi-telephone-fill me-1" style="color: #F59F1E !important; font-size: 1.1rem;"></i> 
                <span style="font-family: 'Montserrat', sans-serif; font-size: 0.9rem;">+974 40022130 / +974 30737731</span> 
              </a>
              
              <!-- Social Media Icons (With Brand Colors!) -->
              <div class="d-flex gap-2">
                <a href="https://www.facebook.com/profile.php?id=61562276597613" class="topbar-social-btn fb" target='_blank'><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bedfordqatar/" class="topbar-social-btn ig" target='_blank'><i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/@bedfordqatar" class="topbar-social-btn yt" target='_blank'><i class="bi bi-youtube"></i></a>
                <a href="https://wa.me/+97430737731" class="topbar-social-btn wa" target='_blank'><i class="bi bi-whatsapp"></i></a>
              </div>

            </div>
          </div>
          
        </div>
      </div>
</div>
      <!-- Main nav pill -->
      <!-- Added position: relative and a lower z-index (1040) so it explicitly stays UNDER the topbar (1050) -->
      <div class="container-xxl mt-1" style="position: relative; z-index: 1040;">
        <nav class="nav-pill px-3 px-lg-4 py-2">
          <!-- ADJUSTED: gap-1 gap-xl-3 provides more flexibility to prevent spilling -->
          <div class="d-flex align-items-center justify-content-between gap-1 gap-xl-3">
            <a class="brand" href="{{ route('main') }}">
              <img src="{{ asset('Front/images/beadford logo.jpeg') }}" alt="Bedford Kindergarten Logo" style="max-height: 48px; max-width: 100%; object-fit: contain;" />
            </a>

            <button
              class="btn btn-soft d-lg-none"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#mobileNav"
              aria-controls="mobileNav"
            >
              <i class="bi bi-list me-1"></i>
              Menu
            </button>

            <div class="d-none d-lg-flex align-items-center gap-1">
              <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('main') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >Our center</a
                  >
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('about_us') }}">Our Story</a></li>
                    <li><a class="dropdown-item" href="{{route('why-choose-us')}}">Why Choose Us</a></li>
                  </ul>
                </li>
                <!-- CHANGED: Removed the dropdown class, toggle functionality, and sub-menu -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('facilities') }}"> ENVIRONMENTS</a>
                </li>
                
                <!-- NEW ITEM ADDED HERE: Our Approach -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('the-bright-thread') }}"> OUR APPROACH</a>
                </li>

                 <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >Admission</a
                  >
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('admissionProcedure') }}">Admission Procedure</a></li>
                    <li><a class="dropdown-item" href="{{ route('admission') }}">Admission Form</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >Gallery</a
                  >
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('photo_gallery') }}">Photo Gallery</a></li>
                    <li><a class="dropdown-item" href="{{ route('video_gallery') }}">Video Gallery</a></li>
                  </ul>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
                </li>
                <!-- ADDED MISSING DESKTOP LANGUAGE SWITCHER -->
                <li class="nav-item dropdown d-none">
                  <a
                    class="nav-link dropdown-toggle lang-switcher"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="bi bi-globe me-1" style="font-size: 1.1rem;"></i>
                    <span id="desktopLangText">EN</span>
                  </a>
                  <ul class="dropdown-menu lang-dropdown-menu">
                    <li>
                      <a
                        class="dropdown-item"
                        href="#"
                        id="desktopLangOption"
                        onclick="switchLanguage(event)"
                        >Arabic</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

            <!-- FIXED ADMISSION BUTTON (Desktop) -->
            <div class="d-none d-lg-flex align-items-center">
              <a
                class="btn cta desktop-admission-btn d-inline-flex align-items-center gap-2"
                href="{{ route('admission') }}"
              >
                Admission<i class="bi bi-arrow-right"></i>
              </a>
            </div>
            
          </div>
        </nav>
      </div>
    </header>

  <!-- Mobile offcanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mobileNavLabel"
        style="color: #3C4A3E; font-family: 'Playfair Display', serif; font-weight: 600;">
        Menu
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-flex align-items-center gap-3 mb-3">
        <img src="{{ asset('Front/images/beadford logo.jpeg') }}" alt="Bedford Kindergarten Logo" style="height: 38px; width: auto; object-fit: contain;" />
      </div>
      <div class="list-group">
        <a class="list-group-item list-group-item-action" href="{{ route('main') }}">Home</a>
        
        <!-- Mobile Our Center Dropdown -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse" href="#mobileOurCenterCollapse" role="button" aria-expanded="false" aria-controls="mobileOurCenterCollapse">Our Center</a>
        <div class="collapse" id="mobileOurCenterCollapse">
          <a class="list-group-item list-group-item-action border-0 ps-4 bg-light" href="{{ route('about_us') }}" style="font-family: 'Montserrat', sans-serif !important; font-size: 0.9rem !important;">Our Story</a>
          <a class="list-group-item list-group-item-action border-0 ps-4 bg-light" href="{{ route('why-choose-us') }}" style="font-family: 'Montserrat', sans-serif !important; font-size: 0.9rem !important;">Why Choose Us</a>
        </div>

        <a class="list-group-item list-group-item-action" href="{{ route('facilities') }}">Environments</a>
        
        <a class="list-group-item list-group-item-action" href="{{ route('the-bright-thread') }}">Our Approach</a>

        <!-- Mobile Admission Dropdown -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse" href="#mobileAdmissionCollapse" role="button" aria-expanded="false" aria-controls="mobileAdmissionCollapse">Admission</a>
        <div class="collapse" id="mobileAdmissionCollapse">
          <a class="list-group-item list-group-item-action border-0 ps-4 bg-light" href="{{ route('admissionProcedure') }}" style="font-family: 'Montserrat', sans-serif !important; font-size: 0.9rem !important;">Admission Procedure</a>
          <a class="list-group-item list-group-item-action border-0 ps-4 bg-light" href="{{ route('admission') }}" style="font-family: 'Montserrat', sans-serif !important; font-size: 0.9rem !important;">Admission Form</a>
        </div>
        
        <!-- Mobile Gallery Dropdown -->
        <a class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse" href="#mobileGalleryCollapse" role="button" aria-expanded="false" aria-controls="mobileGalleryCollapse">Gallery</a>
        <div class="collapse" id="mobileGalleryCollapse">
          <a class="list-group-item list-group-item-action border-0 ps-4 bg-light" href="{{ route('photo_gallery') }}" style="font-family: 'Montserrat', sans-serif !important; font-size: 0.9rem !important;">Photo Gallery</a>
          <a class="list-group-item list-group-item-action border-0 ps-4 bg-light" href="{{ route('video_gallery') }}" style="font-family: 'Montserrat', sans-serif !important; font-size: 0.9rem !important;">Video Gallery</a>
        </div>
        
        <a class="list-group-item list-group-item-action" href="{{ route('contact_us') }}">Contact Us</a>
        
        <!-- Mobile Language Dropdown -->
        <a class="list-group-item list-group-item-action d-flex align-items-center gap-2 dropdown-toggle d-none" data-bs-toggle="collapse" href="#mobileLangCollapse" role="button" aria-expanded="false" aria-controls="mobileLangCollapse" style="color: #7A8B6F !important; font-family: 'Montserrat', sans-serif !important; font-weight: 600 !important;">
          <i class="bi bi-globe" style="font-size: 1.2rem;"></i> <span id="mobileLangText">EN</span> <i class="bi bi-chevron-down ms-auto" style="font-size: 0.85rem;"></i>
        </a>
        <div class="collapse d-none" id="mobileLangCollapse">
          <a class="list-group-item list-group-item-action border-0 ps-5 bg-light" href="#" style="color: #2F348B !important; font-family: 'Montserrat', sans-serif !important; font-weight: 500 !important; font-size: 0.9rem !important;" id="mobileLangOption" onclick="switchLanguage(event)">Arabic</a>
        </div>
        
      </div>
      
      <!-- FIXED ADMISSION BUTTON (Mobile) -->
      <div class="d-grid gap-2 mt-3">
        <a class="btn cta text-center" 
           style="background-color: #F59F1E !important; background-image: none !important; border-color: #F59F1E !important; color: #ffffff !important; border-radius: 50px; padding: 12px; font-weight: 600; font-family: 'Montserrat', sans-serif; letter-spacing: 1px; text-transform: uppercase; box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35);" 
           href="{{ route('admission') }}">Admission</a>
      </div>
      
    </div>
  </div>
   
    @php
    $academic_calendar = App\Models\HomePage::find(1);
    @endphp

    <!-- JS script to handle visual language swapping! -->
    <script>
        function switchLanguage(e) {
            e.preventDefault(); // Prevent page reload
            
            // Get elements
            const desktopText = document.getElementById('desktopLangText');
            const desktopOption = document.getElementById('desktopLangOption');
            const mobileText = document.getElementById('mobileLangText');
            const mobileOption = document.getElementById('mobileLangOption');
            
            if (desktopText && desktopText.innerText.trim() === 'EN') {
                // Switch to Arabic View
                if(desktopText) desktopText.innerText = 'AR';
                if(desktopOption) desktopOption.innerText = 'English';
                if(mobileText) mobileText.innerText = 'AR';
                if(mobileOption) mobileOption.innerText = 'English';
            } else {
                // Switch back to English View
                if(desktopText) desktopText.innerText = 'EN';
                if(desktopOption) desktopOption.innerText = 'Arabic';
                if(mobileText) mobileText.innerText = 'EN';
                if(mobileOption) mobileOption.innerText = 'Arabic';
            }
        }
    </script>
</body>
</html>
