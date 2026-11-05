@section('title', 'Academics')
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
                    <span class="sxt">ISG</span>
                    <h1 class="pb-2 mt-0 fw-600"> Academics</h1>
                    <div class="in-txt mb-4">
                        @php
                            echo $academic->description;
                        @endphp
                    </div>
                </div>

                <span class="sxt">ISG</span>
                <h1 class="pb-2 mt-0"> Timings</h1>
                <div class="row g-2">
                    @php
                        echo $academic->timing;
                    @endphp
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
