@extends('admin.layouts.app', [

    'title' => __('Ambassadors Management'),

    'parentSection' => '',

    'elementName' => 'ambassadors'

])

@section('title','Ambassadors Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('Ambassadors') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::ambassadors.index') }}">{{ __('Ambassadors Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Ambassadors') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Ambassadors Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::ambassadors.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::ambassadors.update', $ambassador) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Ambassadors information') }}</h6>

                            <div class="pl-lg-4">

                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>

                                    <input type="text" value="{{$ambassador->name}}" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}"  required autofocus>

                               @include('admin.alerts.feedback', ['field' => 'name'])

                            </div>
                            <div class="form-group{{ $errors->has('small_description') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-small_description">{{ __('Small Description') }}</label>

                                <input type="text" name="small_description" id="input-small_description" class="form-control{{ $errors->has('small_description') ? ' is-invalid' : '' }}" placeholder="{{ __('Small Description') }}" value="{{ $ambassador->small_description }}" required >

                           @include('admin.alerts.feedback', ['field' => 'small_description'])

                        </div>


                                <div class="form-group {{ $errors->has('iframe') ? 'has-error' : ''}}">
                                    <label for="iframe" class="form-control-label">{{ 'iframe' }}</label>
                                    <input class="form-control" name="iframe" type="text" id="iframe" value="{{ isset($ambassador->iframe) ? $ambassador->iframe : ''}}" >
                                    {!! $errors->first('iframe', '<p class="help-block">:message</p>') !!}
                                </div>

                            <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-img">{{ __('Image') }} (641 × 641 px)</label>

                                    <img src="{{ url('upload/' . $ambassador->img) }}"  height="42" width="42" style="    margin-left: 74px;">

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
