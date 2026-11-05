@extends('admin.layouts.app', [

    'title' => __('Principal Management'),

    'parentSection' => 'about_settings',

    'elementName' => 'principal'

])

@section('title','Principal Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('Principal') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::principal') }}">{{ __('Principal Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Principal') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Principal Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::principal') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::principal.update', $principal) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Principal information') }}</h6>

                            <div class="pl-lg-4">



                            <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-content">{{ __('Content') }}</label>

                                    <textarea class="form-control" name="content" id="input-content" rows="3">{{$principal->content}}</textarea>

                               @include('admin.alerts.feedback', ['field' => 'content'])

                            </div>

                            <div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-banner">{{ __('Image') }}</label>

                                    <img src="{{ url('upload/' . $principal->banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="banner"  id="input-banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'banner'])

                            </div>
                            <div class="form-group{{ $errors->has('small_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-small_banner">{{ __('Small Image') }} (Rendered size:	401 × 400 px)</label>

                                    <img src="{{ url('upload/' . $principal->small_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

                                    <div >

                                        <input type="file" name="small_banner"  id="input-small_banner" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'small_banner'])

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



        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.5/tinymce.min.js"></script>

    <script>

        var editor_config = {

            selector: '#input-content',

            directionality: document.dir,

            path_absolute: "/",

            menubar: 'edit insert view format table',

            plugins: [

                "advlist autolink lists link image charmap preview hr anchor pagebreak",

                "searchreplace wordcount visualblocks visualchars code fullscreen",

                "insertdatetime media save table contextmenu directionality",

                "paste textcolor colorpicker textpattern"

            ],

            toolbar: "insertfile undo redo | formatselect styleselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fullscreen code",

            relative_urls: false,

            language: document.documentElement.lang,

            height: 300,

        }

        tinymce.init(editor_config);

    </script>

        @include('admin.layouts.footers.auth')

    </div>

@endsection
