@extends('admin.layouts.app', [

    'title' => __('Other Banners Management'),

    'parentSection' => 'pages',

    'elementName' => 'other_banners'

])

@section('title','Other Banners Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('President') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::other_banners') }}">{{ __('Other Banners Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Other Banners') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Other Banners Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::other_banners') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::other_banners_update', $other_banner) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Banners') }}</h6>

                            <div class="pl-lg-4">

                            <div class="form-group{{ $errors->has('management_committees_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-management_committees_banner">{{ __('Management Committees Banner') }}</label>

                                    <img src="{{ url('upload/' . $other_banner->management_committees_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="management_committees_banner"  id="input-management_committees_banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'management_committees_banner'])

                            </div>
                            <div class="form-group{{ $errors->has('management_committees_small_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-management_committees_small_banner">{{ __('Management Committees Small Image') }} (Rendered size:	401 × 400 px)</label>

                                    <img src="{{ url('upload/' . $other_banner->management_committees_small_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="management_committees_small_banner"  id="input-management_committees_small_banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'management_committees_small_banner'])

                            </div>


                            <div class="form-group{{ $errors->has('school_timings_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-school_timings_banner">{{ __('School Ttimings Banner') }}</label>

                                    <img src="{{ url('upload/' . $other_banner->school_timings_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="school_timings_banner"  id="input-school_timings_banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'school_timings_banner'])

                            </div>
                            <div class="form-group{{ $errors->has('school_timings_small_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-school_timings_small_banner">{{ __('School Ttimings Small Image') }} (Rendered size:	401 × 400 px)</label>

                                    <img src="{{ url('upload/' . $other_banner->school_timings_small_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="school_timings_small_banner"  id="input-school_timings_small_banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'school_timings_small_banner'])

                            </div>
                            
                            <div class="form-group{{ $errors->has('contact_us_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-contact_us_banner">{{ __('Contact Us Banner') }}</label>

                                    <img src="{{ url('upload/' . $other_banner->contact_us_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="contact_us_banner"  id="input-contact_us_banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'contact_us_banner'])

                            </div>
                            <div class="form-group{{ $errors->has('contact_us_small_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-contact_us_small_banner">{{ __('Contact Us Small Image') }} (Rendered size:	401 × 400 px)</label>

                                    <img src="{{ url('upload/' . $other_banner->contact_us_small_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="contact_us_small_banner"  id="input-contact_us_small_banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'contact_us_small_banner'])

                            </div>
                            <div class="form-group{{ $errors->has('school_rules') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-school_rules">{{ __('School Rules') }}</label>

                                    <a href="{{ url('upload/' . $other_banner->school_rules) }}"   style="    margin-left: 74px;" target="_blank">View File</a>

                                    <div >

                                        <input type="file" name="school_rules"  id="input-school_rules" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'school_rules'])

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
