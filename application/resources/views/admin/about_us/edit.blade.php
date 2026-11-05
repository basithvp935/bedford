@extends('admin.layouts.app', [
    'title' => __('About Us Management'),

    'parentSection' => 'pages',

    'elementName' => 'about_us',
])

@section('title', 'About Us Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('About Us') }}
            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::about_us') }}">{{ __('About Us Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit About Us') }}</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('About Us Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::about_us') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::about_us.update', $about_us) }}"
                            enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('About Us information') }}</h6>

                            <div class="pl-lg-4">
                                <!-- <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-title">{{ __('Title') }}</label>
                                    <input type="text" value="{{ $about_us->title }}" name="title"
                                        id="input-title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Title') }}" value="{{ old('title') }}" required>
                                    @include('admin.alerts.feedback', ['field' => 'title'])
                                </div> -->
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-description">{{ __('Description') }}</label>
                                    <input type="text" value="{{ $about_us->description }}" name="description"
                                        id="input-description"
                                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Description') }}" value="{{ old('description') }}" required>
                                    @include('admin.alerts.feedback', ['field' => 'description'])
                                </div>
                                <div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-banner">{{ __('Image') }}</label>
                                    <img src="{{ url('upload/' . $about_us->banner) }}" height="42" width="42"
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

        @include('admin.layouts.footers.auth')

    </div>

@endsection
