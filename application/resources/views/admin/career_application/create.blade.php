@extends('admin.layouts.app', [
    'title' => __('Career Management'),

    'parentSection' => 'careers_settings',

    'elementName' => 'careers',
])

@section('title', 'Career Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Careers') }}
            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::careers.index') }}">{{ __('Career Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Career') }}</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Career Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::careers.index') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to
                                                                    list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::careers.store') }}" enctype="multipart/form-data">

                            @csrf



                            <h6 class="heading-small text-muted mb-4">{{ __('Career information') }}</h6>

                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>

                                    <input type="text" name="title" id="input-title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Title') }}" value="{{ old('title') }}" required autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'title'])

                                </div>
                                
                                 <div class="form-group{{ $errors->has('sub_title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-title">Sub Title</label>

                                    <input type="text" name="sub_title" id="input-sub_title"
                                        class="form-control{{ $errors->has('sub_title') ? ' is-invalid' : '' }}"
                                        placeholder="Sub Title" value="{{ old('sub_title') }}" required autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'sub_title'])

                                </div>
                                
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">

                                    <label class="form-control-label"
                                        for="input-description">{{ __('Description') }}</label>

                                    <input type="text" name="description" id="input-description"
                                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Description') }}" value="{{ old('description') }}">

                                    @include('admin.alerts.feedback', ['field' => 'description'])

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

    </div>

    @include('admin.layouts.footers.auth')






@endsection
