@extends('admin.layouts.app', ['class' => 'bg-default'])
@section('title','Login')
@section('content')
    @include('admin.layouts.headers.guest', ['infoLogin' => 1])

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-white shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                    <div class="card-header text-center" style="background: #FFFFFF; border-bottom: 1px solid rgba(47, 52, 139, 0.08); padding: 2rem 1.5rem;">
                        <img src="{{ asset('Front/images/logo/logo.png')}}" class="navbar-brand-img" alt="Bedford Kindergarten Doha" style="max-height: 80px; max-width: 220px; object-fit: contain;">
                        <div class="mt-2">
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 0.8rem; font-weight: 700; color: #2F348B; letter-spacing: 1.5px; text-transform: uppercase;">Admin Portal</span>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="POST" action="{{ route('admin::post_login') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative" style="box-shadow: 0 2px 8px rgba(0,0,0,0.04); border: 1px solid #E2E8F0; border-radius: 10px; overflow: hidden;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white border-0"><i class="ni ni-email-83" style="color: #2F348B;"></i></span>
                                    </div>
                                    <input class="form-control bg-white border-0{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email Address') }}" type="email" name="email" value="{{ old('email', '') }}" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative" style="box-shadow: 0 2px 8px rgba(0,0,0,0.04); border: 1px solid #E2E8F0; border-radius: 10px; overflow: hidden;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white border-0"><i class="ni ni-lock-circle-open" style="color: #2F348B;"></i></span>
                                    </div>
                                    <input class="form-control bg-white border-0{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox mt-3">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted" style="font-size: 0.85rem;">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn w-100 my-4" style="background: #F59F1E; border: none; color: #FFFFFF; font-weight: 700; border-radius: 30px; padding: 12px; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase; box-shadow: 0 4px 15px rgba(245, 159, 30, 0.35);">{{ __('Sign In') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
