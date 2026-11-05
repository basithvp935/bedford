@extends('admin.layouts.app', [
    'title' => __('Transfer Certificate Management'),
    'parentSection' => 'academics',
    'elementName' => 'transfer-certificates',
])
@section('title', 'Transfer Certificate Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Transfer Certificate') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::transfer-certificates.index') }}">{{ __('Transfer Certificate Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Client') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Transfer Certificate Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::transfer-certificates.index') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin::transfer-certificates.update', $transfer_certificate) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Transfer Certificate information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('gr_number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-gr_number">{{ __('GR Number') }}</label>
                                    <input type="text" name="gr_number" id="input-gr_number"
                                        class="form-control{{ $errors->has('gr_number') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('GR Number') }}" value="{{ $transfer_certificate->gr_number }}" required
                                        autofocus>
                                    @include('admin.alerts.feedback', ['field' => 'gr_number'])
                                </div>
                                <div class="form-group{{ $errors->has('dob') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-dob">{{ __('DOB') }}</label>
                                    <input type="text" name="dob" id="input-dob"
                                        class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('DOB') }}" value="{{ $transfer_certificate->dob }}" required
                                        autofocus>
                                    @include('admin.alerts.feedback', ['field' => 'dob'])
                                </div>
                                <div class="form-group{{ $errors->has('pdf') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pdf">{{ __('PDF') }}</label>
                                    <a href="{{ url('upload/' . $transfer_certificate->pdf) }}" target='_blank'>View</a>
                                    <div >
                                        <input type="file" name="pdf"
                                            
                                            id="input-pdf">
                                    </div>

                                    @include('admin.alerts.feedback', ['field' => 'pdf'])
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
