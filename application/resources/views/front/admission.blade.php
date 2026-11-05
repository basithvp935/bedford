@section('title', 'Admission Form | Bedford Kindergarten Qatar - Doha')
@section('description', 'Online Registration & Admission Form for Bedford Kindergarten Qatar in Barwa Madinatna, Doha.')
@section('admission', 'active')
@include('front.layouts.header')

<!-- Flatpickr Custom Date Picker CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Full Width Fixed Banner -->
<section class="position-relative" style="
    background: url('{{ asset('Front/images/brightban.jpg') }}') center top / cover no-repeat !important;
    width: 100%; 
    height: 450px !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    border: none !important;
    overflow: hidden;
    background-attachment:fixed
">
</section>

<!-- Custom Styles for Premium Admission Form -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Great+Vibes&display=swap');

    .admission-form-wrapper {
        background-color: #F8FAFC;
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    .premium-form-container {
        background: #ffffff;
        border-radius: 12px;
        padding: 3.5rem 4rem; 
        box-shadow: 0 10px 40px rgba(47, 52, 139, 0.05);
        border: 1px solid rgba(47, 52, 139, 0.12);
    }

    @media (max-width: 768px) {
        .premium-form-container {
            padding: 2rem 1.5rem;
        }
    }

    .form-section-title {
        color: #2F348B;
        font-family: 'Playfair Display', serif;
        font-weight: 500;
        font-size: 1.8rem;
        margin-top: 3.5rem;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid rgba(47, 52, 139, 0.15);
        letter-spacing: 0.5px;
    }

    .form-section-title.first-title {
        margin-top: 0 !important;
    }

    .form-subtitle {
        color: #2F348B;
        font-family: 'Playfair Display', serif;
        font-weight: 500;
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
    }

    .premium-form-label {
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        color: #1E244B;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .premium-form-control {
        font-family: 'Montserrat', sans-serif;
        border-radius: 6px;
        border: 1px solid #d0d7de;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        background-color: #F8FAFC;
        width: 100%;
        color: #1E244B;
    }

    .premium-form-control:focus {
        border-color: #2F348B;
        box-shadow: 0 0 0 3px rgba(47, 52, 139, 0.12);
        background-color: #ffffff;
        outline: none;
    }

    /* Flatpickr Custom Theme Overrides */
    .flatpickr-day.selected {
        background: #2F348B !important;
        border-color: #2F348B !important;
    }
    .custom-datepicker {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%232F348B' class='bi bi-calendar' viewBox='0 0 16 16'%3E%3Cpath d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 16px;
        cursor: pointer;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    /* Sibling Row Styles */
    .sibling-row {
        background-color: #EEF2FB;
        padding: 1.5rem;
        border-radius: 6px;
        border: 1px dashed rgba(47, 52, 139, 0.3);
        margin-bottom: 1rem;
    }

    .btn-add-sibling {
        background-color: transparent;
        color: #2F348B;
        font-family: 'Montserrat', sans-serif;
        border-radius: 30px;
        font-weight: 500;
        padding: 0.7rem 1.8rem;
        border: 1px solid #2F348B;
        transition: all 0.3s;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
    }

    .btn-add-sibling:hover {
        background-color: #2F348B;
        border-color: #2F348B;
        color: white;
    }

    .btn-remove-sibling {
        background-color: #ffffff;
        color: #ef4444;
        border: 1px solid #ef4444;
        border-radius: 4px;
        width: 100%;
        height: calc(1.5em + 1.5rem + 2px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 400;
        font-size: 1.2rem;
        transition: all 0.3s;
        margin-top: 26px;
    }

    .btn-remove-sibling:hover {
        background-color: #fee2e2;
    }

    /* Custom File Upload */
    .custom-file-upload {
        border: 1px solid #d0d7de;
        display: flex;
        align-items: center;
        border-radius: 6px;
        background-color: #F8FAFC;
        overflow: hidden;
        transition: all 0.3s;
    }
    .custom-file-upload:hover {
        border-color: #2F348B;
    }
    .custom-file-upload input[type="file"] {
        display: none;
    }
    .custom-file-label {
        background-color: #EEF2FB;
        padding: 0.75rem 1rem;
        color: #2F348B;
        font-weight: 500;
        cursor: pointer;
        margin: 0;
        border-right: 1px solid #d0d7de;
        transition: all 0.3s;
        white-space: nowrap;
    }
    .custom-file-label:hover {
        background-color: #2F348B;
        color: #fff;
    }
    .custom-file-text {
        padding: 0.75rem 1rem;
        color: #64748B;
        font-size: 0.9rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Submit Button */
    .btn-submit-app {
        background-color: #F59F1E;
        color: #ffffff;
        font-family: 'Montserrat', sans-serif;
        border: none;
        border-radius: 30px;
        padding: 1.2rem 3.5rem;
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35);
        transition: all 0.4s ease;
    }
    
    .btn-submit-app:hover {
        background-color: #E28C0A;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(245, 159, 30, 0.45);
        color: white;
    }

    /* Parsley validation error styles */
    .parsley-errors-list {
        list-style: none;
        padding: 0;
        margin: 0.35rem 0 0;
        color: #dc3545;
        font-family: 'Montserrat', sans-serif;
        font-size: 0.8rem;
    }
    .parsley-error {
        border-color: #dc3545 !important;
    }
</style>

<section class="admission-form-wrapper">
    <div class="container">
        
        <!-- Premium Form Header -->
        <div class="row mb-5">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <span style="font-family: 'Great Vibes', cursive; font-size: 3rem; color: #F59F1E; margin-bottom: -10px; display: block;">Join Our Family</span>
                <h1 class="mt-0 mb-3" style="font-family: 'Playfair Display', serif; font-size: 3.5rem; color: #2F348B; font-weight: 500;">Admission Form</h1>
                <div style="width: 80px; height: 3px; background: linear-gradient(to right, #2F348B, #F59F1E); margin: 0 auto; border-radius: 2px;" class="mt-4"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="premium-form-container" data-aos="fade-up" data-aos-delay="100">
                    
                    <form id="admissionForm" action="{{ route('admission_store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger mb-4" style="font-family: 'Montserrat', sans-serif;">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <!-- ================= 1. STUDENT PROFILE ================= -->
                        <h3 class="form-section-title first-title">Student Profile</h3>
                        
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Name Of the Student: <span class="text-danger">*</span></label>
                                <input type="text" name="student_name" class="premium-form-control" value="{{ old('student_name') }}" required data-parsley-required-message="Student name is required" data-parsley-trigger="change">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Nationality: <span class="text-danger">*</span></label>
                                <input type="text" name="nationality" class="premium-form-control" value="{{ old('nationality') }}" required data-parsley-required-message="Nationality is required" data-parsley-trigger="change">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Gender: <span class="text-danger">*</span></label>
                                <select name="gender" class="premium-form-control" required data-parsley-required-message="Please select gender" data-parsley-trigger="change">
                                    <option value="">Select...</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Passport No:</label>
                                <input type="text" name="student_passport" class="premium-form-control" value="{{ old('student_passport') }}">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Date of Expiry:</label>
                                <input type="text" name="student_passport_expiry" class="premium-form-control custom-datepicker" placeholder="dd/mm/yyyy" value="{{ old('student_passport_expiry') }}">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Res. Visa No:</label>
                                <input type="text" name="res_visa_no" class="premium-form-control" value="{{ old('res_visa_no') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Date of Expiry:</label>
                                <input type="text" name="res_visa_expiry" class="premium-form-control custom-datepicker" placeholder="dd/mm/yyyy" value="{{ old('res_visa_expiry') }}">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Age: <span class="text-danger">*</span></label>
                                <input type="number" name="age" class="premium-form-control" value="{{ old('age') }}" required data-parsley-required-message="Age is required" data-parsley-trigger="change" min="1" max="20">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Blood Group:</label>
                                <input type="text" name="blood_group" class="premium-form-control" value="{{ old('blood_group') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="premium-form-label">Home Language(s):</label>
                                <input type="text" name="home_languages" class="premium-form-control" value="{{ old('home_languages') }}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="premium-form-label">Previous Nursery/School attended:</label>
                                <input type="text" name="previous_school" class="premium-form-control" value="{{ old('previous_school') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="premium-form-label">Any ongoing medical conditions or physical needs?</label>
                                <input type="text" name="medical_conditions" class="premium-form-control" value="{{ old('medical_conditions') }}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="premium-form-label">Any known allergies:</label>
                                <input type="text" name="allergies" class="premium-form-control" value="{{ old('allergies') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="premium-form-label">Does your child carry an EpiPen or emergency medication? If Yes, Details:</label>
                                <input type="text" name="epipen_details" class="premium-form-control" value="{{ old('epipen_details') }}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="premium-form-label">Any identified learning difficulty or IEP (Individual education program)? If Yes, Details:</label>
                                <input type="text" name="learning_difficulty" class="premium-form-control" value="{{ old('learning_difficulty') }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Transport Facility:</label>
                                <select name="transport_facility" class="premium-form-control">
                                    <option value="">Select...</option>
                                    <option value="Yes" {{ old('transport_facility') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="No" {{ old('transport_facility') == 'No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Area of Residence:</label>
                                <input type="text" name="area_of_residence" class="premium-form-control" value="{{ old('area_of_residence') }}">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Boarding Point:</label>
                                <input type="text" name="boarding_point" class="premium-form-control" value="{{ old('boarding_point') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Pin Number:</label>
                                <input type="text" name="pin_number" class="premium-form-control" value="{{ old('pin_number') }}">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Street Number:</label>
                                <input type="text" name="street_number" class="premium-form-control" value="{{ old('street_number') }}">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Building Number:</label>
                                <input type="text" name="building_number" class="premium-form-control" value="{{ old('building_number') }}">
                            </div>
                        </div>


                        <!-- ================= 2. SIBLING DETAILS ================= -->
                        <h3 class="form-section-title">Sibling Details</h3>
                        
                        <div id="siblings-container">
                            <div class="sibling-row">
                                <div class="row">
                                    <div class="col-md-5 form-group mb-md-0">
                                        <input type="text" name="sibling_reg[]" class="premium-form-control" placeholder="Registration Number">
                                    </div>
                                    <div class="col-md-6 form-group mb-md-0">
                                        <input type="text" name="sibling_name[]" class="premium-form-control" placeholder="Student Name">
                                    </div>
                                    <div class="col-md-1 form-group mb-0">
                                        <button type="button" class="btn-remove-sibling" style="margin-top:0;" onclick="this.closest('.sibling-row').remove()">
                                            -
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-end mb-4">
                            <button type="button" class="btn-add-sibling" id="addSiblingBtn">Add Sibling +</button>
                        </div>


                        <!-- ================= 3. PARENT DETAILS ================= -->
                        <h3 class="form-section-title">Parent Details</h3>
                        
                        <div class="row">
                            <!-- FATHER DETAILS -->
                            <div class="col-md-6 pe-md-4">
                                <h5 class="form-subtitle">Father's/Guardian's Details</h5>
                                
                                <div class="form-group">
                                    <label class="premium-form-label">Father's Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="father_name" class="premium-form-control" value="{{ old('father_name') }}" required data-parsley-required-message="Father name is required" data-parsley-trigger="change">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Father's Mobile No: <span class="text-danger">*</span></label>
                                    <input type="text" name="father_mobile" class="premium-form-control" value="{{ old('father_mobile') }}" required data-parsley-required-message="Father mobile is required" data-parsley-trigger="change">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Father Email:</label>
                                    <input type="email" name="father_email" class="premium-form-control" value="{{ old('father_email') }}" data-parsley-type="email" data-parsley-trigger="change">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Passport No:</label>
                                    <input type="text" name="father_passport" class="premium-form-control" value="{{ old('father_passport') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Date of Expiry:</label>
                                    <input type="text" name="father_passport_expiry" class="premium-form-control custom-datepicker" placeholder="dd/mm/yyyy" value="{{ old('father_passport_expiry') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Residence/National ID:</label>
                                    <input type="text" name="father_eid" class="premium-form-control" value="{{ old('father_eid') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Date of Expiry:</label>
                                    <input type="text" name="father_eid_expiry" class="premium-form-control custom-datepicker" placeholder="dd/mm/yyyy" value="{{ old('father_eid_expiry') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Father Occupation:</label>
                                    <input type="text" name="father_occupation" class="premium-form-control" value="{{ old('father_occupation') }}">
                                </div>
                            </div>

                            <!-- MOTHER DETAILS -->
                            <div class="col-md-6 ps-md-4" style="border-left: 1px solid rgba(168, 159, 145, 0.2);">
                                <h5 class="form-subtitle">Mother's Details</h5>
                                
                                <div class="form-group">
                                    <label class="premium-form-label">Mother's Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="mother_name" class="premium-form-control" value="{{ old('mother_name') }}" required data-parsley-required-message="Mother name is required" data-parsley-trigger="change">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Mother's Mobile No: <span class="text-danger">*</span></label>
                                    <input type="text" name="mother_mobile" class="premium-form-control" value="{{ old('mother_mobile') }}" required data-parsley-required-message="Mother mobile is required" data-parsley-trigger="change">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Mother Email:</label>
                                    <input type="email" name="mother_email" class="premium-form-control" value="{{ old('mother_email') }}" data-parsley-type="email" data-parsley-trigger="change">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Passport No:</label>
                                    <input type="text" name="mother_passport" class="premium-form-control" value="{{ old('mother_passport') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Date of Expiry:</label>
                                    <input type="text" name="mother_passport_expiry" class="premium-form-control custom-datepicker" placeholder="dd/mm/yyyy" value="{{ old('mother_passport_expiry') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Residence/National ID:</label>
                                    <input type="text" name="mother_eid" class="premium-form-control" value="{{ old('mother_eid') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Date of Expiry:</label>
                                    <input type="text" name="mother_eid_expiry" class="premium-form-control custom-datepicker" placeholder="dd/mm/yyyy" value="{{ old('mother_eid_expiry') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Mother Occupation:</label>
                                    <input type="text" name="mother_occupation" class="premium-form-control" value="{{ old('mother_occupation') }}">
                                </div>
                            </div>
                        </div>


                        <!-- ================= 4. EMERGENCY CONTACT ================= -->
                        <h3 class="form-section-title">Emergency Contact (Other than parents)</h3>
                        
                        <div class="row">
                            <!-- Contact 1 -->
                            <div class="col-md-6 pe-md-4">
                                <h5 class="form-subtitle">Contact 1</h5>
                                
                                <div class="form-group">
                                    <label class="premium-form-label">Name:</label>
                                    <input type="text" name="emerg1_name" class="premium-form-control" value="{{ old('emerg1_name') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Relationship to child:</label>
                                    <input type="text" name="emerg1_relation" class="premium-form-control" value="{{ old('emerg1_relation') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Phone number:</label>
                                    <input type="text" name="emerg1_phone" class="premium-form-control" value="{{ old('emerg1_phone') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Authorized to collect the child:</label>
                                    <select name="emerg1_authorized" class="premium-form-control">
                                        <option value="">Select...</option>
                                        <option value="Yes" {{ old('emerg1_authorized') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="No" {{ old('emerg1_authorized') == 'No' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Contact 2 -->
                            <div class="col-md-6 ps-md-4" style="border-left: 1px solid rgba(168, 159, 145, 0.2);">
                                <h5 class="form-subtitle">Contact 2</h5>
                                
                                <div class="form-group">
                                    <label class="premium-form-label">Name:</label>
                                    <input type="text" name="emerg2_name" class="premium-form-control" value="{{ old('emerg2_name') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Relationship to child:</label>
                                    <input type="text" name="emerg2_relation" class="premium-form-control" value="{{ old('emerg2_relation') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Phone number:</label>
                                    <input type="text" name="emerg2_phone" class="premium-form-control" value="{{ old('emerg2_phone') }}">
                                </div>
                                <div class="form-group">
                                    <label class="premium-form-label">Authorized to collect the child:</label>
                                    <select name="emerg2_authorized" class="premium-form-control">
                                        <option value="">Select...</option>
                                        <option value="Yes" {{ old('emerg2_authorized') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="No" {{ old('emerg2_authorized') == 'No' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!-- ================= 5. CONSENT ================= -->
                        <h3 class="form-section-title">Consent</h3>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="form-subtitle" style="text-transform: none; margin-bottom: 0.5rem;">Photo and video content:</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">For center use:</label>
                                <select name="consent_school_use" class="premium-form-control">
                                    <option value="">Select...</option>
                                    <option value="Yes" {{ old('consent_school_use') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="No" {{ old('consent_school_use') == 'No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">For website/social media:</label>
                                <select name="consent_web_media" class="premium-form-control">
                                    <option value="">Select...</option>
                                    <option value="Yes" {{ old('consent_web_media') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="No" {{ old('consent_web_media') == 'No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">For printed materials:</label>
                                <select name="consent_printed" class="premium-form-control">
                                    <option value="">Select...</option>
                                    <option value="Yes" {{ old('consent_printed') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="No" {{ old('consent_printed') == 'No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12 form-group">
                                <label class="premium-form-label" style="font-size: 1.05rem;">First aid and emergency medical treatment consent: <span class="text-danger">*</span></label>
                                <select name="consent_first_aid" class="premium-form-control" style="max-width: 300px;" required data-parsley-required-message="Please select first aid consent" data-parsley-trigger="change">
                                    <option value="">Select...</option>
                                    <option value="I give consent" {{ old('consent_first_aid') == 'I give consent' ? 'selected' : '' }}>I give consent</option>
                                    <option value="I do not give consent" {{ old('consent_first_aid') == 'I do not give consent' ? 'selected' : '' }}>I do not give consent</option>
                                </select>
                            </div>
                        </div>


                        <!-- ================= 6. DOCUMENTS ================= -->
                        <h4 class="form-section-title">Upload Documents</h4>
                        <p style="color: #64748b; font-family: 'Montserrat', sans-serif; margin-top: -1rem; margin-bottom: 1.5rem;">The details of documents to be submitted are given below</p>
                        
                        <div class="row">
                            <!-- Row 1 -->
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Child's Passport</label>
                                <div class="custom-file-upload">
                                    <label for="child_passport_doc" class="custom-file-label">Choose File</label>
                                    <span class="custom-file-text" id="child_passport_doc_text">No file chosen</span>
                                    <input type="file" name="child_passport_doc" id="child_passport_doc" onchange="document.getElementById('child_passport_doc_text').innerText = this.files[0] ? this.files[0].name : 'No file chosen'">
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Child's Residence/National ID</label>
                                <div class="custom-file-upload">
                                    <label for="child_residence_doc" class="custom-file-label">Choose File</label>
                                    <span class="custom-file-text" id="child_residence_doc_text">No file chosen</span>
                                    <input type="file" name="child_residence_doc" id="child_residence_doc" onchange="document.getElementById('child_residence_doc_text').innerText = this.files[0] ? this.files[0].name : 'No file chosen'">
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Child’s Passport Size Photograph</label>
                                <div class="custom-file-upload">
                                    <label for="child_photo_doc" class="custom-file-label">Choose File</label>
                                    <span class="custom-file-text" id="child_photo_doc_text">No file chosen</span>
                                    <input type="file" name="child_photo_doc" id="child_photo_doc" onchange="document.getElementById('child_photo_doc_text').innerText = this.files[0] ? this.files[0].name : 'No file chosen'">
                                </div>
                            </div>
                            
                            <!-- Row 2 -->
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Father’s Passport or Residence/National ID</label>
                                <div class="custom-file-upload">
                                    <label for="father_doc" class="custom-file-label">Choose File</label>
                                    <span class="custom-file-text" id="father_doc_text">No file chosen</span>
                                    <input type="file" name="father_doc" id="father_doc" onchange="document.getElementById('father_doc_text').innerText = this.files[0] ? this.files[0].name : 'No file chosen'">
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Mother’s Passport or Residence/National ID</label>
                                <div class="custom-file-upload">
                                    <label for="mother_doc" class="custom-file-label">Choose File</label>
                                    <span class="custom-file-text" id="mother_doc_text">No file chosen</span>
                                    <input type="file" name="mother_doc" id="mother_doc" onchange="document.getElementById('mother_doc_text').innerText = this.files[0] ? this.files[0].name : 'No file chosen'">
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="premium-form-label">Immunization / Vaccination Record</label>
                                <div class="custom-file-upload">
                                    <label for="immunization_doc" class="custom-file-label">Choose File</label>
                                    <span class="custom-file-text" id="immunization_doc_text">No file chosen</span>
                                    <input type="file" name="immunization_doc" id="immunization_doc" onchange="document.getElementById('immunization_doc_text').innerText = this.files[0] ? this.files[0].name : 'No file chosen'">
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" style="border-color: rgba(168, 159, 145, 0.2);">

                        <!-- ================= 7. MISC & SUBMIT ================= -->
                        <div class="row mb-4">
                            <div class="col-md-12 form-group">
                                <label class="premium-form-label">How did you come to know about this school?</label>
                                <select name="source" class="premium-form-control">
                                    <option value="Website" {{ old('source', 'Website') == 'Website' ? 'selected' : '' }}>Website</option>
                                    <option value="Social Media" {{ old('source') == 'Social Media' ? 'selected' : '' }}>Social Media</option>
                                    <option value="Friends/Family" {{ old('source') == 'Friends/Family' ? 'selected' : '' }}>Friends/Family</option>
                                    <option value="Advertisement" {{ old('source') == 'Advertisement' ? 'selected' : '' }}>Advertisement</option>
                                    <option value="Other" {{ old('source') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn-submit-app">Submit Application</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')

{{-- Parsley must load after footer jQuery --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
<script>
    (function () {
        flatpickr(".custom-datepicker", {
            dateFormat: "d/m/Y",
            allowInput: true,
            disableMobile: "true"
        });

        if (window.jQuery) {
            $('#admissionForm').parsley();
        }

        const addSiblingBtn = document.getElementById('addSiblingBtn');
        const siblingsContainer = document.getElementById('siblings-container');

        if (addSiblingBtn && siblingsContainer) {
            addSiblingBtn.addEventListener('click', function () {
                const newRow = document.createElement('div');
                newRow.className = 'sibling-row';
                newRow.innerHTML = `
                    <div class="row">
                        <div class="col-md-5 form-group mb-md-0">
                            <input type="text" name="sibling_reg[]" class="premium-form-control" placeholder="Registration Number">
                        </div>
                        <div class="col-md-6 form-group mb-md-0">
                            <input type="text" name="sibling_name[]" class="premium-form-control" placeholder="Student Name">
                        </div>
                        <div class="col-md-1 form-group mb-0">
                            <button type="button" class="btn-remove-sibling" style="margin-top:0;" onclick="this.closest('.sibling-row').remove()">-</button>
                        </div>
                    </div>
                `;
                newRow.style.opacity = 0;
                newRow.style.transition = "opacity 0.3s ease";
                siblingsContainer.appendChild(newRow);
                setTimeout(function () { newRow.style.opacity = 1; }, 10);
            });
        }
    })();
</script>
