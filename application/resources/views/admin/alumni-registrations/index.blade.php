@extends('admin.layouts.app', [
    'title' => __('Alumni Registration Management'),
    'parentSection' => '',
    'elementName' => 'circulars'
])
@section('title','Alumni Registration Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Alumni Registrations') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::alumni-registrations.index') }}">{{ __('Alumni Registration Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Alumni Registrations') }}</h3>
                             </div>
                             <div class="col-4">
                             <a href="#" class="btn btn-success mt-4" onclick="downloadExcel()">{{ __('CSV') }}</a>
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
                                    <th scope="col">{{ __('Whatsapp Number') }}</th>
                                    <th scope="col">{{ __('Year of passing') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <form method="post" action="{{ route('admin::excel_alumni_registrations') }}" id="excel_form_dowload">
            @csrf
        </form>


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
       ajax: '{{ url('/isgi-admin/alumni-registrations/data') }}',
       scrollX: true,
       columns: [
         { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
         { data: 'name'},
         { data: 'email'},
         { data: 'whatsapp_number'},
         { data: 'year_of_passing'},
         { data: 'actions'},
       ]

     });
 });


 function downloadExcel() {
            document.getElementById("excel_form_dowload").submit();
        }

 </script>
@endpush
