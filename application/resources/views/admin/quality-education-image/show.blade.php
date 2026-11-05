@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">QualityEducationImage {{ $qualityeducationimage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url()->previous() }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/isgi-admin/quality-education-image/' . $qualityeducationimage->id . '/edit') }}" title="Edit QualityEducationImage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('isgi-admin/qualityeducationimage' . '/' . $qualityeducationimage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete QualityEducationImage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $qualityeducationimage->id }}</td>
                                    </tr>
                                    <tr><th> Quality Education Id </th><td> {{ $qualityeducationimage->quality_education_id }} </td></tr><tr><th> Text </th><td> {{ $qualityeducationimage->text }} </td></tr><tr><th> Image </th><td> {{ $qualityeducationimage->image }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
