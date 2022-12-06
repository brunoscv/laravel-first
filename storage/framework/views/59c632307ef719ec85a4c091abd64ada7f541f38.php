<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="vistoria veicular, detran-piaui" />
    <meta name="description" content="Dirceu Vistorias. Agende sua vistoria veicular." />
    <title><?php echo e(config('app.name', 'Laravel')); ?> - <?php echo $__env->yieldContent('_titulo_pagina_'); ?> </title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('/site/css/animate-inspinia.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/select2.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/datepicker.css')); ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/viewbox.css')); ?>"/>
    
    <style>
        
        /********** Template CSS **********/
        *, *::before, *::after {
            box-sizing: border-box;
        }
        :root {
            --primary: #F77D0A;
            --secondary: #2B2E4A;
            --light: #F4F5F8;
            --dark: #1C1E32;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        }

        body {
            margin: 0;
            font-family: "Rubik",sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #8486A0;
            text-align: left;
            background-color: #fff;
        }

        h1,
        h2,
        .font-weight-bold {
            font-weight: 700 !important;
            margin-bottom: 0.5rem;
            font-family: "Oswald",sans-serif;
            line-height: 1.2;
            color: #2B2E4A;
        }

        h3,
        h4,
        .font-weight-semi-bold {
            font-weight: 600 !important;
            margin-bottom: 0.5rem;
            font-family: "Oswald",sans-serif;
            line-height: 1.2;
            color: #2B2E4A;
        }

        h5,
        h6,
        .font-weight-medium {
            font-weight: 500 !important;
            margin-bottom: 0.5rem;
            font-family: "Oswald",sans-serif;
            line-height: 1.2;
            color: #2B2E4A;
        }
        h2, .font-weight-medium {
            font-weight: 300 !important;
        }

        .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: 0.5rem;
            font-family: "Oswald",sans-serif;
            line-height: 1.2;
            color: #2B2E4A;
        }
        h1, .h1 {
            font-size: 2.5rem;
        }

        .btn-square {
            width: 36px;
            height: 36px;
        }

        .btn-sm-square {
            width: 28px;
            height: 28px;
        }

        .btn-lg-square {
            width: 46px;
            height: 46px;
        }

        .btn-square,
        .btn-sm-square,
        .btn-lg-square {
            padding-left: 0;
            padding-right: 0;
            text-align: center;
        }

        .btn-lg, .btn-group-lg>.btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .btn-icon {
            margin: 0 0.5rem;
        }

        .btn-whatsapp {
            color: #fff;
            background-color: #54ce60;
            border-color: ##54ce60;
        }

        .btn-primary {
            color: #212121;
            background-color: #e9e094;
            border-color: #e9e094;
        }
        .btn {
            /* display: inline-block; */
            font-weight: 400;
            /* color: #8486A0; */
            text-align: center;
            vertical-align: middle;
            user-select: none;
            /* background-color: transparent; */
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0;
            transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
        }

        .btn.btn-primary:hover {
            background-color: #ca181f;
            border-color: #ca181f;
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 0;
            bottom: 15rem;
            z-index: 99;
        }

        .link-whatsapp {
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 1px 1px 2px #888; 
            z-index:1000;
        }

        .nav-bar::before {
            position: absolute;
            content: "";
            width: 100%;
            height: 50%;
            top: 0;
            left: 0;
            background: #212121;
        }

        .nav-bar::after {
            position: absolute;
            content: "";
            width: 100%;
            height: 50%;
            bottom: 0;
            left: 0;
            background: #ffffff;
        }

        .navbar-dark .navbar-nav .nav-link {
            padding: 30px 15px;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--light);
            outline: none;
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #e9e094;
        }

        @media (max-width: 991.98px) {
            .navbar-dark .navbar-nav .nav-link  {
                padding: 10px 15px;
            }
        }

        .carousel {
            position: relative;
        }
        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(28, 30, 50, .7);
            z-index: 1;
        }

        @media (max-width: 576px) {
            .carousel-caption h4 {
                font-size: 18px;
                font-weight: 500 !important;
            }

            .carousel-caption h1 {
                font-size: 30px;
                font-weight: 600 !important;
            }
        }

        .page-header {
            height: 400px;
            margin-bottom: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url(../img/bg-banner.jpg);
            background-attachment: fixed;
        }

        @media (max-width: 991.98px) {
            .page-header {
                height: 300px;
            }
        }

        .service-item {
            height: 320px;
            background: var(--light);
            transition: .5s;
        }

        .service-item:hover,
        .service-item.active {
            /* background: var(--secondary); */
            background: #343a40;
        }

        .service-item h1,
        .service-item h4 {
            transition: .5s;
        }

        .service-item:hover h1,
        .service-item.active h1 {
            /* color: var(--dark) !important; */
            color: #212121 !important;
        }

        .service-item:hover h4,
        .service-item.active h4 {
            color: var(--light);
        }

        .rent-item {
            padding: 30px;
            text-align: center;
            background: var(--light);
            transition: .5s;
        }

        .rent-item:hover,
        .rent-item.active {
            background: var(--secondary);
        }

        .rent-item h4 {
            transition: .5s;
        }

        .rent-item:hover h4,
        .rent-item.active h4 {
            color: var(--light);
        }

        .team-item {
            padding: 30px 30px 0 30px;
            text-align: center;
            background: var(--light);
            transition: .5s;
        }

        .team-item:hover,
        .owl-item.center .team-item {
            background: var(--secondary);
        }

        .team-item h4 {
            transition: .5s;
        }

        .owl-item.center .team-item h4,
        .owl-item.center .rent-item h4 {
            color: var(--light);
        }

        .team-item .team-social {
            top: 0;
            left: 0;
            opacity: 0;
            transition: .5s;
            background: var(--light);
        }

        .owl-item.center .team-item .team-social,
        .owl-item.center .rent-item {
            background: var(--secondary);
        }

        .team-item:hover .team-social {
            opacity: 1;
            background: var(--secondary);
        }

        .team-carousel .owl-nav,
        .related-carousel .owl-nav {
            position: absolute;
            width: 100%;
            height: 60px;
            top: calc(50% - 30px);
            left: 0;
            display: flex;
            justify-content: space-between;
            z-index: 1;
        }

        .team-carousel .owl-nav .owl-prev,
        .team-carousel .owl-nav .owl-next,
        .related-carousel .owl-nav .owl-prev,
        .related-carousel .owl-nav .owl-next {
            position: relative;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FFFFFF;
            background: var(--primary);
            font-size: 22px;
            transition: .5s;
        }

        .team-carousel .owl-nav .owl-prev:hover,
        .team-carousel .owl-nav .owl-next:hover,
        .related-carousel .owl-nav .owl-prev:hover,
        .related-carousel .owl-nav .owl-next:hover {
            background: var(--secondary);
        }

        .vendor-carousel .owl-dots,
        .testimonial-carousel .owl-dots {
            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vendor-carousel .owl-dot,
        .testimonial-carousel .owl-dot {
            position: relative;
            display: inline-block;
            margin: 0 5px;
            width: 20px;
            height: 20px;
            background: var(--secondary);
            transition: .5s;
        }

        .vendor-carousel .owl-dot.active,
        .testimonial-carousel .owl-dot.active {
            width: 40px;
            height: 40px;
            background: var(--primary);
        }

        .testimonial-carousel .owl-item img {
            width: 80px;
            height: 80px;
        }

        .testimonial-carousel .owl-item .testimonial-item {
            height: 350px;
            transition: .5s;
            background: var(--light);
        }

        .testimonial-carousel .owl-item.center .testimonial-item {
            background: var(--secondary);
        }

        .testimonial-carousel .owl-item .testimonial-item h1,
        .testimonial-carousel .owl-item .testimonial-item h4 {
            transition: .5s;
        }

        .testimonial-carousel .owl-item.center .testimonial-item h1 {
            color: var(--dark) !important;
        }

        .testimonial-carousel .owl-item.center .testimonial-item h4 {
            color: var(--light);
        }

        .bg-banner {
            background: linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url(../img/bg-banner.jpg);
            background-attachment: fixed;
        }
        .bg-dark {
            background-color: #212121 !important;
        }
        .bg-primary {
            background-color: #e9e094 !important;
        }
        .bg-secondary {
            background-color: #343a40 !important;
        }
        .text-body {
            color: #8486A0 !important;
        }
        .text-primary {
            color: #F77D0A !important;
        }
        .text-secondary {
            color: #2B2E4A !important;
        }
        .w-100 {
            width: 100% !important;
        }
        .w-20 {
            width: 20% !important;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }

        .link a{
            color: #ca181f !important;
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
<div id="app">
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone mr-2"></i>(86) 99992-5618</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>suportetop01@hotmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="https://instagram.com/dirceu_vistoria" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <img class="w-20" alt="Brand" src="<?php echo e(asset('assets/img/logodois.png')); ?>">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#services" class="nav-item nav-link">Serviços</a>
                        <a href="#schedulings" class="nav-item nav-link">Agendar</a>
                        <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="animated fadeInRight mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>


<script src="<?php echo e(asset('/js/manifest.js')); ?>"></script>
<script src="<?php echo e(asset('/js/vendor.js')); ?>"></script>
<script src="<?php echo e(asset('/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('/js/custom-masks.js')); ?>"></script>
<script src="<?php echo e(asset('/js/moment.js')); ?>"></script>
<script src="<?php echo e(asset('/js/functions.js')); ?>"></script>
<script src="<?php echo e(asset('/js/plugins/metisMenu/jquery.metisMenu.js')); ?>"></script>
<script src="<?php echo e(asset('/js/plugins/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/inspinia.js')); ?>"></script>
<script src="<?php echo e(asset('/js/plugins/pace/pace.min.js')); ?>"></script>
<script src="<?php echo e(asset('/vendor/jquery.maskMoney.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/custom-datepicker.js')); ?>"></script>

<script src="<?php echo e(asset('/js/jquery.viewbox.js')); ?>"></script>




<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>
<script>
    $(function () {
        //$('[data-toggle="tooltip"]').tooltip();
        //$('[data-tooltip=tooltip"]').tooltip();
    });

    <?php if(Session::has('message')): ?>
    showMessage('<?php echo e(session('messageType')); ?>', '<?php echo e(session('message')); ?>');
    <?php endif; ?>

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
<?php /**PATH /Users/georgemacedo/Sites/dirceu-vistorias/resources/views/public/_layouts/master.blade.php ENDPATH**/ ?>