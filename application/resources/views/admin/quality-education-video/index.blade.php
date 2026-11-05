@extends('admin.layouts.app', [
'title' => __('Quality Education'),
'parentSection' => '',
'elementName' => 'quality-education'
])
@section('title','Quality Education')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Quality Education') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ url('isgi-admin/quality-education') }}">{{ __('Quality education') }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Quality education Video</div>
                    <div class="card-body">
                        <a href="{{ url("/isgi-admin/quality-education/$quality_education_id/quality-education-video/create") }}" class="btn btn-success btn-sm" title="Add New QualityEducationImage">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url("/isgi-admin/quality-education-video") }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <th>Text</th>
                                    <th>Video</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($qualityeducationvideo as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->text }}</td>
                                        <td>
                                            <iframe class="m-0 p-0" width="100%" height="268" src="https://www.youtube.com/embed/{{$item->iframe}}" title="H.E The Indian Ambassador addresses ISG students on 77th Independence Day" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </td>
                                        <td>

                                            <a href="{{ url("/isgi-admin/quality-education/$quality_education_id/quality-education-video/" . $item->id . '/edit') }}" title="Edit QualityEducationImage">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url("/isgi-admin/quality-education/$quality_education_id/quality-education-video" . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete QualityEducationImage" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $qualityeducationvideo->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection

