@extends('admin.layouts.app', [
'title' => __('Video gallery'),
'parentSection' => '',
'elementName' => 'video-gallery'
])
@section('title','Video gallery')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Video gallery') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ url('/isgi-admin/video-gallery') }}">{{ __('Video gallery') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New VideoGallery</div>
                    <div class="card-body">
                        <a href="{{ url('/isgi-admin/video-gallery') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/isgi-admin/video-gallery/' . $videogallery->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.video-gallery.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection





