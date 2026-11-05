@section('title', 'About Us – Dayapuram Residential School - Best Residential school ')
@section('description', 'Dayapuram Residential School  offers a top-tier international education with the NCERT curriculum, focusing on academic excellence, leadership, and holistic growth.')
@section('about_us', 'active')
@include('front.layouts.header')



<div class="banner banner1">

    <div class="container">

        <div class="banner-caption">

            <h2>Introduction</h2>

            <h4><a href="{{route('main')}}">Home</a> <span class="b-sep">| </span><a href="#">About Us</a> <span
                    class="b-sep">| </span><span>Introduction</span></h4>

        </div>

    </div>

</div>

<!-- <-------------section--------->

<section class="inner pt-50 pb-50">

    <div class="container">

        <div class="row-flex ">
            <div class="smd2 pr-30">
                @php
                echo $about_us->ab_left_text;
                @endphp
            </div>

            <div class="smd2">

                <div class="hover-effect"><img src="{{ url('application/public/' . $about_us->ab_right_img) }}" alt="">
                </div>

            </div>

        </div>

    </div>

</section>

<!-- </-------------section--------->



<!-- -------------section----------- -->

<section class="pt-100 pb-200">

    <div class="container">

        <div class="row-flex justify-space-between align-items">
            <div class="smd70">
                <img src="{{ url('application/public/' . $about_us->ab_left_img) }}" class="full-width" alt="">
            </div>
            <div class="smd30">
                <div class="leftline">
                    @php
                    echo $about_us->ab_right_text;
                    @endphp
                </div>
            </div>
        </div>

    </div>

</section>

<!-- -------------/section----------- -->

<!-- -------------section----------- -->

<section class="pt-50 pb-50">

    <div class="container">

        <div class="row-flex justify-space-between">



            <div class="smd30">

                <div class="leftline">

                    <h2 class="subheading">Doctors</h2>

                    <p>

                        {{$about_us->ab_doctors}}

                    </p>

                </div>

            </div>



            <div class="smd30">

                <div class="leftline">

                    <h2 class="subheading">Nursing Staff</h2>

                    <p>

                        {{$about_us->ab_nursing}}

                    </p>

                </div>

            </div>



            <div class="smd30">

                <div class="leftline">

                    <h2 class="subheading">Technology and Equipment</h2>

                    <p>

                        {{$about_us->ab_technology}}

                    </p>

                </div>

            </div>



        </div>

    </div>

</section>



@include('front.layouts.footer')
