
@section('title', 'FAQ')
@section('faq', 'active')
@include('front.layouts.header')



<div class="page-top"></div>
<section class="about section-100 pt-30 ">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ url('upload/' . $home_page->faqbanner) }}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>
        <div class="row  g-md-5 mb-4">
            <div class="col-md-4 offset-md-4">
                <div class="in-cnt-pd text-center" data-aos="fade-right">
                    <span class="sxt">Frequently Asked</span>

                    <h1 class="pb-2 mt-0 fw-600"> Questions</h1>


                </div>

                <div class="contact-form">


                    <form id="contactform" method="post" action="{{ route('get_faq') }}" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter your GR Number"
                                name="gr_number" value="{{ old('gr_number') }}">
                            @if ($errors->has('gr_number'))
                                <span class="error">{{ $errors->first('gr_number') }}</span>
                            @endif
                        </div>
                        <div class="row g-1">

                            <label class="form-label">Select Date of Birth</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="date"
                                        value="{{ old('date') }}" required placeholder="Day">
                                    @if ($errors->has('name'))
                                        <span class="error">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="month"
                                        value="{{ old('month') }}" required placeholder="Month">
                                    @if ($errors->has('month'))
                                        <span class="error">{{ $errors->first('month') }}</span>
                                    @endif
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" required name="year"
                                        value="{{ old('year') }}" placeholder="year">
                                    @if ($errors->has('year'))
                                        <span class="error">{{ $errors->first('year') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="d-grid ">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-3">

                </div>

            </div>
        </div>
        @if (!empty($tc))
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body faq-details">
                        <div class="text-center">
                            <div class="in-cnt-pd text-center" data-aos="fade-right">
                                @php
                                    echo $home_page->faq
                                @endphp

                                <h1 class="pb-2 mt-0 fw-600"> FAQ</h1>
                                <div class="download" style="text-align: left; display: block; top: 100px;">
                                    <div class="col-md-12" style="text-align:center;margin-top:4%;color: #77a4c5;">
                                        <b>Please click here to submit your enquiry</b></div><button type="button"
                                        class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        style="margin-left:45%;margin-top:5px;">Enquiry</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
</section>


@include('front.layouts.footer')
