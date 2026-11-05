@extends('admin.layouts.app', [
    'title' => __('Career Management'),
    'parentSection' => 'careers_settings',
    'elementName' => 'careers'
])

@section('title', 'Career Management')

@section('content')
@component('admin.layouts.headers.auth')
    @component('admin.layouts.headers.breadcrumbs')
        @slot('title')
            {{ __('Archived Career Applications') }}
        @endslot
        <li class="breadcrumb-item"><a href="{{ route('admin::careers.index') }}">Archived Career Applications</a></li>
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
                            <h3 class="mb-0">Archived Career Applications</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="career-slug-filter">Career:</label>
                                <select id="career-slug-filter" class="form-control">
                                    <option value="">Select Career</option>
                                    @foreach($careers as $career)
                                        <option value="{{ $career->title }}">{{ $career->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group mb-0 pt-4 mt-2 text-right">
                                <a href="{{ route('admin::career_applications.index') }}" class="btn btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="show-all" name="show_all" value="false" />
                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="news_tbl">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width='2%'>{{ __('#') }}</th>
                                    <th scope="col" width='10%'>Career</th>
                                    <th scope="col" width='10%'>Name</th>
                                    <th scope="col" width='10%'>Email</th>
                                    <th scope="col" width='10%'>Phone</th>
                                    <!--<th scope="col" width='10%'>Remark</th>-->
                                    <th scope="col" width='10%'>Year of Experience</th>
                                    <th scope="col" width='10%'>Qualification</th>
                                    <th scope="col" width='10%'>Notice Period</th>
                                    <th scope="col" width='10%'>Cur CTC</th>
                                    <th scope="col" width='10%'>Exp CTC</th>
                                    <th scope="col" width='10%'>CV</th>
                                    <th scope="col" width='10%'>Date</th>
                                    <th scope="col" width='8%'></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footers.auth')
</div>

@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">
@endpush

@push('js')
<script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
    var table = $('#news_tbl').DataTable({
        retrieve: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ url('/isgi-admin/career_applications/archived-data') }}',
            data: function (d) {
                d.career_slug = $('#career-slug-filter').val();
                if ($('#career-slug-filter').val()) {
                    d.length = -1;
                } else {
                    d.length = 25;
                }
            }
        },
        dom: 'Bfrtip',
        buttons: [
            {
                text: 'Export Excel',
                action: function () {
                    var careerSlug = $('#career-slug-filter').val();
                    window.location.href = '{{ url('/isgi-admin/career_application/export/excel') }}' + (careerSlug ? '?career_slug=' + careerSlug + '&archived=1' : '?archived=1');
                }
            },
            {
                text: 'Export CSV',
                action: function () {
                    var careerSlug = $('#career-slug-filter').val();
                    window.location.href = '{{ url('/isgi-admin/career_application/export/csv') }}' + (careerSlug ? '?career_slug=' + careerSlug + '&archived=1' : '?archived=1');
                }
            }
        ],
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'career' },
            { data: 'name' },
            { data: 'email' },
            { data: 'phone' },
            // { data: 'remark' },
            { data: 'years_experience' },
            { data: 'qualification' },
            { data: 'notice_period' },
            { data: 'cur_ctc' },
            { data: 'exp_ctc' },
            { data: 'cv' },
            { data: 'on' },
            { data: 'actions', orderable: false, searchable: false }
        ]
    });

    // Redraw table when filter changes
    $('#career-slug-filter').on('change', function () {
        table.ajax.reload(null, false); // Redraw DataTable without resetting pagination
    });
});

</script>
@endpush
