<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="" />
  <meta name="author" content="">
  <link rel="canonical" href="#">
  <title>Bedford Kindergarten Qatar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- NEW: Google Font "Nunito" which perfectly matches the rounded, friendly logo font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.min.css') }}">
  <link href="{{ asset('Front/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('Front/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('Front/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Front/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Front/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('Front/css/jquery.fancybox.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/slick.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/slick-theme.css') }}" />

  <!-- Updated Favicon to use your main Bright Beginnings logo -->
  <link rel="icon" type="image/png" href="{{ asset('Front/images/logo1.png') }}" />
  <link rel="shortcut icon" href="{{ asset('Front/images/logo1.png') }}" />

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="{{ asset('Front/css/toaster.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('Front/css/toast.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('Front/css/theme.css') }}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
    rel="stylesheet">

  <!-- Custom Style for Navbar Font & Topbar Social Icons -->
  <style>
    /* NEW: Apply the rounded logo font to the Desktop Navbar! */
    .navbar-nav .nav-link {
      font-family: 'Nunito', sans-serif !important;
      font-weight: 700 !important;
      font-size: 0.9rem !important;
      /* Decreased font size */
      color: #1a2b4c;
      /* Deep blue from the logo */
      letter-spacing: 0.2px;
      transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .dropdown-item:hover {
      color: #9D74B4 !important;
      /* Bright Beginnings Purple hover effect */
    }

    .navbar-nav .dropdown-item {
      font-family: 'Nunito', sans-serif !important;
      font-weight: 600 !important;
      font-size: 0.9rem !important;
      /* Decreased font size */
      color: #1a2b4c;
    }

    /* NEW: Apply the rounded logo font to the Mobile Navbar! */
    .offcanvas-body .list-group-item {
      font-family: 'Nunito', sans-serif !important;
      font-weight: 700 !important;
      color: #1a2b4c;
      font-size: 0.95rem !important;
      /* Decreased font size */
      border-color: rgba(0, 0, 0, 0.05);
    }

    .offcanvas-body .list-group-item:hover {
      color: #9D74B4 !important;
      background-color: rgba(157, 116, 180, 0.05);
    }

    /* Topbar Social Button Styles */
    .topbar-social-btn {
      width: 32px;
      height: 32px;
      background-color: #ffffff;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      font-size: 0.9rem;
    }

    /* Official Brand Colors */
    .topbar-social-btn.fb {
      color: #1877F2;
    }

    .topbar-social-btn.x {
      color: #000000;
    }

    .topbar-social-btn.in {
      color: #0A66C2;
    }

    .topbar-social-btn.ig {
      color: #E4405F;
    }

    /* Turns White with Purple background on Hover */
    .topbar-social-btn:hover {
      background-color: #9D74B4;
      color: #ffffff !important;
      transform: translateY(-2px);
    }
  </style>

</head>

<body>

  <header class="pt-3">
    <div class="container-xxl topbar">
      <div class="row g-2 align-items-center">

        <!-- LEFT SIDE: Email -->
        <div class="col-lg-6">
          <div class="d-flex flex-wrap gap-3 d-md-inline-block d-none">
            <a class="chip text-decoration-none" href="mailto:info@brightbeginningsksa.com"
              style="color: #4a5568 !important; font-weight: 600;">
              <i class="bi bi-envelope-fill me-1" style="color: #9D74B4 !important; font-size: 1.1rem;"></i>
              <span>info@brightbeginningsksa.com</span>
            </a>
          </div>
        </div>

        <!-- RIGHT SIDE: Phone + Social Icons -->
        <div class="col-lg-6 col-12">
          <div class="d-flex flex-wrap gap-3 justify-content-lg-end align-items-center">

            <!-- Phone Number -->
            <a class="chip d-md-inline-block d-none text-decoration-none" href="tel:+966596003218"
              style="color: #4a5568 !important; font-weight: 600; margin-right: 0.5rem;">
              <i class="bi bi-telephone-fill me-1" style="color: #9D74B4 !important; font-size: 1.1rem;"></i>
              <span>+966 59 600 3218</span>
            </a>

            <!-- Social Media Icons (With Brand Colors!) -->
            <div class="d-flex gap-2">
              <a href="#" class="topbar-social-btn fb"><i class="bi bi-facebook"></i></a>
              <a href="#" class="topbar-social-btn x"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="topbar-social-btn in"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="topbar-social-btn ig"><i class="bi bi-instagram"></i></a>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- Main nav pill -->
    <div class="container-xxl mt-3">
      <nav class="nav-pill px-3 px-lg-4 py-2">
        <div class="d-flex align-items-center justify-content-between gap-3">
          <a class="brand" href="#">
            <img src="{{ asset('Front/images/beadford logo.jpeg') }}" alt="Brand logo" />
          </a>

          <button class="btn btn-soft d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav"
            aria-controls="mobileNav">
            <i class="bi bi-list me-1"></i>
            Menu
          </button>

          <div class="d-none d-lg-flex align-items-center gap-1">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item dropdown">
                <a class="nav-link " href="{{ route('main') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">Our center</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('about_us') }}">About Us</a></li>
                  <li><a class="dropdown-item" href="{{route('public-disclosur')}}">Mandatory Public Disclosure</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">OUR ENVIRONMENTS</a>
                <ul class="dropdown-menu">
                  <!--<li><a class="dropdown-item" href="#">Head of Institution</a></li>-->
                  <!--<li><a class="dropdown-item" href="#">Management Committtee</a></li>-->
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admissionProcedure') }}">Admission</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">Gallery</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('photo_gallery') }}">Photo Gallery</a></li>
                  <li><a class="dropdown-item" href="{{ route('video_gallery') }}">Video Gallery</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('facilities') }}">Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
              </li>
            </ul>
          </div>

          <!-- FIXED ADMISSION BUTTON (Desktop) -->
          <div class="d-none d-lg-flex align-items-center gap-3">
            <a class="btn cta d-inline-flex align-items-center gap-2"
              style="background-color: #9D74B4 !important; border-color: #9D74B4 !important; color: #ffffff !important; border-radius: 50px; padding: 10px 24px; font-weight: 700; font-family: 'Nunito', sans-serif; box-shadow: 0 4px 15px rgba(157, 116, 180, 0.3);"
              href="{{ route('admissionProcedure') }}">
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
        style="color: var(--c-navy); font-family: 'Nunito', sans-serif; font-weight: 800;">
        Menu
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-flex align-items-center gap-3 mb-3">
        <img src="{{ asset('Front/images/beadford logo.jpeg') }}" alt="Brand logo" style="height: 34px; width: auto" />
      </div>
      <div class="list-group">
        <a class="list-group-item list-group-item-action" href="#">Home</a>
        <a class="list-group-item list-group-item-action" href="#">Our School</a>
        <a class="list-group-item list-group-item-action" href="#">Management</a>
        <a class="list-group-item list-group-item-action" href="#">Admission</a>
        <a class="list-group-item list-group-item-action" href="#">Gallery</a>
        <a class="list-group-item list-group-item-action" href="#">Facilities</a>
        <a class="list-group-item list-group-item-action" href="#">Contact Us</a>
      </div>

      <!-- FIXED ADMISSION BUTTON (Mobile) -->
      <div class="d-grid gap-2 mt-3">
        <a class="btn cta text-center"
          style="background-color: #9D74B4 !important; border-color: #9D74B4 !important; color: #ffffff !important; border-radius: 50px; padding: 12px; font-weight: 700; font-family: 'Nunito', sans-serif; box-shadow: 0 4px 15px rgba(157, 116, 180, 0.3);"
          href="#">Admission</a>
      </div>

    </div>
  </div>

  @php
    $academic_calendar = App\Models\HomePage::find(1);
  @endphp
  <html lang="en">

  <head>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <link rel="canonical" href="#">
    <title>Bedford Kindergarten Qatar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- NEW: Google Font "Nunito" which perfectly matches the rounded, friendly logo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.min.css') }}">
    <link href="{{ asset('Front/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('Front/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/jquery.fancybox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/slick-theme.css') }}" />

    <!-- Updated Favicon to use your main Bright Beginnings logo -->
    <link rel="icon" type="image/png" href="{{ asset('Front/images/logo1.png') }}" />
    <link rel="shortcut icon" href="{{ asset('Front/images/logo1.png') }}" />

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('Front/css/toaster.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('Front/css/toast.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('Front/css/theme.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
      rel="stylesheet">

    <!-- Custom Style for Navbar Font & Topbar Social Icons -->
    <style>
      /* NEW: Apply the rounded logo font to the Desktop Navbar! */
      .navbar-nav .nav-link {
        font-family: 'Nunito', sans-serif !important;
        font-weight: 700 !important;
        font-size: 0.9rem !important;
        /* Decreased font size */
        color: #1a2b4c;
        /* Deep blue from the logo */
        letter-spacing: 0.2px;
        transition: color 0.3s ease;
      }

      .navbar-nav .nav-link:hover,
      .navbar-nav .dropdown-item:hover {
        color: #9D74B4 !important;
        /* Bright Beginnings Purple hover effect */
      }

      .navbar-nav .dropdown-item {
        font-family: 'Nunito', sans-serif !important;
        font-weight: 600 !important;
        font-size: 0.9rem !important;
        /* Decreased font size */
        color: #1a2b4c;
      }

      /* NEW: Apply the rounded logo font to the Mobile Navbar! */
      .offcanvas-body .list-group-item {
        font-family: 'Nunito', sans-serif !important;
        font-weight: 700 !important;
        color: #1a2b4c;
        font-size: 0.95rem !important;
        /* Decreased font size */
        border-color: rgba(0, 0, 0, 0.05);
      }

      .offcanvas-body .list-group-item:hover {
        color: #9D74B4 !important;
        background-color: rgba(157, 116, 180, 0.05);
      }

      /* Topbar Social Button Styles */
      .topbar-social-btn {
        width: 32px;
        height: 32px;
        background-color: #ffffff;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        font-size: 0.9rem;
      }

      /* Official Brand Colors */
      .topbar-social-btn.fb {
        color: #1877F2;
      }

      .topbar-social-btn.x {
        color: #000000;
      }

      .topbar-social-btn.in {
        color: #0A66C2;
      }

      .topbar-social-btn.ig {
        color: #E4405F;
      }

      /* Turns White with Purple background on Hover */
      .topbar-social-btn:hover {
        background-color: #9D74B4;
        color: #ffffff !important;
        transform: translateY(-2px);
      }
    </style>

  </head>

  <body>

    <header class="pt-3">
      <div class="container-xxl topbar">
        <div class="row g-2 align-items-center">

          <!-- LEFT SIDE: Email -->
          <div class="col-lg-6">
            <div class="d-flex flex-wrap gap-3 d-md-inline-block d-none">
              <a class="chip text-decoration-none" href="mailto:info@brightbeginningsksa.com"
                style="color: #4a5568 !important; font-weight: 600;">
                <i class="bi bi-envelope-fill me-1" style="color: #9D74B4 !important; font-size: 1.1rem;"></i>
                <span>info@brightbeginningsksa.com</span>
              </a>
            </div>
          </div>

          <!-- RIGHT SIDE: Phone + Social Icons -->
          <div class="col-lg-6 col-12">
            <div class="d-flex flex-wrap gap-3 justify-content-lg-end align-items-center">

              <!-- Phone Number -->
              <a class="chip d-md-inline-block d-none text-decoration-none" href="tel:+966596003218"
                style="color: #4a5568 !important; font-weight: 600; margin-right: 0.5rem;">
                <i class="bi bi-telephone-fill me-1" style="color: #9D74B4 !important; font-size: 1.1rem;"></i>
                <span>+966 59 600 3218</span>
              </a>

              <!-- Social Media Icons (With Brand Colors!) -->
              <div class="d-flex gap-2">
                <a href="#" class="topbar-social-btn fb"><i class="bi bi-facebook"></i></a>
                <a href="#" class="topbar-social-btn x"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="topbar-social-btn in"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="topbar-social-btn ig"><i class="bi bi-instagram"></i></a>
              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- Main nav pill -->
      <div class="container-xxl mt-3">
        <nav class="nav-pill px-3 px-lg-4 py-2">
          <div class="d-flex align-items-center justify-content-between gap-3">
            <a class="brand" href="#">
              <img src="{{ asset('Front/images/beadford logo.jpeg') }}" alt="Brand logo" />
            </a>

            <button class="btn btn-soft d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav"
              aria-controls="mobileNav">
              <i class="bi bi-list me-1"></i>
              Menu
            </button>

            <div class="d-none d-lg-flex align-items-center gap-1">
              <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item dropdown">
                  <a class="nav-link " href="{{ route('main') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Our center</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('about_us') }}">About Us</a></li>
                    <li><a class="dropdown-item" href="{{route('public-disclosur')}}">Mandatory Public Disclosure</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">OUR ENVIRONMENTS</a>
                  <ul class="dropdown-menu">
                    <!--<li><a class="dropdown-item" href="#">Head of Institution</a></li>-->
                    <!--<li><a class="dropdown-item" href="#">Management Committtee</a></li>-->
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admissionProcedure') }}">Admission</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Gallery</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('photo_gallery') }}">Photo Gallery</a></li>
                    <li><a class="dropdown-item" href="{{ route('video_gallery') }}">Video Gallery</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('facilities') }}">Facilities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
                </li>
              </ul>
            </div>

            <!-- FIXED ADMISSION BUTTON (Desktop) -->
            <div class="d-none d-lg-flex align-items-center gap-3">
              <a class="btn cta d-inline-flex align-items-center gap-2"
                style="background-color: #9D74B4 !important; border-color: #9D74B4 !important; color: #ffffff !important; border-radius: 50px; padding: 10px 24px; font-weight: 700; font-family: 'Nunito', sans-serif; box-shadow: 0 4px 15px rgba(157, 116, 180, 0.3);"
                href="{{ route('admissionProcedure') }}">
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
          style="color: var(--c-navy); font-family: 'Nunito', sans-serif; font-weight: 800;">
          Menu
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex align-items-center gap-3 mb-3">
          <img src="{{ asset('Front/images/beadford logo.jpeg') }}" alt="Brand logo" style="height: 34px; width: auto" />
        </div>
        <div class="list-group">
          <a class="list-group-item list-group-item-action" href="#">Home</a>
          <a class="list-group-item list-group-item-action" href="#">Our School</a>
          <a class="list-group-item list-group-item-action" href="#">Management</a>
          <a class="list-group-item list-group-item-action" href="#">Admission</a>
          <a class="list-group-item list-group-item-action" href="#">Gallery</a>
          <a class="list-group-item list-group-item-action" href="#">Facilities</a>
          <a class="list-group-item list-group-item-action" href="#">Contact Us</a>
        </div>

        <!-- FIXED ADMISSION BUTTON (Mobile) -->
        <div class="d-grid gap-2 mt-3">
          <a class="btn cta text-center"
            style="background-color: #9D74B4 !important; border-color: #9D74B4 !important; color: #ffffff !important; border-radius: 50px; padding: 12px; font-weight: 700; font-family: 'Nunito', sans-serif; box-shadow: 0 4px 15px rgba(157, 116, 180, 0.3);"
            href="#">Admission</a>
        </div>

      </div>
    </div>

    @php
      $academic_calendar = App\Models\HomePage::find(1);
    @endphp