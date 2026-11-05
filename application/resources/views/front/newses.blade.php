@section('title', 'News')
@section('Newses', 'active')
@include('front.layouts.header')

<section class="facilities   " style="margin-top: 100px;">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ asset('Front/images/management.jpg') }}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>
        <div class="row  g-md-5">
            <div class="col-md-12">
                <div class="in-cnt-pd" data-aos="fade-right">
                    <span class="sxt">Dayapuram</span>
                    <h1 class="pb-2 mt-0 fw-600">News
                        <div class="row g-4 mb-4">
                            @foreach ($newses as $newse)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <img src="{{ url('upload/' . $newse->thumb_img)}}"
                                                    alt="" style="border-radius: 20px">
                                            </div>
                                            <div class="pt-3">
                                                <h4 class="fw-bold">{{$newse->news_title}}</h4>
                                                <p>{{\Carbon\Carbon::parse($newse->news_date)->format('d m, Y')}}</p>
                                                <a href="{{route('news_details',$newse->news_slug)}}" class="main-btn"
                                                    style="font-size: 14px;">Read
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
