@extends('admin.layouts.app', [
    'parentSection' => 'dashboards',
    'elementName' => 'dashboard'
])
@section('title','Dashboard')
@section('content') 
    @component('admin.layouts.headers.auth') 
        @component('admin.layouts.headers.breadcrumbs')
            @slot('title') 
                
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('admin::dashboard') }}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        @endcomponent
        @include('admin.layouts.headers.cards') 
    @endcomponent

    <div class="container-fluid mt--6">
       
        <!-- Footer -->
        @include('admin.layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush