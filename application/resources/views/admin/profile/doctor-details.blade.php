@extends('admin.layouts.app', [

    'title' => __('Doctors Management'),

    'parentSection' => '',

    'elementName' => 'doctor_details'

])

@section('title','Doctors Management')

@section('content')

    @component('admin.layouts.headers.auth') 

        @component('admin.layouts.headers.breadcrumbs')

            @slot('title') 

                {{ __('Doctor') }} 

            @endslot



            <li class="breadcrumb-item"><a href="#">{{ __('Doctor Management') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Doctor') }}</li>

        @endcomponent

    @endcomponent



    <div class="container-fluid mt--6">

        <div class="row">

            <div class="col-xl-12 order-xl-1">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col-8">

                                <h3 class="mb-0">{{ __('Doctor Management') }}</h3>

                            </div>

                            <div class="col-4 text-right">

                                <a href="#" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 mt-2">

                        @include('admin.alerts.success')

                        @include('admin.alerts.errors')

                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('admin::doctor-detail-update', $doctor) }}" enctype="multipart/form-data">

                            @csrf

                            @method('put')



                            <h6 class="heading-small text-muted mb-4">{{ __('Doctor information') }}</h6>

                            <div class="row">

                            <div class="col-md-6">

                                <div class="form-group{{ $errors->has('doctor_name') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-doctor_name">{{ __('Name') }}</label>

                                    <input type="text" name="doctor_name" id="input-doctor_name"

                                        class="form-control{{ $errors->has('doctor_name') ? ' is-invalid' : '' }}"

                                        placeholder="{{ __('Name') }}" value="{{ $doctor->doctor_name }}" required

                                        autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'doctor_name'])

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group{{ $errors->has('doctor_image') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-doctor_image">{{ __('Image') }}</label>

                                    <img src="{{ url('uploads/'.$doctor->doctor_image) }}"  height="40" width="40" style="margin-left: 11px;margin-top: -21px;">

                                    <div class="custom-file">

                                        <input type="file" name="doctor_image"

                                            class="custom-file-input{{ $errors->has('doctor_image') ? ' is-invalid' : '' }}"

                                            id="input-doctor_image" accept="image/*">

                                        <label class="custom-file-label"

                                            for="input-doctor_image">{{ __('Select Image') }}</label>

                                    </div>



                                    @include('admin.alerts.feedback', ['field' => 'doctor_image'])

                                </div>

                            </div>

                        </div>

                        {{-- <div class="form-group{{ $errors->has('doctor_slug') ? ' has-danger' : '' }}">

                            <label class="form-control-label" for="input-doctor_slug">{{ __('Slug') }}</label>

                            <input type="text" name="doctor_slug" id="input-doctor_slug"

                                class="form-control{{ $errors->has('doctor_slug') ? ' is-invalid' : '' }}"

                                placeholder="{{ __('Doctor Slug') }}" value="{{ $doctor->doctor_slug }}" required

                                autofocus>

                            @include('admin.alerts.feedback', ['field' => 'doctor_slug'])

                        </div> --}}

                        <div class="form-group{{ $errors->has('doctor_qualification') ? ' has-danger' : '' }}">

                            <label class="form-control-label"

                                for="input-doctor_qualification">{{ __('Qualification') }}</label>

                            <textarea class="form-control" name="doctor_qualification" id="input-doctor_qualification"

                                rows="3">{{ $doctor->doctor_qualification }}</textarea>

                            @include('admin.alerts.feedback', ['field' => 'doctor_qualification'])

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-email">{{ __('E-Mail') }}</label>

                                    <input type="text" name="email" id="input-email"

                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"

                                        placeholder="{{ __('E-Mail') }}" value="{{ $doctor->email }}" required

                                        autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'email'])

                                </div>

                            </div>

                            <div class="col-md-6">

                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>

                                    <input type="text" name="phone" id="input-phone"

                                        class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"

                                        placeholder="{{ __('Phone') }}" value="{{ $doctor->phone }}" 

                                        autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'phone'])

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group{{ $errors->has('doctor_designation') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-doctor_designation">{{ __('Designation') }}</label>

                                    <input type="text" name="doctor_designation" id="input-doctor_designation"

                                        class="form-control{{ $errors->has('doctor_designation') ? ' is-invalid' : '' }}"

                                        placeholder="{{ __('Designation') }}" value="{{ $doctor->doctor_designation }}" required

                                        autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'doctor_designation'])

                                </div>

                            </div>

                            <div class="col-md-6">

                            <div class="form-group{{ $errors->has('specialization') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-specialization">{{ __('Specialization') }}</label>

                                    <input type="text" name="specialization" id="input-specialization"

                                        class="form-control{{ $errors->has('specialization') ? ' is-invalid' : '' }}"

                                        placeholder="{{ __('Specialization') }}" value="{{ $doctor->specialization }}" 

                                        autofocus>

                                    @include('admin.alerts.feedback', ['field' => 'specialization'])

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            {{-- <div class="col-md-4">

                                <div class="form-group">

                                    <label for="doctor_status">Status</label>

                                    <select class="form-control" name="doctor_status" id="doctor_status"

                                        data-toggle="select">

                                        <option value="inactive" @if($doctor->doctor_status=='inactive') selected @endif>Inactive</option>

                                        <option value="active " @if($doctor->doctor_status=='active') selected @endif>Active </option>

                                    </select>

                                    @include('admin.alerts.feedback', ['field' => 'doctor_status'])

                                </div>

                            </div> --}}

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="gender">Gender</label>

                                    <select required class="form-control" name="gender" id="gender"

                                        data-toggle="select">

                                        <option value="">Select gender</option>

                                        <option value="Male" @if($doctor->gender=='Male') selected @endif>Male</option>

                                        <option value="Female" @if($doctor->gender=='Female') selected @endif>Female</option>

                                    </select>

                                    @include('admin.alerts.feedback', ['field' => 'gender'])

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="departments">Departments</label>

                                    <select class="form-control" name="departments[]" multiple id="departments"

                                        data-toggle="select">

                                        <option value="">Select Departments</option>

                                        @foreach($departments as $department)

                                             <option value="{{$department->id}}" @if(in_array($department->id,$doc_dep_ar)) selected @endif>{{$department->department_name}}</option>

                                        @endforeach

                                    </select>

                                    @include('admin.alerts.feedback', ['field' => 'departments'])

                                </div>

                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('doctor_details') ? ' has-danger' : '' }}">

                            <label class="form-control-label"

                                for="input-doctor_details">{{ __('Details') }}</label>

                            <textarea class="form-control" name="doctor_details" id="input-doctor_details"

                                rows="3">{{ $doctor->doctor_details }}</textarea>

                            @include('admin.alerts.feedback', ['field' => 'doctor_details'])

                        </div>

                        <div class="form-group{{ $errors->has('achievements') ? ' has-danger' : '' }}">

                            <label class="form-control-label"

                                for="input-achievements">{{ __('Achievements') }}</label>

                            <textarea class="form-control" name="achievements" id="input-achievements"

                                rows="3">{{ $doctor->achievements }}</textarea>

                            @include('admin.alerts.feedback', ['field' => 'achievements'])

                        </div>

                        <div class="form-group{{ $errors->has('publication') ? ' has-danger' : '' }}">

                            <label class="form-control-label"

                                for="input-publication">{{ __('Publication') }}</label>

                            <textarea class="form-control" name="publication" id="input-publication"

                                rows="3">{{ $doctor->publication }}</textarea>

                            @include('admin.alerts.feedback', ['field' => 'publication'])

                        </div>

                        <div class="form-group{{ $errors->has('experience') ? ' has-danger' : '' }}">

                            <label class="form-control-label"

                                for="input-experience">{{ __('Experience') }}</label>

                            <textarea class="form-control" name="experience" id="input-experience"

                                rows="3">{{ $doctor->experience }}</textarea>

                            @include('admin.alerts.feedback', ['field' => 'experience'])

                        </div>
                        <div class="form-group{{ $errors->has('op_timings') ? ' has-danger' : '' }}">

                            <label class="form-control-label" for="input-op_timings">{{ __('OP Timings') }} </label>

                            <textarea placeholder="Mon - Sat  8.30 am - 4.00 pm" class="form-control" name="op_timings" id="input-op_timings"

                                rows="3">{{ $doctor->op_timings }}</textarea>

                            @include('admin.alerts.feedback', ['field' => 'op_timings'])

                        </div>

                                <div class="text-center">

                                    <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>

                                </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.5/tinymce.min.js"></script>

        <script>

        var editor_config = {

            selector: '#input-doctor_qualification',

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



<script>

        var editor_config = {

            selector: '#input-doctor_details',

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



<script>

        var editor_config = {

            selector: '#input-achievements',

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



<script>

        var editor_config = {

            selector: '#input-publication',

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



<script>

        var editor_config = {

            selector: '#input-experience',

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