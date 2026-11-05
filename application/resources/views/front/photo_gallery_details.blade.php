@section('title', 'Photo Gallery')
@section('circulars', 'active')
@include('front.layouts.header')

<section class="explore gallery-page section-100 ">
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-md-12 text-center" data-aos="fade-left">
                <h1 class="mt-0 mb-4 fw-600">{{$gallery->title}}</h1>

            </div>
            <div class="col-md-12 text-center  ">
                <div class="row g-1">
                    @foreach ($gallery->gallery_details as $gallery_detail)
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="gallery-list hg-img efx mb-0">
                                <a class="fancybox" rel="group" href="{{ url('upload/' . $gallery_detail->img) }}"  
                                    data-caption="{{ $gallery->title }}">
                                    <img src="{{ url('upload/' . $gallery_detail->img) }}" />
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
