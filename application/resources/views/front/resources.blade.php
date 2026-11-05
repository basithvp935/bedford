@section('title', 'Home')
@section('home', 'active')
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
                  
                    <h1 class="pb-2 mt-0 fw-600"> Academics</h1>
               
                    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    The Philosophy
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <p>Noble aims to provide academic excellence in a caring and structured environment. Each student is considered as an individual and as such we encourage them to understand and develop the uniqueness of their contribution to both school and society. We aim to build self-confidence and give all students a sense of success and morality in their achievement.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    The Curriculum
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>“Tell me and I’ll Forget, Show me and I may not remember, Involve me and I’ll understand”</p>
       <p>
           Noble International School designs and implements its own curriculum within the frame work of CBSE syllabi and tries to ensure that the students and their teachers have as much flexibility as possible to foster child centred learning. Noble follows CBSE CCE Pattern within which flexibility of methodology and the use of experiential learning systems are strongly encouraged. This helps eliminate the need to learn by meaningless rote and develop a healthy and positive attitude towards learning. Our system of evaluation takes into account the individualities of different children to provide adequate feedback on the student's learning without putting undue pressure. As the child progresses through the classes, the assessment is gradually modified to prepare them for self-motivated learning as well as external tests and competitive exams.
       </p>
       <p>English will be taught as the core language and it will be the only medium of instruction for all subjects apart from Languages. The curriculum is designed in a way to develop high proficiency in English. More specifically it stresses both fluency and accuracy. Learning traditional grammar is delayed for later years of elementary school, that is, after the students have developed communicative competence.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
   Affiliation details
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>The school has CBSE Senior Secondary Affiliation till 31/03/2027.</p>
      </div>
    </div>
  </div>
  
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingFoure">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">
  Evaluation Policy
      </button>
    </h2>
    <div id="collapseFoure" class="accordion-collapse collapse" aria-labelledby="headingFoure" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>Noble International School runs classes from Grade 1 to Grade 10 and is affiliated to the Central Board of Secondary education (CBSE), New Delhi, India. The curriculum designed and developed by the National Council of Educational Research and Training, New Delhi ensures quality education to all its students and prepares them to take on the mantle of leadership in the knowledge society. Evaluation at Noble focus on a mastery of content and meeting learning targets and content standards set forth by teachers at the beginning of each term.<br/>

The whole academic year is divided in to two terms.<br/>

First Term: - April to October<br/>

Second Term: - November to March</p>
      </div>
    </div>
  </div>
  
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
  Scholastic area
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>The assessment structure and examination for grades 1 to 8 will comprise two terms as explained below.
</p>
<h4 class="mt-3">Term 1</h4>
<p>Periodic Test - 10 marks
Note book submission - 5 marks (Regularity, Assignment completion, Neatness & upkeep of note book)
Subject Enrichment Activity - 5 marks</p>
<div class="table-responsive">
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Activity</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Languages</td>
      <td>Speaking and Listening Skills</td>
    </tr>
  <tr>
      <td>Science</td>
      <td>Practical Lab work</td>
    </tr>
    <tr>
      <td>Mathematics</td>
      <td>Mathematical activities</td>
    </tr>
    
    <tr>
      <td>Social Science</td>
      <td>Map work and Project work</td>
    </tr>
  </tbody>
</table>
</div>

<p>Half Yearly Examination<br/>
The marks allotment for half yearly examination is as given below;</p>

<div class="table-responsive">
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Grades 1 to 5 (max. marks)</th>
         <th scope="col">Grades 6 to 8 (max. marks)</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Major subjects</th>
      <td>40</td>
      <td>80</td>
    </tr>
  <tr>
     <th>Minor subjects</th>
      <td>20</td>
      <td>40</td>
    </tr>
  
  </tbody>
</table>
</div>

<h4 class="mt-3">Term 2 will have the same assessment pattern</h4>
<p>Syllabus coverage for Term 2 will be as below:</p>

<div class="table-responsive">
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Grades</th>
      <th scope="col">Syllabus</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>1 to 5</td>
      <td>Entire syllabus of Term 2</td>
    </tr>
  <tr>
      <td>6</td>
      <td>10% of Term 1(significant topics) + entire syllabus of Term 2</td>
    </tr>
     <tr>
      <td>7</td>
      <td>20% of Term 1(significant topics) + entire syllabus of Term 2</td>
    </tr>
    
     <tr>
      <td>8</td>
      <td>30% of Term 1(significant topics) + entire syllabus of Term 2</td>
    </tr>
  
  </tbody>
</table>

<h4 class="mt-3">Co Scholastic Activities</h4>
<p>For the holistic development of the student ,co-curricular activities in the following areas be carried out by the teachers and will be graded term-wise on a 3-point grading scale.
</p>
<ul class="mt-3 p-0 m-0">
    <li class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Work Education</li>
 <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Art Education ( Visual and performing Art)</li>
 <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Health and Physical Education</li>
 <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Discipline. (Attendance, Sincerity, and Values)</li>
</ul>

<h4 class="mt-3">Classes IX andX</h4>
<p><b>IMPORTANT:</b> CBSE has discontinued the dual scheme (Scheme-I and Scheme II) of the examination of class X from the academic year 2017-18. The examination from the academic year 2017-18 will be as per the remodeled assessment structure mentioned below. The Annual Examination will cover 100% syllabus of the subject. In classes IX and X there will be three periodic written tests in the entire academic year and the average of best two will be taken. For the purpose of gradient learning there shall be one midterm and the other two will be pre midterm and post midterm. The syllabus in midterm will include the pre midterm syllabus while the post midterm will include pre midterm and midterm syllabus. All three tests are compulsory . If a child is absent for a test, the school had no provision for holding the tests at a later date.<br/>
     <b>Internal assessment will be a part of evaluation for main subjects and will comprise:</b><br/>
Periodic Test - 10 marks
Note book submission - 5 marks (Regularity, Assignment completion, Neatness & upkeep of note book)
Subject Enrichment Activity - 5 marks
</p>

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Activity</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>Languages</td>
      <td>Speaking and Listening Skills</td>
    </tr>
  <tr>
      <td>Science</td>
      <td>Practical Lab work</td>
    </tr>
      <tr>
      <td>Mathematics</td>
      <td>Mathematical activities</td>
    </tr>
    
    <tr>
      <td>Social Science</td>
      <td>Map work and Project work</td>
    </tr>
    
  
  </tbody>
</table>

<p>Annual Examination(Main subjects) - 80 marks<br/>
Class X syllabus will be completed by 15th of December 2017
</p>
<h4 class="mt-3">Grading for class IX and X</h4>
<p>The report card will indicate positional letter grade in each subject on eight-point scale as per CBSE pattern. All the students successful in the Annual Examination (i.e. 33% and above) will be put in rank order and will be awarded grades.</p>

<h4 class="mt-3">Co Scholastic Activities</h4>
<p>For the holistic development of the student ,co-curricular activities in the following areas be carried out by the teachers and will be graded term-wise on a 3-point grading scale.
</p>

<ul class="p-0 m-0">
 <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Work Education</li>
<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Art Education ( Visual and performing Art)</li>
<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Health and Physical Education</li>
<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Discipline. (Attendance, Sincerity, and Values)
</li>   
</ul>

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Performance Level</th>
      <th scope="col">Corresponding Grade</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>Excellent</td>
      <td>A</td>
    </tr>
  <tr>
      <td>Very Good</td>
      <td>B</td>
    </tr>
      <tr>
      <td>Good</td>
      <td>C</td>
    </tr>
    
    <tr>
      <td>Average</td>
      <td>D</td>
    </tr>
    
    <tr>
      <td>Below Average</td>
      <td>E</td>
    </tr>
    
  
  </tbody>
</table>

<h4 class="mt-3">Criteria For Promotion</h4>
<ul class="p-0 m-0">
    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Promotion is granted on the basis of cumulative performance of the pupil. Hence it is important for a child to be regular in attendance, term examinations and assignments.</li>
    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> For promotion to the next class, the student must secure minimum D grade in all the subjects. For promotion in grades 9 and 10, a student has to secure 33% marks out of overall 20 marks of internal assessment (periodic tests+ notebook submission + subject enrichment activity) and 33 % marks out of 80 marks in each subject of annual exam.
</li>
<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Attendance for all tests is compulsory. Satisfactory written explanation for absence has to be given to the class teacher.</li>
<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Students indulging in unfair means during any examination will be awarded zero in that subject. . Repetition of the same will result in expulsion. They will NOT be eligible for any academic award, school appointment or any prize by the school.</li>
<li>A child who fails twice in the same grade will not be permitted to continue his/ her studies in the school.</li>
</ul>
</div>


      </div>
    </div>
  </div>
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
  Grading System
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div class="table-responsive">
<table class="table table-striped mt-3">
 
  <tbody>
    <tr>
      <th>Marks Range</th>
      <td>91-100</td>
      <td>81-90</td>
      <td>71-80</td>
        <td>61-70</td>
          <td>51-60</td>
            <td>41-50</td>
              <td>33-40	</td>
                <td>21-32</td>
                  <td>00-20</td>
    </tr>
    
      <tr>
      <th>Grade</th>
      <td>A 1</td>
      <td>A 2</td>
      <td>B 1</td>
        <td>B 2</td>
          <td>C 1</td>
            <td>C 2</td>
              <td>D	</td>
                <td>E 1</td>
                  <td>E 2</td>
    </tr>
  
  
  </tbody>
</table>
</div>
<p>The performance of a child in scholastic area will be assessed in terms of marks. Marks will be converted into grades as per the following pattern:</p>
         </div> 
           </div> 
             </div> 

<div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
  Attendance
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<ul class="p-0 m-0">
    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> No pupil shall be eligible for promotion unless he/she puts in an attendance of 80% during an academic year.</li>
   
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Every absence must be enlisted in the leave record page of school diary and signed by parent/guardian.</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Absence for more than three days should be informed to the principal in writing.</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> No leave is granted on examination days, the first and last working days except on medical ground.
</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Leave application on medical ground should be supported by a medical certificate.</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
</svg> Absence for a period of 15 days or more without submitting a leave note will result in the removal of the pupils name from the rolls.</li>
</ul>
         </div> 
           </div> 
             </div>   
  
</div>
                </div>

              
            </div>
            <!--<div class="col-md-4" data-aos="fade-left">-->
            <!--    <div class="imp-list">-->
            <!--        <h6> <img src="{{ asset('Front/images/icons/calendar.svg') }}" class="d-inline me-2 "-->
            <!--                alt=""> Important Date</h6>-->
            <!--        @foreach ($newses as $newse)-->
            <!--            <div class="flex mb-3">-->
            <!--                <div class="ps-3">-->
            <!--                    <img class="star-img " src="{{ asset('Front/images/icons/star.svg') }}" alt="">-->
            <!--                </div>-->
            <!--                <div class="px-3">-->
            <!--                    <h5>{{\Carbon\Carbon::parse($newse->date)->format('d m,Y')}}</h5>-->
            <!--                <p>{{$newse->title}}</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        @endforeach-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</section>