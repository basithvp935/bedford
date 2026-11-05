@extends('admin.layouts.app', [
'title' => __('All Pages'),
'parentSection' => '',
'elementName' => 'all-pages'
])
@section('title','All Pages')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Quality Education') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ url('/isgi-admin/page') }}">{{ __('Page') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Page</div>
                    <div class="card-body">
                        <a href="{{ url('/isgi-admin/page/create') }}" class="btn btn-success btn-sm" title="Add New Page">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/isgi-admin/page') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <th>Title</th>
                                    <th>Heading</th>
                                    <th>Url</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($page as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->heading }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>
                                            <a href="{{ url('/isgi-admin/page/' . $item->id) }}" title="View Page">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/isgi-admin/page/' . $item->id . '/edit') }}" title="Edit Page">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/isgi-admin/page' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Page" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $page->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection

