@extends('admin.layouts.app', [
    'title' => __('Career Management'),
    'parentSection' => 'careers_settings',
    'elementName' => 'careers'
])
@section('title','Career Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Careers') }}
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('admin::careers.index') }}">{{ __('Career Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Careers') }}</h3>
                             </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('admin::careers.create') }}" class="btn btn-sm btn-primary">{{ __('Add Career') }}</a>
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
                                    <th scope="col" width='20%'>{{ __('Title') }}</th>
                                <th scope="col" width='20%'>{{ __('Category') }}</th>
                                <th scope="col" width='20%'>Sub Title</th>
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
       ajax: '{{ url("/isgi-admin/careers/data") }}',
       scrollX: true,
       columns: [
         { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
         { data: 'title'},
         { data: 'category'},
         { data: 'sub_title'},
         { data: 'actions', orderable: false, searchable: false},
       ]
    });
 });
 </script>
@endpush