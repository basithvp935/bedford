@extends('admin.layouts.app', [
    'title' => __('Admission Applications'),
    'parentSection' => '',
    'elementName' => 'admission_applications'
])

@section('title', 'Admission Applications')

@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Admission Applications') }}
            @endslot
            <li class="breadcrumb-item"><a href="{{ route('admin::admission_applications.index') }}">{{ __('Admission Applications') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Admission Applications') }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="admission_applications_tbl">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width="2%">{{ __('#') }}</th>
                                    <th scope="col">{{ __('Student Name') }}</th>
                                    <th scope="col">{{ __('Father Name') }}</th>
                                    <th scope="col">{{ __('Father Mobile') }}</th>
                                    <th scope="col">{{ __('Mother Mobile') }}</th>
                                    <th scope="col">{{ __('Submitted On') }}</th>
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
        $('#admission_applications_tbl').DataTable({
            retrieve: true,
            processing: true,
            serverSide: true,
            sScrollX: false,
            ajax: '{{ url('/isgi-admin/admission_applications/data') }}',
            scrollX: true,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'student_name', name: 'student_name' },
                { data: 'father_name', name: 'father_name' },
                { data: 'father_mobile', name: 'father_mobile' },
                { data: 'mother_mobile', name: 'mother_mobile' },
                { data: 'submitted_on', name: 'created_at', searchable: false },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endpush
