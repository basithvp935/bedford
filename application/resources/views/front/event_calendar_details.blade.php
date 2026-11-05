@section('title', 'Event Details')
@section('categories', 'active')
@include('front.layouts.header')

<section class="facilities">
    <div class="container">
      <div class="row ">
        <div class="col-md-12">
            <img src="{{ url('upload/' . $event_calendar->banner)}}" class="about-img mb-3 mb-md-5" alt="">
        </div>
       </div>
       <div class="row  g-md-5">
        <div class="col-md-12">
          <div class="in-cnt-pd" data-aos="fade-right">
            <span class="sxt">ISG</span>
            <h1 class="pb-2 mt-0 fw-600">Event
      

                <div class="card mt-3">
                    <div class="card-body p-md-5">
                        <p class="mb-0">{{\Carbon\Carbon::parse($event_calendar->date)->format('d m, Y')}}</p>
                        <h3 class="fw-bold mt-0">{{$event_calendar->title}}</h3>
                        <div class="in-txt">
                        @php
                            echo $event_calendar->content;
                        @endphp
                    </div>
                    </div>
                  </div>

        

          </div>
        </div>
    
      </div>
    </div>
  </section>

@include('front.layouts.footer')
