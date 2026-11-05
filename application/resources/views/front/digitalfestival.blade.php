@section('title', 'Events & Festivals - Bedford Kindergarten Qatar | Doha')
@section('description', 'Explore festivals, cultural celebrations, and student events at Bedford Kindergarten in Barwa Madinatna, Doha, Qatar.')
@section('events', 'active')
@include('front.layouts.header')


<section class="  section-110 bg-career">
    <div class="container ">
        <div class="row align-items-center min-h-70  ">
            <div class="col-md-12 text-center pt-5">
                <h1 class="mt-5 mb-4 fw-700 text-white position-relative">Digital Festival
                </h1>

            </div>
        </div>
    </div>

</section>

<section class="about py-5 home-about ">
    <div class="container">

        <div class="row  g-md-5">
            <div class="col-md-8 offset-md-2">
                <div class="row g-3">
                  @foreach ($festival as $digitalfestival)
                    <div class="col-md-12">
                        <div class="card " style="border-radius: 20px; overflow: hidden">
                            <div class="card-body p-md-4 ">
                                <h5 class="card-title">{{ $digitalfestival->title }}</h5>
                                <p class="card-text">{{ $digitalfestival->description }}.</p>
                            </div>
                            <img src="{{ url('upload/' . $digitalfestival->img) }}" class="card-img-bottom" alt="...">
                        </div>
                    </div>
                  @endforeach 

                    
         
                

                    {{-- <div class="col-md-12">
                        <div class="card " style="border-radius: 20px; overflow: hidden">
                            <div class="card-body p-md-4 ">
                                <h5 class="card-title">THE FIRST SCHOOL IN KERALA TO START TEACHING CODING FROM CLASS 1 ONWARDS</h5>
                                <p class="card-text">The school has initiated a project to prepare students for the digital world by providing an online learning platform to develop programming skills and 21st century skills from grade 1 onwards. The school envisions creating our future generation from users of technology to creators of technology.</p>
                            </div>
                            <img src="https://dayapuramschool.edu.in/public/images/df/bnr.jpg" class="card-img-bottom" alt="...">
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
