@extends('admin.layouts.app', [

    'title' => __('Faculties Management'),

    'parentSection' => 'about_settings',

    'elementName' => 'faculties'

])

@section('title','Faculties Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('Faculties') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::faculties.index') }}">{{ __('faculties Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit faculties') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Faculties Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::faculties.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::faculties.update', $faculty) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('faculties information') }}</h6>

                            <div class="pl-lg-4">

                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>

                                    <input type="text" value="{{$faculty->name}}" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}"  required autofocus>

                               @include('admin.alerts.feedback', ['field' => 'name'])

                            </div>
                            <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-designation">{{ __('Designation') }}</label>

                                    <input type="text" value="{{$faculty->designation}}" name="designation" id="input-designation" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" placeholder="{{ __('Designation') }}"   >

                               @include('admin.alerts.feedback', ['field' => 'designation'])

                            </div>

                                <div class="form-group{{ $errors->has('department_id') ? ' has-danger' : '' }}">

                                    <div class="">

                                        <label class="form-control-label" for="input-designation">{{ __('Select Deparment') }}</label>
                                        <select class="form-control{{ $errors->has('department_id') ? ' is-invalid' : '' }}" id="department_id" name="department_id">
                                            <option value="" selected hidden>{{ __('Select Department') }}</option>
                                            @foreach($departments as $deparment)
                                            <option value="{{$deparment->id}}" @if ($faculty->department_id == $deparment->id) selected @endif>{{$deparment->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('department_id'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                    @endif
                                </div>


                            <div class="form-group{{ $errors->has('small_description') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-small_description">{{ __('Small Description') }}</label>

                                <input type="text" name="small_description" id="input-small_description" class="form-control{{ $errors->has('small_description') ? ' is-invalid' : '' }}" placeholder="{{ __('Small Description') }}" value="{{ $faculty->small_description }}" required >

                           @include('admin.alerts.feedback', ['field' => 'small_description'])

                        </div>

                            <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-img">{{ __('Image') }}</label>

                                    <img src="{{ url('upload/' . $faculty->img) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="img"  id="input-img" accept="image/*">


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
