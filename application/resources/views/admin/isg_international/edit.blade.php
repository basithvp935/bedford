@extends('admin.layouts.app', [
    'title' => __('Isg International Management'),

    'parentSection' => '',

    'elementName' => 'isg_internationals',
])

@section('title', 'Isg International Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Isg International') }}
            @endslot



            <li class="breadcrumb-item"><a
                    href="{{ route('admin::isg_internationals') }}">{{ __('Isg International Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Isg International') }}</li>
        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Isg International Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::isg_internationals') }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::isg_international.update', $isg_international) }}"
                            enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Isg International information') }}</h6>

                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('first_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-first_title">{{ __('First Title') }}</label>
                                    <input type="text" name="first_title" id="input-first_title"
                                        class="form-control{{ $errors->has('first_title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('First Title') }}"
                                        value="{{ $isg_international->first_title }}">
                                    @include('admin.alerts.feedback', ['field' => 'first_title'])
                                </div>
                                <div class="form-group{{ $errors->has('first_video') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-first_video">{{ __('First Video') }}</label>
                                    <input type="text" name="first_video" id="input-first_video"
                                        class="form-control{{ $errors->has('first_video') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('First Video') }}"
                                        value="{{ $isg_international->first_video }}">
                                    @include('admin.alerts.feedback', ['field' => 'first_video'])
                                </div>
                                <div class="form-group{{ $errors->has('first_img') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-first_img">{{ __('First Image') }} (730 × 502 px)</label>
                                    <img src="{{ url('upload/' . $isg_international->first_img) }}" height="42"
                                        width="42" style="    margin-left: 74px;">
                                    <div>
                                        <input type="file" name="first_img" id="input-first_img" accept="image/*">
                                    </div>
                                    @include('admin.alerts.feedback', ['field' => 'first_img'])

                                </div>
                                <div class="form-group{{ $errors->has('second_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-second_title">{{ __('Second Title') }}</label>
                                    <input type="text" name="second_title" id="input-second_title"
                                        class="form-control{{ $errors->has('second_title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Second Title') }}"
                                        value="{{ $isg_international->second_title }}">
                                    @include('admin.alerts.feedback', ['field' => 'second_title'])
                                </div>
                                <div class="form-group{{ $errors->has('second_img') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-second_img">{{ __('Second Image') }} (730 × 502 px)</label>
                                    <img src="{{ url('upload/' . $isg_international->second_img) }}" height="42"
                                        width="42" style="    margin-left: 74px;">
                                    <div>
                                        <input type="file" name="second_img" id="input-second_img" accept="image/*">
                                    </div>
                                    @include('admin.alerts.feedback', ['field' => 'second_img'])
                                </div>
                                <div class="form-group{{ $errors->has('third_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-third_title">{{ __('Third Title') }}</label>
                                    <input type="text" name="third_title" id="input-third_title"
                                        class="form-control{{ $errors->has('third_title') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Third Title') }}"
                                        value="{{ $isg_international->third_title }}">
                                    @include('admin.alerts.feedback', ['field' => 'third_title'])
                                </div>
                                <div class="form-group{{ $errors->has('third_video') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-third_video">{{ __('Third Video') }}</label>
                                    <input type="text" name="third_video" id="input-third_video"
                                        class="form-control{{ $errors->has('third_video') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Third Video') }}"
                                        value="{{ $isg_international->third_video }}">
                                    @include('admin.alerts.feedback', ['field' => 'third_video'])
                                </div>
                                <div class="form-group{{ $errors->has('third_img') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-third_img">{{ __('Third Image') }} (730 × 502 px)</label>
                                    <img src="{{ url('upload/' . $isg_international->third_img) }}" height="42"
                                        width="42" style="    margin-left: 74px;">
                                    <div>
                                        <input type="file" name="third_img" id="input-third_img" accept="image/*">
                                    </div>
                                    @include('admin.alerts.feedback', ['field' => 'third_img'])

                                </div>
                                <div class="form-group{{ $errors->has('third_description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-third_description">{{ __('Third Description') }}</label>
                                    <textarea class="form-control" name="third_description" id="input-third_description" rows="3">{{ $isg_international->third_description }}</textarea>
                               @include('admin.alerts.feedback', ['field' => 'third_description'])
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

                selector: '#input-third_description',

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
