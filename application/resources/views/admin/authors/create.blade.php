@extends('layouts.app', [
    'title' => __('Author Management'),
    'parentSection' => '',
    'elementName' => 'author-management'
])

@section('content')
    @component('layouts.headers.auth') 
        @component('layouts.headers.breadcrumbs')
            @slot('title') 
                {{ __('Authors') }} 
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('author.index') }}">{{ __('Author Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Add author') }}</li>
        @endcomponent
    @endcomponent   

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Author Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('author.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('author.store') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Author information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                                <div class="form-group{{ $errors->has('design') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-design">{{ __('design') }}</label>
                                    <input type="text" name="design" id="input-design" class="form-control{{ $errors->has('design') ? ' is-invalid' : '' }}" placeholder="{{ __('Design') }}" value="{{ old('design') }}" required >

                                    @include('alerts.feedback', ['field' => 'design'])
                                </div>
                                <div class="form-group{{ $errors->has('bio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bio">{{ __('Bio') }}</label>
                                    <textarea name="bio" id="input-bio" cols="30" rows="10" class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" placeholder="{{ __('Bio') }}" >{{ old('bio') }}</textarea>

                                    @include('alerts.feedback', ['field' => 'bio'])
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>
                                    <input type="text" name="phone" id="input-phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" value="{{ old('phone') }}" required >

                                    @include('alerts.feedback', ['field' => 'phone'])
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('E-Mail') }}</label>
                                    <input type="text" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail') }}" value="{{ old('email') }}" required >

                                    @include('alerts.feedback', ['field' => 'email'])
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
        
        @include('layouts.footers.auth')
    </div>
@endsection