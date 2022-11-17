<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - @yield('_titulo_pagina_') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/site/css/animate-inspinia.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}"/>
    <style>
        ::placeholder {
            font-size: small;
            color: #aaaaaa !important;
        }
        .has-error .select2-selection {
            border-color: #ed5565 !important;
        }
    </style>

    @yield('styles')
</head>
<body>
<div id="app">
    <div id="wrapper">

        @include('panel._layouts.navigation')

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header" style="width: 100%">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <div class="navbar-form-custom" style="width: 80%;">
                            <h2 style="margin-top: 10px" class="ml-5  animated pulse infinite">
                                Painel de Controle  -  {{ config('app.name', 'SIPRO') }}
                            </h2>
                        </div>
                    </div>

                </nav>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                @yield('content')
            </div>
            <div class="footer">
                <div class="pull-right">
                    Versão 1.0.0
                </div>
                <div>
                SCA
                </div>
            </div>

        </div>
    </div>

</div>
<!-- End wrapper-->
<form id="logout-form" action="{{ route('panel.logout') }}" method="GET" style="display: none;">
    @csrf
</form>

<script src="{{ asset('/js/manifest.js') }}"></script>
<script src="{{ asset('/js/vendor.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/custom-masks.js') }}"></script>
<script src="{{ asset('/js/moment.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>7
<script src="{{ asset('/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/js/inspinia.js') }}"></script>
<script src="{{ asset('/js/plugins/pace/pace.min.js') }}"></script>

{{--<script src="{{ file_version(asset('/js/custom-select2.js')) }}"></script>
<script src="{{ file_version(asset('/js/custom-datepicker.js')) }}"></script>
<script src="{{ file_version(asset('/js/custom-datetimepicker.js')) }}"></script>--}}


@section('scripts')
@show
<script>
    $(function () {
        //$('[data-toggle="tooltip"]').tooltip();
        //$('[data-tooltip=tooltip"]').tooltip();
    });

    @if (Session::has('message'))
    showMessage('{{ session('messageType') }}', '{{ session('message') }}');
    @endif

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
