@section('title', 'Fee Payments')
@section('academics', 'active')
@include('front.layouts.header')


<div class="page-top"></div>
<section class="about section-100 pt-30 ">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ url('upload/' . $academic->banner) }}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>
        <div class="row  g-md-5">
            <div class="col-md-12">
                <div class="in-cnt-pd" data-aos="fade-right">
                  
                    <h1 class="pb-2 mt-0 fw-600"> Online Fee Payments</h1>
               
                    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    Core Benefits to You
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <p><li>Great Convenience: Pay anytime from anywhere using internet (24 x 7 access)</li>
          <li>Easy Online Payment Options by Debit Card/Credit card</li>
          <li>Save Time & Effort</li>
</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    Payment Process: Pay Your Fee by Simple Steps
    
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <ul class="list-bulletin">
       
      <li>Log on to school’s portal through the website using parent login credentials.</li>
    <li>Click on the Fee Detail tab.</li>
    <li>Click on Online Payments.</li>
    <li>Tick the appropriate installment and accept the Terms and Conditions.</li>
    <li>Follow the steps as illustrated in the attached user guide and proceed with the payment.</li>
    <li>Please check your card limit before proceeding to online payment. If the amount to be paid is higher than the limit allowed on your card, you may opt for any of the following measures:</li>
    
        <li>Kindly get a temporary approval from the concerned Bank to effect the full payment at one time.</li>
        <li>Fee shall be displayed term-wise, and the transport fee shall be displayed monthly (April, May, June, Sept, August… March). Kindly select individual terms (First Term, Second Term, Third Term for paying tuition fees and April, May…March for paying transport fees) so as to make the due amount fall within the limit allowed to you, and make payments through multiple attempts, selecting a different term each time. This approach will allow you to pay the full due amount, but in multiple attempts. PLEASE TAKE DUE CARE to select the term properly, and AVOID selecting the same term multiple times.</li>
        <li>After finishing the payment you will be receiving a temporary acknowledgement. The same will be received in your email also. Please note that once you finish the payment please wait for the confirmation for next working day.</li>
        <li>If the transaction is successful, it will be indicated in your fee payment portal within three working days. You can directly download the original fee receipt from the parent portal (Path: Reports - Fee receipts (Select Fee payment number, click on preview, export to PDF)).</li>
        
    <li>If the transaction has FAILED for some reason, you are REQUESTED TO WAIT for THREE WORKING DAYS before trying for payment again.</li>
    <li>Please contact the finance team of the institution for any discrepancy in online fee payment faced by you with reference to any of your transactions.</li>
    <li>In any case of discrepancy, make a note of Reference/Transaction Details/document printed during the transaction in case of net banking or card payment.</li>
    </ul>
    
    <div class="col-md-4 col-8 text-end">
                    <a target="blank" href="https://drive.google.com/file/d/1jyGWJisnpK0_988tS-PWNOfxsnBDIyEb/view?usp=drive_link" class="main-btn d-none d-md-inline-block">Demo Video </a>
                      
                </div>
                
    
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
   Privacy Policy
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>
          
          The details provided by you shall be utilized only for the purpose of receiving the payments to be made by you to the Institution. All data shall be kept secure, and shall not be divulged to anyone or utilized for any other purpose.
           
           </p>
      </div>
    </div>
  </div>
  
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingFoure">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">
  Cancellation/Refund Policy 

      </button>
    </h2>
    <div id="collapseFoure" class="accordion-collapse collapse" aria-labelledby="headingFoure" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>In case of duplicate payment, end user is requested to approach the Accounts Department of the Institution with proof of the transaction reference/ your bank statement/ document printed during transaction.</p>
      </div>
    </div>
  </div>
  
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
  Support 
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>
           
          For any discrepancy of fee payment faced by you or support related issue with reference to any of your transactions, you can Contact our Finance Team at Tel: +974 40022130 / +974 30737731 or mail at school@bedfordqatar.com. Looking forward to hearing your feedback and your continued support.

</p>












</div>


      </div>
      
      
    </div>
    <div style="text-align: center; margin-top: 50px;">
        <!--<label style="display: inline-flex; align-items: center;">-->
        <!--    <input type="checkbox" checked style="margin-right: 10px;" id="termsCheckbox">-->
        <!--    <span>I agree to the <a href="#" style="color: blue; text-decoration: none;">Terms and Conditions</a></span>-->
        <!--</label>-->
        <!--<br><br>-->
        <a href="https://campus.nobleqatar.net/">
        <button style="padding: 10px 20px; background-color: #154a91; color: white; border: none; border-radius: 5px; cursor: pointer;" 
                 id="proceedButton">
            Proceed to Payment
        </button>
        </a>
    </div>
  </div>
  
   

  
  
</div>
                </div>

              
            </div>
          
        </div>
    </div>
</section>






@include('front.layouts.footer')
