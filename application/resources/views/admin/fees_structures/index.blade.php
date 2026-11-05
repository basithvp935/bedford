@extends('admin.layouts.app', [
    'title' => __('Fees Structure Management'),
    'parentSection' => 'fees_structures',
    'elementName' => 'fees_structure'
])

@section('title', 'Fees Structure Management')

@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Fees Structures') }}
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('admin::fees-structures.index') }}">{{ __('Fees Structure Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Fees Structures') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin::fees-structures.create') }}" class="btn btn-sm btn-primary">{{ __('Add Fees Structure') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="fees_structures_tbl">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width='2%'>{{ __('#') }}</th>
                                    <th scope="col">{{ __('Title') }}</th>
                                    <th scope="col">{{ __('PDF') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
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
   $(function () {
     $('#fees_structures_tbl').DataTable({
       retrieve: true,
       processing: true,
       serverSide: true,
       ajax: '{{ url('/isgi-admin/fees-structures/data') }}',
       columns: [
         { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
         { data: 'title' },
         { data: 'pdf' },
         { data: 'actions', orderable: false, searchable: false },
       ]
     });
   });
</script>
 </script>
@endpush

