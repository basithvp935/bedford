@extends('admin.layouts.app', [
'title' => __('Department'),
'parentSection' => '',
'elementName' => 'department'
])
@section('title','Department')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Department') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ url('isgi-admin/department') }}">{{ __('Department') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Department</div>
                    <div class="card-body">
                        <a href="{{ url('/isgi-admin/department') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/isgi-admin/department/' . $department->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.department.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection









