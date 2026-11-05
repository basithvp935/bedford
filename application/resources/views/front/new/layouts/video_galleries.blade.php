@section('title', 'Videos Gallery')
@section('video_gallery', 'active')
@include('front.layouts.header')

<section class="location-content lc-sm tx-white image-bg tx-black text-center flex align-item-center"
    style="background: url({{ asset('Front/images/bg/7.jp') }}'); background-size: cover; background-position: center; box-shadow: inset 0 0 0 2000px rgba(0, 162, 224, 0.69);">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <h1 class="mt-5 mb-5">Videos</h1>
            </div>
        </div>
    </div>
</section>

<section class="inr-committee inr-pages section-50">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">


                <div class="title-head">
                    <h1 class="fw-700 fs-2">Video Gallery</h4>
                </div>
                <div class="row g-1">
                    @foreach ($video_galleries as $video_gallerie)
                        <div class="col-md-6">
                            <div class="card">
                                <iframe  src="//www.youtube.com/embed/{{ $video_gallerie->code }}" frameborder="0" allowfullscreen title="{{ $video_gallerie->title }}" allow='autoplay' style="width: 100%; height: 240px;"></iframe>
                                <h5 class="fw-700 pt-3 mb-2">{{ $video_gallerie->title }}</h5>
                            </div>
                        </div>
                    @endforeach

                        <div class="col-sm-12 col-md-12 pull-right">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    {!! $video_galleries->links('front.pagination') !!}
                                </div>
                            </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="right-menu">
                    <div class="right-menu-head d-flex justify-content-between">
                        <div class="title-head">
                            <h4 class="fw-700">Latest News</h4>
                        </div>
                        <div class="link aml">
                            <a href="{{route('allnews')}}">View All</a>
                        </div>
                    </div>
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="5"
                        style="height: 300px;">
                        @foreach ($newses as $newse)
                        <div class="list-news mb-2">
                            <div class="item d-flex">
                                <div class="img"> <a href="{{route('news_details',$newse->news_slug)}}"><img src="{{ url('upload/' . $newse->thumb_img)}}" alt=""></a></div>
                                <div class="txt">
                                     <a href="{{route('news_details',$newse->news_slug)}}">{{$newse->news_title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </marquee>
                    <div class="right-menu-head pt-4 d-flex justify-content-between">
                        <div class="title-head">
                            <h4 class="fw-700">Featured Video</h4>
                        </div>
                        <div class="link aml">
                            <a href="{{route('video_gallery')}}">View All</a>
                        </div>
                    </div>
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$video_gallery_latest->code}}" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>



        </div>
    </div>
    </div>
    </div>
</section>

@include('front.layouts.footer')
