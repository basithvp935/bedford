@extends('admin.layouts.app', [

'title' => __('Settings'),

'parentSection' => 'settings',

'elementName' => 'settings'

])

@section('title', 'Settings')

@section('content')

@component('admin.layouts.headers.auth')

@component('admin.layouts.headers.breadcrumbs')

@slot('title')

{{ __('Settings') }}

@endslot



<li class="breadcrumb-item"><a href="{{ route('admin::settings') }}">{{ __('Settings') }}</a></li>

<li class="breadcrumb-item active" aria-current="page">{{ __('Edit Settings') }}</li>

@endcomponent

@endcomponent



<div class="container-fluid mt--6">

    <div class="row">

        <div class="col-xl-12 order-xl-1">

            <div class="card">

                <div class="card-header">

                    <div class="row align-items-center">

                        <div class="col-8">

                            <h3 class="mb-0">{{ __('Settings') }}</h3>

                        </div>

                        <div class="col-4 text-right">

                            <a href="{{ route('admin::settings') }}" class="btn btn-sm btn-primary">{{ __('Back to
                                list') }}</a>

                        </div>

                    </div>

                </div>

                <div class="col-12 mt-2">

                    @include('admin.alerts.success')

                    @include('admin.alerts.errors')

                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('admin::settings_update') }}" enctype="multipart/form-data">

                        @csrf

                        @method('put')



                        <h6 class="heading-small text-muted mb-4">{{ __('Settings information') }}</h6>

                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group{{ $errors->has('years_of_experience') ? ' has-danger' : '' }}">

                                        <label class="form-control-label" for="input-years_of_experience">{{ __('Years
                                            Of Experience') }}</label>

                                        <input type="number" name="years_of_experience" id="input-years_of_experience" class="form-control{{ $errors->has('years_of_experience') ? ' is-invalid' : '' }}" placeholder="{{ __('Years Of Experience') }}" value="{{ $settings->years_of_experience }}" autofocus>

                                        @include('admin.alerts.feedback', ['field' => 'years_of_experience'])

                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group{{ $errors->has('new_born_deliveries') ? ' has-danger' : '' }}">

                                        <label class="form-control-label" for="input-new_born_deliveries">{{ __('New Born Deliveries') }}</label>

                                            <input type="number" name="new_born_deliveries" id="input-new_born_deliveries" class="form-control{{ $errors->has('new_born_deliveries') ? ' is-invalid' : '' }}" placeholder="{{ __('New Born Deliveries') }}" value="{{ $settings->new_born_deliveries }}">

                                            @include('admin.alerts.feedback', ['field' => 'new_born_deliveries'])

                </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('cathlab_procedures') ? ' has-danger' : '' }}">

                                        <label class="form-control-label" for="input-cathlab_procedures">{{ __('Cathlab Procedures') }}</label>

                                        <input type="number" name="cathlab_procedures" id="input-cathlab_procedures" class="form-control{{ $errors->has('cathlab_procedures') ? ' is-invalid' : '' }}" placeholder="{{ __('Heart Transplants') }}" value="{{ $settings->cathlab_procedures }}">

                                        @include('admin.alerts.feedback', ['field' => 'cathlab_procedures'])

                                    </div>
                                </div>
                                <div class="col-md-6">


                                    <div class="form-group{{ $errors->has('endoscopy_procedures') ? ' has-danger' : '' }}">

                                        <label class="form-control-label" for="input-endoscopy_procedures">{{ __('Endoscopy Procedures') }}</label>

                                        <input type="number" name="endoscopy_procedures" id="input-endoscopy_procedures" class="form-control{{ $errors->has('endoscopy_procedures') ? ' is-invalid' : '' }}" placeholder="{{ __('Kidney Transplants') }}" value="{{ $settings->endoscopy_procedures }}">

                                        @include('admin.alerts.feedback', ['field' => 'endoscopy_procedures'])

                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('first_img') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-first_img">{{ __('BSH International Training Center Image') }}</label>
                            <img src="{{ url('application/public/' . $settings->first_img) }}" height="42" width="42" style="    margin-left: 74px;">
                            <div class="custom-file">
                                <input type="file" name="first_img" class="custom-file-input{{ $errors->has('first_img') ? ' is-invalid' : '' }}" id="input-img" accept="image/*">
                                <label class="custom-file-label" for="input-img">{{ __('Select Image')
                                            }}</label>
                            </div>
                            @include('admin.alerts.feedback', ['field' => 'first_img'])
                        </div>
                        <div class="form-group{{ $errors->has('second_img') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-second_img">{{ __('Patient Testimonials Image') }}</label>
                            <img src="{{ url('application/public/' . $settings->second_img) }}" height="42" width="42" style="    margin-left: 74px;">
                            <div class="custom-file">
                                <input type="file" name="second_img" class="custom-file-input{{ $errors->has('second_img') ? ' is-invalid' : '' }}" id="input-img" accept="image/*">
                                <label class="custom-file-label" for="input-img">{{ __('Select Image')
                                            }}</label>
                            </div>
                            @include('admin.alerts.feedback', ['field' => 'second_img'])
                        </div>
                        <div class="form-group{{ $errors->has('third_img') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-third_img">{{ __('CSR Initiatives Image') }}</label>
                            <img src="{{ url('application/public/' . $settings->third_img) }}" height="42" width="42" style="    margin-left: 74px;">
                            <div class="custom-file">
                                <input type="file" name="third_img" class="custom-file-input{{ $errors->has('third_img') ? ' is-invalid' : '' }}" id="input-img" accept="image/*">
                                <label class="custom-file-label" for="input-img">{{ __('Select Image')
                                            }}</label>
                            </div>
                            @include('admin.alerts.feedback', ['field' => 'third_img'])
                        </div>


                            <div class="text-center">

                                <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>

                            </div>


                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>



    @include('admin.layouts.footers.auth')




</div>


@endsection