@section('title', 'Syllabus')
@section('syllabus', 'active')
@include('front.layouts.header')


<div class="page-top"></div>
<section class="about section-100 pt-30 ">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ asset('Front/images/about-page.jpg')}}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>
        <div class="row  g-md-5">
            <div class="col-md-12">
                <div class="in-cnt-pd" data-aos="fade-right">
                    <span class="sxt">ISG</span>
                    <h1 class="pb-2 mt-0 fw-600"> Syllabus</h1>

                </div>
                <div class="accordion" id="accordionExample">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($syllabusGroups as $title => $group)
                    <div class="accordion-item">
                        <h2 class="accordion-header mt-0" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne{{$i}}">
                                {{$title}}
                            </button>
                        </h2>
                        <div id="collapseOne{{$i}}" class="accordion-collapse collapse @if($i==0) show @endif" aria-labelledby="headingOne{{$i}}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row g-2">
                                    @foreach ($group as $record)
                                    <div class="col-md-4">
                                        <div class="blue-box">
                                            <h6 class="mb-1">{{$record->second_title}}</h6>
                                            <p class="mb-1">{{$record->small_title}}</p>
                                            <a href="{{ url('upload/' . $record->pdf) }}" class="blue-btn">Download</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </div>
            </div>



            <!--<div class="col-md-4" data-aos="fade-left">-->
            <!--    <div class="imp-list">-->
            <!--        <h6> <img src="{{ asset('Front/images/icons/calendar.svg')}}" class="d-inline me-2 " alt=""> Important Date</h6>-->
            <!--        @foreach ($newses as $newse)-->
            <!--        <div class="flex mb-3">-->
            <!--            <div class="ps-3">-->
            <!--                <img class="star-img " src="{{ asset('Front/images/icons/star.svg')}}" alt="">-->
            <!--            </div>-->
            <!--            <div class="px-3">-->
            <!--                <h5>{{\Carbon\Carbon::parse($newse->date)->format('d m,Y')}}</h5>-->
            <!--                <p>{{$newse->title}}</p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        @endforeach-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</section>



@include('front.layouts.footer')
