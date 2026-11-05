@extends('admin.layouts.app', [
    'title' => __('Notice Management'),
    'parentSection' => '',
    'elementName' => 'notice-management'
])

@section('title','Notice Management')

@section('content')
@component('admin.layouts.headers.auth')
@component('admin.layouts.headers.breadcrumbs')
@slot('title')
{{ __('Notice') }}
@endslot

<li class="breadcrumb-item"><a href="{{ route('admin::notice.index') }}">{{ __('Notice Management') }}</a></li>
<li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
@endcomponent
@endcomponent

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Notice') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin::notice.create') }}" class="btn btn-sm btn-primary">{{ __('Add Notice') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    @include('admin.alerts.success')
                    @include('admin.alerts.errors')
                </div>

                <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush" id="notices_tbl">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" width='2%'>{{ __('#') }}</th>
                                <th scope="col">{{ __('Title') }}</th>
                                <th scope="col">{{ __('Description') }}</th>
                                <th scope="col">{{ __('Date') }}</th>
                                {{-- <th scope="col">{{ __('Status') }}</th> --}}
                                <th scope="col">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notices as $notice)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td>{!! $notice->description !!}</td>
                                    <td>{{ $notice->date }}</td>
                                    {{-- <td>{{ $notice->status }}</td> --}}
                                    <td>
                                        <a href="{{ route('admin::notice.edit', $notice->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin::notice.destroy', $notice->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.footers.auth')
</div>
@endsection
