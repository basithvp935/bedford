@include('front.layouts.header')

<!--<div class="page-top"></div>-->
<section class="explore  section-100 bg-green">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{url('upload/'.$quality->banner)}}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>

        <div class="row g-4">

            <div class="col-md-12">
                <span class="sxt">Quality Education
</span>
                <h1 class="mt-0 mb-3 fw-600">{{$quality->heading}}</h1>


                @foreach ($data as $val)
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-journals d-inline-block me-1" viewBox="0 0 16 16">
                                    <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2"/>
                                    <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0"/>
                                </svg> {{$val->name}}</h4>
                        </div>
                        <div class="card-body">

            <div class="row g-3">


                @foreach($val->images as $image)
                {{$image->quality_education_id}}
                    @if($image->quality_education_id == $quality->id)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class=" h-auto">
                            <img src="{{url('upload/'.$image->image)}}"/>
                            <p class="bg-white p-3 lh-base"> {{$image->text}}</p>
                        </div>
                    </div>
                    @endif
                @endforeach

                @foreach($val->videos as $video)
                        @if($video->quality_education_id == $quality->id)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class=" h-auto">
                            <iframe class="m-0 p-0" width="100%" height="268" src="https://www.youtube.com/embed/{{$video->iframe}}" title="H.E The Indian Ambassador addresses ISG students on 77th Independence Day" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <p class="bg-white p-3 lh-base"> {{$video->text}}</p>
                        </div>
                    </div>
                        @endif
                @endforeach


            </div>

        </div>
    </div>
    @endforeach
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
