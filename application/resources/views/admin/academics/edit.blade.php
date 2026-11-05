@extends('admin.layouts.app', [
    'title' => __('Academics Management'),

    'parentSection' => 'pages',

    'elementName' => 'academics',
])

@section('title', 'Academics Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Academics') }}
            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::academics') }}">{{ __('Academics Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Academics') }}</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Academics Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::academics') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::academics.update', $academic) }}"
                            enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Academics information') }}</h6>

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('timing') ? ' has-danger' : '' }}">
                               
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-description">{{ __('Description') }}</label>
                                    <input type="text" value="{{ $academic->description }}" name="description"
                                        id="input-description"
                                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Description') }}" value="{{ old('description') }}" >
                                    @include('admin.alerts.feedback', ['field' => 'description'])
                                </div>
                                <label class="form-control-label"
                                        for="input-timing">{{ __('Timings') }}</label>
                                    <input type="text" value="{{ $academic->timing }}" name="timing"
                                        id="input-timing"
                                        class="form-control{{ $errors->has('timing') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Timings') }}" value="{{ old('timing') }}" >
                                    @include('admin.alerts.feedback', ['field' => 'timing'])
                                </div>
                                <div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-banner">{{ __('Image') }}</label>
                                    <img src="{{ url('upload/' . $academic->banner) }}" height="42" width="42"
                                        style="    margin-left: 74px;">
                                    <div >
                                        <input type="file" name="banner"
                                            
                                            id="input-banner" accept="image/*">
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



        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.5/tinymce.min.js"></script>

        <script>
            var editor_config = {

                selector: '#input-description',

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


<script>
            var editor_config = {

                selector: '#input-timing',

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
