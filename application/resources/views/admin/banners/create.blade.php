@extends('admin.layouts.app', [
    'title' => __('Banners Management'),
    'parentSection' => '',
    'elementName' => 'banners'
])
@section('title','Banners Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('News') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::banners.index') }}">{{ __('Banners Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Banner') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Banners Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::banners.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin::banners.store') }}" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Banners information') }}</h6>
                            <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('banner_image') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-banner_image">{{ __('Banner') }} (3024 × 1556 px)</label>
                                    <div >
                                        <input type="file"  name="banner_image"  id="input-banner_image" accept="image/*">
                                    </div>

                                    @include('admin.alerts.feedback', ['field' => 'banner_image'])
                            </div>
                            <div class="form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-text">{{ __('Text')
                                    }}</label>
                                <input type="text" name="text" id="input-title"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Text') }}" value="{{ old('text') }}">
                                @include('admin.alerts.feedback', ['field' => 'text'])
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.5/tinymce.min.js"></script>

<script>

    var editor_config = {

        selector: '#input-title',

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
