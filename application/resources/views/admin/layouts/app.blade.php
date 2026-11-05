<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <meta name="csrf-token" content="{{ csrf_token() }}">



        <title>@yield('title') | Dayapuram Residential School</title>



        <!-- Favicon -->

        <link href="{{ asset('Front/images/img/favicon.png')}}" rel="icon" type="image/png">

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->

        <link href="{{ asset('Admin/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">

        <link href="{{ asset('Admin/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('Admin/vendor/select2/dist/css/select2.min.css')}}">





        <link rel="stylesheet" href="{{ asset('Admin/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">

        <link rel="stylesheet" href="{{ asset('Admin/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

        <link rel="stylesheet" href="{{ asset('Admin/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">



        <link rel="stylesheet" href="{{ asset('Front/css/toast.min.css')}}" />



        @stack('css')



        <!-- Argon CSS -->

        <link type="text/css" href="{{ asset('Admin/css/argon.css?v=1.0.0')}}" rel="stylesheet">

    </head>

    <body class="{{ $class ?? '' }}">

        @auth()

            <form id="logout-form" action="{{ route('admin::logout') }}" method="POST" style="display: none;">

                @csrf

            </form>

            @if (!in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))

                @include('admin.layouts.navbars.sidebar')

            @endif

        @endauth



        <div class="main-content">

            @include('admin.layouts.navbars.navbar')

            @yield('content')

        </div>



        @if(!auth()->check() || in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))

            @include('admin.layouts.footers.guest')

        @endif



        <script src="{{ asset('Admin/vendor/jquery/dist/jquery.min.js')}}"></script>

        <script src="{{ asset('Admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('Admin/vendor/js-cookie/js.cookie.js')}}"></script>

        <script src="{{ asset('Admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>

        <script src="{{ asset('Admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

        <script src="{{ asset('Admin/vendor/lavalamp/js/jquery.lavalamp.min.js')}}"></script>

        <!-- Optional JS -->

        <script src="{{ asset('Admin/vendor/chart.js/dist/Chart.min.js')}}"></script>

        <script src="{{ asset('Admin/vendor/chart.js/dist/Chart.extension.js')}}"></script>



        <script src="{{ asset('Admin/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

        <script src="{{ asset('Admin/vendor/select2/dist/js/select2.min.js')}}"></script>





    <script src="{{ asset('Admin/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{ asset('Admin/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{ asset('Admin/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

    <script src="{{ asset('Admin/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>

    <script src="{{ asset('Admin/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

    <script src="{{ asset('Admin/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>

    <script src="{{ asset('Admin/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>

    <script src="{{ asset('Admin/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>



    <script   src="{{ asset('Front/js/toaster.min.js')}}"></script>



        @stack('js')



        <!-- Argon JS -->

        <script src="{{ asset('Admin/js/argon.js?v=1.0.0')}}"></script>

        <script src="{{ asset('Admin/js/demo.min.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    </body>



</html>
