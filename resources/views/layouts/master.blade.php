<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta content="{{csrf_token()}}" name="csrf-token">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/node-waves/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/animate-css/animate.min.css')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    @yield('extra-css')

    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themes/all-themes.min.css')}}">
</head>

<body class="theme-red">
@include('layouts.loader')
<div class="overlay"></div>
@include('layouts.header')
@include('layouts.sidebar')

<section class="content">
    @section('content')

    @show
</section>


<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/node-waves/waves.min.js')}}"></script>

@yield('extra-script')

<script src="{{asset('assets/js/admin.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>

</body>

</html>
