<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <title>{{ config('app.name', 'SCA') }}  </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/theme.css') !!}"/>
</head>
<body class="gray-bg">
<div class="wrapper">
    <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        <div class="col-md-4 col-sm-4 card" style="margin-top: 10%;">
                <!-- <img  src="{{asset('assets/img/sca.png')}}" width="100%"> -->
            <hr>
            @yield('content')
        </div>
        <div class="col-md-4 col-sm-4"></div>

    </div>
</div>
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
</body>
</html>
