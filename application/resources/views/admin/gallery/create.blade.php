@extends('admin.layouts.app', [
'title' => __('Gallery Management'),
'parentSection' => 'media',
'elementName' => 'gallerys'
])
@section('title','Gallery Management')
@section('content')
@component('admin.layouts.headers.auth')
@component('admin.layouts.headers.breadcrumbs')
@slot('title')
{{ __('Gallerys') }}
@endslot

<li class="breadcrumb-item"><a href="{{ route('admin::gallerys.index') }}">{{ __('Gallery Management') }}</a></li>
<li class="breadcrumb-item active" aria-current="page">{{ __('Add Gallery') }}</li>
@endcomponent
@endcomponent

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Gallery Management') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin::gallerys.index') }}"
                                class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin::gallerys.store') }}" enctype="multipart/form-data">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Gallery information') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-code">{{ __('Title')
                                    }}</label>
                                <input type="text" name="title" id="input-title"
                                    class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                @include('admin.alerts.feedback', ['field' => 'title'])
                            </div>
                            <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-image">{{ __('Image') }} (548 × 377 px)</label>
                                <div >
                                    <input type="file" name="image"

                                        id="input-image" accept="image/*">
                                </div>

                                @include('admin.alerts.feedback', ['field' => 'image'])
                            </div>
                            <div class="form-group{{ $errors->has('sub_images') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-sub_images">{{ __('Sub Images') }} (548 × 377 px)</label>
                                <div >
                                    <input type="file" multiple name="sub_images[]"

                                        id="input-sub_images" accept="image/*">
                                </div>

                                @include('admin.alerts.feedback', ['field' => 'sub_images'])
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
