<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta content="{{csrf_token()}}" name="csrf-token">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    @section('css')
        <link rel="stylesheet" href="{{asset('bsbmd/plugins/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('bsbmd/plugins/node-waves/waves.css')}}">
        <link rel="stylesheet" href="{{asset('bsbmd/plugins/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('bsbmd/plugins/morrisjs/morris.css')}}">
        <link rel="stylesheet" href="{{asset('bsbmd/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('bsbmd/css/themes/all-themes.css')}}">
         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    @show
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                @yield('content')
            </div>
        </div>
    </div>

    @section('script')
        <script type="text/javascript" src="{{asset('bsbmd/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bsbmd/plugins/bootstrap/js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('bsbmd/plugins/node-waves/waves.js')}}"></script>
        <script type="text/javascript" src="{{asset('bsbmd/plugins/jquery-validation/jquery.validate.js')}}"></script>
        <script type="text/javascript" src="{{asset('bsbmd/js/admin.js')}}"></script>
        <script type="text/javascript" src="{{asset('bsbmd/js/pages/examples/sign-in.js')}}"></script>
    @show

</body>

</html>
