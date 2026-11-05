@extends('admin.layouts.app', [

'title' => __('Alumni Registration Management'),

'parentSection' => '',

'elementName' => 'alumni-registrations'

])

@section('title','Alumni Registration Management')

@section('content')

@component('admin.layouts.headers.auth')

@component('admin.layouts.headers.breadcrumbs')

@slot('title')

{{ __('Alumni Registrations') }}

@endslot



<li class="breadcrumb-item"><a href="{{ route('admin::alumni-registrations.index') }}">{{ __('Alumni Registration Management') }}</a></li>

<li class="breadcrumb-item active" aria-current="page">{{ __('Edit Alumni Registration') }}</li>

@endcomponent

@endcomponent



<div class="container-fluid mt--6">

    <div class="row">

        <div class="col-xl-12 order-xl-1">

            <div class="card">

                <div class="card-header">

                    <div class="row align-items-center">

                        <div class="col-8">

                            <h3 class="mb-0">{{ __('Alumni Registration Management') }}</h3>

                        </div>

                        <div class="col-4 text-right">

                            <a href="{{ route('admin::alumni-registrations.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                        </div>

                    </div>

                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('admin::alumni-registrations.update', $alumni_registration) }}" enctype="multipart/form-data">

                        @csrf

                        @method('put')



                        <h6 class="heading-small text-muted mb-4">{{ __('Alumni Registration information') }}</h6>

                        <div class="pl-lg-4">

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>

                                <input type="text" value="{{$alumni_registration->name}}" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>

                                @include('admin.alerts.feedback', ['field' => 'name'])

                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>

                                <input type="email" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ $alumni_registration->email }}" required>

                                @include('admin.alerts.feedback', ['field' => 'email'])

                            </div>
                            <div class="form-group{{ $errors->has('whatsapp_number') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-whatsapp_number">{{ __('Whatsapp Number') }}</label>

                                <input type="text" name="whatsapp_number" id="input-whatsapp_number" class="form-control{{ $errors->has('whatsapp_number') ? ' is-invalid' : '' }}" placeholder="{{ __('Whatsapp Number') }}" value="{{ $alumni_registration->whatsapp_number }}" required>

                                @include('admin.alerts.feedback', ['field' => 'whatsapp_number'])

                            </div>
                            <div class="form-group{{ $errors->has('year_of_passing') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-year_of_passing">{{ __('Year of passing') }}</label>

                                <input type="text" name="year_of_passing" id="input-year_of_passing" class="form-control{{ $errors->has('year_of_passing') ? ' is-invalid' : '' }}" placeholder="{{ __('Year of passing') }}" value="{{ $alumni_registration->year_of_passing }}" required>

                                @include('admin.alerts.feedback', ['field' => 'year_of_passing'])

                            </div>



                            <div class="mb-3">
                                <h4>Current Status : </h4>
                            </div>


                            <div class="form-group{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-photo">{{ __('Photo') }}</label>
                                @isset($alumni_registration->photo)
                                    <img src="{{ url('upload/' . $alumni_registration->photo) }}" height="42" width="42"         style="    margin-left: 74px;">
                                @endisset
                                <div >
                                    <input type="file" name="photo"
                                           id="input-photo" accept="image/*">
                                </div>
                                {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                                @include('admin.alerts.feedback', ['field' => 'photo'])
                            </div>


                            <div class="form-group{{ $errors->has('employer') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-employer">{{ __('Employer') }}</label>

                                <input type="text" value="{{$alumni_registration->employer}}" name="employer" id="input-employer" class="form-control{{ $errors->has('employer') ? ' is-invalid' : '' }}" placeholder="{{ __('Employer') }}" required autofocus>

                                @include('admin.alerts.feedback', ['field' => 'employer'])

                            </div>


                            <div class="form-group{{ $errors->has('name_of_educational_institution') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-name_of_educational_institution">{{ __('Name of educational Institution') }}</label>

                                <input type="text" value="{{$alumni_registration->name_of_educational_institution}}" name="name_of_educational_institution" id="input-name_of_educational_institution" class="form-control{{ $errors->has('name_of_educational_institution') ? ' is-invalid' : '' }}" placeholder="{{ __('Name of educational Institution') }}" required autofocus>

                                @include('admin.alerts.feedback', ['field' => 'name_of_educational_institution'])

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
