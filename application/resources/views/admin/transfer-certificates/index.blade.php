@extends('admin.layouts.app', [
    'title' => __('Transfer Certificate Management'),
    'parentSection' => 'academics',
    'elementName' => 'transfer-certificates'
])
@section('title','Transfer Certificate Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Transfer Certificates') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::transfer-certificates.index') }}">{{ __('Transfer Certificate Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Transfer Certificates') }}</h3>
                             </div>

                                <div class="col-4 text-right">
                                    <a href="{{ route('admin::transfer-certificates.create') }}" class="btn btn-sm btn-primary">{{ __('Add Transfer Certificate') }}</a>
                                </div>

                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush"  id="gallery_tbl">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width='2%'>{{ __('#') }}</th>
                                    <th scope="col">{{ __('GR Number') }}</th>
                                    <th scope="col">{{ __('DOB') }}</th>
                                    <th scope="col" >{{ __('File') }}</th>
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
     $('#gallery_tbl').DataTable({
       retrieve: true,
       processing: true,
       serverSide: true,
       sScrollX: false,
       ajax: '{{ url('/isgi-admin/transfer-certificates/data') }}',
       scrollX: true,
       columns: [
         { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
         { data: 'gr_number'},
         { data: 'dob'},
         { data: 'pdf'},
         { data: 'actions', orderable: false, searchable: false},
       ]

     });
 });

 </script>
@endpush
