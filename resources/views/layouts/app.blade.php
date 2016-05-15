<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel-boot</title>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript" scr="{{asset('js/libs/bootstrap.min.js')}}}"></script>
        <script type="text/javascript" scr="{{asset('js/libs/less.min.js')}}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/libs/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/libs/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    </head>
    <body>
        <div class="wrapper container-fluid">
            @include('partial.header')
            @yield('content')
            @include('partial.footer')
        </div>
    </body>
</html>