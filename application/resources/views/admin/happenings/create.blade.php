@extends('admin.layouts.app', [

    'title' => __('Happening Management'),

    'parentSection' => '',

    'elementName' => 'happenings'

])

@section('title','Happening Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('Happening') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::happenings.index') }}">{{ __('Happening Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Happening') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Happening Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::happenings.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::happenings.store') }}" enctype="multipart/form-data">

                            @csrf



                            <h6 class="heading-small text-muted mb-4">{{ __('Happening information') }}</h6>

                            <div class="pl-lg-4">

                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>

                                    <input type="text" name="title" id="input-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('News Title') }}" value="{{ old('title') }}" required autofocus>

                               @include('admin.alerts.feedback', ['field' => 'title'])

                            </div>
                            <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-date">{{ __('Date') }}</label>

                                    <div class="input-group">

                                        <div class="input-group-prepend">

                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>

                                        </div>

                                        <input class="form-control datepicker" name="date" placeholder="Select date" type="text" value="{{ old('date') }}" >

                                        @include('admin.alerts.feedback', ['field' => 'date'])

                                    </div>

                                </div>

                            <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-img">{{ __('Image') }} (489 × 278 px)</label>
                                    <div>
                                        <input type="file" name="img"  id="input-img" accept="image/*">
                                    </div>
                                    @include('admin.alerts.feedback', ['field' => 'img'])
                            </div>
                            {{-- <div class="form-group{{ $errors->has('meta_title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-meta_title">{{ __('Meta Title') }}</label>

                                    <input type="text" name="meta_title" id="input-meta_title" class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}" placeholder="{{ __('Meta Title') }}" value="{{ old('meta_title') }}" >

                               @include('admin.alerts.feedback', ['field' => 'meta_title'])

                            </div>

                            <div class="form-group{{ $errors->has('meta_description') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-meta_description">{{ __('Meta Description') }}</label>

                                    <input type="text" name="meta_description" id="input-meta_description" class="form-control{{ $errors->has('meta_description') ? ' is-invalid' : '' }}" placeholder="{{ __('Meta Description') }}" value="{{ old('meta_description') }}"  >

                               @include('admin.alerts.feedback', ['field' => 'meta_description'])

                            </div>

                            <div class="form-group{{ $errors->has('meta_keyword') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-meta_keyword">{{ __('Meta Keyword') }}</label>

                                    <input type="text" name="meta_keyword" id="input-meta_keyword" class="form-control{{ $errors->has('meta_keyword') ? ' is-invalid' : '' }}" placeholder="{{ __('Meta Keyword') }}" value="{{ old('meta_keyword') }}"  >

                               @include('admin.alerts.feedback', ['field' => 'meta_keyword'])

                            </div> --}}


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
