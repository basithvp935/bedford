@section('title', 'Home')
@section('home', 'active')
@include('front.layouts.header')
<div class="page-top"></div>
<section class="about section-100 pt-30 ">
  <div class="container">
    <div class="row ">
      <div class="col-md-12">
        <img src="" class="about-img mb-3 mb-md-5" alt="">
      </div>
    </div>
    <div class="row  g-md-5">
      <div class="col-md-12">
        <div class="in-cnt-pd" data-aos="fade-right">
          <h1 class="pb-2 mt-0 fw-600 text-center"> Resources</h1>
          <ul class="nav nav-tabs tab-style justify-content-center" id="myTab" role="tablist">
            <li class="nav-item me-1" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Parents</button>
            </li>
            <li class="nav-item ms-1" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Students</button>
            </li>
          </ul>
          <div class="tab-content  pt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="accordion" id="accordionExample">
                 @foreach($resourceData as $k => $r)
                  @if($r->category==0)
                 <div class="@accordion-item">
                    <h2 class="accordion-header" id="heading-{{$k}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$k}}" aria-expanded="false" aria-controls="collapse-{{$k}}">{{$r->title}}</button>
                    </h2>
                    <div id="collapse-{{$k}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$k}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $r->description !!}
                        </div>
                    </div>
                 </div> 
                 @endif
                 @endforeach
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      School Policy
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="list-bulletin">
                        <li>The school week is Sunday through Thursday, from 7:00 am to 1:30 p.m. During hot weather the hall is designated as a supervised cool zone where children can play under supervision. Staff is on duty at all times during breaks.</li>
                        <li>Children have supervised eating time with their teacher before play time. They need sufficient food with them to get through the day. So, they should be provided a healthy lunch box with a piece of fruit, sandwich and juice. Please do not include fizzy drinks or chocolate. Filtered water is available in the playground. Drinking throughout the day is encouraged to prevent dehydration.</li>
                        <li>Parents should take care of the regular attendance of their wards. In case of absence, parents are required to report it to the class teacher or the section head.</li>
                        <li>We believe that punctuality is very important and late coming disturbs the regular programme of the school. So, we do not encourage late coming.</li>
                        <li>We value the relationship we have with our parent body and our aim is to provide for the well being of your child. Therefore we request all parents to establish a regular communication with the school. Parents can meet the teacher concerned during the stipulated hours. However, if there is concern, principal or the teacher concerned is available on appointment or phone.</li>
                        <p class="mt-3"><b>The school does not hold birthday parties for children. We request that birthday cakes and treats should not be sent to school.</b></p>
                      </ul>
                      <h5 class="mt-3">DRESS CODE</h5>
                      <ul class="list-bulletin">
                        <li> Wearing uniforms during school hours is compulsory .And should be strictly in accordance with the pattern provided by the school. Designs, lines, art, writings, patching or picture on pants or shirts are not allowed. No low waist pants and alteration in stitching uniforms. Shirt buttons should not be kept open and the shirt to be trucked in properly. Belt to be worn tightly and visible. Tattooing and using coloured contact lens is prohibited.</li>
                        <li> Uniform irregularity will be strictly adhered.</li>
                        <li> During ceremonial day (Sunday) and other important activity days students should wear blazers, no matter the climatic conditions.</li>
                        <li> Shirt buttons should not be kept open and the shirt to be tucked in properly. Belts to be worn tightly and visibly.</li>
                        <li> Girl students should tie their hair in a single plait with white ribbons.</li>
                        <li> Jewelry, fancy ornaments, hairclips and oversized watches etc. are not permitted in the school</li>
                        <li> Mobile phones, walk man, I-pods, I-Pads, MP3 players, laptops, magazines, cameras, toys etc. are not permitted in the school campus</li>
                      </ul>
                      <h5 class="mt-3">SPORTS UNIFORM CODE</h5>
                      <ul class="list-bulletin ">
                        <li> Students should bring their house T-shirts provided by the school during P.ET days and have to change in the particular period.</li>
                        <li> Students are not permitted to enter the ground without sports kit for P.ET and club activity day.</li>
                      </ul>
                      <h5 class="mt-3">Uniform</h5>
                      <table class="table table-striped mt-3">
                        <thead>
                          <tr>
                            <th scope="col">Boys</th>
                            <th scope="col">Girls</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Blue-Stripes Shirt-Half Sleeves</td>
                            <td>Blue-Stripes Shirt – Half Sleeves</td>
                          </tr>
                          <tr>
                            <td>Navy blue trousers</td>
                            <td>Navy blue pinafore</td>
                          </tr>
                          <tr>
                            <td>School Belt</td>
                            <td>School Belt</td>
                          </tr>
                          <tr>
                            <td>White socks</td>
                            <td>White socks, White ribbon / White hair band</td>
                          </tr>
                          <tr>
                            <td>Black shoes (Only formal wear)</td>
                            <td>Black shoes (Only formal wear)</td>
                          </tr>
                         <tr>
                            <td>House colour T-shirts with school logo on the chest pocket. (to be worn on PT days)</td>
                            <td>House colour T-shirts with school logo on the chest pocket. (to be worn on PT days)</td>
                          </tr>
                          <tr>
                            <td>White Shoes (to be worn on PT days)</td>
                            <td>White Shoes (to be worn on PT days)</td>
                          </tr>
                          <tr>
                            <td>Dark blue blazer with school logo</td>
                            <td>Dark blue blazer with school logo</td>
                          </tr>
                          <tr>
                            <td>Navy blue sweater and Navy blue woolen Cap</td>
                            <td>Navy blue sweater and Navy blue woolen Cap</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Prospectus</button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <a href="https://nobleqatar.com/uploads/prospectus/prospectus.pdf" class="btn btn-primary mt-0">View File</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Admission Procedure
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>Guidelines</h5>
                      <p>School will notify the available nature of intake through local news papers and the school’s website in the month of December. Admission in Grade 1 will be to the available seats after accommodating children who complete Kindergarten successfully in Noble Indian Kindergarten subject to discretion of Supreme Education Council. Admission to the remaining primary grades will be given on the basis of merit considering all applications submitted within the prescribed date. Interim admissions will be restricted to children who recently changed residence to Doha and are coming from schools with equivalent curriculum standards.
                        If Seat is available, Parent should decide whether School Transport is required. If required, the availability of it in their area should be ensured with the Transport in charge, at the Transport Department.</p>
                      <h5 class="mt-3">Parents seeking admission should submit their Admission request through Online Application form</h5>
                      <p>Eligibility: Admission will be open to Indian students and other nationalities if they are interested to school with CBSE Curriculum. All admissions will be subjected to the discretion of the school authorities and the Supreme Education Council, State of Qatar. Students on transfer from a recognized English Medium School affiliated to the CBSE will be admitted on the strength of their Transfer Certificates and other documents provided they have 75% attendance by the end of the Academic year, when the number of days already attended and the days likely to be attended in this school are combined. However, admission to Std. 1 will be made at the discretion of the Principal.</p>
                      <h5 class="mt-3">Provisional Admission</h5>
                      <p>Provisional admission made on certain conditions such as unavailability of necessary documents will be cancelled if they are not fulfilled within one month. Fee paid for admission will not be refunded or adjusted in such cases.</p>
                      <h5 class="mt-3">Withdrawals</h5>
                      <p>The parents, who desire to withdraw their wards from the school, should fill in the application form for Removal /Transfer Certificate available in the office and submit it. The document can be collected after 15 days of the submission of the application provided no dues of any kind are pending against the student.</p>
                      <p class="mt-3"><b>AGE LIMIT</b> : As of 30th March</p>
                      <div class="table-responsive">
                        <!--<table class="table table-striped mt-3">-->
                        <!--  <thead>-->
                        <!--    <tr>-->

                        <!--      <th scope="col">-->
                        <!--For Admission to Class</th>-->
                        <!--         <th scope="col">	Minimum Age</th>-->

                        <!--    </tr>-->
                        <!--  </thead>-->
                        <!--  <tbody>-->
                        <!--    <tr>-->

                        <!--      <td>KG – I</td>-->
                        <!--      <td>	3+  to  4  years</td>-->
                        <!--    </tr>-->
                        <!--  <tr>-->
                        <!--      <td>KG – II</td>-->
                        <!--      <td>4+  to  5  years</td>-->
                        <!--    </tr>-->

                        <!--    <tr>-->
                        <!--      <td>Grade  I</td>-->
                        <!--      <td>5+  to  6  years</td>-->
                        <!--    </tr>-->

                        <!--  </tbody>-->
                        <!--</table>-->

                        <table class="table table-striped mt-3">
                          <thead>
                            <tr>
                              <th>S.No</th>
                              <th>Grade</th>
                              <th>Minimum Age Limit (As on Sep 30 of Any Academic Year)</th>
                              <th>Maximum Age Limit (As on Sep 30 of Any Academic Year)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>KG-1</td>
                              <td>3</td>
                              <td>4.11 29 Days</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>KG-2</td>
                              <td>4</td>
                              <td>5.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Grade 1</td>
                              <td>5</td>
                              <td>7.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Grade 2</td>
                              <td>6</td>
                              <td>8.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Grade 3</td>
                              <td>7</td>
                              <td>9.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Grade 4</td>
                              <td>8</td>
                              <td>10.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Grade 5</td>
                              <td>9</td>
                              <td>11.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Grade 6</td>
                              <td>10</td>
                              <td>12.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>Grade 7</td>
                              <td>12 (Min Age Exemption Based on the Previous Passing Grade)</td>
                              <td>14.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>Grade 8</td>
                              <td>13 (Min Age Exemption Based on the Previous Passing Grade)</td>
                              <td>15.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>Grade 9</td>
                              <td>14 (Min Age Exemption Based on the Previous Passing Grade)</td>
                              <td>16.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>Grade 10</td>
                              <td>15 (Min Age Exemption Based on the Previous Passing Grade)</td>
                              <td>17.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>Grade 11</td>
                              <td>16 (Min Age Exemption Based on the Previous Passing Grade)</td>
                              <td>18.11 29 Day</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>Grade 12</td>
                              <td>17 (Min Age Exemption Based on the Previous Passing Grade)</td>
                              <td>19.11 29 Day</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <h5 class="mt-3">Documents required to uploading at the time of online application submission</h5>
                      <div class="table-responsive">
                        <table class="table table-striped mt-3">
                          <thead>
                            <tr>
                              <th scope="col">Class</th>
                              <th scope="col">Documents Required</th>
                              <th scope="col">Required format</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>KG and KG2</td>
                              <td>Copy of Birth Certificate<br>
                                Copy of Passport(first page address page and Visa Page)<br>
                                Health Card Copy<br>
                                Parent Passport Copy<br>
                                Parents Qatar ID copy<br>
                                Passport Size photographs – 2 Nos<br>
                                Location map of residence if transport facility is required</td>
                              <td>PDF,JPEG</td>
                            </tr>
                            <tr>
                              <td>I to VIII</td>
                              <td>Copy of Birth Certificate<br>
                                Copy of Passport(first page address page and Visa Page)<br>
                                Health Card Copy<br>
                                Parent Passport Copy<br>
                                Parents Qatar ID copy<br>
                                Transfer Certificate<br>
                                Character and Conduct certificate<br>
                                Progress Report of previous class<br>
                                Passport Size photographs – 2 Nos<br>
                                Location map of residence if transport facility is required</td>
                              <td>PDF,JPEG</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <h4 class="mt-3 mb-2">Second Language & Optional Subject</h4>
                      <ul class="list-bulletin">
                        <li>It is expected that all the students would have studied three languages up to class VIII.</li>
                        <li>Class I to III include only second language.</li>
                        <li>Third language is introduced in Class IV and it continues to Class VIII.</li>
                        <li>Please note that an appropriate second language is chosen in the lower class so that the same can be continued in the higher classes.</li>
                        <li>Second Languages and Optional Subjects :</li>
                      </ul>
                      <div class="table-responsive">
                        <table class="table table-striped mt-3">
                          <tbody>
                            <tr>
                              <td><strong>Class</strong></td>
                              <td><strong>Second Language/Third Language</strong></td>
                              <td><strong>Optional Subjects</strong></td>
                            </tr>
                            <tr>
                              <td>I to III</td>
                              <td>Second language: Malayalam/Hindi/Arabic/Urdu/Tamil</td>
                              <td>&nbsp;Islamic Studies/Value Education</td>
                            </tr>
                            <tr>
                              <td>IV to VIII</td>
                              <td>Second language: Malayalam/Hindi/Arabic/Urdu/Tamil<br>
                                Third language: Malayalam/Hindi/Arabic/French</td>
                              <td>&nbsp;Islamic Studies/Value Education</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFoure">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">
                      Admission Regulations
                    </button>
                  </h2>
                  <div id="collapseFoure" class="accordion-collapse collapse" aria-labelledby="headingFoure" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="list-bulletin">
                        <li>The candidates applying for class KG2 to VIII will undergo an assessment followed by a personal interview as a part of their admission process.</li>
                        <li>All applications we receive will be scrutinized and selected candidates will be invited for admission test with a registration number via email/SMS.</li>
                        <li>Selected Candidate parent will get the Admission Test syllabus and an Admission Card or a Provisional Admission Card in which, the date and time of the Admission Test would be mentioned via email</li>
                        <li>On the Test date, the students ( along with the parents ) should come to the School, with the Admission Card and take the Test. The student should be well-prepared with the syllabus provided by us. Most of the time, result is announced on the same day itself. If the student passes the Test, Principal / Senior Vice-Principal interviews / interacts with the parents and the student.</li>
                        <li>The child should get minimum 60% marks in basic English, Mathematics, and Science.</li>
                        <li>Both the parents and the child must be present at the time of interview with copies of required&nbsp; documents as mentioned above.</li>
                        <li>Once the Admission is confirmed, Principal / Senior Vice-Principal / Vice-Principal / Headmistress issues the Admission Card to the particular class. Within 24 hours, fees should be paid. Admission is not guaranteed if you come on a later date. If fees is not paid within 24 hours, the seat offered to your child goes to the next one on the waiting list. And no reminders will be sent to parents in this regard.</li>
                        <li>However, before paying the fees, the parents have to decide whether School Transport is required. If required, the seat-availability of it in their area should be ensured with the Transport in charge, at the Transport Department. If available, they can go to the Accounts Department ( Cash Counter ), collect the Admission Form, fill it, and pay the Admission / Tuition / Special / Transport fees.</li>
                        <li>If fees for School Transportation is also paid at the Fees Payment Counter, parents have to go back to the Transport Department, show the receipt to the Transport in charge for fixing the bus in which their child would be commuting.</li>
                        <li>The applicant must have valid Qatari Resident Permit for admission to be finalized.</li>
                        <li>Parents are to ensure that all the documents required for registration&nbsp; obtained well in advance in order to avoid delay in admission. Within three weeks, the parents have to submit the Original Transfer Certificate of their child ( if the child is admitted in Class II or higher classes ) from the school that he / she last studied. The Transfer Certificate should be submitted at the Administrative Section in the main School, Submission of incomplete documents will not be accepted and admission will be cancelled.</li>
                        <li>Final admission is subject to verification and submission of the Prescribed documents</li>
                        <li>No preference will be given to early submission of application form.</li>
                        <li>Filling up of admission form, taking the Admission Test and attending interview do not guarantee admission in the School. Admission is purely at the discretion of the Wings in charge and the Principal.</li>
                        <li>Parents whose children are already studying in the School cannot claim admission for their younger wards as a matter of right.</li>
                        <li>Request for transfer of section and choice of class teacher by parents will not be entertained.</li>
                      </ul>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Annual Reports
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5 class="mb-3">CURRICULAR ACTIVITIES</h5>
                      <p><span>The current Academic year started in the first week of April 2019.</span></p>
                      <h5 class="mb-3 mt-3">Star of the Month </h5>
                      <p>Noble International School launched a special event called “Star of the Month” and was pleased to share an impeccable performance of the students who have fetched them the Excellence award.</p>
                      <h5 class="mb-3 mt-3">Teachers’ orientation Program</h5>
                      <p>The Noble International School conducted Orientation programs on various topics, to inculcate the quality of self-reliance in young teachers through their awareness of the social, intellectual, and moral environment.</p>
                      <h5 class="mb-3 mt-3">Investiture Ceremony</h5>
                      <p>“Leadership is not about a title or a designation. Rather it’s about impact, influence, and inspiration…”</p>
                      <p>The Investiture Ceremony was conducted on the 15<sup>th</sup> of April, 2019 in which the Head Boy, Head Girl, Sports Captain, and House captain for four different houses such as Teal, Pintail, Eider, Frigate were selected.</p>
                      <h5 class="mb-3 mt-3">Classroom activities</h5>
                      <p>The NIS Classroom activities are designed to facilitate maximum learning through Art/Craft which ensures that the students have a great time while learning and practicing important scholastic skills.</p>
                      <h5 class="mb-3 mt-3">Club activities</h5>
                      <p>The integration of work and study is the key element in Noble International School.&nbsp; Club activities help students develop soft skills, helps to engage with a diverse group of people, gain leadership qualities, expand their resume, and most importantly helps them to know about themselves….</p>
                      <h5 class="mb-3 mt-3">Accolades of NIS</h5>
                      <p>Our Students have continued to expand their skills by taking part in&nbsp;various outdoor competitions conducted by various schools in Qatar, Friends Cultural Centre, ICC, and so on thus bagging various certificates and prizes.</p>
                      <h5 class="mb-3 mt-3">Parent-Teacher Meeting</h5>
                      <p>During this academic year, we had conducted PTM’s in April, September &amp; October 2019. Research shows that it helps both the Parents and Students’ to discuss the child’s progress @ school and also helps to find solutions to academic or behavioral problems….</p>
                      <h5 class="mb-3 mt-3">KG – Graduation Day</h5>
                      <p>As we all know “Graduation is a Conclusion of one Chapter and a beginning of another”. &nbsp;Our Tiny Tots had celebrated their achievement in our <strong>12<sup>th</sup> KG Graduation Day</strong> during the academic year 2018-19.</p>
                      <h5 class="mb-3 mt-3">Special day events: –</h5>
                      <p>We have marked special events in NIS with special assembly (World Health day/ World Earth day/Mother’s day/World Environment day/ Indian Independence day/ Teachers’ day/World Peace day/World Ozone day/ Gandhi Jayanthi/ World Postal day/ World Student’s day/ World Food day- food festival / UN day).</p>
                      <p>&nbsp;</p>
                      <h5 class="mb-3 mt-3"><u>CO – CURRICULAR ACTIVITIES</u></h5>
                      <h5 class="mb-3 mt-3">Talent’s day</h5>
                      <p>The Noble International school conducted the unique “Talents day” majestically on the&nbsp;<strong>04<sup>th</sup> and 05<sup>th</sup> of May, 2019 </strong>at the Wukair campus. Everyone has an inborn talent or skill at which they truly excel. The talent’s day provided an excellent platform for the budding artists to display their inherent artistic expertise…</p>
                      <h5 class="mb-3 mt-3">Educational Trip to NASA</h5>
                      <p>Students’ are driven to explore the unknown, discovered new worlds, push the boundaries of our scientific and technical limits, and then push further. NIS has organized an educational trip to NASA (the pioneer agency of space technology) during November 2018. The Students got an unforgettable moment to explore the mysteries of the universe and to experience the enchanting beauty of the USA. Around 45 members including students and Staff had got the opportunity to visit the USA.</p>
                      <h5 class="mb-3 mt-3">Ramadan Relief Program</h5>
                      <p>Noble International School has arranged a Ramadan Charity program this year. With immense pride and pleasure, would like to inform you all that Our family has united hand in hand for helping the needy people of different Labor Camps in Doha and the event has turned out as a huge success. Around 5000 Kilograms of food items has collected within a short span of time with the help of our beloved parents. Once again I take this opportunity to thank the entire Noble Family for the kind-hearted support.</p>
                      <h5 class="mb-3 mt-3">Taekwondo</h5>
                      <p>In this academic year,&nbsp;<strong>NIS </strong>had grabbed the third Position in Qatar Cluster Championship and bagged 2 Gold medals, 7 Silver medals &amp; 16 Bronze medals in Qatar Cluster Taekwondo Championship, apart from that and 2 Students got selection for participating in National Level Championship.</p>
                      <h5 class="mb-3 mt-3">Sports Academy</h5>
                      <p>NIS Sports Academy Conducted Football, Basketball, Cricket (Boys and Girls), Badminton, Swimming (Boys &amp; Girls) coaching programs that have not only given plenty of opportunities for students and to compete in various tournaments such as CBSE Cluster Athletic meet, bagging 10 medals (4 Silver and 6 Bronze) but has also helped to maintain and improve physical activity skills.</p>
                      <h5 class="mb-3 mt-3">Students’ trip</h5>
                      <p>The NIS Students’ from KG-1 to Grade-11 were taken on a trip to various places during this academic year like Qatar National Library, Qatar National Museum, Visited Katara Dhow Festival, and they had an opportunity to visit Indian Warship ‘INS – The Mighty Mysore’ at Hamad Port Doha. They visited Toys Town, Jungle zone, Gondalania &amp; Aqua Park which was filled with fun, fervor, and amusement.</p>
                      <h5 class="mb-3 mt-3">Introduction of School Band in NIS.</h5>
                      <p>MUSIC improves academic and physical skills, cultivates social skills, refines discipline and patience, boosts self-esteem, and introduces children to other cultures…NIS is introducing School Band as part of CCA to induce and inculcate the talents that students had in them concerning Music.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Fee Structure
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-md-4">
                          <ul class="list-group mt-3">
                            @foreach($feeStructure as $fee)
                            <li class="list-group-item">
                              <a href="{{ url('upload/' . $fee['pdf']) }}" target="_blank">
                                {{ $fee['title'] }}
                                <span class="text-danger">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                    <path d="M5.523 12.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z" />
                                    <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.7 11.7 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103" />
                                  </svg>
                                </span>
                              </a>
                            </li>
                            @endforeach
                          </ul>
                          <!--            <ul class="list-group">-->
                          <!--  <li class="list-group-item"><a href="#">Noble Indian Kindergarten </a></li>-->
                          <!--  <li class="list-group-item"><a href="#">Noble International School Primary </a></li>-->
                          <!--  <li class="list-group-item"><a href="#">Noble International Preparatory School </a></li>-->
                          <!--  <li class="list-group-item"><a href="#">Noble International School – Al Wukair </a></li>-->
                          <!--</ul>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Fee Payment Policy
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5 class="mb-3">FEE SUBMISSION POLICY</h5>
                      <ul class="p-0 m-0">
                        <li> Payment can be done through a card or cash. Bank commission on cards, if any has to be paid in addition.</li>
                        <li> A 4% discount is offered on yearly tuition fees if payment is made full in advance before the beginning of the academic year.</li>
                        <li> A sibling discount of 10% on tuition fees is available for the third child and fourth child. (The youngest one will be eligible for the sibling discount)</li>
                        <li> Registration fees, transportation, and tuition fee are non-refundable and non-transferable to another student’s account. One type of fee paid will not be adjusted to any other category of fee for the same student or any other student.</li>
                        <li> Fee can be paid yearly or in three installments.</li>
                        <li> The fee once paid is non-refundable and non-transferrable.</li>
                        <li> School fees will be subjected to annual review and may be increased after the approval of the Ministry of Education and Higher Education.</li>
                      </ul>
                      <h5 class="mb-3 mt-3">DUE DATE OF THE TUITION FEE WILL BE AS FOLLOWS:</h5>
                      <ul class="p-0 m-0">
                        <li> First installment: Payable on or before 15<sup>th</sup> April.</li>
                        <li> Second installment: Payable on or before 15<sup>th</sup> August.</li>
                        <li> Third installment: Payable on or before 15<sup>th</sup> December.</li>
                        <li> Parents are expected to ensure prompt payment of each installment of fees. Failure to pay on time will invalidate all discounts. If tuition/transport fees are not paid, the school has the right to exclude the child from school, and not permit him/her to avail of the school transport.</li>
                        <li> One month’s notice, prior to the commencement of the new term, is required for withdrawal of the child from the school/discontinuation of school transport. Irrespective of the month in which the child is withdrawn/stops using school transport, tuition/transport fees for the full term need to be paid.</li>
                        <li> The caution deposit is refundable within 15 working days from the date of submission of the application along with the original fee receipt.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Admission Regulations
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                      <ul class="list-bulletin">
                        <li>The candidates applying for class KG2 to VIII will undergo an assessment followed by a personal interview as a part of their admission process.</li>
                        <li>All applications we receive will be scrutinized and selected candidates will be invited for admission test with a registration number via email/SMS.</li>
                        <li>Selected Candidate parent will get the Admission Test syllabus and an Admission Card or a Provisional Admission Card in which, the date and time of the Admission Test would be mentioned via email</li>
                        <li>On the Test date, the students ( along with the parents ) should come to the School, with the Admission Card and take the Test. The student should be well-prepared with the syllabus provided by us. Most of the time, result is announced on the same day itself. If the student passes the Test, Principal / Senior Vice-Principal interviews / interacts with the parents and the student.</li>
                        <li>The child should get minimum 60% marks in basic English, Mathematics, and Science.</li>
                        <li>Both the parents and the child must be present at the time of interview with copies of required&nbsp; documents as mentioned above.</li>
                        <li>Once the Admission is confirmed, Principal / Senior Vice-Principal / Vice-Principal / Headmistress issues the Admission Card to the particular class. Within 24 hours, fees should be paid. Admission is not guaranteed if you come on a later date. If fees is not paid within 24 hours, the seat offered to your child goes to the next one on the waiting list. And no reminders will be sent to parents in this regard.</li>
                        <li>However, before paying the fees, the parents have to decide whether School Transport is required. If required, the seat-availability of it in their area should be ensured with the Transport in charge, at the Transport Department. If available, they can go to the Accounts Department ( Cash Counter ), collect the Admission Form, fill it, and pay the Admission / Tuition / Special / Transport fees.</li>
                        <li>If fees for School Transportation is also paid at the Fees Payment Counter, parents have to go back to the Transport Department, show the receipt to the Transport in charge for fixing the bus in which their child would be commuting.</li>
                        <li>The applicant must have valid Qatari Resident Permit for admission to be finalized.</li>
                        <li>Parents are to ensure that all the documents required for registration&nbsp; obtained well in advance in order to avoid delay in admission. Within three weeks, the parents have to submit the Original Transfer Certificate of their child ( if the child is admitted in Class II or higher classes ) from the school that he / she last studied. The Transfer Certificate should be submitted at the Administrative Section in the main School, Submission of incomplete documents will not be accepted and admission will be cancelled.</li>
                        <li>Final admission is subject to verification and submission of the Prescribed documents</li>
                        <li>No preference will be given to early submission of application form.</li>
                        <li>Filling up of admission form, taking the Admission Test and attending interview do not guarantee admission in the School. Admission is purely at the discretion of the Wings in charge and the Principal.</li>
                        <li>Parents whose children are already studying in the School cannot claim admission for their younger wards as a matter of right.</li>
                      </ul>
                      <p class="mt-3">Request for transfer of section and choice of class teacher by parents will not be entertained.</p>
                    </div>

                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      Transfer Certificate
                    </button>
                  </h2>
                  <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="list-bulletin">
                        <li>All the Schools Affiliated to be Board shall upload scanned copy of the Transfer Certificate’s issued by them on their official website. </li>
                        <li>All the Schools Affiliated to be Board shall issue the Transfer Certificate as per the format given in Annexure 1 of the Examination Byelaws. </li>
                        <li>The Schools shall also mention in the Transfer Certificate AFFILIATED TO THE CENTRAL BOARD OF SECONDARY EDUCATION below the name and address of the school along with the Affiliation Code No. </li>
                        <li>In the case of Transfer from one CBSE affiliated school to another, affiliation status of the school be verified from the Board’s website cbse.nic.in&gt;e-affiliation&gt;list of affiliated schools as also from the school’s website and the name and Affiliation number recorded on the Transfer Certificate. </li>
                        <li>The head of the school shall ensure that the name of the school from where the Transfer Certificate has been issued appears on the Board’s website as an affiliated school and does not appear in the list of Disaffiliated Schools. </li>
                        <li>The Transfer Certificate shall be countersigned by the Manager/Secretary/member of the School managing Committee and the Head of the school while forwarding the same to the Board in cases of direct admission and seeking approval from the Board. </li>
                        <li>In case of doubt/apprehension about the Transfer Certificate, the matter be referred to the Board for clarification. </li>
                        <li>School managements shall make all out efforts to admit students having valid Transfer Certificate from a school recognized by/affiliated to recognized Boards </li>

                      </ul>
                      <p class="mt-3">A copy of circular in this regard issued by Controller of Exam dated 26.11.14 can also be obtained from the Board’s official website <a href="http://www.cbse.nic.in/" target="_blank" rel="noopener">www.cbse.nic.in</a></p>
                    </div>

                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      FAQs
                    </button>
                  </h2>
                  <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="list-bulletin">
                        <li><strong>Is the school licensed by Supreme Education Council, Qatar?</strong><br>
                          Both the school and Kindergarten are duly licensed by SEC and has safety Certification from Civil Defense Department, Qatar.</li>
                        <li><strong>How is the academic year of the school and summer holidays?</strong><br>
                          School academic year starts on the first working day of April and ends on 25th March the following year. Summer holidays are from June/July to September. Dates differ accordingly.</li>
                        <li><strong>What is the minimum age required to join Kindergarten 1?</strong><br>
                          The child should have completed 3 years to 31st March.</li>
                        <li><strong>Is the child required to be present in the school at the time of admission?</strong><br>
                          Child and both the parents are required to meet the concerned wing head at least once before completing the admission procedure.</li>
                        <li><strong>Does the school provide early drop off and late pick back facility for students?</strong><br>
                          Yes, KG students can be dropped off from 6.00 am and can stay till 1.30 pm without additional charges and till 4.00 pm with additional charges.</li>
                        <li><strong>When does the admission start for each academic year?</strong><br>
                          Registrations for admission start right from the New Year. Admissions start from 1st February and completed in the end of March to start classes on the first working day of April. A few admissions are done during the first week of September subject to the availability of seats.</li>
                        <li><strong>What are the documents required for admission?</strong><br>
                          The copy of passport and Resident Permit needed for both parents and the child. Copy of child’s birth certificate and vaccination card and two photographs are also required. These are to be submitted along with the filled in application form which will be provided from the office upon payment of registration fee QR 100.</li>
                        <li><strong>Will the father or mother be permitted to accompany the child in Nursery for a few days initially?</strong><br>
                          Mothers or Fathers are not allowed inside the classroom. But they are provided a seat in the Parent’s Gallery near the Nursery Class for one or two days initially.</li>
                        <li><strong>Is separate admission procedure required for KG child to go to school?</strong><br>
                          No, from KG, students are promoted to Grade 1.</li>
                        <li><strong>What to do to process transport facility for students?</strong><br>
                          Admission of a child to the school does not assure transport facility. To avail transport facility a separate application to be submitted to the transport department and the location map is to be attached. This application is to be submitted at least three days prior to the day desired to begin in the school bus.</li>
                        <li><strong>Is it possible to shift the location of transport in the middle of the academic year?</strong><br>
                          Transport location shift is allowed against availability only up on a separate application well in advance of the shift commencement.</li>
                        <li><strong>What are the office hours?</strong><br>
                          School: 7.00 am to 1.30 pm &amp; 4.30 pm to 6.30 pm. (Sunday to Wednesday)</li>
                        <li>Thursday: 7.00 am to 1.00 pm &amp; 4.30 pm to 6.30 pm</li>
                        <li>Saturday: 8.00 am to 01.00 pm &amp; 4.30 pm to 6.30 pm</li>
                        <li>KG: 6.30 am to 2.30 pm &amp; 4.30 pm to 6.30 pm</li>
                        <li><strong>Can tuition fee be paid monthly?</strong><br>
                          Three installments per annum (term wise) and nine installments per annum (monthly but excluding vacation months) are available.</li>
                        <li><strong>Is there any discount for annual payment of fee?</strong><br>
                          4% discount on annual fee is available if paid before first term due date.</li>
                        <li><strong>Is there any discount available for group admission from single family?</strong><br>
                          10% of the tuition fee will be discounted for third child of same father and mother only.</li>
                        <li><strong>How do parents communicate in case of long leaves required for their children?</strong><br>
                          The leave application can be sent to the office by mail. Please refer contact us for mail id.</li>
                        <li><strong>When caution deposit is refunded to parents?</strong><br>
                          Caution deposit can be refunded to parents within 15 days after the removal application.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      Affiliation Documents
                    </button>
                  </h2>
                  <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="list-unstyled">
                        @foreach($affiliationData as $affiliation)
                        <li class="mb-2">
                          <a href="{{ url('upload/' . $affiliation['pdf']) }}" class="btn btn-link" target="_blank">
                            {{ $affiliation['title'] }}
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                @foreach($resourceData as $k => $r)
                  @if($r->category==1)
                 <div class="@accordion-item">
                    <h2 class="accordion-header" id="heading-{{$k}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$k}}" aria-expanded="false" aria-controls="collapse-{{$k}}">{{$r->title}}</button>
                    </h2>
                    <div id="collapse-{{$k}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$k}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $r->description !!}
                        </div>
                    </div>
                 </div> 
                 @endif
                 @endforeach
              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingA">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA" aria-expanded="false" aria-controls="collapseA">
                    Academic Circulars

                  </button>
                </h2>

                <div id="collapseA" class="accordion-collapse collapse" aria-labelledby="headingA" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="row">
                      @foreach ($circularData as $circular)
                      <div class="col-md-6">
                        <div class="card bg-light-red mb-3" style="background: #ffefef">
                          <div class="card-body">
                            <h5 class="card-title text-dark">{{ $circular['title'] }}</h5>
                            <p class="card-text text-dark">{{ $circular['date'] }}</p>
                            <a href="{{url('upload/'.$circular['pdf'])  }}" class="btn btn-primary">Download PDF</a>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>

              </div>

              <!---->

              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingB">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB" aria-expanded="false" aria-controls="collapseB">

                    School Prayer

                  </button>
                </h2>
                <div id="collapseB" class="accordion-collapse collapse" aria-labelledby=" headingB" data-bs-parent="#accordionExample">
                  <div class="accordion-body">

                    <p><span>Oh my God, the origin of knowledge<br>
                        Bless my studies, enlighten my mind, strengthen my memory<br>
                        and direct my will towards what is right.<br>
                        Grant me the grace to seek the truth always<br>
                        and make me truly wise, give me the gift of knowledge<br>
                        and the grace to use it wisely.</span></p>
                  </div>


                </div>
              </div>
              <!---->

              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingC">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC" aria-expanded="false" aria-controls="collapseC">Student’s Pledge</button>
                </h2>
                <div id="collapseC" class="accordion-collapse collapse" aria-labelledby=" headingC" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>In pursuit of the high ideals and<br>
                      rigorous standards of academic life.<br>
                      I commit myself to respect and to<br>
                      uphold the Noble International School Honour System;<br>
                      To live out a commitment to integrity in all my words and actions;<br>
                      To be honest in every academic endeavour;<br>
                      And to conduct myself honourably,<br>
                      as a responsible member of the Noble International School<br>
                      as we gain knowledge together.<br>
                      To live out the ideals of great deeds,<br>
                      I commit myself to be a person for others in my daily life,<br>
                      respectful of difference and disagreement;<br>
                      To care for this venerable campus<br>
                      and all of those with whom I share it;<br>
                      and to fulfil in all ways the trust placed<br>
                      in me to carry on the legacy of our school.</p>
                  </div>

                </div>
              </div>
              <!---->

              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingD">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseD" aria-expanded="false" aria-controls="collapseD">Club Activities</button>
                </h2>
                <div id="collapseD" class="accordion-collapse collapse" aria-labelledby=" headingD" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h5 class="mb-3">Art &amp; Dance Club</h5>
                    NIS Art Club aims to develop every student to be visually literate and to appreciate Art. Being visually literate, Students observe, understand and make meaning of what they see. They are also able to communicate their ideas by using and creating visuals. Students will recognize the relevance of art in their lives. Discussing and learning about artworks made by different people provide avenues to develop our students understanding of cultures and different ways of thinking.<br>
                    NIS Dance club helps to equip students with the fundamental principles of dance training and performance, to engage students in physical dance training and to educate them with broad understanding and knowledge of the social cultural context of dance and performance. It is not just dance routines that NIS aims to master but also forming close bonding and long-term friendships with our fellow students. In the dance club family, students learn to be respectful of others, considerate for others, persevere in hardship, have confidence in own self and to be open-minded to accept new ideas and differences.<br>
                    <h5 class="mb-3 mt-3">English Club</h5>
                    The English Club at NIS aims to improve language proficiency of students and promotes the use of English in a relaxed and enjoyable way in its Club, and subsequently in the school campus. This Club tries very best to strive to arouse and promote student’s interest and usage in English by holding diverse activities and games. It offers various activities like Elocution, Recitation, Poem writing, Debating, Essay writing, Dramatics and Word puzzles. In the English Club, the students will also have an opportunity to practice many different skills based on real situations. Thus NIS supports and encourages every individual as a learner and offers a wide range of extra-curricular activities for all-round development of each student’s personality and skill sets.<br>
                    <h5 class="mb-3 mt-3">Math Club</h5>
                    The Mathematics Club at NIS aims to work for the interests of our fellow students. The Club develops students’ Mathematical curiosity and interpersonal relationship skills by conducting various activities in different topics related to Math. The purpose of the Club is to arouse students’ interests in Math so that they can become confident in using it to analyze and solve problems both in school and in real-life situations. NIS believes that Mathematics is a tool to train one’s logical thinking skills and a sword which can solve thousands of problems in various fields in our daily life.<br>
                    <h5 class="mb-3 mt-3">Science Club</h5>
                    <p class="mb-3">The NIS Science Club is an innovative and creative program designed for school children in particular. The primary objective of the club is to provide an extra-curricular and highly engaging environment to improve and enhance students’ understanding of Science, Technology &amp; Engineering.<br>
                      Through the Science Club, the School aims to: </p>
                    <ul class="list-bulletin">
                      <li>Inspire and increase student interest in Science and Technology.</li>
                      <li>Increase student academic attainment (grades) in the Science subjects.</li>
                      <li>Increase the Technological Literacy of future generations</li>
                    </ul>
                    <h5 class="mb-3 mt-3">Social Club</h5>
                    NIS Social Club trains students to be self-reliant, hardworking, resourceful and industrious for achieving perfection in all tasks that they undertake and teaches them to appreciate diversity in cultures and religions and adapt a harmonious collective living. It also helps the Students to induct practical thinking, general awareness, managerial abilities and leadership skills that aid them in goal setting for career and life. Finally, the Club strives to inculcate inter-personal skills that foster mutual co-operation, respect for authority, loyalty towards family, friends and fellow citizens with a sense of responsibility that makes them sensitive towards the society and the environment.<br>
                    <h5 class="mb-3 mt-3">Nature Club</h5>
                    The Nature Club at NIS aims at creating environmental awareness among the future generation. The Club motivates the Students to keep their surroundings green and clean by undertaking plantation of trees, promotes ethos of conservation of water by minimizing the use of water, educates students to create perception among public and sanitary workers, so as to stop the indiscriminate burning of waste which causes respiratory diseases, sensitize the students to minimize the use of plastic bags &amp; organize tree plantation program thus teaching them to acquaint with ECO friendly ways (reduce reuse and recycle) to protect our earth planet.<br>
                    <h5 class="mb-3 mt-3">Arabic Club</h5>
                    The Arabic Club at NIS helps to preserve the cultural and social values inherited from Arab ancestors and to promote unity and culture by means of enlightenment. At the Arabic Club, the learning experience reaches far beyond the classroom and extends into every aspect of daily life. The School’s various cultural and social co-curricular activities provide enjoyment and cultural enrichment, all while reinforcing the language skills learned in the classroom. An integral part of the curriculum, the Club allows students to immerse themselves further into the Arabic language and its diverse cultural applications.

                  </div>

                </div>
              </div>
              <!---->

              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingE">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseE" aria-expanded="false" aria-controls="collapseE">
                    Classroom Activities
                  </button>
                </h2>
                <div id="collapseE" class="accordion-collapse collapse" aria-labelledby=" headingE" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h5 class="mb-3 ">KG classroom activities</h5>
                    <p>Noble Indian Kindergarten offers a lot of different school activities for kids of all ages. The NIS-KG conducts activities to educate kids and keep them brilliantly engaged at the same time. The KG activities at NIS leads to the all-round development of children and makes them achieve their maximum potential. These activities help children to develop and learn new skills with fun and entertainment.</p>
                    <h5 class="mb-3 mt-3">Classroom activities (Grade 1-4)</h5>
                    <p>The NIS Classroom activities&nbsp;that&nbsp;are&nbsp;conducted from Grade 1 to 4 are&nbsp;designed to facilitate maximum learning through Art/Craft which ensures that the students have a great time while learning and practicing important scholastic skills. Many of the classroom activities are fun-filled through which students practice important skills in various fields. Some of the activities mimic real-life situations, and call for students to utilize the skills they’ve learnt to solve real-life problems. Through varied educational experiences, the classroom activities, overall creates an environment where learning is fun and exciting, and students are most likely to learn.</p>

                  </div>

                </div>
              </div>
              <!---->

              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingF">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseF" aria-expanded="false" aria-controls="collapseF">Star of the Month</button>
                </h2>
                <div id="collapseF" class="accordion-collapse collapse" aria-labelledby=" headingF" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>The “NIS-Star of the Month” award is presented every month for the Students from KG to Grade-10 within the school premises, grading them on different areas such as teamwork, cleanliness, communication, attitude and 100% attendance. NIS congratulates the award winning students for their hard work, flawless performance and tireless effort that has fetched them the award of excellence and helped them to achieve it. Star of the Month is an event where the Parents of the winning stars are also invited to watch their wards bagging the star of the month award………</p>
                  </div>
                </div>
              </div>
              <!---->

              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingG">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseG" aria-expanded="false" aria-controls="collapseG">Student Heads</button>
                </h2>
                <div id="collapseG" class="accordion-collapse collapse" aria-labelledby=" headingG" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h5 class="mb-3 ">STUDENT HEADS:</h5>
                    <p>Leadership is the capacity to transform vision into reality, to lead people, walk beside them. A good leader is one who interacts with them in a way that they want to be inspired and motivated.</p>
                    <p>NIS Conducts the Investiture Ceremony in which the School Head boy and Head girl are selected every year who through their actions inspire others to dream more, learn more, do more and become more…..thus proving to be a leader”</p>
                    <p>The Student heads selected for the Academic year 2017-18:</p>
                    <p>Head boy: Master Gopi Shankar</p>
                    <p>Head girl: Miss Merve Coban</p>
                  </div>
                </div>
              </div>
              <!---->

              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingH">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseH" aria-expanded="false" aria-controls="collapseH">
                    CCA
                  </button>
                </h2>
                <div id="collapseH" class="accordion-collapse collapse" aria-labelledby=" headingH" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h5 class="mb-3 ">Co-Curricular Activities (CCA)</h5>
                    <p>Noble International School offers a variety of Co-Curricular Activities (CCA) for students. A selection of activities from art & craft, dance, karate, yoga, aerobics and other organized co-curricular activities are offered in a supervised setting. We try to provide the best to our Students to maintain and develop their respective cultures through CCA. The Co-Curricular Activities program is provided within the school framework at no extra charge.</p>
                  </div>
                </div>
              </div>
              <!---->

              <!---->
              <div class="accordion-item">
                <h2 class="accordion-header" id=" headingI">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseI" aria-expanded="false" aria-controls="collapseI">
                    Sports Academy
                  </button>
                </h2>
                <div id="collapseI" class="accordion-collapse collapse" aria-labelledby=" headingI" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>An other stepping stone from NIS family….<br /><br />
                      Noble International School “Sports Academy” for Football, Cricket and Badminton started functioning from 02.11.2016 in which the Students from various grades involve themselves in the practice within the school premises…..<br /><br />
                      Keeping the idea of “A sound mind in a sound body”, the school lays emphasis on building Physical strength, fitness and endurance through evening coaching classes on different days apart from regular Physical Education periods which further helps the school provide meaningful training in multiple disciplines of sports.</p>
                  </div>
                </div>
              </div>
              <!---->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('front.layouts.footer')