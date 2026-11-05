@section('title', 'Management Committee | Bedford Kindergarten Qatar')
@section('description', 'Meet the management committee and leadership of Bedford Kindergarten in Doha, Qatar.')
@section('management_committees', 'active')
@include('front.layouts.header')

<!-- Full Width Fixed Banner -->
<section class="position-relative" style="
    background: url('{{ asset('Front/images/banner8.jpg') }}') center top / cover no-repeat !important;
    width: 100vw; 
    margin-left: calc(-50vw + 50%); 
    max-width: 100vw; 
    height: 450px !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    border: none !important;
    overflow: hidden;
">
</section>

<!-- Custom Styles for Premium Management Page -->
<style>
    .management-page-wrapper {
        background-color: #f4faff;
        background-image: 
            linear-gradient(rgba(13, 190, 185, 0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(13, 190, 185, 0.04) 1px, transparent 1px);
        background-size: 40px 40px;
        background-position: center top;
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    /* Premium Management Card */
    .premium-team-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 2.5rem 1.5rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        border: 1px solid rgba(13, 190, 185, 0.1);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        height: 100%;
        text-align: center;
    }
    
    .premium-team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(157, 116, 180, 0.12);
        border-color: rgba(157, 116, 180, 0.3);
    }
    
    /* Gradient Ring for Image */
    .team-img-wrapper {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        margin: 0 auto 1.5rem;
        padding: 5px;
        box-shadow: 0 8px 20px rgba(13, 190, 185, 0.2);
    }
    
    .team-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #ffffff;
    }
    
    /* Alternating Logo Colors for the dynamic database loop */
    .col-lg-3:nth-child(3n+1) .team-img-wrapper {
        background: linear-gradient(135deg, #0DBEB9, #9D74B4); /* Surf to Purple */
    }
    .col-lg-3:nth-child(3n+2) .team-img-wrapper {
        background: linear-gradient(135deg, #C4C068, #0DBEB9); /* Gold to Surf */
    }
    .col-lg-3:nth-child(3n+3) .team-img-wrapper {
        background: linear-gradient(135deg, #9D74B4, #C4C068); /* Purple to Gold */
    }

    .premium-team-card h6 {
        color: #1a2b4c;
        font-weight: 800;
        font-size: 1.25rem;
        margin-bottom: 0.25rem;
    }

    .premium-team-card p.designation {
        color: #0DBEB9;
        font-weight: 700;
        font-size: 0.95rem;
        margin-bottom: 1rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .premium-team-card p.description {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
    }
</style>

<section class="management-page-wrapper">
    <div class="container">
        
        <!-- Header Title -->
        <div class="row mb-5">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <span class="text-uppercase fw-bold" style="color: #0DBEB9; letter-spacing: 2px;">Our Leadership</span>
                <h1 class="fw-bold display-5 mt-2" style="color: #2F348B;">Bedford Kindergarten Leadership</h1>
                <p class="mt-3 mx-auto text-muted" style="max-width: 700px; font-size: 1.1rem;">Meet the dedicated team of educators and professionals who guide the vision and mission of Bedford Kindergarten in Doha, Qatar.</p>
                <div style="width: 60px; height: 4px; background-color: #F59F1E; margin: 0 auto; border-radius: 2px;" class="mt-4"></div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- Dynamic Database Loop (Beautifully Styled) -->
            @foreach ($management_committees as $management_committy)
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="premium-team-card">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('Front/images/princi.jpg') }}" alt="{{ $management_committy->name }}">
                        </div>
                        
                        <h6>
                            {{ str_ireplace(['Mrs. Jyothi P', 'Mr. Ahammed'], 'Fathima N. Lafir', $management_committy->name) }}
                        </h6>
                        
                        <p class="designation">
                            {{ str_ireplace(['Dayapuram Residential School', 'Dayapuram', 'Bright Beginnings'], 'Bedford Kindergarten', $management_committy->designation) }}
                        </p>
                        
                        @if($management_committy->small_description)
                            <p class="description">
                                {{ str_ireplace(['Dayapuram Residential School', 'Dayapuram', 'Bright Beginnings'], 'Bedford Kindergarten', $management_committy->small_description) }}
                            </p>
                        @endif
                        
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@include('front.layouts.footer')
