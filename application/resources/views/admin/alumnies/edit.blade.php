@extends('admin.layouts.app', [
    'title' => __('Alumnies Management'),
    'parentSection' => '',
    'elementName' => 'alumnies',
])
@section('title', 'Alumnies Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Alumnies') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::alumnies.index') }}">{{ __('Alumnies Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Alumni') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Alumnies Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::alumnies.index') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin::alumnies.update', $alumni) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Page information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}" value="{{ $alumni->name }}">
                                    @include('admin.alerts.feedback', ['field' => 'name'])
                                </div>
                                <div class="form-group{{ $errors->has('sub_description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-sub_description">{{ __('Sub Description') }}</label>
                                    <input type="text" name="sub_description" id="input-title"
                                        class="form-control{{ $errors->has('sub_description') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Sub Description') }}" value="{{ $alumni->sub_description }}">
                                    @include('admin.alerts.feedback', ['field' => 'sub_description'])
                                </div>
                                <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-image">{{ __('Image') }} </label>
                                    @if (!empty($alumni->image))
                                        <img src="{{ url('upload/' . $alumni->image) }}" height="80" width="200"
                                            style="margin-left: 74px;margin-bottom: 13px;">
                                    @endif
                                    <div >
                                        <input type="file" name="image"
                                           
                                            id="input-image" accept="image/*">
                                    </div>

                                    @include('admin.alerts.feedback', ['field' => 'image'])
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
