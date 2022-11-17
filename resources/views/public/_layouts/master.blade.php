<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="calculadora renda fixa, consultoria, renda, calculadora prime, calculadora de juros, consultor imobiliario, faz financiada" />
    <meta name="description" content="Calculadora de Amortização - Faz Financiada. Sua calculadora de simulações." />
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

        .display {
            display:none;
        }
        .btn-result {
            color: #181F3C;
            background-color: #CBD41B;
            border-color: #CBD41B; }

        .btn-result:hover, .btn-result:focus, .btn-result.focus {
        color: #181F3C;
        background-color: #CBc13f;
        border-color: #CBc13f; }

        .btn-result.disabled, .btn-result:disabled {
        color: #181F3C;
        background-color: #CBc13f;
        border-color: #CBc13f; }

        .btn-result:not(:disabled):not(.disabled):active, .btn-result:not(:disabled):not(.disabled).active,
        .show > .btn-result.dropdown-toggle {
        color: #181F3C;
        background-color: #CBc13f;
        border-color: #CBc13f; }

        .btn-result:not(:disabled):not(.disabled):active:focus, .btn-result:not(:disabled):not(.disabled).active:focus,
        .show > .btn-result.dropdown-toggle:focus {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); }
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .logo-img {
                width: 100%;
            }          
            .page-title {
                color: #fff;
                font-size: 1.5rem;
                padding: 1rem 0 1rem 0;
                margin: 0 auto;
                text-align: center;
            }
            label {
                color: #fff;
            }
            .result-title {
                color: #CBD41B;
                font-size: 1.3rem;
                line-height: 1.5rem;
            }
            .result-link {
                font-size:0.7rem; 
                color: #CBD41B; 
                text-align: center; 
                font-weight:bold
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {}

        /* Medium devices (landscape tablets, 900px and up) */
        @media only screen and (min-width: 900px) {}

        /* Large devices (laptops/desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            .logo-img {
                width: 15%;
            }
            .page-title {
                color: #fff;
                font-size: 3rem;
                /* padding: 4rem; */
                /* text-align: center; */
                margin: 0 auto;
                display: flex;
                justify-content: center;
                flex-direction: column;
                height: 13rem;
                width: 20rem;
                line-height: 3rem;
            }
            .result-title {
                color: #CBD41B;
                font-size: 1.3rem;
                line-height: 1.5rem;
            }
            .pd-right {
                padding-right: 10rem;
            }
            .mg-top {
                margin-top:6rem;
            }
            .div-center {
                display: flex;
                justify-content: center;
                flex-direction: column;
                margin-top: 3.5rem;
                /* width: 20rem; */
            }
            label {
                color: #fff;
            }
            .result-link {
                font-size:1rem; 
                color: #CBD41B; 
                text-align: center; 
                font-weight:bold
            }
        }

        /* Extra large devices (large laptops and desktops, 1800px and up) */
        @media only screen and (min-width: 1800px) {
            .logo-img {
                width: 15%;
            }
            .page-title {
                color: #fff;
                font-size: 3rem;
                /* padding: 4rem; */
                /* text-align: center; */
                margin: 0 auto;
                display: flex;
                justify-content: center;
                flex-direction: column;
                height: 13rem;
                width: 20rem;
                line-height: 3rem;
            }
            .result-title {
                color: #CBD41B;
                font-size: 1.3rem;
                line-height: 1.5rem;
            }
            .pd-right {
                padding-right: 10rem;
            }
            .mg-top {
                margin-top:14rem;
            }
            .div-center {
                display: flex;
                justify-content: center;
                flex-direction: column;
                margin-top: 3.5rem;
                /* width: 20rem; */
            }
            label {
                color: #fff;
            }
            .result-link {
                font-size:1.1rem; 
                color: #CBD41B; 
                text-align: center; 
                font-weight:bold
            }
        }

    </style>

    @yield('styles')
</head>
<body style="background-color: #181F3C">
<div id="app">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="{{asset('assets/img/marca.png')}}" class="logo-img">
                </a>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-content animated fadeInRight">
        @yield('content')
    </div>
</div>


<script src="{{ asset('/js/manifest.js') }}"></script>
<script src="{{ asset('/js/vendor.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/custom-masks.js') }}"></script>
<script src="{{ asset('/js/moment.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>
<script src="{{ asset('/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/js/inspinia.js') }}"></script>
<script src="{{ asset('/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery.maskMoney.min.js') }}"></script>

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-204064163-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-204064163-1');
</script>
</body>
</html>
