@extends('admin.layouts.app', [
    'title' => __('Qualification Management'),
    'parentSection' => 'Qualifications_settings',
    'elementName' => 'qualification',
])
@section('title', 'Qualification Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Qualifications') }}
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('admin::qualification.index') }}">{{ __('Qualification Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Qualification') }}</li>
        @endcomponent
    @endcomponent
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Qualification Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::qualification.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin::qualification.update', $qualification) }}"
                        enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('News information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">{{ __('Title') }}</label>
                                    <input type="text" name="title" id="input-title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Title') }}" value="{{ $qualification->title }}" required autofocus>
                                    @include('admin.alerts.feedback', ['field' => 'title'])
                                </div>
                                 <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-category">Qualification Category</label>
                                    <select class="form-select form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category">
                                        @foreach($category as $c)
                                        <option value="{{$c->id}}">{{$c->title}}</option>
                                        @endforeach
                                    </select>   
                                    @include('admin.alerts.feedback', ['field' => 'category'])
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
    </div>

    @include('admin.layouts.footers.auth')







@endsection
