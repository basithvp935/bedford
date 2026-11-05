

@section('title', 'Transfer Certificate')
@section('transfer_certificates', 'active')
@include('front.layouts.header')

<div class="page-top"></div>
<section class="about section-100 pt-30 ">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ asset('Front/images/about-page.jpg') }}" class="about-img mb-3 mb-md-5" alt="">
            </div>
        </div>
        <div class="row  g-md-5">
            <div class="col-md-4 offset-md-4">
                <div class="in-cnt-pd " data-aos="fade-right">
                    <span class="sxt">Download Your</span>
                    <div class="text-center">
                        <h1 class="pb-0 mt-0 fw-600"> Transfer Certificate</h1>
                        <p class="text-blue mb-3">Download application form for transfer certificate</p>
                    </div>
                </div>

                <div class="contact-form">


                    <form id="contactform" method="post" action="{{ route('get_tc') }}" autocomplete="off">
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
                                    <input type="text" class="form-control" required
                                        name="year" value="{{ old('year') }}" placeholder="year">
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
                @if (!empty($tc))
                    <li class="text-center mt-3"><a class="text-blue" href="{{ url('upload/' . $tc->pdf) }}"
                            download="{{ $tc->gr_number }}">Download TC <i class="ico"
                                data-feather="arrow-right"></i></a></li>
                @endif

            </div>
        </div>
</section>

@include('front.layouts.footer')

