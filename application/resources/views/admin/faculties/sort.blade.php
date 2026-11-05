@extends('admin.layouts.app', [
    'title' => __('Faculties Management'),
    'parentSection' => 'about_settings',
    'elementName' => 'faculties'
])
@section('title','Faculties Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Faculties') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::faculties.index') }}">{{ __('Faculties Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Faculties') }}</h3>
                             </div>

                                <div class="col-4 text-right">
                                    <a href="{{ route('admin::faculties.create') }}" class="btn btn-sm btn-primary">{{ __('Add Faculties') }}</a>
                                </div>

                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                     <div class="card-body">
                    <div class="card-body px-0">
                        <div style="display:none" class="alert icon-alert with-arrow alert-success form-alter" role="alert">
                            <i class="fa fa-fw fa-check-circle"></i>
                            <strong> Success ! </strong> <span class="success-message">  Order has been updated successfully </span>
                        </div>
                        <div style="display:none" class="alert icon-alert with-arrow alert-danger form-alter" role="alert">
                            <i class="fa fa-fw fa-times-circle"></i>
                            <strong> Note !</strong> <span class="warning-message"> Empty list cant be ordered </span>
                        </div>



                        <ul class="list-group list-group-flush list my--3" id="post_list">
                                @foreach($faculties as $index=> $faculty)
                                <li class="list-group-item px-0" data-post-id="{{$faculty->id}}">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                           <?php $key= $index+1;?>
                                        </div>
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <span><img src="{{ url('upload/' . $faculty->img) }}"  height='100' width='250'></span>
                                            </h4>
                                            <span class="text-success"></span>
                                            <small>{{$faculty->name}}</small>
                                        </div>
                                        <div class="col-auto">
                                       </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection



@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>

   $( "#post_list" ).sortable({
	placeholder : "ui-state-highlight",
	update  : function(event, ui)
	{
		var post_order_ids = new Array();
		$('#post_list li').each(function(){
			post_order_ids.push($(this).data("post-id"));
		});
        var data = "post_order_ids="+post_order_ids+'&_token={{csrf_token()}}';
		$.ajax({
			url:"{{ url('/isgi-admin/sort/faculties-sortable') }}",
			method:"POST",
            data: data,
			success:function(data)
			{
			 if(data){
			 	$(".alert-danger").hide();
			 	$(".alert-success ").show();
			 }else{
			 	$(".alert-success").hide();
			 	$(".alert-danger").show();
			 }
			}
		});
	}
});
</script>
@endpush

