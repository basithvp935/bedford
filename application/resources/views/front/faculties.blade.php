@section('title', 'Faculties')
@section('faculties', 'active')
@include('front.layouts.header')

<div class="page-top"></div>
<section class="about section-100 pt-30 ">
    <div class="container">
        <!--<div class="row ">-->
        <!--    <div class="col-md-12">-->
                <!--<img src="{{ asset('Front/images/management.jpg') }}" class="about-img mb-3 mb-md-4" alt="">-->
        <!--    </div>-->
        <!--</div>-->
        <div class="row d-md-flex align-items-center ">
            <div class="col-md-12">
                <div class="in-cnt-pd" data-aos="fade-right">
                    <!--<span class="sxt">Noble Qatar</span>-->
                    <h1 class="pb-2 mt-0 fw-600">Faculties</h1>

                    @foreach ($departments as $department)
                    <div class="card mt-3">
                        <div class="card-header">
    <h4>{{$department->name}}</h4>
  </div>
  <div class="card-body">
      <div class="row g-md-3">


                        @foreach ($department->faculties as $faculty)

                            <div class="col-md-3">
                                <div class="management-list">
                                    <img src="{{ url('upload/' . $faculty->img) }}" alt="">
                                    <h6>{{ $faculty->name }}</h6>
                                    <p>
                                        {{ $faculty->designation }}
                                        {{ $faculty->small_description }}</p>
                                </div>
                            </div>

                        @endforeach

                    </div>
  </div>
</div>
@endforeach






                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
