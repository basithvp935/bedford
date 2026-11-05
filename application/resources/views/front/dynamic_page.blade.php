@include('front.layouts.header')

<!--<div class="page-top"></div>-->
<section class="explore  section-100 ">
    <div class="container">
         <div class="row ">
            <div class="col-md-12">
                <img src="{{ url('upload/' . $page->banner) }}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>

        <div class="row g-4">

            <div class="col-md-12">
                <span class="sxt">{{$page->title}}
</span>
                <h1 class="mt-0 mb-3 fw-600">{{$page->heading}}</h1>

             {!! $page->content !!}


                </div>





        </div>
    </div>
</section>

@include('front.layouts.footer')
