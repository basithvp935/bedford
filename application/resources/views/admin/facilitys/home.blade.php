@extends('admin.layouts.app', [
    'title' => __('Facility Management'),
    'parentSection' => 'strength',
    'elementName' => 'facilities'
])
@section('title','Facility Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Facility') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::facilities.index') }}">{{ __('Facility Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
        @endcomponent
    @endcomponent


    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Facility Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::facilities.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::home_facility_update', $home_facility) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Facilities information') }}</h6>

                            <div class="pl-lg-4">

                          <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>

                                    <input type="text" value="{{$home_facility->title}}" name="title" id="input-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{ old('title') }}" required autofocus>

                               @include('admin.alerts.feedback', ['field' => 'title'])

                            </div>


                            <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-img">{{ __('Image') }} (Rendered size:	250 × 224 px)</label>

                                    <img src="{{ url('upload/' . $home_facility->img) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="img"  id="input-img" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'img'])

                            </div>

                            <div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-banner">{{ __('Banner Image') }}</label>

                                <img src="{{ url('upload/' . $home_facility->banner) }}"  height="42" width="42" style="    margin-left: 74px;">
                                <div >

                                    <input type="file" name="banner"  id="input-banner" accept="image/*">


                                </div>



                                @include('admin.alerts.feedback', ['field' => 'banner'])

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
