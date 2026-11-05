@section('title', 'Bedford Kindergarten - Best Preschool & Kindergarten in Qatar | Doha')
@section('description', 'Welcome to Bedford Kindergarten Qatar in Barwa Madinatna, Doha. Providing British EYFS and Montessori early childhood education. Nurture the Tiny Minds; Cherish the Future.')
@section('home', 'active')

@include('front.layouts.header')
<div class="bg-grid">
    <style>
        /* Import Elegant Serif, Clean Sans-Serif, and Handwritten Script Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap');

        html,
        body {
            font-family: 'Montserrat', sans-serif;
            color: #4A5568;
            background-color: #F8FAFC;
            overflow-x: hidden;
            /* Prevents scrollbar from the moving clouds */
            width: 100%;
            max-width: 100vw;
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
        .display-2,
        .section-heading,
        .title-heading,
        .notice-box h5,
        .overlay-title,
        .gallery-label {
            font-family: 'Playfair Display', serif;
            color: #2F348B;
            /* Bedford Royal Indigo */
            font-weight: 500;
        }

        /* Tracked out uppercase styling for main headers */
        .section-heading,
        .about-title {
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        /* Elegant handwriting font */
        .script-font {
            font-family: 'Great Vibes', cursive;
            color: #2F348B;
            /* Bedford Royal Indigo */
            font-size: 2.8rem;
            line-height: 1.2;
            font-weight: 400;
            text-transform: none;
            letter-spacing: 1px;
        }

        /* ------------------------------------------- */
        /* Organic Section Background Colors           */
        /* ------------------------------------------- */
        .bg-grid {
            background-color: #F8FAFC;
        }

        .about.home-about {
            background-color: #F8FAFC !important;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .calendar-enhanced {
            background-color: #EEF2FB !important;
            /* Soft Indigo/Slate Background */
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .explore-enhanced {
            background-color: #F8FAFC !important;
            position: relative;
            z-index: 1;
        }

        .facilities-enhanced {
            background-color: #F8FAFC !important;
            /* Warm clean canvas */
            position: relative;
            z-index: 2;
            /* Increased z-index to sit above the grid */
            overflow: hidden;
        }

        .news-events-enhanced {
            background-color: #F8FAFC !important;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        /* ------------------------------------------- */
        /* Icon & Blob Placements                      */
        /* ------------------------------------------- */
        .aesthetic-icon {
            position: absolute;
            z-index: 0;
            opacity: 0.85;
            pointer-events: none;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(2deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        @keyframes float-reverse {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(15px) rotate(-2deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        @keyframes slow-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Horizontal Moving Cloud Animations (Two Speeds for Parallax Effect) */
        @keyframes move-cloud-horizontal-1 {
            0% {
                left: -25%;
                transform: translateY(0px) scale(1.1);
            }

            100% {
                left: 110%;
                transform: translateY(0px) scale(1.1);
            }
        }

        @keyframes move-cloud-horizontal-2 {
            0% {
                left: -15%;
                transform: translateY(0px) scale(0.7);
            }

            100% {
                left: 115%;
                transform: translateY(0px) scale(0.7);
            }
        }

        .moving-cloud-1 {
            position: absolute;
            z-index: 0;
            pointer-events: none;
            animation: move-cloud-horizontal-1 32s linear infinite;
            color: #FFFFFF;
            opacity: 0.9;
        }

        .moving-cloud-2 {
            position: absolute;
            z-index: 0;
            pointer-events: none;
            animation: move-cloud-horizontal-2 48s linear infinite;
            color: #EEF2FB;
            opacity: 0.8;
        }

        /* Ensure content stays above the aesthetic background icons */
        .about-portrait-wrap,
        .about-stats,
        .in-txt,
        .about-title,
        .about h4,
        .script-font,
        .event-cnd,
        .facilities-cards,
        .news-card {
            position: relative;
            z-index: 2;
        }

        /* Typography & UI adjustments */
        .hero-kids .display-2 {
            line-height: 1.2;
            margin-bottom: 25px;
            text-transform: none;
            letter-spacing: 0.5px;
            font-size: 3.5rem;
            color: #2F348B;
        }

        .hero-kids {
            /* Removed overflow: hidden so butterfly can fly above navbar */
        }

        .hero-kids .display-2 .sun {
            color: #F59F1E;
            /* Bedford Sunny Gold */
            font-weight: 500;
            font-style: italic;
            font-size: 1em;
        }

        .hero-kids .display-2 .plum {
            color: #1E244B;
            font-weight: 400;
        }

        .hero-kids p {
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            color: #4A5568;
        }

        .kicker,
        .about-kicker,
        .section-kicker,
        .calendar-hero-chip {
            font-family: 'Montserrat', sans-serif !important;
            color: #2F348B !important;
            letter-spacing: 2px !important;
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        .kicker .dot,
        .about-kicker .dot,
        .section-kicker .dot,
        .calendar-hero-chip .dot {
            background-color: #F59F1E !important;
        }

        .btn-primary.cta,
        .main-btn {
            background-color: #F59F1E !important;
            background-image: none !important;
            border-color: #F59F1E !important;
            color: #FFFFFF !important;
            border-radius: 30px !important;
            padding: 12px 30px !important;
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 600 !important;
            letter-spacing: 1px !important;
            text-transform: uppercase !important;
            font-size: 0.85rem !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35) !important;
        }

        .btn-primary.cta:hover,
        .main-btn:hover {
            background-color: #E28C0A !important;
            background-image: none !important;
            border-color: #E28C0A !important;
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 159, 30, 0.45) !important;
        }

        .about-title .t1 {
            color: #2F348B;
        }

        .about-title .t2 {
            color: #F59F1E;
            font-style: italic;
        }

        /* =========================================== */
        /* OUR STORY Section (PREMIUM DESIGN)         */
        /* =========================================== */
        .ourstory-kicker-pill {
            background: linear-gradient(135deg, rgba(47, 52, 139, 0.08) 0%, rgba(245, 159, 30, 0.12) 100%);
            border: 1px solid rgba(47, 52, 139, 0.16);
            border-radius: 30px;
            padding: 6px 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.76rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #2F348B;
            box-shadow: 0 3px 10px rgba(47, 52, 139, 0.04);
            margin-bottom: 0.8rem;
        }

        .ourstory-kicker-pill .pill-dot {
            width: 7px;
            height: 7px;
            background-color: #F59F1E;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 6px rgba(245, 159, 30, 0.6);
        }

        .ourstory-main-title {
            font-family: 'Playfair Display', serif !important;
            font-weight: 600 !important;
            color: #1E244B !important;
            font-size: 2.5rem !important;
            line-height: 1.2;
            letter-spacing: 0.2px;
            margin-bottom: 0.6rem;
        }

        .ourstory-main-title .highlight-gold {
            color: #F59F1E;
            font-style: italic;
        }

        .ourstory-tagline-wrap {
            margin-bottom: 0.8rem;
        }

        .ourstory-script-text {
            font-family: 'Great Vibes', cursive !important;
            font-size: 2.4rem !important;
            color: #2F348B !important;
            line-height: 1.2;
            letter-spacing: 0.5px;
            display: inline-block;
        }

        .ourstory-intro-lead {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.96rem !important;
            line-height: 1.7 !important;
            color: #4A5568 !important;
            margin-bottom: 1.6rem;
            text-align: justify;
        }

        /* Premium Pillar Cards */
        .ourstory-cards-container {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            margin-bottom: 1.6rem;
        }

        .ourstory-card-premium {
            background: #FFFFFF;
            border: 1px solid rgba(47, 52, 139, 0.1);
            border-radius: 20px;
            padding: 1.6rem 1.8rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(47, 52, 139, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .ourstory-card-premium:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 40px rgba(47, 52, 139, 0.08);
            border-color: rgba(47, 52, 139, 0.25);
        }

        .ourstory-card-premium.card-gold {
            border-left: 4px solid #F59F1E;
        }

        .ourstory-card-premium.card-indigo {
            border-left: 4px solid #2F348B;
        }

        .ourstory-card-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 0.75rem;
        }

        .ourstory-icon-badge {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .ourstory-icon-badge.badge-gold {
            background: linear-gradient(135deg, #F59F1E 0%, #E28C0A 100%);
            color: #FFFFFF;
        }

        .ourstory-icon-badge.badge-indigo {
            background: linear-gradient(135deg, #2F348B 0%, #1E244B 100%);
            color: #FFFFFF;
        }

        .ourstory-tag {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            display: block;
            margin-bottom: 2px;
        }

        .ourstory-tag.tag-gold {
            color: #F59F1E;
        }

        .ourstory-tag.tag-indigo {
            color: #2F348B;
        }

        .ourstory-card-title {
            font-family: 'Playfair Display', serif !important;
            font-size: 1.25rem !important;
            font-weight: 600 !important;
            color: #1E244B !important;
            margin: 0 !important;
            line-height: 1.3;
        }

        .ourstory-card-desc {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.9rem !important;
            line-height: 1.7 !important;
            color: #5A6A85 !important;
            margin: 0 !important;
            text-align: justify;
        }

        /* Metrics Bar */
        .ourstory-stats-ribbon {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            background: linear-gradient(135deg, #F8FAFC 0%, #EEF2FB 100%);
            border: 1px solid rgba(47, 52, 139, 0.1);
            border-radius: 16px;
            padding: 1rem 1.2rem;
            margin-bottom: 1.6rem;
        }

        .ourstory-stat-item {
            text-align: center;
            border-right: 1px solid rgba(47, 52, 139, 0.1);
            padding: 0 8px;
        }

        .ourstory-stat-item:last-child {
            border-right: none;
        }

        .ourstory-stat-value {
            font-family: 'Playfair Display', serif !important;
            font-size: 1.5rem !important;
            font-weight: 700 !important;
            color: #2F348B !important;
            line-height: 1.1;
            margin-bottom: 2px;
        }

        .ourstory-stat-label {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.72rem !important;
            font-weight: 600 !important;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #64748B !important;
        }

        /* Right Column Hero Portrait */
        .ourstory-portrait-frame {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(47, 52, 139, 0.12);
            border: 4px solid #FFFFFF;
            background: #EEF2FB;
        }

        .ourstory-portrait-frame img {
            width: 100%;
            height: auto;
            min-height: 520px;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.2, 1, 0.3, 1);
        }

        .ourstory-portrait-frame:hover img {
            transform: scale(1.03);
        }

        .ourstory-floating-badge {
            position: absolute;
            bottom: 18px;
            left: 18px;
            right: 18px;
            background: rgba(47, 52, 139, 0.92);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(245, 159, 30, 0.35);
            border-radius: 16px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #FFFFFF;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .ourstory-floating-badge .badge-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: linear-gradient(135deg, #F59F1E 0%, #E28C0A 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(245, 159, 30, 0.4);
        }

        .ourstory-floating-badge .badge-text strong {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 0.94rem;
            color: #FFFFFF;
            line-height: 1.2;
        }

        .ourstory-floating-badge .badge-text span {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.74rem;
            color: #F59F1E;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
        }

        /* ------------------------------------------- */
        /* Feature Cards Section (NEW)                 */
        /* ------------------------------------------- */
        .features-section {
            background-color: #F8FAFC;
            position: relative;
            z-index: 1;
        }

        .feature-card {
            background: linear-gradient(145deg, #FFFFFF 0%, #F8FAFC 100%);
            border-radius: 20px;
            border: 1px solid rgba(47, 52, 139, 0.1);
            box-shadow: 0 15px 40px rgba(47, 52, 139, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        }

        .feature-card:hover {
            background: #EEF2FB;
            /* Soft Indigo background on hover */
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(47, 52, 139, 0.08);
            border-color: rgba(47, 52, 139, 0.25);
        }

        .feature-heading {
            font-family: 'Playfair Display', serif;
            color: #2F348B;
            /* Bedford Royal Indigo */
            font-weight: 500;
            font-size: 1.5rem;
        }

        .feature-text {
            font-family: 'Montserrat', sans-serif;
            color: #4A5568;
            font-size: 0.95rem;
            line-height: 1.8;
            font-weight: 400;
        }

        /* =========================================== */
        /* Principal's Welcome Section (2-COL PREMIUM) */
        /* =========================================== */
        .president-msg {
            position: relative;
            background: radial-gradient(circle at 50% 30%, rgba(245, 159, 30, 0.04) 0%, rgba(47, 52, 139, 0.02) 60%, transparent 100%);
            padding-top: 2.2rem !important;
            padding-bottom: 2.8rem !important;
        }

        .president-card-premium {
            background: #FFFFFF !important;
            border-radius: 24px !important;
            position: relative;
            overflow: hidden;
            padding: 2.2rem 2.4rem !important;
            box-shadow: 
                0 20px 50px -15px rgba(47, 52, 139, 0.09),
                0 0 0 1px rgba(47, 52, 139, 0.07) !important;
            border: none !important;
        }

        .president-card-premium::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2F348B 0%, #F59F1E 50%, #2F348B 100%);
            z-index: 5;
        }

        /* Principal Photo Frame (Left Column) */
        .principal-photo-frame {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 14px 35px rgba(47, 52, 139, 0.12);
            border: 3px solid #FFFFFF;
            height: 100%;
            min-height: 430px;
            background: #EEF2FB;
        }

        .principal-photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            transition: transform 0.6s cubic-bezier(0.2, 1, 0.3, 1);
            display: block;
        }

        .principal-photo-frame:hover img {
            transform: scale(1.03);
        }

        .principal-photo-badge {
            position: absolute;
            bottom: 14px;
            left: 14px;
            right: 14px;
            background: rgba(47, 52, 139, 0.92);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(245, 159, 30, 0.35);
            border-radius: 14px;
            padding: 10px 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #FFFFFF;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
        }

        .principal-photo-badge .badge-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, #F59F1E 0%, #E28C0A 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(245, 159, 30, 0.4);
        }

        .principal-photo-badge .badge-text strong {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 0.88rem;
            color: #FFFFFF;
            line-height: 1.2;
            letter-spacing: 0.3px;
        }

        .principal-photo-badge .badge-text span {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.72rem;
            color: #F59F1E;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-weight: 500;
        }

        /* Principal Content (Right Column) */
        .principal-kicker-pill {
            background: linear-gradient(135deg, rgba(47, 52, 139, 0.07) 0%, rgba(245, 159, 30, 0.1) 100%);
            border: 1px solid rgba(47, 52, 139, 0.15);
            border-radius: 30px;
            padding: 5px 16px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.74rem;
            font-weight: 600;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: #2F348B;
            box-shadow: 0 3px 10px rgba(47, 52, 139, 0.04);
            margin-bottom: 0.5rem;
        }

        .principal-kicker-pill .pill-dot {
            width: 7px;
            height: 7px;
            background-color: #F59F1E;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 6px rgba(245, 159, 30, 0.6);
        }

        .principal-name-title {
            font-family: 'Playfair Display', serif !important;
            font-weight: 600 !important;
            color: #1E244B !important;
            font-size: 2.1rem !important;
            letter-spacing: 0.3px;
            margin-top: 0.2rem;
            margin-bottom: 0.2rem;
            line-height: 1.2;
        }

        .principal-role-subtitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.82rem;
            font-weight: 600;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: #F59F1E;
            margin-bottom: 0.9rem;
            display: block;
        }

        .principal-lead-quote {
            background: linear-gradient(135deg, #F8FAFC 0%, #EEF2FB 100%);
            border-left: 3.5px solid #2F348B;
            border-radius: 0 14px 14px 0;
            padding: 1rem 1.3rem;
            margin-bottom: 0.9rem;
            box-shadow: 0 3px 12px rgba(47, 52, 139, 0.03);
        }

        .principal-lead-quote p {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.92rem !important;
            font-weight: 500 !important;
            color: #1E244B !important;
            line-height: 1.65 !important;
            margin: 0 !important;
            text-align: justify !important;
        }

        .principal-body-paragraph {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.88rem !important;
            line-height: 1.7 !important;
            color: #4A5568 !important;
            margin-bottom: 0.75rem !important;
            text-align: justify !important;
        }

        .principal-bottom-block {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding-top: 0.9rem;
            border-top: 1px solid rgba(47, 52, 139, 0.1);
            margin-top: 0.9rem;
            flex-wrap: wrap;
        }

        .principal-welcome-inline {
            flex: 1;
            min-width: 240px;
        }

        .principal-welcome-inline p {
            font-family: 'Playfair Display', serif !important;
            font-size: 1.02rem !important;
            font-style: italic !important;
            font-weight: 600 !important;
            color: #2F348B !important;
            margin: 0 !important;
            line-height: 1.4 !important;
            text-align: left !important;
        }

        .principal-signature-compact {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            text-align: right;
            flex-shrink: 0;
        }

        .principal-script-signature {
            font-family: 'Great Vibes', cursive !important;
            font-size: 2.6rem !important;
            color: #2F348B !important;
            line-height: 1;
            margin-bottom: 0.15rem;
        }

        .principal-signoff-sub {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.74rem;
            font-weight: 500;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: #64748B;
        }

        @media (max-width: 768px) {
            .president-card-premium {
                padding: 2.2rem 1.4rem !important;
                border-radius: 20px !important;
            }

            .principal-name-title {
                font-size: 1.85rem !important;
            }

            .principal-highlight-box {
                padding: 1.2rem 1.2rem;
            }

            .principal-highlight-box p {
                font-size: 0.95rem !important;
            }

            .principal-welcome-callout {
                padding: 1rem 1.2rem;
            }

            .principal-welcome-callout p {
                font-size: 1.05rem !important;
            }

            .principal-script-signature {
                font-size: 2.4rem !important;
            }
        }

        .flash-news {
            background-color: #FFFFFF;
            border-radius: 10px;
            border-left: 4px solid #F59F1E;
        }

        #news-head {
            color: #2F348B;
            font-family: 'Montserrat', sans-serif;
        }

        .notice-box,
        .news-card,
        .facilities-cards .item {
            background-color: #FFFFFF;
            border-radius: 15px;
            border: 1px solid rgba(47, 52, 139, 0.1);
        }

        .notice-date {
            color: #64748B;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.85rem;
        }

        .overlay-card .badge-new {
            background-color: #2F348B !important;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.75rem;
        }

        .hero-kids .hero-bg .doodle,
        .hero-kids .hero-bg .cloud,
        .hero-kids .hero-bg .plane {
            display: none;
        }

        @media (max-width: 991px) {
            .hero-kids .display-2 {
                font-size: 2.2rem;
            }

            .hero-flower-mobile {
                left: auto !important;
                right: -10px !important;
            }

            .montessori-sun-wrapper {
                left: 20% !important;
            }
        }

        /* Event Calendar Override */
        .calendar-enhanced .event-cnd {
            background: #FFFFFF !important;
            border: 1px solid rgba(47, 52, 139, 0.12) !important;
            box-shadow: 0 15px 40px rgba(47, 52, 139, 0.04) !important;
        }

        .calendar-enhanced .event-cnd::after {
            display: none !important;
            /* Remove the grid overlay if any */
        }

        /* Organic Hero Background Shade */
        .hero-kids .hero-bg::before {
            background: linear-gradient(145deg,
                    #FFFFFF 0%,
                    #F4F6FC 100%) !important;
            opacity: 0.9;
        }

        /* Organic Grid Color Override */
        .bg-grid::before {
            background-image:
                linear-gradient(to right, rgba(47, 52, 139, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(47, 52, 139, 0.05) 1px, transparent 1px) !important;
        }

        /* Environments Slider Cards Override */
        .facilities-enhanced .item {
            border-radius: 20px;
            overflow: hidden;
            background-color: #F8FAFC !important;
            border: none !important;
            transition: transform 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .facilities-enhanced .item:hover {
            transform: translateY(-5px);
        }

        .facilities-enhanced .item .efx-img {
            border-radius: 20px 20px 0 0;
            overflow: hidden;
            width: 100%;
            height: 250px;
            flex-shrink: 0;
        }

        .facilities-enhanced .item .efx-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .facilities-enhanced .ov-content {
            background: #EEF2FB !important;
            /* Soft Airy Indigo Tint */
            position: relative !important;
            bottom: auto !important;
            left: auto !important;
            right: auto !important;
            padding: 25px 20px !important;
            margin: 0 !important;
            border-radius: 0 0 20px 20px !important;
            box-shadow: none !important;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-height: 175px;
            flex-grow: 1;
            text-align: left;
        }

        .facilities-enhanced .ov-content::after,
        .facilities-enhanced .ov-content::before {
            display: none !important;
        }

        .facilities-enhanced .ov-content .details {
            text-align: left;
            width: 100%;
            background-color: transparent !important;
        }

        .facilities-enhanced .ov-content .details h5 {
            color: #1E244B !important;
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            margin-bottom: 10px;
            text-transform: none;
            letter-spacing: 0;
            font-weight: 600;
            text-shadow: none;
        }

        .facilities-enhanced .ov-content .details p {
            display: block !important;
            color: #4A5568 !important;
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Slider Arrows Override */
        .carrow a {
            color: #2F348B !important;
            transition: all 0.3s ease;
        }

        .carrow a:hover {
            color: #F59F1E !important;
        }

        .carrow a svg {
            width: 35px;
            height: 35px;
            stroke-width: 1.5px;
        }

        /* Cards Section Override (Notice & Admission) */
        .cards-section .overlay-card .overlay-title {
            background: #2F348B !important;
            font-family: 'Montserrat', sans-serif !important;
            letter-spacing: 1px;
        }

        .cards-section .overlay-card .overlay-title::before {
            background: #F59F1E !important;
            box-shadow: 0 0 0 4px rgba(245, 159, 30, 0.3) !important;
        }

        .notice-box {
            background-color: #FFFFFF !important;
            border: 1px solid rgba(47, 52, 139, 0.1) !important;
            border-radius: 15px !important;
        }

        /* Ultra Realistic 3D Butterfly Animations */
        @keyframes flutter-l {
            0% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(70deg);
            }
        }

        @keyframes flutter-r {
            0% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(-70deg);
            }
        }

        @keyframes erratic-bounce {
            0% {
                transform: translateY(0px) rotateX(15deg);
            }

            100% {
                transform: translateY(-20px) rotateX(-5deg);
            }
        }

        @keyframes fly-and-land {
            0% {
                transform: translate(-280px, 150px) rotate(25deg) scale(1);
                opacity: 0;
            }

            7% {
                transform: translate(-180px, 50px) rotate(45deg) scale(1.1);
                opacity: 1;
            }

            18% {
                transform: translate(-100px, -40px) rotate(10deg) scale(0.9);
            }

            33% {
                transform: translate(-50px, 60px) rotate(35deg) scale(1.1);
            }

            48% {
                transform: translate(-10px, -20px) rotate(5deg) scale(0.95);
            }

            56% {
                transform: translate(15px, -30px) rotate(25deg) scale(1);
            }

            61% {
                transform: translate(5px, 0px) rotate(0deg) scale(0.85);
                opacity: 1;
            }

            67% {
                transform: translate(5px, 0px) rotate(0deg) scale(0.85);
                opacity: 1;
            }

            85% {
                transform: translate(120px, -150px) rotate(20deg) scale(0.95);
                opacity: 1;
            }

            96% {
                transform: translate(220px, -260px) rotate(45deg) scale(1);
                opacity: 1;
            }

            100% {
                transform: translate(260px, -280px) rotate(45deg) scale(1);
                opacity: 0;
            }
        }

        .realistic-butterfly-wrapper {
            position: absolute;
            z-index: 9999;
            pointer-events: none;
            perspective: 800px;
            animation: fly-and-land 16s cubic-bezier(0.45, 0.05, 0.55, 0.95) infinite;
            filter: drop-shadow(0px 15px 8px rgba(0, 0, 0, 0.3));
        }

        .butterfly-3d-body {
            transform-style: preserve-3d;
            animation: erratic-bounce 0.6s infinite ease-in-out alternate;
        }

        @keyframes heading-cloud-move {
            0% {
                transform: translateX(-20px) translateY(0px) scale(0.9);
                opacity: 0;
            }

            10% {
                transform: translateX(0px) translateY(-5px) scale(1);
                opacity: 0.85;
            }

            60% {
                transform: translateX(180px) translateY(5px) scale(1);
                opacity: 0.85;
            }

            80% {
                transform: translateX(240px) translateY(-5px) scale(0.9);
                opacity: 0;
            }

            100% {
                transform: translateX(280px) translateY(-5px) scale(0.9);
                opacity: 0;
            }
        }

        .heading-cloud-wrapper {
            position: absolute;
            top: -70px;
            left: 0;
            z-index: 1;
            pointer-events: none;
            animation: heading-cloud-move 18s linear infinite;
            filter: drop-shadow(0px 8px 12px rgba(0, 0, 0, 0.04));
        }

        /* ------------------------------------------- */
        /* HERO SECTION POSITIONING                    */
        /* ------------------------------------------- */
        .hero.hero-kids {
            padding-top: 155px !important;
            padding-bottom: 105px !important;
            min-height: 620px;
        }

        @media (max-width: 991px) {
            .hero.hero-kids {
                padding-top: 120px !important;
                padding-bottom: 70px !important;
                min-height: auto;
            }
        }

        /* ------------------------------------------- */
        /* PREMIUM HERO AWARD SHOWCASE DESIGN          */
        /* ------------------------------------------- */
        .hero-award-wrapper {
            position: relative;
            isolation: isolate;
            width: 100%;
            max-width: 620px;
            margin: 0 auto;
            padding: 12px;
        }

        .hero-award-card {
            position: relative;
            border-radius: 22px;
            background: #FFFFFF;
            padding: 8px;
            box-shadow: 
                0 22px 55px -10px rgba(47, 52, 139, 0.22),
                0 0 0 1.5px rgba(245, 159, 30, 0.45),
                0 0 45px rgba(245, 159, 30, 0.18);
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            z-index: 3;
            overflow: hidden;
        }

        .hero-award-card:hover {
            transform: translateY(-5px) scale(1.015);
            box-shadow: 
                0 32px 70px -12px rgba(47, 52, 139, 0.32),
                0 0 0 2.5px rgba(245, 159, 30, 0.75),
                0 0 65px rgba(245, 159, 30, 0.32);
        }

        .hero-award-inner {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: #F8FAFC;
        }

        .hero-award-img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 16px;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .hero-award-card:hover .hero-award-img {
            transform: scale(1.02);
        }

        /* Shimmer Light Sweep on Award Card */
        .hero-award-inner::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 35%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.4) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            animation: award-shine 5.5s cubic-bezier(0.4, 0, 0.2, 1) infinite;
            pointer-events: none;
            z-index: 5;
        }

        @keyframes award-shine {
            0%, 30% {
                left: -60%;
                opacity: 0;
            }
            35% {
                opacity: 1;
            }
            55% {
                left: 140%;
                opacity: 1;
            }
            60%, 100% {
                left: 140%;
                opacity: 0;
            }
        }

        /* Ambient Glow Behind Card */
        .hero-award-glow {
            position: absolute;
            inset: -15px;
            background: radial-gradient(circle at 60% 45%, rgba(245, 159, 30, 0.3) 0%, rgba(47, 52, 139, 0.16) 45%, transparent 70%);
            filter: blur(25px);
            z-index: 1;
            pointer-events: none;
            animation: aura-pulse 4s ease-in-out infinite alternate;
        }

        @keyframes aura-pulse {
            0% { transform: scale(0.96); opacity: 0.7; }
            100% { transform: scale(1.04); opacity: 1; }
        }

        /* Luxury Highlight Top Floating Ribbon */
        .hero-award-badge-top {
            position: absolute;
            top: -10px;
            left: 28px;
            z-index: 10;
            background: linear-gradient(135deg, #2F348B 0%, #1E244B 100%);
            color: #FFFFFF;
            padding: 6px 16px;
            border-radius: 30px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            box-shadow: 0 6px 18px rgba(47, 52, 139, 0.35), 0 0 0 2px #FFFFFF;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .hero-award-badge-top .star-icon {
            color: #F59F1E;
            font-size: 0.9rem;
        }

        /* Floating Score Pill */
        .hero-award-badge-bottom {
            position: absolute;
            bottom: -12px;
            right: 28px;
            z-index: 10;
            background: linear-gradient(135deg, #F59F1E 0%, #E28C0A 100%);
            color: #FFFFFF;
            padding: 6px 18px;
            border-radius: 30px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.8px;
            box-shadow: 0 8px 20px rgba(245, 159, 30, 0.4), 0 0 0 2px #FFFFFF;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            animation: float-mini 3s ease-in-out infinite alternate;
        }

        @keyframes float-mini {
            0% { transform: translateY(0px); }
            100% { transform: translateY(-4px); }
        }

        @media (max-width: 991px) {
            .hero-award-wrapper {
                max-width: 100%;
                margin-top: 25px;
            }
            .hero-award-badge-top {
                font-size: 0.68rem;
                padding: 5px 12px;
                top: -8px;
                left: 15px;
            }
            .hero-award-badge-bottom {
                font-size: 0.7rem;
                padding: 5px 14px;
                bottom: -8px;
                right: 15px;
            }
        }

        /* News Section Flower Responsive Positioning */
        .news-flower-icon {
            top: -10px;
            left: -80px;
            opacity: 0.95;
            z-index: 0;
            transform: scale(0.8) rotate(10deg);
        }

        @media (max-width: 767px) {
            .news-flower-icon {
                top: -100px;
                left: -15px;
                transform: scale(0.6) rotate(15deg);
                transform-origin: left center;
                opacity: 0.85;
            }
        }
    </style>

    <!-- Hero -->
    <main class="hero hero-kids position-relative">

        <!-- NEW: Fluffy Montessori Cloud 1 traversing slowly across the Hero (Parallax) -->
        <div class="moving-cloud-1" aria-hidden="true" style="top: 15%;">
            <svg class="montessori-cloud" width="150" height="85" viewBox="0 0 180 100"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <filter id="cloudShadow1" x="-10%" y="-10%" width="120%" height="120%">
                        <feDropShadow dx="0" dy="8" stdDeviation="6" flood-color="#A89F91" flood-opacity="0.1" />
                    </filter>
                </defs>
                <g filter="url(#cloudShadow1)" fill="#FDFBF8" opacity="0.9">
                    <ellipse cx="45" cy="60" rx="25" ry="20" />
                    <ellipse cx="75" cy="45" rx="35" ry="30" />
                    <ellipse cx="115" cy="55" rx="30" ry="25" />
                    <ellipse cx="145" cy="65" rx="20" ry="15" />
                    <rect x="35" y="60" width="115" height="20" rx="10" />
                </g>
            </svg>
        </div>

        <!-- NEW: Fluffy Montessori Cloud 2 traversing horizontally across the Hero (Parallax) -->
        <div class="moving-cloud-2" aria-hidden="true" style="top: 40%;">
            <svg class="montessori-cloud" width="110" height="60" viewBox="0 0 180 100"
                xmlns="http://www.w3.org/2000/svg">
                <g fill="#FDFBF8" opacity="0.8">
                    <ellipse cx="45" cy="60" rx="25" ry="20" />
                    <ellipse cx="75" cy="45" rx="35" ry="30" />
                    <ellipse cx="115" cy="55" rx="30" ry="25" />
                    <ellipse cx="145" cy="65" rx="20" ry="15" />
                    <rect x="35" y="60" width="115" height="20" rx="10" />
                </g>
            </svg>
        </div>



        <div class="hero-bg" aria-hidden="true">
            <!-- Kept empty as original to override default bg styles -->
        </div>
        <div class="container-xxl position-relative">
            <!-- Montessori Fluffy Cloud Icons in Hero (Anchored to Container) -->
            <div class="aesthetic-icon" aria-hidden="true"
                style="top: 5%; right: 2%; opacity: 0.8; animation: float 6s ease-in-out infinite;">
                <svg class="montessori-cloud" width="100" height="55" viewBox="0 0 180 100"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill="#FDFBF8">
                        <ellipse cx="45" cy="60" rx="25" ry="20" />
                        <ellipse cx="75" cy="45" rx="35" ry="30" />
                        <ellipse cx="115" cy="55" rx="30" ry="25" />
                        <ellipse cx="145" cy="65" rx="20" ry="15" />
                        <rect x="35" y="60" width="115" height="20" rx="10" />
                    </g>
                </svg>
            </div>
            <div class="aesthetic-icon" aria-hidden="true"
                style="bottom: 10%; left: -20px; opacity: 0.6; animation: float-reverse 8s ease-in-out infinite;">
                <svg class="montessori-cloud" width="80" height="45" viewBox="0 0 180 100"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill="#F7F5F0">
                        <ellipse cx="45" cy="60" rx="25" ry="20" />
                        <ellipse cx="75" cy="45" rx="35" ry="30" />
                        <ellipse cx="115" cy="55" rx="30" ry="25" />
                        <ellipse cx="145" cy="65" rx="20" ry="15" />
                        <rect x="35" y="60" width="115" height="20" rx="10" />
                    </g>
                </svg>
            </div>

            <div class="row align-items-center g-4 g-lg-5 ">
                <div class="col-lg-6" style="position: relative;">
                    <!-- NEW: Realistic Montessori Cloud Above Heading Moving to Flower -->
                    <div class="heading-cloud-wrapper" aria-hidden="true">
                        <svg class="montessori-cloud" width="160" height="90" viewBox="0 0 180 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <filter id="cloudShadow" x="-10%" y="-10%" width="120%" height="120%">
                                    <feDropShadow dx="0" dy="8" stdDeviation="6" flood-color="#A89F91"
                                        flood-opacity="0.15" />
                                </filter>
                                <linearGradient id="cloudGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FFFFFF" />
                                    <stop offset="50%" stop-color="#FDFBF8" />
                                    <stop offset="100%" stop-color="#E8E5DC" />
                                </linearGradient>
                            </defs>
                            <g filter="url(#cloudShadow)" fill="url(#cloudGrad)">
                                <ellipse cx="45" cy="60" rx="25" ry="20" />
                                <ellipse cx="75" cy="45" rx="35" ry="30" />
                                <ellipse cx="115" cy="55" rx="30" ry="25" />
                                <ellipse cx="145" cy="65" rx="20" ry="15" />
                                <rect x="35" y="60" width="115" height="20" rx="10" />
                            </g>
                        </svg>
                    </div>

                    <h1 class="display-2" style="line-height: 1.2; margin-bottom: 1rem;">
                        <span class="sun"
                            style="font-family: 'Playfair Display', serif; font-style: italic; font-weight: 500; color: #2F348B;">Bedford
                            Kindergarten in Qatar</span><br />
                        <span class="plum"
                            style="font-family: 'Playfair Display', serif; font-style: italic; font-weight: 400; color: #1E244B;">
                            Nurture Tiny Minds,
                            <span style="display: inline-block; position: relative;">
                                Cherish Future!
                                <!-- NEW: Elegant Montessori Dotted Sun Icon positioned precisely underneath "Cherish Future!" without moving the button -->
                                <span class="montessori-sun-wrapper d-block text-center"
                                    style="position: absolute; left: 50%; transform: translateX(-50%); top: 100%; margin-top: 60px; z-index: 5;">
                                    <svg class="montessori-earthy-sun" width="55" height="55" viewBox="0 0 60 60"
                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                        style="animation: slow-spin 30s linear infinite; filter: drop-shadow(0px 3px 5px rgba(245, 159, 30, 0.25));">
                                        <defs>
                                            <filter id="sunEmboss" x="-20%" y="-20%" width="140%" height="140%">
                                                <feDropShadow dx="0" dy="2" stdDeviation="2" flood-color="#F59F1E"
                                                    flood-opacity="0.25" />
                                            </filter>
                                        </defs>
                                        <!-- Outer Ring with Soft Emboss Shadow -->
                                        <circle cx="30" cy="30" r="14" fill="#FFFFFF" stroke="#F59F1E"
                                            stroke-width="1.8" filter="url(#sunEmboss)" />
                                        <!-- Inner Dotted Ring -->
                                        <circle cx="30" cy="30" r="10.5" fill="none" stroke="#F59F1E" stroke-width="1.4"
                                            stroke-dasharray="0.5 3.5" stroke-linecap="round" />
                                        <!-- 8 Radial Sun Rays -->
                                        <!-- Top / Bottom -->
                                        <line x1="30" y1="11.5" x2="30" y2="6.5" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <line x1="30" y1="48.5" x2="30" y2="53.5" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <!-- Left / Right -->
                                        <line x1="11.5" y1="30" x2="6.5" y2="30" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <line x1="48.5" y1="30" x2="53.5" y2="30" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <!-- Diagonals -->
                                        <line x1="17" y1="17" x2="13.5" y2="13.5" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <line x1="43" y1="17" x2="46.5" y2="13.5" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <line x1="43" y1="43" x2="46.5" y2="46.5" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <line x1="17" y1="43" x2="13.5" y2="46.5" stroke="#F59F1E" stroke-width="1.6"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </span>
                        </span>
                    </h1>

                    <div class="hero-actions mt-4 pt-2">
                        <a class="btn btn-primary cta text-white d-inline-flex align-items-center gap-2"
                            href="{{ route('admission') }}">
                            Admission<i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-award-wrapper position-relative">
                        <!-- Ambient Backlight Glow -->
                        <div class="hero-award-glow" aria-hidden="true"></div>

                        <!-- Top Floating Luxury Ribbon Badge -->
                        <div class="hero-award-badge-top" data-aos="fade-down" data-aos-delay="200">
                            <i class="bi bi-star-fill star-icon"></i>
                            <span>MoEHE Diamond Award 2025–2026</span>
                        </div>

                        <!-- Floating 99.9% Score Pill Badge -->
                        <div class="hero-award-badge-bottom" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-trophy-fill" style="color: #FFFFFF; font-size: 0.85rem;"></i>
                            <span>Rank #1 in Qatar • 99.9% Score</span>
                        </div>

                        <!-- Daisy Flower (Top-Left) -->
                        <div class="hero-shape shape-plus-top aesthetic-icon hero-flower-mobile" aria-hidden="true"
                            style="top: -30px; left: -20px; opacity: 0.95; transform: rotate(15deg); z-index: 4;">
                            <svg width="60" height="80" viewBox="0 0 60 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 30 Q25 55, 30 80" stroke="#7A8B6F" stroke-width="3" fill="none" />
                                <path d="M30 60 Q15 50, 10 55 Q20 65, 28 65 Z" fill="#7A8B6F" opacity="0.8" />
                                <path d="M28 45 Q45 35, 50 40 Q40 50, 32 50 Z" fill="#7A8B6F" opacity="0.8" />
                                <circle cx="30" cy="15" r="7" fill="#F7F5F0" stroke="#D4C5B9" stroke-width="1" />
                                <circle cx="20" cy="22" r="7" fill="#F7F5F0" stroke="#D4C5B9" stroke-width="1" />
                                <circle cx="40" cy="22" r="7" fill="#F7F5F0" stroke="#D4C5B9" stroke-width="1" />
                                <circle cx="24" cy="33" r="7" fill="#F7F5F0" stroke="#D4C5B9" stroke-width="1" />
                                <circle cx="36" cy="33" r="7" fill="#F7F5F0" stroke="#D4C5B9" stroke-width="1" />
                                <circle cx="30" cy="25" r="5" fill="#A89F91" />
                            </svg>
                        </div>

                        <!-- REALISTIC FLUTTERING BUTTERFLY AROUND FLOWER -->
                        <div class="realistic-butterfly-wrapper hero-flower-mobile" aria-hidden="true"
                            style="top: -30px; left: -20px;">
                            <div class="butterfly-3d-body">
                                <svg class="colorful-butterfly" width="50" height="50" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" style="overflow: visible;">
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
                                    <g
                                        style="transform-origin: 50px 50px; animation: flutter-l 0.12s cubic-bezier(0.2, 0.8, 0.4, 1) infinite alternate;">
                                        <path d="M50 50 C 20 20, 5 25, 10 40 C 15 60, 40 60, 50 50"
                                            fill="url(#wingGrad)" stroke="#222" stroke-width="3"
                                            stroke-linejoin="round" />
                                        <path d="M50 50 C 35 35, 20 35, 15 42" stroke="#222" stroke-width="1.5"
                                            fill="none" />
                                        <path d="M50 50 C 25 45, 15 50, 15 50" stroke="#222" stroke-width="1.5"
                                            fill="none" />
                                        <path d="M50 50 C 30 65, 20 85, 35 90 C 45 95, 50 70, 50 50"
                                            fill="url(#wingGradLower)" stroke="#222" stroke-width="3"
                                            stroke-linejoin="round" />
                                        <path d="M50 50 C 40 70, 30 80, 28 85" stroke="#222" stroke-width="1.5"
                                            fill="none" />
                                        <circle cx="12" cy="40" r="1.5" fill="#FFF" />
                                        <circle cx="17" cy="53" r="1.5" fill="#FFF" />
                                        <circle cx="30" cy="86" r="1.5" fill="#FFF" />
                                        <circle cx="40" cy="89" r="1.5" fill="#FFF" />
                                    </g>
                                    <g
                                        style="transform-origin: 50px 50px; animation: flutter-r 0.12s cubic-bezier(0.2, 0.8, 0.4, 1) infinite alternate;">
                                        <path d="M50 50 C 80 20, 95 25, 90 40 C 85 60, 60 60, 50 50"
                                            fill="url(#wingGrad)" stroke="#222" stroke-width="3"
                                            stroke-linejoin="round" />
                                        <path d="M50 50 C 65 35, 80 35, 85 42" stroke="#222" stroke-width="1.5"
                                            fill="none" />
                                        <path d="M50 50 C 75 45, 85 50, 85 50" stroke="#222" stroke-width="1.5"
                                            fill="none" />
                                        <path d="M50 50 C 70 65, 80 85, 65 90 C 55 95, 50 70, 50 50"
                                            fill="url(#wingGradLower)" stroke="#222" stroke-width="3"
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
                                    <path d="M 48 33 Q 40 15, 36 20 M 52 33 Q 60 15, 64 20" stroke="#333"
                                        stroke-width="1.5" fill="none" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>

                        <!-- NEW ICON 2: Highly Realistic Wooden Rainbow (Bottom Left) -->
                        <div class="hero-shape aesthetic-icon" aria-hidden="true"
                            style="bottom: -20px; left: -30px; opacity: 0.95; transform: rotate(-8deg); z-index: 2;">
                            <svg width="85" height="50" viewBox="0 0 120 75" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <filter id="rainbowShadow" x="-20%" y="-20%" width="140%" height="140%">
                                        <feDropShadow dx="0" dy="8" stdDeviation="5" flood-color="#7A6B5D"
                                            flood-opacity="0.25" />
                                    </filter>
                                    <filter id="blockShadow" x="-10%" y="-10%" width="120%" height="120%">
                                        <feDropShadow dx="0" dy="2" stdDeviation="1.5" flood-color="#332211"
                                            flood-opacity="0.15" />
                                    </filter>
                                    <linearGradient id="themePurple" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#2F348B" />
                                        <stop offset="100%" stop-color="#23276B" />
                                    </linearGradient>
                                    <linearGradient id="themeSage" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#F59F1E" />
                                        <stop offset="100%" stop-color="#E28C0A" />
                                    </linearGradient>
                                    <linearGradient id="themeBeige" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#EEF2FB" />
                                        <stop offset="100%" stop-color="#F8FAFC" />
                                    </linearGradient>
                                </defs>

                                <g filter="url(#rainbowShadow)">
                                    <path d="M 10 60 A 50 50 0 0 1 110 60 L 94 60 A 34 34 0 0 0 26 60 Z"
                                        fill="url(#themePurple)" stroke="#2F348B" stroke-width="1.5"
                                        stroke-linejoin="round" filter="url(#blockShadow)" />
                                    <path d="M 28 60 A 32 32 0 0 1 92 60 L 78 60 A 18 18 0 0 0 42 60 Z"
                                        fill="url(#themeSage)" stroke="#F59F1E" stroke-width="1.5"
                                        stroke-linejoin="round" filter="url(#blockShadow)" />
                                    <path d="M 44 60 A 16 16 0 0 1 76 60 L 66 60 A 6 6 0 0 0 54 60 Z"
                                        fill="url(#themeBeige)" stroke="#EEF2FB" stroke-width="1.5"
                                        stroke-linejoin="round" filter="url(#blockShadow)" />
                                </g>
                            </svg>
                        </div>

                        <!-- Main Highlighting Diamond Award Showcase Card -->
                        <div class="hero-award-card" data-aos="zoom-in" data-aos-duration="900">
                            <div class="hero-award-inner">
                                <img src="{{ asset('Front/images/bedfoard.jpeg') }}"
                                    alt="Bedford Kindergarten Qatar - Diamond Award Winner by Ministry of Education"
                                    class="hero-award-img img-fluid" loading="eager" />
                            </div>
                        </div>

                        <!-- Aesthetic Dots & Zigzag (Behind) -->
                        <div class="hero-shape shape-dots-left" aria-hidden="true"
                            style="top: auto; bottom: -25px; left: 15px; z-index: 1;">
                            <div class="dots-grid"></div>
                            <svg class="zigzag-line" width="60" height="15" viewBox="0 0 60 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 13L12 3L22 13L32 3L42 13L52 3" stroke="#F59F1E" stroke-width="4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <!-- Organic Leaf Branch (Top Right) -->
                        <div class="hero-shape aesthetic-icon" aria-hidden="true"
                            style="top: -20px; right: -25px; opacity: 0.9; transform: rotate(20deg); animation: float 6s ease-in-out infinite; z-index: 2;">
                            <svg width="60" height="100" viewBox="0 0 50 100" fill="none" stroke="#F59F1E"
                                stroke-width="1.2" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 100 Q15 50, 45 0" />
                                <path d="M22 80 Q10 75, 5 65 Q15 65, 20 75 Z" fill="#2F348B" />
                                <path d="M28 75 Q40 70, 45 60 Q35 60, 30 70 Z" fill="#F59F1E" />
                                <path d="M23 60 Q10 55, 5 45 Q15 45, 20 55 Z" fill="#2F348B" />
                                <path d="M27 55 Q40 50, 45 40 Q35 40, 30 50 Z" fill="#F59F1E" />
                                <path d="M24 40 Q10 35, 5 25 Q15 25, 20 35 Z" fill="#2F348B" />
                                <path d="M30 35 Q40 30, 45 20 Q35 20, 30 30 Z" fill="#F59F1E" />
                            </svg>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container news-scroll">
        <div class="row">
            <div class="col-md-12">
                <div class="flash-news shadow-sm" id='abt'>
                    <div class="news-title aos-init">
                        <span id="news-head" class="text-uppercase fw-500"> <img
                                src="{{ asset('Front/images/news-icon.png') }}" class="notice-top-border mx-auto"
                                alt=""></span>
                    </div>
                    <div class="news-text ">
                        <marquee behavior="scroll" scrollamount="4" direction="left" onmouseover="this.stop();"
                            onmouseout="this.start();">
                            <span>
                                <a href="#">
                                    <p class=" pe-2 ps-2">
                                        KG Admissions Now Open! Contact : +97430737731 | Bedford Kindergarten, Block E,
                                        Street No.8086, Barwa Madinatna, Doha, Qatar
                                    </p>
                                </a>
                            </span>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--ABOUT-->

    <section class="about home-about pt-5 pb-5 about-enhanced image-bg" style="margin-top: -20px;">
        <div class="container position-relative">
            <!-- Organic Background Blob (Anchored to Container) -->
            <div class="aesthetic-icon" aria-hidden="true" style="top: -20px; right: -40px; z-index: 0;">
                <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#E8E5DC" opacity="0.6"
                        d="M45.7,-76.1C58.9,-69.3,69.1,-55.4,77.2,-41C85.3,-26.6,91.3,-11.7,89.5,2.6C87.7,16.9,78,30.5,67.6,41.8C57.2,53.1,46,62.1,32.7,69.5C19.4,76.9,4,82.7,-10.8,80.7C-25.6,78.7,-39.8,68.9,-53.4,59C-67,49.1,-80,39.1,-86.3,25.4C-92.6,11.7,-92.2,-5.7,-85.5,-20.3C-78.8,-34.9,-65.8,-46.7,-52.3,-53.8C-38.8,-60.9,-24.8,-63.3,-10.3,-62.4C4.2,-61.5,18.4,-57.3,32.4,-82.9Z"
                        transform="translate(100 100)" />
                </svg>
            </div>

            <!-- NEW: Highly Realistic Blush Pink Watercolor Butterfly (Matching Reference Image) -->
            <div class="aesthetic-icon"
                style="top: -15px; right: 28%; opacity: 0.95; z-index: 3; transform: rotate(15deg);">
                <svg class="montessori-butterfly" width="70" height="70" viewBox="0 0 120 120" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <filter id="bfShadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="4" stdDeviation="3" flood-color="#887868" flood-opacity="0.3" />
                        </filter>
                        <linearGradient id="blushTopWing" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#EBC4BB" />
                            <stop offset="70%" stop-color="#DCA89E" />
                            <stop offset="100%" stop-color="#C08479" />
                        </linearGradient>
                        <linearGradient id="blushTopWingRight" x1="100%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#EBC4BB" />
                            <stop offset="70%" stop-color="#DCA89E" />
                            <stop offset="100%" stop-color="#C08479" />
                        </linearGradient>
                        <linearGradient id="blushBotWing" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#F1D1C6" />
                            <stop offset="100%" stop-color="#DCA89E" />
                        </linearGradient>
                        <linearGradient id="blushBotWingRight" x1="100%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#F1D1C6" />
                            <stop offset="100%" stop-color="#DCA89E" />
                        </linearGradient>
                    </defs>

                    <g filter="url(#bfShadow)">
                        <!-- Top Left Wing -->
                        <path d="M 58 55 C 40 30, 10 20, 15 45 C 18 60, 30 70, 58 60 Z" fill="url(#blushTopWing)"
                            stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round" />
                        <!-- Top Right Wing -->
                        <path d="M 62 55 C 80 30, 110 20, 105 45 C 102 60, 90 70, 62 60 Z"
                            fill="url(#blushTopWingRight)" stroke="#8C6A5D" stroke-width="1.5"
                            stroke-linejoin="round" />

                        <!-- Bottom Left Wing -->
                        <path d="M 58 60 C 40 75, 25 105, 45 100 C 55 98, 60 75, 58 60 Z" fill="url(#blushBotWing)"
                            stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round" />
                        <!-- Bottom Right Wing -->
                        <path d="M 62 60 C 80 75, 95 105, 75 100 C 65 98, 60 75, 62 60 Z" fill="url(#blushBotWingRight)"
                            stroke="#8C6A5D" stroke-width="1.5" stroke-linejoin="round" />

                        <!-- Wing Veins (Left) -->
                        <path
                            d="M 58 58 Q 40 40 18 40 M 58 58 Q 35 55 22 55 M 58 62 Q 45 75 40 95 M 58 62 Q 50 80 50 95"
                            stroke="#8C6A5D" stroke-width="0.8" opacity="0.6" />
                        <!-- Wing Veins (Right) -->
                        <path
                            d="M 62 58 Q 80 40 102 40 M 62 58 Q 85 55 98 55 M 62 62 Q 75 75 80 95 M 62 62 Q 70 80 70 95"
                            stroke="#8C6A5D" stroke-width="0.8" opacity="0.6" />

                        <!-- Wing Edge Dots (Left) -->
                        <circle cx="20" cy="48" r="1.5" fill="#FAF5F0" />
                        <circle cx="25" cy="60" r="1.5" fill="#FAF5F0" />
                        <!-- Wing Edge Dots (Right) -->
                        <circle cx="100" cy="48" r="1.5" fill="#FAF5F0" />
                        <circle cx="95" cy="60" r="1.5" fill="#FAF5F0" />

                        <!-- Body -->
                        <rect x="58" y="45" width="4" height="28" rx="2" fill="#5A473D" />

                        <!-- Antennae -->
                        <path d="M 59 45 Q 52 30 45 25 M 61 45 Q 68 30 75 25" stroke="#5A473D" stroke-width="1.5"
                            fill="none" stroke-linecap="round" />
                        <!-- Antennae Knobs -->
                        <circle cx="45" cy="25" r="1.5" fill="#5A473D" />
                        <circle cx="75" cy="25" r="1.5" fill="#5A473D" />
                    </g>
                </svg>
            </div>

            <!-- Organic Botanical Branch Icon -->
            <div class="aesthetic-icon" style="top: 10px; right: 5%; opacity: 0.5; z-index: 1;">
                <svg width="80" height="150" viewBox="0 0 50 100" fill="none" stroke="#7A8B6F" stroke-width="1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 100 Q15 50, 45 0" />
                    <path d="M22 80 Q10 75, 5 65 Q15 65, 20 75 Z" fill="#E8E5DC" />
                    <path d="M28 75 Q40 70, 45 60 Q35 60, 30 70 Z" fill="#E8E5DC" />
                    <path d="M23 60 Q10 55, 5 45 Q15 45, 20 55 Z" fill="#E8E5DC" />
                    <path d="M27 55 Q40 50, 45 40 Q35 40, 30 50 Z" fill="#E8E5DC" />
                    <path d="M24 40 Q10 35, 5 25 Q15 25, 20 35 Z" fill="#E8E5DC" />
                    <path d="M30 35 Q40 30, 45 20 Q35 20, 30 30 Z" fill="#E8E5DC" />
                </svg>
            </div>

            <!-- Realistic Montessori Watercolor Leafy Branch -->
            <div class="aesthetic-icon" style="bottom: 0px; left: -25px; opacity: 0.95; z-index: 1;">
                <svg width="100" height="180" viewBox="-20 -30 140 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <filter id="plantShadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="6" stdDeviation="4" flood-color="#7A8B6F" flood-opacity="0.15" />
                        </filter>
                        <linearGradient id="leafGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#BBC2B1" />
                            <stop offset="100%" stop-color="#9BA88D" />
                        </linearGradient>
                        <linearGradient id="leafGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#D0CDB8" />
                            <stop offset="100%" stop-color="#A5AA89" />
                        </linearGradient>
                        <linearGradient id="leafGrad3" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#9BA88D" />
                            <stop offset="100%" stop-color="#7A8B6F" />
                        </linearGradient>
                    </defs>

                    <g filter="url(#plantShadow)">
                        <!-- Main curved stem -->
                        <path d="M 50 190 Q 30 100, 70 10" stroke="#7A8B6F" stroke-width="2.5" fill="none"
                            stroke-linecap="round" />

                        <!-- Leaves -->
                        <!-- Bottom right -->
                        <path d="M 46 170 Q 70 160, 85 140 Q 60 145, 46 170 Z" fill="url(#leafGrad1)" />
                        <!-- Bottom left -->
                        <path d="M 45 150 Q 20 155, 5 130 Q 30 125, 45 150 Z" fill="url(#leafGrad2)" />

                        <!-- Middle right 1 -->
                        <path d="M 42 125 Q 70 110, 85 90 Q 60 100, 42 125 Z" fill="url(#leafGrad3)" />
                        <!-- Middle left 1 -->
                        <path d="M 43 105 Q 15 110, 5 80 Q 30 85, 43 105 Z" fill="url(#leafGrad1)" />

                        <!-- Middle right 2 -->
                        <path d="M 49 80 Q 75 60, 90 40 Q 65 55, 49 80 Z" fill="url(#leafGrad2)" />
                        <!-- Middle left 2 -->
                        <path d="M 54 60 Q 30 55, 20 30 Q 45 40, 54 60 Z" fill="url(#leafGrad3)" />

                        <!-- Top right -->
                        <path d="M 62 35 Q 85 20, 95 0 Q 75 15, 62 35 Z" fill="url(#leafGrad1)" />
                        <!-- Top tip leaf -->
                        <path d="M 70 10 Q 60 -5, 80 -15 Q 90 -5, 70 10 Z" fill="url(#leafGrad2)" />
                    </g>
                </svg>
            </div>
            <div class="row d-md-flex align-items-center g-4 g-lg-5">
                
                <!-- Left Column: Story Content & Pillar Cards -->
                <div class="col-lg-8 col-md-7">
                    <div data-aos="fade-right">
                        
                        <!-- Premium Kicker Pill -->
                        <div class="ourstory-kicker-pill">
                            <span class="pill-dot"></span>
                            <span>BEDFORD KINDERGARTEN IN QATAR</span>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#F59F1E" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="ourstory-main-title">
                            Our <span class="highlight-gold">Story</span> &amp; Heritage
                        </h2>

                        <!-- Script Motto Banner -->
                        <div class="ourstory-tagline-wrap">
                            <span class="ourstory-script-text">“Nurture the Tiny Minds; Cherish the Future”</span>
                        </div>

                        <!-- Intro Lead -->
                        <p class="ourstory-intro-lead">
                            Teachers inspire minds, shape futures, and ignite the flames of curiosity and knowledge within each student at Bedford Kindergarten.
                        </p>

                        <!-- 2 Pillar Cards -->
                        <div class="ourstory-cards-container">
                            
                            <!-- Card 1: Vision & Mission -->
                            <div class="ourstory-card-premium card-gold" data-aos="fade-up" data-aos-delay="100">
                                <div class="ourstory-card-header">
                                    <div class="ourstory-icon-badge badge-gold">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="ourstory-tag tag-gold">OUR VISION &amp; MISSION</span>
                                        <h4 class="ourstory-card-title">Nurturing Potential with Heart-Centered Learning</h4>
                                    </div>
                                </div>
                                <p class="ourstory-card-desc">
                                    Our vision is to create a nurturing environment where young minds are cherished, cultivated, and prepared for a promising future. Bedford emboldens our diverse student population with a safe, respectful, and inclusive environment that enables them to think critically, grow intellectually, and excel globally.
                                </p>
                            </div>

                            <!-- Card 2: British Curriculum & Montessori -->
                            <div class="ourstory-card-premium card-indigo" data-aos="fade-up" data-aos-delay="200">
                                <div class="ourstory-card-header">
                                    <div class="ourstory-icon-badge badge-indigo">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="ourstory-tag tag-indigo">BRITISH CURRICULUM &amp; MONTESSORI</span>
                                        <h4 class="ourstory-card-title">Bedford Kindergarten, Doha, Qatar</h4>
                                    </div>
                                </div>
                                <p class="ourstory-card-desc">
                                    Bedford is a well-established Kindergarten with a British EYFS curriculum. Occupying bright and airy premises with a safe and secure, covered outdoor area, we provide an inspiring environment blending Montessori essentials with heart-centered practices to nurture mind, heart, health, and soul.
                                </p>
                            </div>

                        </div>

                        <!-- Metrics Ribbon -->
                        <div class="ourstory-stats-ribbon">
                            <div class="ourstory-stat-item">
                                <div class="ourstory-stat-value">EYFS</div>
                                <div class="ourstory-stat-label">British Curriculum</div>
                            </div>
                            <div class="ourstory-stat-item">
                                <div class="ourstory-stat-value">100%</div>
                                <div class="ourstory-stat-label">Child Safeguarding</div>
                            </div>
                            <div class="ourstory-stat-item">
                                <div class="ourstory-stat-value">Active</div>
                                <div class="ourstory-stat-label">Inclusive Learning</div>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="{{ route('about_us') }}" class="main-btn">
                            Discover More
                            <svg class="ms-1" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Hero Visual with Luxury Frame -->
                <div class="col-lg-4 col-md-5" data-aos="fade-left">
                    <div class="ourstory-portrait-frame">
                        <img src="{{ asset('Front/images/homepage.jpeg') }}"
                            alt="Bedford Kindergarten Doha child studying and learning" />
                        <div class="ourstory-floating-badge">
                            <div class="badge-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <div class="badge-text">
                                <strong>Barwa Madinatna, Doha</strong>
                                <span>Premier EYFS &amp; Montessori</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. NOTICE & ACTION CARDS SECTION -->
    <div class="pb-4 pt-4 image-bg cards-section position-relative">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-left">
                    <div class="notice-box shadow-sm h-100">
                        <div class="text-center">
                            <img src="{{ asset('Front/images/notice-top.png') }}" class="notice-top-border mx-auto"
                                alt="">
                            <h3 class="itle-heading about-kicker mb-0">NOTICE</h3>
                        </div>
                        <div class="slick slick-4 mb-0 text-center">
                            @foreach ($notices as $notice)
                                <div class="">
                                    <h5 class="fw-800">{{ $notice->title }}</h5>
                                    <p class="notice-desc">{!! $notice->description !!}</p>
                                    <span class="notice-date mt-4 d-inline-block "
                                        style="margin-bottom: 25px;">{{ \Carbon\Carbon::parse($notice->date)->format('jS M, Y') }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="carrow d-flex">
                            <a class="prev" href="#"><i data-feather="arrow-left-circle"></i></a>
                            <a class="next" href="#"><i data-feather="arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <a href='{{ route('admission') }}'>
                        <div class="card text-center h-100 overlay-card">
                            <div class="badge-new">New</div>
                            <div class="card-body p-2">
                                <img src="https://credozen.in/bright/application/public/Front/images/online-admission.jpg"
                                    class="w-100 rounded" alt="">
                                <h6 class="mb-0 text-uppercase overlay-title">Online Admission</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <a href="{{ route('contact_us') }}">
                        <div class="card text-center h-100 overlay-card">
                            <div class="badge-new" style="background:#7A8B6F !important;">Contact</div>
                            <div class="card-body p-2">
                                <img src="https://credozen.in/bright/application/public/Front/images/fee-payment.jpg"
                                    class="w-100 rounded" alt="">
                                <h6 class="mb-0 text-uppercase overlay-title">Get In Touch</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. FEATURES SECTION (3 Pillar Cards) -->
    <style>
        .features-section-custom {
            padding-top: 2rem !important;
            padding-bottom: 3.5rem !important;
            position: relative;
        }

        .feature-card-enhanced {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 2.2rem 1.6rem !important;
            box-shadow: 0 10px 30px -8px rgba(47, 52, 139, 0.07), 0 0 0 1px rgba(47, 52, 139, 0.06);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: none;
        }

        .feature-card-enhanced::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3.5px;
            background: linear-gradient(90deg, #2F348B 0%, #F59F1E 100%);
            opacity: 0.8;
            transition: height 0.3s ease, opacity 0.3s ease;
        }

        .feature-card-enhanced.card-eyfs::before {
            background: linear-gradient(90deg, #2F348B 0%, #484EB8 100%);
        }

        .feature-card-enhanced.card-montessori::before {
            background: linear-gradient(90deg, #F59F1E 0%, #E28C0A 100%);
        }

        .feature-card-enhanced.card-campus::before {
            background: linear-gradient(90deg, #2F348B 0%, #F59F1E 100%);
        }

        .feature-card-enhanced:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 45px -10px rgba(47, 52, 139, 0.14), 0 0 0 1.5px rgba(245, 159, 30, 0.35) !important;
        }

        .feature-card-enhanced:hover::before {
            height: 4.5px;
            opacity: 1;
        }

        .feature-icon-wrapper {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .feature-card-enhanced:hover .feature-icon-wrapper {
            transform: scale(1.08) rotate(3deg);
        }

        .icon-eyfs-bg {
            background: linear-gradient(135deg, rgba(47, 52, 139, 0.12) 0%, rgba(72, 78, 184, 0.05) 100%);
            border: 1.5px solid rgba(47, 52, 139, 0.18);
            color: #2F348B;
        }

        .icon-montessori-bg {
            background: linear-gradient(135deg, rgba(245, 159, 30, 0.16) 0%, rgba(226, 140, 10, 0.06) 100%);
            border: 1.5px solid rgba(245, 159, 30, 0.25);
            color: #F59F1E;
        }

        .icon-campus-bg {
            background: linear-gradient(135deg, rgba(47, 52, 139, 0.12) 0%, rgba(245, 159, 30, 0.08) 100%);
            border: 1.5px solid rgba(47, 52, 139, 0.18);
            color: #2F348B;
        }

        .feature-heading-new {
            font-family: 'Playfair Display', serif !important;
            color: #1E244B !important;
            font-size: 1.35rem !important;
            font-weight: 600 !important;
            margin-bottom: 0.65rem !important;
            line-height: 1.35 !important;
        }

        .feature-text-new {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.92rem !important;
            line-height: 1.68 !important;
            color: #556275 !important;
            text-align: center !important;
            word-spacing: normal !important;
            margin: 0 !important;
        }
    </style>

    <section class="features-section features-section-custom position-relative overflow-hidden">
        <div class="container position-relative" style="z-index: 2;">
            <!-- Pink Butterfly (Anchored to Container) -->
            <div class="aesthetic-icon position-absolute"
                style="top: -20px; left: -20px; opacity: 0.85; z-index: 1; transform: rotate(-15deg);">
                <svg width="75" height="75" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 50C30 30 10 20 15 45C18 60 30 70 50 60Z" fill="#F59F1E" stroke="#E28C0A"
                        stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M50 50C70 30 90 20 85 45C82 60 70 70 50 60Z" fill="#F59F1E" stroke="#E28C0A"
                        stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M50 50C30 70 20 90 40 85C50 82 55 70 50 50Z" fill="#2F348B" stroke="#23276B"
                        stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M50 50C70 70 80 90 60 85C50 82 45 70 50 50Z" fill="#2F348B" stroke="#23276B"
                        stroke-width="1.5" stroke-linejoin="round" />
                    <rect x="48" y="40" width="4" height="25" rx="2" fill="#1E244B" />
                    <path d="M49 40Q45 30 40 25M51 40Q55 30 60 25" stroke="#1E244B" stroke-width="1.5" fill="none"
                        stroke-linecap="round" />
                </svg>
            </div>

            <!-- Botanical Leaves (Anchored to Container) -->
            <div class="aesthetic-icon position-absolute"
                style="bottom: -20px; right: -20px; opacity: 0.8; z-index: 1; transform: rotate(10deg);">
                <svg width="90" height="90" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 100Q45 50 90 10" stroke="#2F348B" stroke-width="2" fill="none" />
                    <path d="M48 80C30 80 20 70 30 60C40 50 48 60 48 80Z" fill="#EEF2FB" stroke="#2F348B"
                        stroke-width="1.5" />
                    <path d="M52 70C70 70 80 60 70 50C60 40 52 50 52 70Z" fill="#EEF2FB" stroke="#2F348B"
                        stroke-width="1.5" />
                    <path d="M45 50C30 50 20 40 30 30C40 20 45 30 45 50Z" fill="#EEF2FB" stroke="#2F348B"
                        stroke-width="1.5" />
                    <path d="M60 40C75 40 85 30 75 20C65 10 60 20 60 40Z" fill="#EEF2FB" stroke="#2F348B"
                        stroke-width="1.5" />
                </svg>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card-enhanced card-eyfs h-100">
                        <div class="feature-icon-wrapper icon-eyfs-bg">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="feature-heading-new">British EYFS Framework</h4>
                        <p class="feature-text-new">
                            Our teachers are well-trained and qualified to teach the British EYFS curriculum with
                            Montessori methods, respectful of Qatari culture and norms.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card-enhanced card-montessori h-100">
                        <div class="feature-icon-wrapper icon-montessori-bg">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="9" cy="7" r="3"></circle>
                                <path d="M9 10c-3 0-5 2-5 5v2h10v-2c0-3-2-5-5-5z"></path>
                                <polygon
                                    points="18 2 20.5 4.5 23 2 21.5 6 24 8.5 20.5 8.5 19 12 17.5 8.5 14 8.5 16.5 6 15 2 17.5 4.5 18 2">
                                </polygon>
                            </svg>
                        </div>
                        <h4 class="feature-heading-new">Montessori Essentials</h4>
                        <p class="feature-text-new">
                            Heart-centered learning practices and hands-on activities that foster critical thinking,
                            independence, creativity, and self-confidence in every child.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card-enhanced card-campus h-100">
                        <div class="feature-icon-wrapper icon-campus-bg">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <path
                                    d="M12 17c-3-2.5-5-4.5-5-6.5a2.5 2.5 0 0 1 5-1.5 2.5 2.5 0 0 1 5 1.5c0 2-2 4-5 6.5z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="feature-heading-new">Safe & Inspiring Campus</h4>
                        <p class="feature-text-new">
                            Bright and airy classrooms, vibrant playground facilities, on-site clinic, and cyber-safe
                            digital learning in a secure, nurturing environment.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. PRINCIPAL'S WELCOME SECTION -->
    <section class="pt-80 pb-80 president-msg position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Principal's Welcome Section with 2-Column Premium Bedford Theme -->
                    <div class="president-card-premium position-relative" data-aos="fade-up">

                        <!-- Aesthetic Sun Icon (Top Left) -->
                        <div class="aesthetic-icon"
                            style="top: -20px; left: -20px; opacity: 0.5; transform: rotate(-15deg);">
                            <svg width="90" height="90" viewBox="0 0 100 100" fill="none" stroke="#F59F1E"
                                stroke-width="1.8" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="15" />
                                <path
                                    d="M50 20 V5 M50 95 V80 M20 50 H5 M95 50 H80 M28 28 L18 18 M82 82 L72 72 M28 72 L18 82 M82 28 L72 18" />
                            </svg>
                        </div>

                        <!-- Aesthetic Botanical Branch Icon (Right Side) -->
                        <div class="aesthetic-icon"
                            style="bottom: 0%; right: -2%; opacity: 0.35; z-index: 0; transform: rotate(-15deg) scale(0.95);">
                            <svg width="90" height="130" viewBox="0 0 50 100" fill="none" stroke="#2F348B"
                                stroke-width="1.2" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 100 Q20 50, 45 0" />
                                <path d="M22 80 Q10 75, 5 65 Q15 65, 20 75 Z" fill="#EEF2FB" />
                                <path d="M28 75 Q40 70, 45 60 Q35 60, 30 70 Z" fill="#EEF2FB" />
                                <path d="M23 60 Q10 55, 5 45 Q15 45, 20 55 Z" fill="#EEF2FB" />
                                <path d="M27 55 Q40 50, 45 40 Q35 40, 30 50 Z" fill="#EEF2FB" />
                                <path d="M24 40 Q10 35, 5 25 Q15 25, 20 35 Z" fill="#EEF2FB" />
                            </svg>
                        </div>

                        <div class="row align-items-center position-relative g-4 g-lg-5" style="z-index: 2;">
                            
                            <!-- Left Column: Principal Photo -->
                            <div class="col-lg-4 col-md-5" data-aos="fade-right" data-aos-delay="100">
                                <div class="principal-photo-frame">
                                    <img src="{{ asset('Front/images/principal-fathima.jpg') }}" alt="Fathima N. Lafir - Principal of Bedford Kindergarten Qatar">
                                    <div class="principal-photo-badge">
                                        <div class="badge-icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
                                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                            </svg>
                                        </div>
                                        <div class="badge-text">
                                            <strong>British EYFS</strong>
                                            <span>Leadership &amp; Care</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column: Principal Message & Content -->
                            <div class="col-lg-8 col-md-7" data-aos="fade-left" data-aos-delay="150">
                                
                                <!-- Top Kicker Badge -->
                                <div class="principal-kicker-pill">
                                    <span class="pill-dot"></span>
                                    <span>PRINCIPAL'S WELCOME</span>
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="#F59F1E" xmlns="http://www.w3.org/2000/svg">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </div>

                                <!-- Principal Name and Title -->
                                <h2 class="principal-name-title">Fathima N. Lafir</h2>
                                <span class="principal-role-subtitle">Principal &amp; Head of Early Years • Bedford Kindergarten Qatar</span>

                                <!-- Lead Quote Box -->
                                <div class="principal-lead-quote">
                                    <p>
                                        "As the Principal of Bedford Kindergarten, I bring many years of experience in both administration and teaching, working alongside a wonderful team of dedicated, skilled educators. Together, we are committed to providing an exceptional early learning environment for young learners."
                                    </p>
                                </div>

                                <!-- Body Paragraphs -->
                                <p class="principal-body-paragraph">
                                    At Bedford Kindergarten, we follow the <strong>British EYFS curriculum</strong>, designed to meet the unique developmental milestones of each child. Our approach promotes inclusivity, where students from diverse backgrounds come together in a warm, nurturing space that actively supports emotional well-being, social skills, and creative communication.
                                </p>

                                <p class="principal-body-paragraph mb-0">
                                    Our safe, vibrant, and joyful setting encourages children to explore, innovate, and grow both within the classroom and in our specialized outdoor nature spaces. We instill core values of respect, kindness, and personal responsibility, while inspiring each child to reach their highest potential.
                                </p>

                                <!-- Bottom Welcoming Callout & Signature Row -->
                                <div class="principal-bottom-block">
                                    <div class="principal-welcome-inline">
                                        <p>
                                            “We look forward to welcoming you and your child to our Bedford Kindergarten family.”
                                        </p>
                                    </div>
                                    <div class="principal-signature-compact">
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="principal-script-signature">Fathima N. Lafir</span>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#F59F1E" stroke="#E28C0A" stroke-width="1" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                            </svg>
                                        </div>
                                        <span class="principal-signoff-sub">Principal • Bedford Kindergarten Qatar</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--ENVIRONMENTS-->
    <section class="facilities section-100 facilities-enhanced" id='fclty'>
        <div class="facilities-cards">
            <div class="container position-relative">
                <!-- Geometric Pyramid Icon Background (Anchored to Container) -->
                <div class="aesthetic-icon" style="top: 10px; right: 0; opacity: 0.6; z-index: 0;">
                    <svg width="80" height="120" viewBox="0 0 100 150" fill="none" stroke="#F59F1E" stroke-width="2"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M50 20 L20 80 L80 80 Z" />
                        <path d="M50 20 L50 80" />
                        <path d="M50 80 L80 80 L60 90 L30 90 Z" />
                        <circle cx="50" cy="70" r="10" fill="#EEF2FB" />
                        <circle cx="50" cy="50" r="8" fill="#EEF2FB" />
                        <circle cx="50" cy="35" r="5" fill="#EEF2FB" />
                    </svg>
                </div>

                <!-- ENHANCEMENT: Wooden Stacking Block Icon (Anchored to Container) -->
                <div class="aesthetic-icon" style="top: 30%; left: -25px; opacity: 0.95; z-index: 1;">
                    <svg width="80" height="120" viewBox="0 0 80 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Bottom Block -->
                        <rect x="15" y="85" width="50" height="25" rx="2" fill="#2F348B" opacity="0.8" />
                        <!-- Second Block -->
                        <rect x="20" y="60" width="40" height="25" rx="2" fill="#F59F1E" opacity="0.85" />
                        <!-- Third Block -->
                        <rect x="25" y="35" width="30" height="25" rx="2" fill="#F59F1E" opacity="0.6" />
                        <!-- Top Triangle Block -->
                        <path d="M25 35 L40 15 L55 35 Z" fill="#EEF2FB" opacity="0.9" />
                        <!-- Little star/sparkle for detail -->
                        <path d="M65 15 L67 20 L72 22 L67 24 L65 29 L63 24 L58 22 L63 20 Z" fill="#F59F1E" />
                    </svg>
                </div>

                <div class="row d-md-flex d-flex align-items-center">
                    <div class="col-12 text-center mb-4" data-aos="fade-up">
                        <h1 class="pb-2 mt-0 section-heading"
                            style="text-transform: uppercase; color: #2F348B; letter-spacing: 2px;">Environments</h1>
                        <a href="{{url('facilities')}}" class="main-btn mt-3">View All</a>
                    </div>
                    <div class="col-md-12">
                        <div class="slick slick-3 mb-4">
                            @foreach ($facilities as $g_index => $facility)
                                <div class="ne h-100">
                                    <div class="item efx h-100" data-aos="fade-up" data-aos-delay="{{ $g_index * 100 }}">
                                        <div class="efx-img"><img src="{{ url('upload/' . $facility->img) }}" alt=""></div>
                                        <div class="ov-content">
                                            <div class="details ">
                                                <h5>{{ $facility->title ?? $facility->name ?? '' }}</h5>
                                                <p class="mb-0">
                                                    {{$facility->small_description}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!--<div class="carrow d-flex justify-content-center mt-3 gap-3">-->
                        <!--    <a class="prev" href="#"><i data-feather="arrow-left-circle"></i></a>-->
                        <!--    <a class="next" href="#"><i data-feather="arrow-right-circle"></i></a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
      <!-- 5. EVENT CALENDAR & HIGHLIGHTS SECTION -->
    <style>
        /* ===================================================
           BEDFORD LUXURY CALENDAR & HIGHLIGHTS SECTION
           =================================================== */
        .calendar-section-premium {
            background: linear-gradient(180deg, #FFFFFF 0%, #F6F8FD 50%, #FFFFFF 100%);
            position: relative;
            padding-top: 4.5rem !important;
            padding-bottom: 4.5rem !important;
        }

        .event-cnd-premium {
            background: #FFFFFF !important;
            border-radius: 24px !important;
            padding: 28px 24px !important;
            box-shadow: 0 15px 40px -10px rgba(47, 52, 139, 0.08), 0 0 0 1px rgba(47, 52, 139, 0.06) !important;
            position: relative !important;
            overflow: hidden !important;
            border: none !important;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .event-cnd-premium::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2F348B 0%, #F59F1E 100%);
        }

        .calendar-header-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            border-radius: 50px;
            background: #EEF2FB;
            border: 1px solid rgba(47, 52, 139, 0.12);
            color: #2F348B;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .calendar-header-badge .badge-icon-svg {
            color: #F59F1E;
            display: inline-flex;
            align-items: center;
        }

        /* FullCalendar Bedford Theme Overrides */
        .event-cnd-premium .fc {
            font-family: 'Montserrat', sans-serif !important;
        }

        .event-cnd-premium .fc .fc-toolbar.fc-header-toolbar {
            margin-bottom: 1.25rem !important;
            gap: 10px;
        }

        .event-cnd-premium .fc .fc-toolbar-title {
            font-family: 'Playfair Display', serif !important;
            font-size: 1.42rem !important;
            font-weight: 700 !important;
            color: #1E244B !important;
            letter-spacing: -0.01em !important;
        }

        .event-cnd-premium .fc .fc-button-group {
            gap: 4px;
        }

        .event-cnd-premium .fc .fc-button {
            background: #F4F6FC !important;
            border: 1px solid rgba(47, 52, 139, 0.14) !important;
            color: #2F348B !important;
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 600 !important;
            font-size: 0.8rem !important;
            padding: 5px 12px !important;
            border-radius: 20px !important;
            box-shadow: none !important;
            transition: all 0.25s ease !important;
            text-transform: capitalize !important;
        }

        .event-cnd-premium .fc .fc-button:hover {
            background: #2F348B !important;
            color: #FFFFFF !important;
            border-color: #2F348B !important;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(47, 52, 139, 0.18) !important;
        }

        .event-cnd-premium .fc .fc-button-primary:not(:disabled).fc-button-active,
        .event-cnd-premium .fc .fc-button-primary:not(:disabled):active {
            background: #2F348B !important;
            color: #FFFFFF !important;
            border-color: #2F348B !important;
        }

        .event-cnd-premium .fc .fc-prev-button,
        .event-cnd-premium .fc .fc-next-button {
            width: 32px !important;
            height: 32px !important;
            padding: 0 !important;
            border-radius: 50% !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .event-cnd-premium .fc .fc-prev-button .fc-icon,
        .event-cnd-premium .fc .fc-next-button .fc-icon {
            font-size: 1.1rem !important;
        }

        .event-cnd-premium .fc-theme-standard th {
            background: #F4F6FC !important;
            border: 1px solid rgba(47, 52, 139, 0.08) !important;
            padding: 8px 4px !important;
        }

        .event-cnd-premium .fc .fc-col-header-cell-cushion {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 700 !important;
            font-size: 0.76rem !important;
            color: #2F348B !important;
            letter-spacing: 1px !important;
            text-transform: uppercase !important;
            text-decoration: none !important;
        }

        .event-cnd-premium .fc-theme-standard td,
        .event-cnd-premium .fc-theme-standard .fc-scrollgrid {
            border: 1px solid rgba(47, 52, 139, 0.07) !important;
        }

        .event-cnd-premium .fc-daygrid-day-number {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.84rem !important;
            font-weight: 500 !important;
            color: #4A5568 !important;
            padding: 4px 6px !important;
            text-decoration: none !important;
        }

        .event-cnd-premium .fc-day-other .fc-daygrid-day-number {
            color: #CBD5E0 !important;
            opacity: 0.6;
        }

        .event-cnd-premium .fc .fc-daygrid-day.fc-day-today {
            background: rgba(245, 159, 30, 0.08) !important;
        }

        .event-cnd-premium .fc .fc-daygrid-day.fc-day-today .fc-daygrid-day-number {
            background: #F59F1E !important;
            color: #FFFFFF !important;
            font-weight: 700 !important;
            border-radius: 50% !important;
            width: 24px !important;
            height: 24px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            box-shadow: 0 2px 6px rgba(245, 159, 30, 0.35) !important;
        }

        .event-cnd-premium .fc-event {
            background: linear-gradient(135deg, #2F348B 0%, #484EB8 100%) !important;
            border: none !important;
            border-radius: 6px !important;
            padding: 2px 6px !important;
            font-size: 0.72rem !important;
            font-weight: 600 !important;
            color: #FFFFFF !important;
            box-shadow: 0 2px 5px rgba(47, 52, 139, 0.15) !important;
        }

        /* Right Card: Highlights Card */
        .calendar-hero-premium {
            border-radius: 24px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 16px 40px -10px rgba(47, 52, 139, 0.12), 0 0 0 1px rgba(47, 52, 139, 0.06);
            height: 100%;
            min-height: 480px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            background: #1E244B;
        }

        .calendar-hero-premium .hero-bg-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
            filter: saturate(1.05);
        }

        .calendar-hero-premium:hover .hero-bg-img {
            transform: scale(1.04);
        }

        .calendar-hero-premium .hero-overlay-gradient {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, 
                rgba(30, 36, 75, 0.12) 0%, 
                rgba(30, 36, 75, 0.35) 38%, 
                rgba(20, 24, 60, 0.88) 72%, 
                rgba(15, 18, 48, 0.96) 100%);
            z-index: 1;
        }

        .calendar-hero-premium .hero-top-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.95);
            padding: 6px 14px;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.75rem;
            font-weight: 700;
            color: #2F348B;
            letter-spacing: 1px;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
        }

        .calendar-hero-premium .hero-top-badge .star-icon {
            color: #F59F1E;
        }

        .calendar-hero-content {
            position: relative;
            z-index: 2;
            padding: 30px 28px;
        }

        .calendar-hero-chip-new {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            backdrop-filter: blur(12px);
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .calendar-hero-chip-new .live-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #F59F1E;
            box-shadow: 0 0 0 4px rgba(245, 159, 30, 0.25);
            display: inline-block;
        }

        .calendar-hero-title-new {
            font-family: 'Playfair Display', serif !important;
            font-size: 1.65rem !important;
            font-weight: 700 !important;
            color: #FFFFFF !important;
            line-height: 1.3 !important;
            margin-bottom: 10px !important;
            letter-spacing: -0.01em;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .calendar-hero-sub-new {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 0.92rem !important;
            line-height: 1.65 !important;
            color: rgba(255, 255, 255, 0.88) !important;
            margin-bottom: 18px !important;
        }

        .calendar-hero-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding-top: 14px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }

        .calendar-hero-tag-item {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            border-radius: 50px;
            padding: 4px 12px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.92);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .calendar-hero-tag-item svg {
            color: #F59F1E;
        }
    </style>

    <section class="calendar calendar-section-premium position-relative overflow-hidden" id="calendar-sec">
        <div class="container position-relative" style="z-index: 2;">
            
            <!-- Aesthetic Gold & Navy Butterfly (Top Left) -->
            <div class="aesthetic-icon position-absolute"
                style="top: -20px; left: -15px; opacity: 0.85; z-index: 1; transform: rotate(-15deg);">
                <svg width="70" height="70" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 50C30 30 10 20 15 45C18 60 30 70 50 60Z" fill="#F59F1E" stroke="#E28C0A" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M50 50C70 30 90 20 85 45C82 60 70 70 50 60Z" fill="#F59F1E" stroke="#E28C0A" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M50 50C30 70 20 90 40 85C50 82 55 70 50 50Z" fill="#2F348B" stroke="#23276B" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M50 50C70 70 80 90 60 85C50 82 45 70 50 50Z" fill="#2F348B" stroke="#23276B" stroke-width="1.5" stroke-linejoin="round" />
                    <rect x="48" y="40" width="4" height="25" rx="2" fill="#1E244B" />
                    <path d="M49 40Q45 30 40 25M51 40Q55 30 60 25" stroke="#1E244B" stroke-width="1.5" fill="none" stroke-linecap="round" />
                </svg>
            </div>

            <!-- Aesthetic Botanical Leaf (Bottom Right) -->
            <div class="aesthetic-icon position-absolute"
                style="bottom: -15px; right: -15px; opacity: 0.75; z-index: 1; transform: rotate(10deg);">
                <svg width="85" height="85" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 100Q45 50 90 10" stroke="#2F348B" stroke-width="2" fill="none" />
                    <path d="M48 80C30 80 20 70 30 60C40 50 48 60 48 80Z" fill="#EEF2FB" stroke="#2F348B" stroke-width="1.5" />
                    <path d="M52 70C70 70 80 60 70 50C60 40 52 50 52 70Z" fill="#EEF2FB" stroke="#2F348B" stroke-width="1.5" />
                    <path d="M45 50C30 50 20 40 30 30C40 20 45 30 45 50Z" fill="#EEF2FB" stroke="#2F348B" stroke-width="1.5" />
                    <path d="M60 40C75 40 85 30 75 20C65 10 60 20 60 40Z" fill="#EEF2FB" stroke="#2F348B" stroke-width="1.5" />
                </svg>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Left Column: Premium Event Calendar -->
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="event-cnd-premium">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="calendar-header-badge">
                                <span class="badge-icon-svg">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                </span>
                                Event Calendar
                            </span>
                            <span class="small font-montserrat fw-600 text-muted d-none d-sm-inline-flex align-items-center gap-1">
                                <span style="display:inline-block; width:7px; height:7px; border-radius:50%; background:#F59F1E;"></span>
                                2026–2027 Academic Year
                            </span>
                        </div>
                        <div class="in-cnd flex-grow-1">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Premium Highlights Visual Card -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="calendar-hero-premium">
                        <img src="{{ asset('Front/images/children-playing.jpg') }}" class="hero-bg-img" alt="Bedford Kindergarten Doha Events and Activities">
                        <div class="hero-overlay-gradient"></div>
                        
                        <!-- Top floating badge -->
                        <div class="hero-top-badge">
                            <span class="star-icon">★</span>
                            <span>Bedford Highlights</span>
                        </div>

                        <!-- Content Bottom -->
                        <div class="calendar-hero-content">
                            <div class="calendar-hero-chip-new">
                                <span class="live-dot"></span>
                                <span>Enriched Experience</span>
                            </div>
                            <h3 class="calendar-hero-title-new">A Year Full of Learning, Sports & Culture</h3>
                            <p class="calendar-hero-sub-new">
                                Discover exciting term activities, Montessori celebrations, sports days, cultural exhibitions, and parent workshops designed to inspire every child.
                            </p>
                            <div class="calendar-hero-tags">
                                <span class="calendar-hero-tag-item">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    EYFS Milestones
                                </span>
                                <span class="calendar-hero-tag-item">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    Montessori Celebrations
                                </span>
                                <span class="calendar-hero-tag-item">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    Key Term Dates
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--EXPLORE-->
    <section class="explore section-100 explore-enhanced position-relative" id='gallery-sec'>
        <div class="container position-relative">
            <!-- NEW: Highly Realistic Sage Green Watercolor Butterfly (Anchored to Container) -->
            <div class="aesthetic-icon"
                style="top: -10px; right: 15px; opacity: 0.95; z-index: 1; transform: rotate(15deg);">
                <svg class="montessori-butterfly-sage" width="70" height="70" viewBox="0 0 120 120" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <filter id="sageBfShadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="4" stdDeviation="3" flood-color="#7A8B6F" flood-opacity="0.25" />
                        </filter>
                        <linearGradient id="sageTopWing" x1="0%" y1="100%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#D0CDB8" />
                            <stop offset="60%" stop-color="#A5B095" />
                            <stop offset="100%" stop-color="#7A8B6F" />
                        </linearGradient>
                        <linearGradient id="sageTopWingRight" x1="100%" y1="100%" x2="0%" y2="0%">
                            <stop offset="0%" stop-color="#D0CDB8" />
                            <stop offset="60%" stop-color="#A5B095" />
                            <stop offset="100%" stop-color="#7A8B6F" />
                        </linearGradient>
                        <linearGradient id="sageBotWing" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#B2BCA1" />
                            <stop offset="100%" stop-color="#8F9E82" />
                        </linearGradient>
                        <linearGradient id="sageBotWingRight" x1="100%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#B2BCA1" />
                            <stop offset="100%" stop-color="#8F9E82" />
                        </linearGradient>
                    </defs>

                    <g filter="url(#sageBfShadow)">
                        <!-- Top Left Wing (More Angular/Sweeping) -->
                        <path d="M 58 52 C 35 30, 10 15, 12 40 C 15 65, 30 75, 58 58 Z" fill="url(#sageTopWing)"
                            stroke="#6A7A5F" stroke-width="1.2" stroke-linejoin="round" />
                        <!-- Top Right Wing -->
                        <path d="M 62 52 C 85 30, 110 15, 108 40 C 105 65, 90 75, 62 58 Z" fill="url(#sageTopWingRight)"
                            stroke="#6A7A5F" stroke-width="1.2" stroke-linejoin="round" />

                        <!-- Bottom Left Wing (Slightly Elongated) -->
                        <path d="M 58 58 C 45 70, 25 95, 42 105 C 55 110, 60 75, 58 58 Z" fill="url(#sageBotWing)"
                            stroke="#6A7A5F" stroke-width="1.2" stroke-linejoin="round" />
                        <!-- Bottom Right Wing -->
                        <path d="M 62 58 C 75 70, 95 95, 78 105 C 65 110, 60 75, 62 58 Z" fill="url(#sageBotWingRight)"
                            stroke="#6A7A5F" stroke-width="1.2" stroke-linejoin="round" />

                        <!-- Wing Veins (Left) -->
                        <path
                            d="M 58 56 Q 35 40 18 35 M 58 56 Q 35 55 20 52 M 58 60 Q 45 75 35 90 M 58 60 Q 50 85 45 100"
                            stroke="#5A6A4F" stroke-width="0.8" opacity="0.6" />
                        <!-- Wing Veins (Right) -->
                        <path
                            d="M 62 56 Q 85 40 102 35 M 62 56 Q 85 55 100 52 M 62 60 Q 75 75 85 90 M 62 60 Q 70 85 75 100"
                            stroke="#5A6A4F" stroke-width="0.8" opacity="0.6" />

                        <!-- Wing Edge Dots (Left) -->
                        <circle cx="20" cy="40" r="1.5" fill="#FAF5F0" opacity="0.8" />
                        <circle cx="25" cy="55" r="1.2" fill="#FAF5F0" opacity="0.8" />
                        <!-- Wing Edge Dots (Right) -->
                        <circle cx="100" cy="40" r="1.5" fill="#FAF5F0" opacity="0.8" />
                        <circle cx="95" cy="55" r="1.2" fill="#FAF5F0" opacity="0.8" />

                        <!-- Body -->
                        <rect x="58" y="42" width="4" height="30" rx="2" fill="#4A5243" />
                        <circle cx="60" cy="40" r="3.5" fill="#4A5243" /> <!-- Head -->

                        <!-- Antennae -->
                        <path d="M 59 38 Q 50 20 40 15 M 61 38 Q 70 20 80 15" stroke="#4A5243" stroke-width="1.5"
                            fill="none" stroke-linecap="round" />
                        <!-- Antennae Knobs -->
                        <circle cx="40" cy="15" r="1.5" fill="#4A5243" />
                        <circle cx="80" cy="15" r="1.5" fill="#4A5243" />
                    </g>
                </svg>
            </div>

            <!-- ENHANCEMENT: Cute Watercolor Bunny Icon (Anchored to Container) -->
            <div class="aesthetic-icon" style="bottom: -20px; left: -15px; opacity: 0.95; z-index: 2;">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Back Ear -->
                    <path d="M60 40 Q75 10 85 15 Q80 35 65 45" fill="#A89F91" opacity="0.6" />
                    <!-- Back Leg -->
                    <path d="M65 70 Q75 90 85 88" stroke="#A89F91" stroke-width="8" stroke-linecap="round"
                        opacity="0.6" />
                    <!-- Body -->
                    <path d="M25 80 C10 80 15 55 35 45 C55 35 75 50 75 70 C75 85 40 85 25 80 Z" fill="#D4C5B9"
                        opacity="0.9" />
                    <!-- Front Ear -->
                    <path d="M50 43 Q60 5 70 10 Q70 30 55 48" fill="#D4C5B9" opacity="0.9" />
                    <!-- Head -->
                    <circle cx="40" cy="50" r="18" fill="#D4C5B9" opacity="0.9" />
                    <!-- Snout -->
                    <circle cx="25" cy="53" r="7" fill="#E8E5DC" opacity="0.9" />
                    <circle cx="20" cy="51" r="2" fill="#A89F91" />
                    <!-- Eye -->
                    <circle cx="33" cy="46" r="2" fill="#4A4A4A" />
                    <!-- Front Legs -->
                    <path d="M30 75 Q30 95 40 92" stroke="#D4C5B9" stroke-width="8" stroke-linecap="round" />
                    <path d="M55 70 Q55 90 65 88" stroke="#D4C5B9" stroke-width="8" stroke-linecap="round" />
                    <!-- Tail -->
                    <circle cx="78" cy="65" r="7" fill="#F7F5F0" opacity="0.9" />
                    <circle cx="82" cy="69" r="5" fill="#F7F5F0" opacity="0.7" />
                </svg>
            </div>

            <div class="row d-md-flex d-flex align-items-center">
                <div class="col-md-6 col-12 text-center text-md-start" data-aos="fade-right">
                    <span
                        class="section-kicker d-inline-flex align-items-center gap-2 justify-content-center justify-content-md-start">
                        <!-- Montessori Stacking Blocks Icon -->
                        <svg width="20" height="30" viewBox="0 0 40 70" fill="none" stroke="#A89F91" stroke-width="2"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="5" y="50" width="30" height="15" fill="#D4C5B9" rx="2" />
                            <rect x="10" y="35" width="20" height="15" fill="#E8E5DC" rx="2" />
                            <rect x="15" y="20" width="10" height="15" fill="#F7F5F0" rx="2" />
                            <polygon points="10,20 30,20 20,5" fill="#7A8B6F" stroke-linejoin="round" />
                        </svg>
                        Explore
                    </span>
                    <h1 class="pb-3 mt-0 section-heading" data-aos="fade-right" data-aos-delay="50">Gallery</h1>
                </div>
                <div class="col-md-6 col-12 text-center text-md-end mb-4 mb-md-0" data-aos="fade-left">
                    <a href="{{ route('photo_gallery') }}" class="main-btn">View All</a>
                </div>

                <div class="col-md-12">
                    <div class="row nopad">
                        @foreach ($galleries as $g_index => $gallery)
                            <div class="col-md-3" data-aos="fade-up"
                                data-aos-delay=" @if ($g_index == 0) 50 @elseif($g_index == 1)100 @elseif($g_index == 2)200 @else 250 @endif">
                                <div class="hg-img efx position-relative gallery-tile"><a href="#"><img
                                            src="{{ url('upload/' . $gallery->image) }}" alt="">
                                        <span class="w-100 gallery-label">{{ $gallery->title }}</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="facilities news-events-enhanced">
        <div class="container position-relative">
            <!-- Soft Watercolor Cloud Icons (Anchored to Container) -->
            <div class="aesthetic-icon"
                style="top: 0px; right: 15px; opacity: 0.85; z-index: 0; animation: float 6s ease-in-out infinite;">
                <svg width="100" height="60" viewBox="0 0 24 24" fill="#E8E5DC" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5 19C19.9853 19 22 16.9853 22 14.5C22 12.1331 20.1765 10.1915 17.8631 10.0159C17.3828 6.59829 14.454 4 11 4C7.54602 4 4.61717 6.59829 4.13689 10.0159C1.82346 10.1915 0 12.1331 0 14.5C0 16.9853 2.01472 19 4.5 19H17.5Z" />
                </svg>
            </div>

            <div class="row d-md-flex d-flex ">
                <div class="col-md-6 col-12 text-center text-md-start">
                    <div class="pb-3 mt-0 in-cnt-pd position-relative" data-aos="fade-right">
                        <!-- ENHANCEMENT: Montessori Watercolor Pink Floral Sprig -->
                        <div class="aesthetic-icon news-flower-icon">
                            <svg class="montessori-flower" width="120" height="180" viewBox="0 0 120 180" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <filter id="flowerShadow" x="-20%" y="-20%" width="140%" height="140%">
                                        <feDropShadow dx="0" dy="4" stdDeviation="3" flood-color="#887868"
                                            flood-opacity="0.2" />
                                    </filter>
                                    <linearGradient id="stemGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#95A384" />
                                        <stop offset="100%" stop-color="#7A8B6F" />
                                    </linearGradient>
                                    <linearGradient id="leafGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#A5B095" />
                                        <stop offset="100%" stop-color="#7A8B6F" />
                                    </linearGradient>
                                    <radialGradient id="petalGrad1" cx="30%" cy="30%" r="70%">
                                        <stop offset="0%" stop-color="#F9E4E0" />
                                        <stop offset="60%" stop-color="#EBC4BB" />
                                        <stop offset="100%" stop-color="#DCA89E" />
                                    </radialGradient>
                                    <radialGradient id="petalGrad2" cx="30%" cy="30%" r="70%">
                                        <stop offset="0%" stop-color="#FDF2EF" />
                                        <stop offset="70%" stop-color="#F1D1C6" />
                                        <stop offset="100%" stop-color="#EBC4BB" />
                                    </radialGradient>
                                    <radialGradient id="centerGrad" cx="40%" cy="40%" r="60%">
                                        <stop offset="0%" stop-color="#E3C380" />
                                        <stop offset="60%" stop-color="#C59E51" />
                                        <stop offset="100%" stop-color="#9E7831" />
                                    </radialGradient>
                                </defs>

                                <g filter="url(#flowerShadow)">
                                    <!-- Main Stem -->
                                    <path d="M 60 70 Q 55 120 40 180" stroke="url(#stemGrad)" stroke-width="2.5"
                                        fill="none" stroke-linecap="round" />
                                    <!-- Side Stem 1 -->
                                    <path d="M 55 100 Q 75 90 90 70" stroke="url(#stemGrad)" stroke-width="1.5"
                                        fill="none" stroke-linecap="round" />
                                    <!-- Side Stem 2 -->
                                    <path d="M 52 130 Q 35 120 20 100" stroke="url(#stemGrad)" stroke-width="1.5"
                                        fill="none" stroke-linecap="round" />
                                    <!-- Side Stem 3 -->
                                    <path d="M 45 160 Q 65 155 75 140" stroke="url(#stemGrad)" stroke-width="1.5"
                                        fill="none" stroke-linecap="round" />

                                    <!-- Leaves on Main Stem -->
                                    <path d="M 55 100 Q 65 120 52 130 Q 45 110 55 100 Z" fill="url(#leafGrad)" />
                                    <path d="M 45 160 Q 30 145 42 130 Q 55 145 45 160 Z" fill="url(#leafGrad)" />

                                    <!-- Leaves on Side Stem 1 -->
                                    <path d="M 70 85 Q 85 95 95 85 Q 85 75 70 85 Z" fill="url(#leafGrad)" />
                                    <path d="M 80 75 Q 90 60 100 65 Q 95 80 80 75 Z" fill="url(#leafGrad)" />

                                    <!-- Leaves on Side Stem 2 -->
                                    <path d="M 35 110 Q 20 120 10 110 Q 20 100 35 110 Z" fill="url(#leafGrad)" />
                                    <path d="M 25 105 Q 15 90 5 95 Q 10 110 25 105 Z" fill="url(#leafGrad)" />

                                    <!-- Leaves on Side Stem 3 -->
                                    <path d="M 60 150 Q 80 160 85 145 Q 70 140 60 150 Z" fill="url(#leafGrad)" />

                                    <!-- Main Flower (Top) -->
                                    <g transform="translate(60, 65)">
                                        <!-- Back Petals -->
                                        <path d="M 0 0 C -25 -15, -15 -35, -5 -35 C 5 -35, 10 -25, 0 0 Z"
                                            fill="url(#petalGrad2)" />
                                        <path d="M 0 0 C 15 -25, 35 -15, 35 -5 C 35 5, 25 10, 0 0 Z"
                                            fill="url(#petalGrad2)" />
                                        <path d="M 0 0 C 25 15, 15 35, 5 35 C -5 35, -10 25, 0 0 Z"
                                            fill="url(#petalGrad2)" />
                                        <path d="M 0 0 C -15 25, -35 15, -35 5 C -35 -5, -25 -10, 0 0 Z"
                                            fill="url(#petalGrad2)" />
                                        <!-- Front Petals -->
                                        <path d="M 0 0 C -15 -35, 15 -35, 0 0 Z" fill="url(#petalGrad1)" />
                                        <path d="M 0 0 C 35 -15, 35 15, 0 0 Z" fill="url(#petalGrad1)" />
                                        <path d="M 0 0 C 15 35, -15 35, 0 0 Z" fill="url(#petalGrad1)" />
                                        <path d="M 0 0 C -35 15, -35 -15, 0 0 Z" fill="url(#petalGrad1)" />
                                        <!-- Petal details -->
                                        <path d="M 0 0 L 0 -15 M 0 0 L 15 0 M 0 0 L 0 15 M 0 0 L -15 0" stroke="#C08479"
                                            stroke-width="0.5" opacity="0.6" />
                                        <!-- Center -->
                                        <circle cx="0" cy="0" r="6" fill="url(#centerGrad)" />
                                        <circle cx="-2" cy="-2" r="1.5" fill="#FAF5F0" opacity="0.6" />
                                        <circle cx="2" cy="1" r="1" fill="#7A5420" opacity="0.5" />
                                        <circle cx="-1" cy="2" r="1" fill="#7A5420" opacity="0.5" />
                                    </g>

                                    <!-- Small Bud (Side Stem 1) -->
                                    <g transform="translate(90, 70)">
                                        <path d="M 0 0 C 10 -5, 15 -15, 5 -20 C -5 -15, 0 -5, 0 0 Z"
                                            fill="url(#petalGrad1)" />
                                        <path d="M 0 0 C -5 0, -10 5, 0 0 Z" fill="#95A384" />
                                        <path d="M 0 0 C 5 0, 10 5, 0 0 Z" fill="#95A384" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="section-kicker"><span class="dot" aria-hidden="true"></span>UPDATE</span>
                        <h1 class="section-heading">News &amp; Events</h1>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-center text-md-end mb-4 mb-md-0" data-aos="fade-left">
                    <a href="{{url('news')}}" class="main-btn">View All</a>
                </div>
                <div class="col-md-12">
                    <div class="row g-4">
                        @foreach ($newses as $newse)
                            <div class="col-md-3">
                                <div class="card h-100 border-0"
                                    style="border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;"
                                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(155, 106, 171, 0.15)';"
                                    onmouseout="this.style.transform='none'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.05)';">
                                    <div class="news-thumb position-relative" style="height: 200px; overflow: hidden;">
                                        <img src="{{ url('upload/' . $newse->thumb_img) }}" alt="{{ $newse->news_title }}"
                                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                            onmouseover="this.style.transform='scale(1.05)'"
                                            onmouseout="this.style.transform='scale(1)'">
                                    </div>
                                    <div class="card-body news-card d-flex flex-column justify-content-between p-4"
                                        style="background-color: #ffffff;">
                                        <div>
                                            <h4 class="mb-2"
                                                style="color: #2F348B; font-family: 'Playfair Display', serif; font-size: 1.35rem; font-weight: 600; line-height: 1.4;">
                                                {{ $newse->news_title }}
                                            </h4>
                                            <p class="mb-3"
                                                style="color: #64748B; font-family: 'Montserrat', sans-serif; font-size: 0.85rem;">
                                                {{ \Carbon\Carbon::parse($newse->news_date)->format('d m, Y') }}
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ route('news_details', $newse->news_slug) }}"
                                                class="main-btn text-uppercase"
                                                style="font-size: 13px; padding: 10px 25px; width: 100%; text-align: center; letter-spacing: 1px;">READ
                                                MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>{{-- /.bg-grid --}}
@include('front.layouts.footer')