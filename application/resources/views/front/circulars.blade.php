@section('title', 'Circulars')
@section('circulars', 'active')
@include('front.layouts.header')

<div class="page-top"></div>
<section class="about section-100 pt-30 circulars-page" style="margin-top: 130px">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ asset('Front/images/banner-2.jpg') }}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>
        <div class="row  g-md-5">
            <div class="col-md-12">
                <div class="in-cnt-pd" data-aos="fade-right">
              
                    <h1 class="pb-2 mt-0 fw-600">Circulars</h1>
                    <div class="row g-4">
                        @foreach ($circulars as $circular)
                        <div class="col-md-6">
                            <div class="circulars-list flex  justify-content-start">
                                <div class="fex-grow-1  w-100">
                                    <p>{{$circular->title}}</p>
                                    <span>{{ \Carbon\Carbon::parse($circular->date)->format('d-m-Y') }}</span>
                                </div>
                                <div>
                                    <a target="_blank" href="{{ url('upload/' . $circular->pdf) }}">View</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>


                </div>
                <div class="mt-4">
                    <div class="col-sm-12 col-md-12 pull-right">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            {!! $circulars->links('front.pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-4" data-aos="fade-left">-->
            <!--    <div class="imp-list">-->
            <!--        <h6> <img src="{{ asset('Front/images/icons/calendar.svg') }}" class="d-inline me-2 " alt=""> Important Date</h6>-->
            <!--        @foreach ($newses as $newse)-->
            <!--        <div class="flex mb-3">-->
            <!--            <div class="ps-3">-->
            <!--                <img class="star-img " src="{{ asset('Front/images/icons/star.svg') }}" alt="">-->
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
