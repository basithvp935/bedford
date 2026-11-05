@extends('admin.layouts.app', [
    'title' => __('Facts Management'),

    'parentSection' => '',

    'elementName' => 'facts',
])

@section('title', 'Facts Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Facts') }}
            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::facts.index') }}">{{ __('Facts Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Facts') }}</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Facts Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::facts.index') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::facts.update', $fact) }}"
                            enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Facts information') }}</h6>

                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>

                                    <input type="text" value="{{ $fact->name }}" name="name" id="input-name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}" required autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'name'])

                                </div>
                                <div class="form-group{{ $errors->has('point') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-point">{{ __('Count') }}</label>

                                    <input type="number" name="point" id="input-point"
                                        class="form-control{{ $errors->has('point') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Count') }}" value="{{ $fact->point }}" required>

                                    @include('admin.alerts.feedback', ['field' => 'point'])

                                </div>

                                <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-img">{{ __('Image') }} (216 × 216 px)</label>

                                    <img src="{{ url('upload/' . $fact->img) }}" height="42" width="42"
                                        style="    margin-left: 74px;">

                                    <div>

                                        <input type="file" name="img" id="input-img" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'img'])

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
