@extends('admin.layouts.app', [
    'title' => __('Ambassadors Management'),
    'parentSection' => '',
    'elementName' => 'ambassadors'
])
@section('title','Ambassadors Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Ambassadors') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::ambassadors.index') }}">{{ __('Ambassadors Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Ambassadors') }}</h3>
                             </div>

                                <div class="col-4 text-right">
                                    <a href="{{ route('admin::ambassadors.create') }}" class="btn btn-sm btn-primary">{{ __('Add Ambassadors') }}</a>
                                     <a class="btn btn-sm btn-success rounded-pill mt-2" href="{{ route('admin::sort_ambassadors') }}">Sort Order</a>
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
                                    <th scope="col" width= '2%'>{{ __('#') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Image') }}</th>
                                    <th scope="col">{{ __('Video') }}</th>
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
   $(function () {
     $('#news_tbl').DataTable({
       retrieve: true,
       processing: true,
       serverSide: true,
       sScrollX: false,
       ajax: '{{ url('/isgi-admin/ambassadors/data') }}',
       scrollX: true,
       columns: [
         { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
         { data: 'name'},
         { data: 'img'},
         { data: 'video'},
         { data: 'actions', orderable: false, searchable: false},
       ]

     });
 });

 </script>
@endpush

