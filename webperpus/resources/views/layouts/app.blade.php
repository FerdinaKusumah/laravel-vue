<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Fonts : Source San Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme -->
    <link rel="stylesheet" href=" {{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- My Css -->
    <link rel="stylesheet" href=" {{ asset('css/my.css') }}">




</head>

<body>
    @yield('content')
    <!-- Jquery -->
    <link src=" {{ asset('assets/plugins/jquey/jquery.min.js') }}">

    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- AdminLTE APP -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>

</html>