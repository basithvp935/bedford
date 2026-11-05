@section('title', 'Admission Procedure - Bedford Kindergarten Qatar | Doha')
@section('description', 'Learn about the admission process, age criteria, and enrollment requirements for Bedford Kindergarten Qatar in Barwa Madinatna, Doha.')
@section('admission', 'active')
@include('front.layouts.header')

<div class="page-top"></div>

<!-- Custom Styles for Premium Admission Page -->
<style>
    /* Premium Montessori Admission Theme */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Great+Vibes&display=swap');

    .admission-page-wrapper {
        background-color: #F8FAFC; /* Clean Crisp Slate Canvas */
        padding-top: 5rem;
        padding-bottom: 6rem;
        font-family: 'Montserrat', sans-serif;
    }

    /* Premium White Card Wrapper */
    .premium-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(47, 52, 139, 0.05);
        border: 1px solid rgba(47, 52, 139, 0.1);
        overflow: hidden;
    }

    /* Premium Hover Accordion Styles */
    .premium-accordion .accordion-item {
        border-radius: 8px !important;
        margin-bottom: 16px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 12px rgba(47, 52, 139, 0.03);
        overflow: hidden;
        border: 1px solid rgba(47, 52, 139, 0.15) !important;
        background-color: #ffffff !important;
    }

    .premium-accordion .accordion-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(47, 52, 139, 0.08);
        border-color: rgba(47, 52, 139, 0.35) !important;
    }

    /* Accordion Button Text Styling */
    .premium-accordion .accordion-button {
        font-family: 'Playfair Display', serif !important;
        font-weight: 500 !important;
        font-size: 1.35rem !important;
        color: #2F348B !important; /* Bedford Royal Indigo */
        background: #ffffff !important;
        padding: 1.4rem 1.8rem;
        transition: all 0.3s ease-in-out;
        border-radius: 8px !important;
        box-shadow: none !important;
        letter-spacing: 0.3px;
    }

    .premium-accordion .accordion-button:hover {
        color: #F59F1E !important; /* Bedford Sunny Gold hover */
    }

    .premium-accordion .accordion-button:not(.collapsed) {
        color: #2F348B !important; 
        font-weight: 600 !important;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
        background-color: #EEF2FB !important; /* Soft Bedford Tint Background */
        border-bottom: 1px solid rgba(47, 52, 139, 0.15) !important;
    }
    
    .premium-accordion .accordion-button::after {
        filter: none;
    }

    /* Content Area Styling */
    .premium-accordion .accordion-collapse {
        background-color: #ffffff;
    }
    
    .premium-accordion .accordion-body {
        background-color: #ffffff !important;
        padding: 2rem 2.2rem;
        font-family: 'Montserrat', sans-serif !important;
    }

    /* Content Typography */
    .premium-accordion .accordion-body p {
        color: #4A5568;
        font-family: 'Montserrat', sans-serif !important;
        font-size: 1rem !important;
        font-weight: 400;
        line-height: 1.8;
        margin-bottom: 1.25rem;
        text-align: justify;
    }
    
    .premium-accordion .accordion-body strong {
        color: #2F348B;
        font-family: 'Montserrat', sans-serif !important;
        font-weight: 600;
    }

    .premium-accordion .accordion-body h5 {
        color: #2F348B;
        font-family: 'Playfair Display', serif !important;
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }

    /* Elegant Bullet Points */
    .premium-accordion .accordion-body ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .premium-accordion .accordion-body ul li {
        color: #4A5568;
        font-family: 'Montserrat', sans-serif !important;
        font-size: 1rem !important;
        font-weight: 400;
        margin-bottom: 1rem;
        position: relative;
        padding-left: 1.6rem;
        list-style-type: none;
        line-height: 1.8;
        text-align: justify;
    }

    .premium-accordion .accordion-body ul li:last-child {
        margin-bottom: 0;
    }

    .premium-accordion .accordion-body ul li::before {
        content: "•";
        color: #F59F1E; /* Bedford Sunny Gold Bullet */
        font-size: 1.3rem;
        display: inline-block; 
        position: absolute;
        left: 0;
        top: -2px;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .premium-accordion .accordion-button {
            font-size: 1.15rem !important;
            padding: 1.1rem 1.25rem;
        }
        .premium-accordion .accordion-body {
            padding: 1.5rem 1.25rem;
        }
        .premium-accordion .accordion-body p,
        .premium-accordion .accordion-body ul li {
            font-size: 0.95rem !important;
        }
    }
</style>

<section class="admission-page-wrapper">
    <div class="container">
        
        <!-- Header Title -->
        <div class="row mb-5">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <span style="font-family: 'Great Vibes', cursive; font-size: 3rem; color: #F59F1E; margin-bottom: -10px; display: block;">Join Our Family</span>
                <h1 class="mt-0 mb-3" style="font-family: 'Playfair Display', serif; font-size: 3.5rem; color: #2F348B; font-weight: 500;">Admission Procedures</h1>
                <div style="width: 80px; height: 3px; background: linear-gradient(to right, #2F348B, #F59F1E); margin: 0 auto; border-radius: 2px;" class="mt-4"></div>
            </div>
        </div>

        <div class="row g-md-5 mt-1">
            <div class="col-md-12 ">
                <div class="premium-card">
                    <div class="card-body p-4 p-md-5">
                         <div class="in-cnt-pd" data-aos="fade-up">
                 
                            <!-- JUSTIFIED PARAGRAPH -->
                            <p class="mb-5 mx-auto d-block" style="color: #555555; font-size: 1.1rem; max-width: 800px; line-height: 1.8; text-align: justify;">
                                Welcome to <strong>Bedford Kindergarten</strong>! We are thrilled that you are considering our British EYFS and Montessori-inspired program in Barwa Madinatna, Doha, Qatar for your child's early education. Please review the simple steps below to join our vibrant learning community.
                            </p>
                    
                            <div class="accordion premium-accordion" id="accordionAdmission">
                              
                              <!-- Admission Process -->
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. Admission Process
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionAdmission">
                                  <div class="accordion-body">
                                     <p>At <strong>Bedford Kindergarten</strong>, we ensure a smooth, transparent, and welcoming admission process for both you and your child. We accept applications year-round, subject to seat availability.</p>
                                     
                                     <ul class="m-0 p-0 mt-4">
                                         <li><strong>Step 1 – Enquiry & Campus Tour:</strong> Families are invited to visit our purpose-built campus in Barwa Madinatna, explore our learning environments, and meet our academic team.</li>
                                         <li><strong>Step 2 – Child Observation & Interaction:</strong> A gentle, age-appropriate observation session helps us understand your child's developmental readiness and strengths.</li>
                                         <li><strong>Step 3 – Application Submission:</strong> Complete the registration form online or in person with the necessary identification documents.</li>
                                         <li><strong>Step 4 – Admission Offer & Enrollment:</strong> Once accepted, parents receive an official enrollment letter and fee schedule.</li>
                                         <li><strong>Step 5 – Welcome Orientation:</strong> Families receive full onboarding materials to prepare for a joyous and smooth transition on the first day.</li>
                                     </ul>
                                  </div>
                                </div>
                              </div>
                              
                              <!-- Age Criteria & Programs -->
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Age Criteria & Programs
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionAdmission">
                                  <div class="accordion-body">
                                     
                                     <!-- Premium Program Layout -->
                                     <div class="row fw-bold pb-3 mb-4 mt-2" style="border-bottom: 1px solid rgba(47, 52, 139, 0.2); color: #F59F1E; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">
                                         <div class="col-8">Program</div>
                                         <div class="col-4 text-end">Age</div>
                                     </div>
                                     
                                     <!-- Table Row -->
                                     <div class="row mb-4 align-items-center">
                                         <div class="col-8">
                                             <strong style="color: #2F348B; font-size: 1.3rem; font-family: 'Playfair Display', serif;">Pre-KG / Early Years 1</strong>
                                         </div>
                                         <div class="col-4 text-end fw-bold" style="color: #F59F1E; font-size: 1.1rem;">
                                             3.0 – 4.0 Years
                                         </div>
                                     </div>

                                     <div class="row mb-4 align-items-center">
                                         <div class="col-8">
                                             <strong style="color: #2F348B; font-size: 1.3rem; font-family: 'Playfair Display', serif;">KG 1 / Early Years 2</strong>
                                         </div>
                                         <div class="col-4 text-end fw-bold" style="color: #F59F1E; font-size: 1.1rem;">
                                             4.0 – 5.0 Years
                                         </div>
                                     </div>

                                     <div class="row mb-4 align-items-center">
                                         <div class="col-8">
                                             <strong style="color: #2F348B; font-size: 1.3rem; font-family: 'Playfair Display', serif;">KG 2 / Foundation Stage</strong>
                                         </div>
                                         <div class="col-4 text-end fw-bold" style="color: #F59F1E; font-size: 1.1rem;">
                                             5.0 – 6.0 Years
                                         </div>
                                     </div>
                                     
                                     <!-- Description Paragraph -->
                                     <p class="mb-0 mt-4">
                                         Children learn through structured play, sensory exploration, and British EYFS learning milestones designed to build confidence, independence, and foundational literacy and numeracy.
                                     </p>
                                     
                                  </div>
                                </div>
                              </div>
                              
                              <!-- Required Documents -->
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   3. Required Documents
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionAdmission">
                                  <div class="accordion-body">
                                    <ul class="m-0 p-0">
                                         <li>Completed Bedford Kindergarten Admission Form</li>
                                         <li>Copy of Child's Passport and Qatar ID (QID) / Visa</li>
                                         <li>Copy of Parents' Passports and Qatar IDs (QID)</li>
                                         <li>Copy of Child's Birth Certificate</li>
                                         <li>Copy of Child's Immunization / Vaccination Card</li>
                                         <li>Four Recent Passport-size Photographs of the Child</li>
                                         <li>Previous nursery or kindergarten reports (if applicable)</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@include('front.layouts.footer')
