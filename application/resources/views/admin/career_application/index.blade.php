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
            {{ __('Careers') }}
        @endslot
        <li class="breadcrumb-item"><a href="{{ route('admin::careers.index') }}">Career Applications</a></li>
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
                            <h3 class="mb-0">Career Applications</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="qualification-filter">Qualification:</label>
                                <select id="qualification-filter" class="form-control">
                                    <option value="">Select Qualification</option>
                                    @foreach($qualificationCategories as $qc)
                                        <optgroup label="{{ $qc->title }}">
                                        @foreach($qualifications as $q)
                                           @if($q->category == $qc->id)
                                           <option value="{{ $q->id }}">{{ $q->title }}</option>
                                           @endif
                                        @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="experience-filter">Experience:</label>
                                <select id="experience-filter" class="form-control">
                                    <option value="">Select Experience</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>15+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-0 pt-4 mt-2 text-right">
                                <a href="{{route('admin::career_application.archived')}}" class="btn btn-primary">Archived Applications</a>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="show-all" name="show_all" value="false" />
                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush" id="news_tbl">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" width='2%'>{{ __('#') }}</th>
                                    <th scope="col">Career</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" width='10%'>Year of Experience</th>
                                    <th scope="col">Qualification</th>
                                    <th scope="col" width='10%'>Notice Period</th>
                                    <th scope="col" width='5%'>CV</th>
                                    <th scope="col" width='5%'></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize" id="exampleModalLabel">Modal title</h5>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-5">Name: </div>
                        <div class="col-7" id="name"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Email: </div>
                        <div class="col-7" id="email"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Phone: </div>
                        <div class="col-7" id="phone"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Qualification: </div>
                        <div class="col-7" id="qualification"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Position Looking For: </div>
                        <div class="col-7" id="position_looking_for"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Year of experience: </div>
                        <div class="col-7" id="experience"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Notice period: </div>
                        <div class="col-7" id="np"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Expected CTC: </div>
                        <div class="col-7" id="ectc"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Current CTC: </div>
                        <div class="col-7" id="cctc"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">CV: </div>
                        <div class="col-7"><a id="cv" href="" target="_blank">View</a></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Application date: </div>
                        <div class="col-7" id="application_date"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            url: '{{ url("/isgi-admin/career_applications/data") }}',
            data: function (d) {
                d.career_slug = $('#career-slug-filter').val();
                d.qualification = $('#qualification-filter').val();
                d.experience = $('#experience-filter').val();
                if ($('#career-slug-filter').val() || $('#qualification-filter').val() || $('#experience-filter').val()) {
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
                    window.location.href = '{{ url('/isgi-admin/career_application/export/excel') }}' + (careerSlug ? '?career_slug=' + careerSlug : '');
                }
            },
            {
                text: 'Export CSV',
                action: function () {
                    var careerSlug = $('#career-slug-filter').val();
                    window.location.href = '{{ url('/isgi-admin/career_application/export/csv') }}' + (careerSlug ? '?career_slug=' + careerSlug : '');
                }
            }
        ],
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'career' },
            { data: 'name' },
            { data: 'years_experience' },
            { data: 'qualification' },
            { data: 'notice_period' },
            { data: 'cv' },
            { data: 'actions', orderable: false, searchable: false }
        ]
    });

    // Redraw table when filter changes
    $('#career-slug-filter').on('change', function () {
        table.ajax.reload(null, false); // Redraw DataTable without resetting pagination
    });
    $('#qualification-filter').on('change', function () {
        table.ajax.reload(null, false); // Redraw DataTable without resetting pagination
    });
    $('#experience-filter').on('change', function () {
        table.ajax.reload(null, false); // Redraw DataTable without resetting pagination
    });
    
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('id') // Extract info from data-* attributes
        
        $.get("/isgi-admin/career_applications/details/"+recipient, function(data, status){
            let detail = JSON.parse(data)
            console.log(detail)
            var modal = $('#exampleModal')
            modal.find('.modal-title').text(detail.career)
            modal.find('#name').text(detail.name)
            modal.find('#email').text(detail.email)
            modal.find('#phone').text(detail.phone)
            modal.find('#qualification').text(detail.qualification)
            modal.find('#experience').text(detail.years_experience)
            modal.find('#np').text(detail.notice_period)
            modal.find('#ectc').text(detail.exp_ctc)
            modal.find('#cctc').text(detail.cur_ctc)
            modal.find('#application_date').text(detail.created_at)
            modal.find('a#cv').attr('href', 'https://www.nobleqatar.com/uploads/cv/'+detail.cv)
            
        });
        
    })
    
});

</script>
@endpush
