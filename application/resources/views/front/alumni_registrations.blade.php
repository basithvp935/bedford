@section('title', 'Alumni Registration')
@section('alumni_registrations', 'active')
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
            <div class="col-md-6 offset-md-3">
                <div class="in-cnt-pd " data-aos="fade-right">

                    <div class="text-center">
                        <h1 class="pb-0 mt-0 fw-600">ALUMNI REGISTRATION</h1>

                    </div>
                </div>

                <div class="contact-form">


                    <form method="post" action="{{ route('alumni_registration_store') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" id="name" required placeholder="Name"
                                value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                         <div class="mb-3">
                            <select class="form-select" name="year_of_passing" id="year_of_passing">
                                <option value="">Year of passing out from ISG</option>
                            </select>
                            @if ($errors->has('year_of_passing'))
                                <span class="error">{{ $errors->first('year_of_passing') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control " placeholder="Whatsapp Number"
                                type="text" name="whatsapp_number" id="whatsapp_number"
                                value="{{ old('whatsapp_number') }}">
                            @if ($errors->has('whatsapp_number'))
                                <span class="error">{{ $errors->first('whatsapp_number') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                                class="form-control ">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>




                        <div class="mb-3">
                            <h4>Current Status : </h4>
                        </div>


                        <div class="mb-3">
                            <input type="text" class="form-control" name="employer" id="employer"  placeholder="Employer"
                                   value="{{ old('employer') }}">
                            @if ($errors->has('employer'))
                                <span class="error">{{ $errors->first('employer') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" name="name_of_educational_institution" id="name_of_educational_institution"  placeholder="Name of educational institution"
                                   value="{{ old('name_of_educational_institution') }}">
                            @if ($errors->has('name_of_educational_institution'))
                                <span class="error">{{ $errors->first('name_of_educational_institution') }}</span>
                            @endif
                        </div>
 <div class="mb-3">
                        <div class="form-group{{ $errors->has('photo') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-photo">{{ __('Photo') }}</label>
                            <div >
                                <input type="file" name="photo"
                                       id="input-photo" accept="image/*">
                            </div>
                            {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                            @include('admin.alerts.feedback', ['field' => 'photo'])
                        </div>
                        </div>

                        <div class="col smd1 gutter">
                            <div class="g-recaptcha"
                                style="transform:scale(0.7);transform-origin:0;-webkit-transform:scale(0.7);
    transform:scale(0.7);-webkit-transform-origin:0 0;transform-origin:0 0;"
                                data-sitekey="{{ env('RecaptchaSitekey') }}" data-callback="recaptchaCallback">
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>


            </div>
        </div>
</section>

@include('front.layouts.footer')

<script>
    let dateDropdown = document.getElementById('year_of_passing');

    let currentYear = new Date().getFullYear();
    let earliestYear = 1996;
    while (currentYear >= earliestYear) {
        let dateOption = document.createElement('option');
        dateOption.text = currentYear;
        dateOption.value = currentYear;
        dateDropdown.add(dateOption);
        currentYear -= 1;
    }
</script>
