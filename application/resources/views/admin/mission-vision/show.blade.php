@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">MissionVision {{ $missionvision->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/isgi-admin/mission-vision') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/isgi-admin/mission-vision/' . $missionvision->id . '/edit') }}" title="Edit MissionVision"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('isgi-admin/missionvision' . '/' . $missionvision->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MissionVision" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $missionvision->id }}</td>
                                    </tr>
                                    <tr><th> Banner </th><td> {{ $missionvision->banner }} </td></tr><tr><th> Heading1 </th><td> {{ $missionvision->heading1 }} </td></tr><tr><th> Description1 </th><td> {{ $missionvision->description1 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
