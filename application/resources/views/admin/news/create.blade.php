@extends('admin.layouts.app', [

    'title' => __('News Management'),

    'parentSection' => '',

    'elementName' => 'news-management'

])

@section('title','News Management')

@section('content')

    @component('admin.layouts.headers.auth')

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title')

                {{ __('News') }}

            @endslot



            <li class="breadcrumb-item"><a href="{{ route('admin::news.index') }}">{{ __('News Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Add News') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('News Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="{{ route('admin::news.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::news.store') }}" enctype="multipart/form-data">

                            @csrf



                            <h6 class="heading-small text-muted mb-4">{{ __('News information') }}</h6>

                            <div class="pl-lg-4">

                            <div class="form-group{{ $errors->has('news_title') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-news_title">{{ __('Title') }}</label>

                                    <input type="text" name="news_title" id="input-news_title" class="form-control{{ $errors->has('news_title') ? ' is-invalid' : '' }}" placeholder="{{ __('News Title') }}" value="{{ old('news_title') }}" required autofocus>

                               @include('admin.alerts.feedback', ['field' => 'news_title'])

                            </div>
                            <div class="form-group{{ $errors->has('news_date') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-news_date">{{ __('Date') }}</label>

                                    <div class="input-group">

                                        <div class="input-group-prepend">

                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>

                                        </div>

                                        <input class="form-control datepicker" name="news_date" placeholder="Select date" type="text" value="{{ old('news_date') }}" >

                                        @include('admin.alerts.feedback', ['field' => 'news_date'])

                                    </div>

                                </div>

                            {{-- <div class="form-group{{ $errors->has('small_discription') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-small_discription">{{ __('Small Description') }}</label>

                                    <input type="text" name="small_discription" id="input-small_discription" class="form-control{{ $errors->has('small_discription') ? ' is-invalid' : '' }}" placeholder="{{ __('Small Description') }}" value="{{ old('small_discription') }}" required >

                               @include('admin.alerts.feedback', ['field' => 'small_discription'])

                            </div> --}}

                            <div class="form-group{{ $errors->has('news_content') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-news_content">{{ __('News Content') }}</label>

                                    <textarea class="form-control" name="news_content" id="input-news_content" rows="3">{{ old('news_content') }}</textarea>

                               @include('admin.alerts.feedback', ['field' => 'news_content'])

                            </div>

                            {{-- <div class="form-group{{ $errors->has('img') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-img">{{ __('Image') }} (200 × 200 px)</label>

                                    <div >

                                        <input type="file" name="img"  id="input-img" accept="image/*">


                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'img'])

                            </div> --}}
                            <div class="form-group{{ $errors->has('thumb_img') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-thumb_img">{{ __('Thumb Image') }} (200 × 200 px)</label>

                                <div >

                                    <input type="file" name="thumb_img"  id="input-thumb_img" accept="image/*">


                                </div>



                                @include('admin.alerts.feedback', ['field' => 'img'])

                        </div>
                            <div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">

                                <label class="form-control-label" for="input-banner">{{ __('Banner Image') }} (1301 × 290 px)</label>

                                <div >

                                    <input type="file" name="banner"  id="input-banner" accept="image/*">


                                </div>



                                @include('admin.alerts.feedback', ['field' => 'banner'])

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
                            
                            
                             <div class="form-group{{ $errors->has('flash') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="flash">{{ __('Flash News Status') }}</label>
                                <select name="flash" id="flash" class="form-control{{ $errors->has('flash') ? ' is-invalid' : '' }}">
                                    <option value="" disabled selected>{{ __('Select status') }}</option>
                                    <option value="1" {{ old('flash') == '1' ? 'selected' : '' }}>{{ __('Yes') }}</option>
                                    <option value="0" {{ old('flash') == '0' ? 'selected' : '' }}>{{ __('No') }}</option>
                                </select>
                                @include('admin.alerts.feedback', ['field' => 'flash'])
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

            selector: '#input-news_content',

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
