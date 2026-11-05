@extends('admin.layouts.app', [
    'title' => __('Circulars Management'),
    'parentSection' => 'media',
    'elementName' => 'circulars',
])
@section('title', 'Circulars Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Circulars') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::circulars.index') }}">{{ __('Circulars Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Circular') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Circulars Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::circulars.index') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin::circulars.store') }}" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Circular information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>
                                    <input type="text" name="title" id="input-title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Title') }}" value="{{ old('title') }}" required autofocus>
                                    @include('admin.alerts.feedback', ['field' => 'title'])
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('Date') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" name="date" placeholder="Select date"
                                            type="text" value="{{ old('date') }}">
                                        @include('admin.alerts.feedback', ['field' => 'date'])
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('pdf') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pdf">{{ __('PDF') }}</label>
                                    <div>
                                        <input type="file" name="pdf" id="input-pdf">
                                    </div>

                                    @include('admin.alerts.feedback', ['field' => 'pdf'])
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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
