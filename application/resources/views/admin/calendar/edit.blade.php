@extends('admin.layouts.app', [
    'title' => __('Calendar Management'),

    'parentSection' => 'media',

    'elementName' => 'calendar',
])

@section('title', 'Calendar Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Calendar') }}
            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::calendar') }}">{{ __('Calendar Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Calendar') }}</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Calendar Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::calendar') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::calendar.update', $calendar) }}"
                            enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Calendar information') }}</h6>

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('pdf') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pdf">{{ __('Banner PDF') }}</label>
                                    <a href="{{ url('upload/' . $calendar->pdf) }}"> View File</a>
                                    <div >
                                        <input type="file" name="pdf"
                                            
                                            id="input-pdf" >
                                    </div>
                                    @include('admin.alerts.feedback', ['field' => 'pdf'])
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
