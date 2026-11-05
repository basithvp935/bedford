@extends('admin.layouts.app', [
'title' => __('Category'),
'parentSection' => '',
'elementName' => 'quality_education_category'
])
@section('title','Category')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Category') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ url('isgi-admin/quality_education_category') }}">{{ __('Category') }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Category</div>
                    <div class="card-body">
                        <a href="{{ url('/isgi-admin/quality_education_category/create') }}" class="btn btn-success btn-sm" title="Add New Category">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/isgi-admin/quality_education_category') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($quality_education_category as $item)
                                    <tr>
                                        <td>{{ $item->priority }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>

                                            <a href="{{ url('/isgi-admin/quality_education_category/' . $item->id . '/edit') }}" title="Edit Category">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/isgi-admin/quality_education_category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $quality_education_category->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection
