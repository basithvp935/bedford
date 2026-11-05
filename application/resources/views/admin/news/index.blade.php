@extends('admin.layouts.app', [
'title' => __('News Management'),
'parentSection' => '',
'elementName' => 'news-management'
])
@section('title','News Management')
@section('content')
@component('admin.layouts.headers.auth')
@component('admin.layouts.headers.breadcrumbs')
@slot('title')
{{ __('News') }}
@endslot

<li class="breadcrumb-item"><a href="{{ route('admin::news.index') }}">{{ __('News Management') }}</a></li>
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
                            <h3 class="mb-0">{{ __('News') }}</h3>
                        </div>

                        <div class="col-4 text-right">
                            <a href="{{ route('admin::news.create') }}" class="btn btn-sm btn-primary">{{ __('Add News') }}</a>
                             <a class="btn btn-sm btn-success rounded-pill mt-2" href="{{ route('admin::sort_news') }}">Sort Order</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 mt-2">
                    @include('admin.alerts.success')
                    @include('admin.alerts.errors')
                </div>

                <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush" id="news_tbl">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" width='2%'>{{ __('#') }}</th>
                                <th scope="col" >{{ __('Title') }}</th>
                                <th scope="col" >{{ __('Image') }}</th>
                                <th scope="col" width='2%'></th>
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
    $(function() {
        $('#news_tbl').DataTable({
            retrieve: true,
            processing: true,
            serverSide: true,
            sScrollX: false,
            ajax: '{{ url('/isgi-admin/news/data') }}',
            scrollX: true,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'news_title'
                },
                {
                    data: 'thumb_img'
                },
                {
                    data: 'actions',
                    orderable: false,
                    searchable: false
                },
            ]

        });
    });


    function setFlashNews(value, id) {

        var data = "value=" + value + '&id=' + id + '&_token={{csrf_token()}}';

        $.ajax({

            type: "POST",

            url: "{{ url('/isgi-admin/news/set/flash') }}",

            data: data,

            cache: false,

            success: function(response) {

                toastr.success("Successfully updated flash news", "");

                $('#news_tbl').DataTable().clear().draw(false);

            }

        });

        return false;



    }
</script>
@endpush
