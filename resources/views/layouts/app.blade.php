<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ToDo') }}</title>

    <meta name="description"
          content="ToDo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('images/favicon.ico') }}" />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <!-- /font material stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="{{ asset('css/jumbo-bootstrap.css') }}" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="{{ asset('node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->
    <!-- Datepicker Bootstrap stylesheet -->
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <!-- /datepicker bootstrap stylesheet -->

    <!-- Form stylesheet -->
    <link href="{{ asset('css/jumbo-forms.css') }}" rel="stylesheet">
    <!-- /form stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="{{ asset('css/jumbo-core.min.css') }}" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="{{ asset('css/theme-dark-indigo.css') }}" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

</head>

<body id="body" data-theme="dark-indigo">

<!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">




    @yield('content')





    </div>
    <!-- /page container -->


    <!-- Menu Backdrop -->
    <div class="menu-backdrop fade"></div>
    <!-- /menu backdrop -->

    <!--Load JQuery-->
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!--Bootstrap JQuery-->
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--Perfect Scrollbar JQuery-->
    <script src="{{ asset('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <!--Big Slide JQuery-->
    <script src="{{ asset('node_modules/bigslide/dist/bigSlide.min.js') }}"></script>
    <!--wizard JQuery-->
    <script src="{{ asset('node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<!--Datepicker Bootstrap JQuery-->
<script src="{{ asset('node_modules/moment/moment.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap4-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!--JQuery ui-->
    <script src="{{ asset('js/jquery-ui.js') }}"></script>

    <!--Custom JQuery-->
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/custom/todos.js') }}"></script>

<script>
    $('#datetimepicker1').datetimepicker({
        icons: {
            time: 'zmdi zmdi-time',
            date: 'zmdi zmdi-calendar',
            up: 'zmdi zmdi-chevron-up zmdi-hc-2x',
            down: 'zmdi zmdi-chevron-down zmdi-hc-2x',
            previous: 'zmdi zmdi-chevron-left zmdi-hc-2x',
            next: 'zmdi zmdi-chevron-right zmdi-hc-2x',
            today: 'zmdi zmdi-gps-dot zmdi-hc-2x',
            clear: 'zmdi zmdi-delete zmdi-hc-2x',
            close: 'zmdi zmdi-close zmdi-hc-2x'
        }
    });
</script>
@yield('script')


</body>

</html>

