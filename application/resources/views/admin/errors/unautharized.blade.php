<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <meta name="csrf-token" content="{{ csrf_token() }}">



        <title>Lisie Hospital | 404 Error</title>

       

        <!-- Favicon -->

        <link href="{{ asset('') }}/img/brand/favicon.jpeg" rel="icon" type="image/png">

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->

        <link href="{{ asset('') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">

        <link href="{{ asset('') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('') }}/vendor/select2/dist/css/select2.min.css">





        <link rel="stylesheet" href="{{ asset('') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" href="{{ asset('') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

        <link rel="stylesheet" href="{{ asset('') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">



        <link rel="stylesheet" href="{{ asset('') }}/front/css/toastr/toastr.min.css" />



        @stack('css')



        <!-- Argon CSS -->

        <link type="text/css" href="{{ asset('') }}/css/argon.css?v=1.0.0" rel="stylesheet">

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

        <h2 class=" headline text-red"> 404</h2>
                <div class="error-content">
                    <br>
                    <h3><i class="fa fa-warning text-red"></i> Oops! {{$message}}.</h3>
                 </div><!-- /.error-content -->

        </div>



        @if(!auth()->check() || in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))

            @include('admin.layouts.footers.guest')

        @endif



        <script src="{{ asset('') }}/vendor/jquery/dist/jquery.min.js"></script>

        <script src="{{ asset('') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('') }}/vendor/js-cookie/js.cookie.js"></script>

        <script src="{{ asset('') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>

        <script src="{{ asset('') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

        <script src="{{ asset('') }}/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>

        <!-- Optional JS -->

        <script src="{{ asset('') }}/vendor/chart.js/dist/Chart.min.js"></script>

        <script src="{{ asset('') }}/vendor/chart.js/dist/Chart.extension.js"></script>



        <script src="{{ asset('') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

        <script src="{{ asset('') }}/vendor/select2/dist/js/select2.min.js"></script>





    <script src="{{ asset('') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

    <script src="{{ asset('') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

    <script src="{{ asset('') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>

    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>

    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>

    <script src="{{ asset('') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>

    <script src="{{ asset('') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>



    <script   src="{{ asset('') }}front/js/toastr/toastr.min.js"></script> 



        @stack('js')



        <!-- Argon JS -->

        <script src="{{ asset('') }}/js/argon.js?v=1.0.0"></script>

        <script src="{{ asset('') }}/js/demo.min.js"></script>

    </body>

</html>