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
                    <div class="card mt-3" id="heading{{$val->id}}">
                        <div class="card-header" style="    background: #dcf5ff;">
                            <h4 class="mb-0 pt-2 pb-2"> {{$val->name}}</h4>
                        </div>
                        <div class="card-body">

            <div class="row g-3">

                @php $i = 0; @endphp
                @foreach($val->images as $image)

                    @if($image->quality_education_id == $quality->id)
                        @php $i++; @endphp
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="gallery-list h-auto">
                              <a href="{{url('upload/'.$image->image)}}" data-fancybox="gallery-a"
                                    data-caption="{{$image->text}}">
                                <img src="{{url('upload/'.$image->image)}}"/>
                                </a>

                            <p class="bg-white p-3 lh-base"> {{$image->text}}</p>
                        </div>
                    </div>
                    @endif
                @endforeach



                @foreach($val->videos as $video)

                        @if($video->quality_education_id == $quality->id)
                        @php $i++; @endphp
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="gallery-list h-auto">
                            <iframe class="m-0 p-0" width="100%" height="268" src="https://www.youtube.com/embed/{{$video->iframe}}" title="H.E The Indian Ambassador addresses ISG students on 77th Independence Day" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <p class="bg-white p-3 lh-base"> {{$video->text}}</p>
                        </div>
                    </div>
                        @endif
                @endforeach


                @if(!$i)

                    <style>
                        #heading{{$val->id}}{
                            display: none;
                        }
                    </style>

                @endif


            </div>

        </div>
    </div>
    @endforeach
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
