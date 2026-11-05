
@section('title', 'Principal')
@section('principal', 'active')
@include('front.layouts.header')

<section class="location-content tx-white image-bg tx-black"
    style="background: url({{ 'upload/' . $principal->banner }}); background-size: cover; background-position: center; box-shadow: inset 0 0 0 2000px rgba(6, 36, 48, 0.655);">
    <div class="container">
        <div class="row flex align-items-center min-h-90">
            <div class="col-md-6 text-center">
                <img src="{{ url('upload/' . $principal->small_banner)}}" alt="">
            </div>
            <div class="col-md-6">
                <h1>Head of Institution </h1>
            </div>
        </div>
    </div>
</section>
<section class="inr-committee inr-pages section-50">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="title-head">
                    <h1 class="fw-700 fs-2">Principal’s Message</h4>
                </div>
                @php
                    echo $principal->content;
                @endphp
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
