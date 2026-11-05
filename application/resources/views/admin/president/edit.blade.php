@extends('admin.layouts.app', [

    'title' => __("$user_type Management"),

    'parentSection' => 'about_settings',

    'elementName' => "$user_type"

])

@section('title',"$user_type Management")

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __("$user_type") }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::president') }}">{{ __("$user_type Management") }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __("Edit $user_type") }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __("$user_type Management") }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::president') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::president.update', $president) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('President information') }}</h6>

                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name')
                                        }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}" value="{{ $president->name }}">
                                    @include('admin.alerts.feedback', ['field' => 'name'])
                                </div>

                            <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-content">{{ __('Content') }}</label>

                                    <textarea class="form-control" name="content" id="input-content" rows="3">{{$president->content}}</textarea>

                               @include('admin.alerts.feedback', ['field' => 'content'])

                            </div>

                            <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-img">{{ucfirst($user_type)}} {{ __('Image') }}</label>
                                    <img src="{{ url('upload/' . $president->img) }}"  height="42" width="42" style="    margin-left: 74px;">
                                    <div >
                                        <input type="file" name="img"  id="input-img" accept="image/*">
                                    </div>
                                    @include('admin.alerts.feedback', ['field' => 'img'])
                            </div>

                                <div class="form-group{{ $errors->has('small_banner') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-banner">{{ __('Banner') }}</label>

                                    <img src="{{ url('upload/' . $president->small_banner) }}"  height="42" width="42" style="    margin-left: 74px;">

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
