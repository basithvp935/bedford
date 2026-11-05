@extends('admin.layouts.app', [
    'title' => __('Home Page Management'),

    'parentSection' => 'pages',

    'elementName' => 'home_page',
])

@section('title', 'Home Page Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Home Page') }}
            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::home_page') }}">{{ __('Home Page Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Home Page') }}</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Home Page Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::home_page') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::home_page.update', $home_page) }}"
                            enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Home Page information') }}</h6>

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('about_description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-about_description">{{ __('About Description') }}</label>
                                    <input type="text" value="{{ $home_page->about_description }}" name="about_description"
                                        id="input-about_description"
                                        class="form-control{{ $errors->has('about_description') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('About Description') }}" value="{{ old('about_description') }}" required>
                                    @include('admin.alerts.feedback', ['field' => 'about_description'])
                                </div>
                                <div class="form-group{{ $errors->has('about_img') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-about_img">{{ __('About Banner') }} (655 × 462 px)</label>
                                    <img src="{{ url('upload/' . $home_page->about_img) }}" height="80"
                                        width="80" style="    margin-left: 74px;">
                                    <div >
                                        <input type="file" name="about_img"

                                            id="input-about_img" accept="image/*">
                                    </div>

                                    @include('admin.alerts.feedback', ['field' => 'about_img'])
                                </div>
                                <div class="form-group{{ $errors->has('main_head') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-main_head">{{ __('Main Head Text') }}</label>
                                    <input type="text" value="{{ $home_page->main_head }}" name="main_head"
                                        id="input-main_head"
                                        class="form-control{{ $errors->has('main_head') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Main Head Text') }}" value="{{ old('main_head') }}" required>
                                    @include('admin.alerts.feedback', ['field' => 'main_head'])
                                </div>
                                <div class="form-group{{ $errors->has('isg_gallery_text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-isg_gallery_text">{{ __('ISG Gallery Text') }}</label>
                                    <input type="text" value="{{ $home_page->isg_gallery_text }}" name="isg_gallery_text"
                                        id="input-isg_gallery_text"
                                        class="form-control{{ $errors->has('isg_gallery_text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('ISG Gallery Text') }}" value="{{ old('isg_gallery_text') }}" required>
                                    @include('admin.alerts.feedback', ['field' => 'isg_gallery_text'])
                                </div>
                                <div class="form-group{{ $errors->has('acaddemic_calendar_pdf') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-acaddemic_calendar_pdf">{{ __('Acaddemic Calendar PDF') }}</label>
                                    <a target="_blank" href="{{ url('upload/' . $home_page->acaddemic_calendar_pdf) }}" height="80"
                                        width="80" style="    margin-left: 74px;">View File</a>
                                    <div >
                                        <input type="file" name="acaddemic_calendar_pdf"

                                            id="input-acaddemic_calendar_pdf" accept="pdf/*">
                                    </div>

                                    @include('admin.alerts.feedback', ['field' => 'acaddemic_calendar_pdf'])
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

                selector: '#input-about_description',

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
