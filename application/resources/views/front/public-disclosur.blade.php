@section('title', 'Public Disclosure | Bedford Kindergarten Qatar - Best Preschool in Doha')
@section('description', 'Discover Bedford Kindergarten Qatar in Barwa Madinatna, Doha. Offering world-class early years education and holistic development.')
@include('front.layouts.header')

<!-- Fixed Banner: Text removed and anchored to 'top' so the image shows perfectly clearly -->
<section class="position-relative" style="
    background: url('{{ asset('Front/images/brightban.jpg') }}') center top / cover no-repeat; 
    width: 100vw; 
    margin-left: calc(-50vw + 50%); 
    max-width: 100vw; 
    height: 450px; 
    overflow: hidden;
     <!--background-attachment:fixed-->
">
</section>

<!-- Custom Styles for Alternating Table Rows (White / Theme Blue) -->
<style>
    .table-theme-striped tbody tr:nth-child(odd) td {
        background-color: #ffffff !important;
    }
    .table-theme-striped tbody tr:nth-child(even) td {
        background-color: #f4faff !important; /* Soft blue theme color */
    }
</style>

<!-- Added the Soft Blue Grid Theme Background Here -->
<section class="about section-100 home-about py-5 public-disclosur" style="
    background-color: #f4faff;
    background-image: 
        linear-gradient(rgba(13, 110, 253, 0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(13, 110, 253, 0.04) 1px, transparent 1px);
    background-size: 40px 40px;
    background-position: center top;
">
      <div class="container ">
        
        <!-- Public Disclosure Title moved BELOW the banner -->
        <div class="row mb-5 mt-4">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <h1 class="fw-bold display-4 mb-3" style="color: var(--c-navy, #0d6efd);">Public Disclosure</h1>
                <div style="width: 60px; height: 4px; background-color: #0d6efd; margin: 0 auto; border-radius: 2px;"></div>
            </div>
        </div>
          
        <div class="row">
       <div class="col-md-12">
           
    
         <div class="card info-card shadow-sm border-0 rounded-4">
      <div class="card-body p-md-5">
        
        <!-- Section A: General Information -->
        <div class="section-title mt-0">
            <h3 class="mt-0 fw-bold" style="color: #0d6efd);">A : GENERAL INFORMATION</h3> 
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-theme-striped">
                <thead class="table-primary">
                    <tr>
                        <th>SL NO.</th>
                        <th>INFORMATION</th>
                        <th>DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>NAME OF THE SCHOOL</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>AFFILIATION NO.(IF APPLICABLE)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SCHOOL CODE (IF APPLICABLE)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>COMPLETE ADDRESS WITH PIN CODE</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>PRINCIPAL NAME</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>PRINCIPAL QUALIFICATION</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>SCHOOL EMAIL ID</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>CONTACT DETAILS (LANDLINE/MOBILE)</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Section B: Documents and Information -->
        <div class="section-title">
            <h3 class="fw-bold" style="color: #0d6efd;">B : DOCUMENTS AND INFORMATION</h3>
        </div>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-theme-striped">
                <thead class="table-primary">
                    <tr>
                        <th>SL NO.</th>
                        <th>DOCUMENTS/INFORMATION</th>
                        <th>LINKS OF UPLOADED DOCUMENTS ON YOUR SCHOOLS WEBSITE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT'S RENEWAL IF APPLICABLE</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>COPY OF THE SELF CERTIFICATION SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="note-box alert alert-warning rounded-3 shadow-sm mb-5">
            <p class="mb-1"><strong class="text-danger"><i class="bi bi-exclamation-triangle me-2"></i>NOTE:</strong></p>
            <p class="mb-0 small">THE SCHOOL NEEDS TO UPLOAD THE SELF ATTESTED COPIES OF ABOVE LISTED DOCUMENTS BY CHAIRMAN/MANAGER/SECRETARY AND PRINCIPAL. IN CASE IT IS NOTICED AT A LATER STAGE THAT UPLOADED DOCUMENTS ARE NOT GENUINE, THE SCHOOL SHALL BE LIABLE FOR ACTION AS PER NORMS.</p>
        </div>

        <!-- Section C: Result and Academics -->
        <div class="section-title">
            <h3 class="fw-bold" style="color: #0d6efd;">C : RESULT AND ACADEMICS</h3>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-theme-striped">
                <thead class="table-primary">
                    <tr>
                        <th>SL NO.</th>
                        <th>DOCUMENTS/INFORMATION</th>
                        <th>LINKS OF UPLOADED DOCUMENTS ON YOUR SCHOOLS WEBSITE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>FEE STRUCTURE OF THE SCHOOL</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ANNUAL ACADEMIC CALENDER</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABILITY</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Section D: Staff (Teaching) -->
        <div class="section-title">
            <h3 class="fw-bold" style="color: #0d6efd;">D : STAFF (TEACHING)</h3>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-theme-striped">
                <thead class="table-primary">
                    <tr>
                        <th>SL NO.</th>
                        <th>INFORMATION</th>
                        <th>DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PRINCIPAL</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TOTAL NO. OF TEACHERS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>PGT</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>TGT</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>PRT</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>PET</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIT</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TEACHERS SECTION RATIO</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>DETAILS OF SPECIAL EDUCATOR</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Section E: School Infrastructure -->
        <div class="section-title">
            <h3 class="fw-bold" style="color: #0d6efd;">E : SCHOOL INFRASTRUCTURE</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-theme-striped">
                <thead class="table-primary">
                    <tr>
                        <th>SL NO.</th>
                        <th>INFORMATION</th>
                        <th>DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ MTR)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>INTERNET FACILITY</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>NO. OF GIRLS TOILETS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>NO. OF BOYS TOILETS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
  </div>
  </div>
</div>
</div>
        
        </section>
        
        @include('front.layouts.footer')
