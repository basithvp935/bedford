@extends('admin.layouts.app', [
    'title' => __('Notice Management'),
    'parentSection' => '',
    'elementName' => 'notice-management'
])

@section('title', 'Notice Management')

@section('content')

    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Notice') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::notice.index') }}">{{ __('Notice Management') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Add Notice') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Notice Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::notice.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin::notice.store') }}" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Notice information') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="title">{{ __('Title') }}</label>
                                    <input type="text" name="title" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                    @include('admin.alerts.feedback', ['field' => 'title'])
                                </div>

                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="date">{{ __('Date') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" name="date" placeholder="Select date" type="text" value="{{ old('date') }}">
                                        @include('admin.alerts.feedback', ['field' => 'date'])
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="description">{{ __('Description') }}</label>
                                    <textarea class="form-control" name="description" id="input-description" rows="3">{{ old('description') }}</textarea>
                                    @include('admin.alerts.feedback', ['field' => 'description'])
                                </div>

                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="status">{{ __('Status') }}</label>
                                    <select name="status" id="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                        <option value="" disabled selected>{{ __('Select status') }}</option>
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                    </select>
                                    @include('admin.alerts.feedback', ['field' => 'status'])
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
                selector: '#input-description', // Ensure this matches the ID of your textarea
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
