@extends('admin.layouts.app', [

    'title' => __('Academic Calendars Management'),

    'parentSection' => '',

    'elementName' => 'academic_calendars'

])

@section('title','Academic Calendars Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('Academic Calendars') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::academic_calendars.index') }}">{{ __('Academic Calendars Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Academic Calendars') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Academic Calendars Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::academic_calendars.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::academic_calendars.update', $academic_calendar) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Academic Calendars information') }}</h6>

                            <div class="pl-lg-4">

                          <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>

                                    <input type="text" value="{{$academic_calendar->title}}" name="title" id="input-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Academic Calendars Title') }}" value="{{ old('title') }}" required autofocus>

                               @include('admin.alerts.feedback', ['field' => 'title'])

                            </div>

                            <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-date">{{ __('Date') }}</label>

                                    <div class="input-group">

                                        <div class="input-group-prepend">

                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>

                                        </div>

                                        <input class="form-control datepicker" name="date" placeholder="Select date" type="text" value="{{ $academic_calendar->date }}" >

                                        @include('admin.alerts.feedback', ['field' => 'date'])

                                    </div>

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
