@extends('admin.layouts.app', [
    'title' => __('Enquiries Management'),
    'parentSection' => '',
    'elementName' => 'enquiries'
])
@section('title','Enquiries Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Enquiries') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::enquiries') }}">{{ __('Enquiries Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Enquiries') }}</h3>
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
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Phone') }}</th>
                                    <th scope="col">{{ __('Class') }}</th>
                                    <th scope="col">{{ __('Message') }}</th>
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
       ajax: '{{ url('/isgi-admin/enquiries/data') }}',
       scrollX: true,
       columns: [
         { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
         { data: 'name'},
         { data: 'email'},
         { data: 'phone'},
         { data: 'class'},
         { data: 'message'},
       ]

     });
 });

 </script>
@endpush
