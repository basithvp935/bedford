@include('front.layouts.header')

<!--<div class="page-top"></div>-->
<section class="explore  section-100  ">
    <div class="container">
         <div class="row ">
            <div class="col-md-12">
                <img src="{{'upload/'.$missonVision->banner}}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                                    <h3 class="fw-bold">{{$missonVision->heading1}}</h3>

                                    <hr>
                                      <p>
                                          {{$missonVision->description1}}

</p>
                                </div>
              </div>
                </div>

                  <div class="col-md-6">
                      <img src="{{'upload/'.$missonVision->image1}}" class="rounded"  alt="">
                      </div>

                       <div class="col-md-6">
                      <img src="{{'upload/'.$missonVision->image2}}"  class="rounded"  alt="">
                      </div>
                <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                                    <h3 class="fw-bold">{{$missonVision->heading2}}</h3>

                                    <hr>
                                      <p>
                                          {{$missonVision->description2}}
</p>
                                </div>
              </div>
                </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
