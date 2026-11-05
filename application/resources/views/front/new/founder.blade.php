@include('front.layouts.header')

<section class="explore gallery-page section-100  ">
    <div class="container">
         <div class="row ">
            <div class="col-md-12">
                <img src="{{ url('upload/' . $founder->small_banner) }}" class="about-img mb-3 mb-md-5" alt="">

            </div>
        </div>

        <div class="row  g-md-5">
            <div class="col-md-12">
                <div class="in-cnt-pd" data-aos="fade-right">
                    <span class="sxt">{{ucfirst(last(request()->segments()))}}</span>
                    <h1 class="pb-2 mt-0 fw-600">Dayapuram SCHOOL</h1>
                    <div class="in-txt">

                    </div>
                </div>
                </div>
                <div class="col-md-8">

                    {!! $founder->content !!}
                </div>
                  <div class="col-md-4 text-center">
                      <img src="{{ url('upload/' . $founder->img) }}"  alt="">
                      <p class="mt-2 lh-base"><b class="fs-5">{{$founder->name}}</b><br/>
                          {{ucfirst(last(request()->segments()))}}, Dayapuram Residential School</p>
                      </div>

        </div>
    </div>
</section>

@include('front.layouts.footer')
