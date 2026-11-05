+@extends('admin.layouts.app', [
    'title' => __('Digital Festival Management'),
    'parentSection' => 'strength',
    'elementName' => 'facilities',
])
@section('title', 'Digital Festival Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
              Digital festival Management
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::digital_festival.index') }}"> Digital festival Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">List</li>
        @endcomponent
    @endcomponent

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"> Digital festival Management</h3>
                            </div>

                            <div class="col-4 text-right">
                                <a href="{{ route('admin::digital_festival.create') }}" class="btn btn-sm btn-primary">Add  Digital festival </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="facilities">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width= '2%'>#</th>
                                    <th scope="col" width= '35%'>Title</th>
                                    <th scope="col" width= '35%'>Image</th>
                                    <th scope="col" width= '2%'></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection



@push('js')
    <script>
        //get all data to table
        $(function() {
            $('#facilities').DataTable({
                retrieve: true,
                processing: true,
                serverSide: true,
                sScrollX: false,
                ajax: "{{ url('/isgi-admin/digital_festival/data') }}",
                scrollX: true,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'img'
                    },
                    {
                        data: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ]

            });
        });
    </script>
@endpush
