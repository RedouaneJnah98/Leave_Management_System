<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Leave Management System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script defer src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ assert('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style type="text/css">
        .notif:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div id="app">
    @include("partials.employee_sidebar")
    <div id="main">
        @include("partials.employee_navbar")
        @yield('main-home')
    </div>

</div>
<script src="{{ asset('js/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
