@extends('admin.layouts.app', [
    'title' => __('Academic Resource Management'),
    'parentSection' => '',
    'elementName' => 'Academic Resources'
])
@section('title','Academic Resource Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Resources') }}
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('admin::academic_resource.index') }}">{{ __('Academic Resource Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __( 'Academic Resources') }}</h3>
                             </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('admin::academic_resource.create') }}" class="btn btn-sm btn-primary">{{ __('Add Academic Resource') }}</a>
                                </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>
                    <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush"  id="news_tbl">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width='2%'>{{ __('#') }}</th>
                                    <th scope="col">{{ __('Title') }}</th>
                                    <th scope="col" width='8%'></th>
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
   $(function () {
     $('#news_tbl').DataTable({
       retrieve: true,
       processing: true,
       serverSide: true,
       sScrollX: false,
       ajax: '{{ url("/isgi-admin/academic_resource/data") }}',
       scrollX: true,
       columns: [
         { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
         { data: 'title'},
         { data: 'actions', orderable: false, searchable: false},
       ]
    });
 });
 </script>
@endpush