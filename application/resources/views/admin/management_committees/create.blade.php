@extends('admin.layouts.app', [

    'title' => __('Management Committees Management'),

    'parentSection' => 'about_settings',

    'elementName' => 'management-committees'

])

@section('title','Management Committees Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('Management Committees') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::management-committees.index') }}">{{ __('Management Committees Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Management Committee') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Management Committees Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::management-committees.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::management-committees.store') }}" enctype="multipart/form-data">

                            @csrf



                            <h6 class="heading-small text-muted mb-4">{{ __('Management Committee information') }}</h6>

                            <div class="pl-lg-4">

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-name">{{ __('Title') }}</label>

                                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                               @include('admin.alerts.feedback', ['field' => 'name'])

                            </div>

                            <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-designation">{{ __('Designation') }}</label>

                                <input type="text" name="designation" id="input-designation" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" placeholder="{{ __('Designation') }}" value="{{ old('designation') }}" required >

                           @include('admin.alerts.feedback', ['field' => 'designation'])

                        </div>


                            <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-img">{{ __('Image') }}</label>

                                    <div >

                                        <input type="file" name="img"  id="input-img" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'img'])

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
