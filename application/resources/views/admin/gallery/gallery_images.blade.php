@extends('admin.layouts.app', [
    'title' => __('Gallery Management'),
    'parentSection' => 'media',
    'elementName' => 'gallerys'
])
@section('title','Gallery Management')
@section('content')
    @component('admin.layouts.headers.auth')
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Gallerys') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::gallerys.index') }}">{{ __('Gallery Management') }}</a></li>
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
                                <h3 class="mb-0">{{ __('Gallery Images') }}</h3>
                             </div>

                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        @include('admin.alerts.success')
                        @include('admin.alerts.errors')
                    </div>

                    <div class="card-body">
                        @foreach ($gallery->gallery_details as $gallery_detail)
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ url('upload/' . $gallery_detail->img) }}" height="50%" width="50%"   style="">
                        </div>
                        <div class="col-1">
                            <form action="{{ route('admin::sub_images_delete',['gallery_detail'=> $gallery_detail->id]) }}" method="post" class="align-items-center">
                                @csrf
                                @method('delete')
                                <a href="#"  class="btn btn-sm btn-primary" onclick="confirm('{{ __("Are you sure you want to delete this image?") }}') ? this.parentElement.submit() : ''"><i class="ni ni-fat-remove"></i>Delete</a>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection



@push('js')
<script>


   

 </script>
@endpush
