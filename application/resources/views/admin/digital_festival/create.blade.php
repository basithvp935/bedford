@extends('admin.layouts.app', [
    'title' => __('Digital Festive Management'),

    'parentSection' => 'strength',

    'elementName' => 'digital_festive',
])

@section('title', 'FDigital Festive Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
            Digital Festive Management
            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::facilities.index') }}">Digital Festive Management</a></li>

            <li class="breadcrumb-item active" aria-current="page">Add Digital Festive</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">Digital Festive Management</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::digital_festival.index') }}"
                                    class="btn btn-sm btn-primary">Back to list</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::digital_festival.store') }}" enctype="multipart/form-data">

                            @csrf



                            <h6 class="heading-small text-muted mb-4">Digital Festival information</h6>

                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-title">Title</label>

                                    <input type="text" name="title" id="input-title"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        placeholder="Title" value="{{ old('title') }}" required autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'title'])

                                </div>

                                {{-- <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">

                                    <label class="form-control-label"
                                        for="description"> Description</label>

                                    <input type="text" name="description" id="input-description"
                                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                        placeholder="Description" value="{{ old('description') }}"
                                        required>

                                    @include('admin.alerts.feedback', ['field' => 'description'])

                                </div> --}}
{{--                                 
                                 <div class="form-group{{ $errors->has('priority') ? ' has-danger' : '' }}">

                                    <label class="form-control-label"
                                        for="priority">{{ __('priority') }}</label>

                                    <input type="number" name="priority" min="1"  id="priority"
                                        class="form-control{{ $errors->has('priority') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('priority') }}" value="{{ old('priority') }}"
                                        required>

                                    @include('admin.alerts.feedback', ['field' => 'priority'])

                                </div> --}}


                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="description">description</label>

                                    <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>

                                    @include('admin.alerts.feedback', ['field' => 'description'])

                                </div>

                                <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-img">{{ __('Image') }} (650 × 599 px)</label>

                                    <div>

                                        <input type="file" name="img" id="input-img" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'img'])

                                </div>
                                {{-- <div class="form-group{{ $errors->has('meta_title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-meta_title">{{ __('Meta Title') }}</label>

                                    <input type="text" name="meta_title" id="input-meta_title" class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}" placeholder="{{ __('Meta Title') }}" value="{{ old('meta_title') }}" >

                               @include('admin.alerts.feedback', ['field' => 'meta_title'])

                            </div>

                            <div class="form-group{{ $errors->has('meta_description') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-meta_description">{{ __('Meta Description') }}</label>

                                    <input type="text" name="meta_description" id="input-meta_description" class="form-control{{ $errors->has('meta_description') ? ' is-invalid' : '' }}" placeholder="{{ __('Meta Description') }}" value="{{ old('meta_description') }}"  >

                               @include('admin.alerts.feedback', ['field' => 'meta_description'])

                            </div>

                            <div class="form-group{{ $errors->has('meta_keyword') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-meta_keyword">{{ __('Meta Keyword') }}</label>

                                    <input type="text" name="meta_keyword" id="input-meta_keyword" class="form-control{{ $errors->has('meta_keyword') ? ' is-invalid' : '' }}" placeholder="{{ __('Meta Keyword') }}" value="{{ old('meta_keyword') }}"  >

                               @include('admin.alerts.feedback', ['field' => 'meta_keyword'])

                            </div> --}}


                                <div class="text-center">

                                    <button type="submit" class="btn btn-success mt-4">Save</button>

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
