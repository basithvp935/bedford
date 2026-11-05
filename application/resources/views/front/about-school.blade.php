@section('title', 'About School | Bedford Kindergarten Qatar - Best Preschool in Doha')
@section('description', 'Learn more about Bedford Kindergarten Qatar in Barwa Madinatna, Doha. Offering British EYFS and Montessori early childhood education.')
@include('front.layouts.header')

<!-- Fixed Banner -->
<section class="position-relative" style="
    background: url('{{ asset('Front/images/brightban.jpg') }}') center top / cover no-repeat !important;
    width: 100vw; 
    margin-left: calc(-50vw + 50%); 
    max-width: 100vw; 
    height: 450px !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    border: none !important;
    overflow: hidden;
    background-attachment:fixed
">
</section>

<!-- Custom Styles for Premium Box & Tables -->
<style>
    /* Premium Box Container */
    .about-banner-box {
        background: linear-gradient(135deg, rgba(47, 52, 139, 0.04) 0%, rgba(255, 255, 255, 0.95) 50%, rgba(245, 159, 30, 0.04) 100%);
        border-radius: 24px;
        padding: 3.5rem 4rem;
        border: 1px solid rgba(47, 52, 139, 0.12);
        box-shadow: 0 15px 35px rgba(47, 52, 139, 0.04);
        position: relative;
        overflow: hidden;
    }
    
    @media (max-width: 768px) {
        .about-banner-box {
            padding: 2rem 1.5rem;
        }
    }

    /* Custom Striped Tables for Theme Color */
    .table-theme-striped tbody tr:nth-child(odd) td,
    .table-theme-striped tbody tr:nth-child(odd) th {
        background-color: #ffffff !important;
    }
    .table-theme-striped tbody tr:nth-child(even) td,
    .table-theme-striped tbody tr:nth-child(even) th {
        background-color: rgba(47, 52, 139, 0.03) !important; 
    }
</style>
   
<!-- Main Content Section -->
<section class="about section-100 home-about py-5" style="
    background-color: #F8FAFC;
    background-image: 
        linear-gradient(rgba(47, 52, 139, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(47, 52, 139, 0.03) 1px, transparent 1px);
    background-size: 40px 40px;
    background-position: center top;
">
   <div class="container ">
       
    <div class="row my-4">
      <div class="col-md-12">
        
        <!-- Premium Container Box -->
        <div class="about-banner-box w-100 mx-auto" data-aos="fade-up">
            
            <!-- Title -->
            <div class="text-center mb-5">
                <h1 class="fw-bold display-4 mb-3" style="color: #2F348B;">About Our Kindergarten</h1>
                <div style="width: 80px; height: 4px; background: linear-gradient(to right, #2F348B, #F59F1E); margin: 0 auto; border-radius: 2px;"></div>
            </div>

            <!-- Kindergarten Information Table (No Accordion) -->
            <!--<div class="bg-white p-4" style="border-radius: 12px; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 4px 6px rgba(0,0,0,0.02);">-->
            <!--    <div class="table-responsive">-->
            <!--      <table class="table table-bordered table-theme-striped mb-0">-->
            <!--        <tbody>-->
            <!--            <tr>-->
            <!--              <th class="w-25" style="color: #1a2b4c; font-weight: 600;">KINDERGARTEN NAME</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">CENTRE CODE</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">ADDRESS</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">KHDA REGISTRATION</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">CENTRE MANAGER</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">MANAGER'S CONTACT NUMBER</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">MANAGER'S EMAIL ID</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">CENTRE'S CONTACT NUMBER</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">CENTRE'S EMAIL ID</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">CENTRE'S WEBSITE</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">CURRICULUM</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">LANDMARK NEAR CENTRE</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">YEAR OF ESTABLISHMENT</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">TRUST/SOCIETY/COMPANY</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--            <tr>-->
            <!--              <th style="color: #1a2b4c; font-weight: 600;">REGISTRATION VALIDITY</th>-->
            <!--              <td></td>-->
            <!--            </tr>-->
            <!--        </tbody>-->
            <!--      </table>-->
            <!--    </div>-->
            <!--</div>-->

        </div>
      </div>
    </div>
  </div>
</section>

@include('front.layouts.footer')
