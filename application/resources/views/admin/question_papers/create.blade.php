@extends('admin.layouts.app', [
    'title' => __('Question Papers Management'),
    'parentSection' => 'academics',
    'elementName' => 'question-papers',
])
@section('title', 'Question Papers Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Question Papers') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::question-papers.index') }}">{{ __('Question Papers Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Question Papers') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Question Papers Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::question-papers.index') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin::question-papers.store') }}" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Question Papers information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>
                                    <input type="text" name="title" id="input-title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Title') }}" value="{{ old('title') }}" required
                                        autofocus>
                                    @include('admin.alerts.feedback', ['field' => 'title'])
                                </div>
                                <div class="form-group{{ $errors->has('second_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-second_title">{{ __('Second Title') }}</label>
                                    <input type="text" name="second_title" id="input-second_title"
                                        class="form-control{{ $errors->has('second_title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Second Title') }}" value="{{ old('second_title') }}" required
                                        autofocus>
                                    @include('admin.alerts.feedback', ['field' => 'second_title'])
                                </div>
                                <div class="form-group{{ $errors->has('small_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-small_title">{{ __('Small Title') }}</label>
                                    <input type="text" name="small_title" id="input-small_title"
                                        class="form-control{{ $errors->has('small_title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Small Title') }}" value="{{ old('small_title') }}"
                                        autofocus>
                                    @include('admin.alerts.feedback', ['field' => 'small_title'])
                                </div>
                                <div class="form-group{{ $errors->has('pdf') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pdf">{{ __('PDF') }}</label>
                                   <div >
                                        <input type="file" name="pdf"

                                            id="input-pdf">
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
