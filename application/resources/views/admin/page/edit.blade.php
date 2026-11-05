@extends('admin.layouts.app', [
'title' => $page->heading,
'parentSection' => 'pages',
'elementName' => $page->url
])
@section('title',$page->heading)
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ $page->heading}}
            @endslot

            <li class="breadcrumb-item"><a href="{{ url('/isgi-admin/') }}{{$page->url }}">{{$page->heading }}</a></li>
            <!--            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>-->
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit {{$page->heading }}</div>
                    <div class="card-body">
                        <a href="{{ url('/isgi-admin') }}" title="Back">
                            <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back
                            </button>
                        </a>
                        <br/>
                        <br/>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/isgi-admin/page/' . $page->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.page.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection






