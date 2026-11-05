@section('title', 'Academics & EYFS Curriculum - Bedford Kindergarten Qatar | Doha')
@section('description', 'Explore the British Early Years Foundation Stage (EYFS) and Montessori integrated curriculum at Bedford Kindergarten in Doha, Qatar.')
@section('academics', 'active')
@include('front.layouts.header')


<div class="page-top"></div>
<section class="about section-100 pt-30 ">
  <div class="container">
    <div class="row ">
      <div class="col-md-12">
        <img src="{{ url('upload/' . $academic->banner) }}" class="about-img mb-3 mb-md-5" alt="Academics at Bedford Kindergarten">
      </div>
    </div>
    <div class="row  g-md-5">
      <div class="col-md-12">
        <div class="in-cnt-pd" data-aos="fade-right">

          <h1 class="pb-2 mt-0 fw-600">Early Years Academics & Curriculum</h1>

          <div class="accordion" id="accordionExample">

            @foreach($academicData as $k => $r)
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-{{$k}}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$k}}" aria-expanded="false" aria-controls="collapse-{{$k}}">{{$r->title}}</button>
              </h2>
              <div id="collapse-{{$k}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$k}}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {!! $r->description !!}
                </div>
              </div>
            </div>
            @endforeach
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Educational Philosophy & Vision
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p><strong>"Nurture the Tiny Minds; Cherish the Future"</strong></p>
                  <p>Bedford Kindergarten aims to provide early childhood academic excellence in a caring, safe, respectful, and structured environment. Each child is cherished as a unique individual with limitless potential. We empower children to think critically, grow intellectually, and excel in our global society through world-class learning experiences.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  British EYFS Curriculum Framework
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Bedford Kindergarten delivers the internationally recognized <strong>British Early Years Foundation Stage (EYFS)</strong> framework, encompassing seven prime and specific areas of learning and development:
                  </p>

                  <b>Prime Areas of Learning:</b>
                  <ul>
                    <li><strong>Communication and Language:</strong> Developing rich listening, attention, speaking, and conversational skills.</li>
                    <li><strong>Physical Development:</strong> Gross motor agility, fine motor precision, spatial awareness, and healthy lifestyle habits.</li>
                    <li><strong>Personal, Social, and Emotional Development (PSED):</strong> Self-regulation, building constructive relationships, empathy, and confidence.</li>
                  </ul>

                  <b>Specific Areas of Learning:</b>
                  <ul>
                    <li><strong>Literacy:</strong> Systematic phonics, pre-reading, emergent writing, and early comprehension through storytelling.</li>
                    <li><strong>Mathematics:</strong> Hands-on numeracy, shape recognition, spatial reasoning, patterns, and problem solving.</li>
                    <li><strong>Understanding the World:</strong> Science exploration, nature, community living, technology, and cultural awareness.</li>
                    <li><strong>Expressive Arts and Design:</strong> Visual arts, sensory crafts, music, movement, and role-play imagination.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Montessori Methodology Integration
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    We enrich the EYFS framework with the time-tested Montessori method:
                  </p>
                  <ul>
                    <li><strong>Sensorial Exploration:</strong> Refining sensory perception with tactile materials.</li>
                    <li><strong>Practical Life Skills:</strong> Cultivating independence, self-care, order, and coordination.</li>
                    <li><strong>Self-Directed Learning:</strong> Allowing children to choose activities within a prepared, structured environment.</li>
                    <li><strong>Qualified Early Childhood Educators:</strong> Guiding each child according to their individual developmental pace.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Arabic Language, Islamic Ethics & Qatar Heritage
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Bedford Kindergarten takes deep pride in celebrating Qatari cultural identity, Arabic language education, and Islamic and moral values alongside world-class early learning standards.
                  </p>
                  <p>
                    Our Arabic language and Islamic moral curriculum is thoughtfully structured to be engaging and age-appropriate for early learners.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Early Years Assessment & Observation
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Assessment at Bedford Kindergarten is formative, continuous, and observational. Rather than high-stakes testing, our educators maintain detailed learning profiles tracking:
                  </p>
                  <ul>
                    <li>Milestones across the 17 Early Learning Goals (ELGs) of the British EYFS framework.</li>
                    <li>Sensory refinement and motor skills through Montessori hands-on apparatus.</li>
                    <li>Social and emotional maturity, self-regulation, empathy, and collaborative play.</li>
                    <li>Regular parent consultations and individualized development updates.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Attendance & Punctuality Policy
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="p-0 m-0">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                      </svg> Regular attendance is essential to establish positive learning habits and early social development.</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                      </svg> Every absence should be communicated in advance to the school administration via email or phone.</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                      </svg> Medical absences extending over multiple days should be supported by a medical note.</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                      </svg> Punctuality ensures your child experiences the full morning circle and planned learning routine.</li>
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

@include('front.layouts.footer')