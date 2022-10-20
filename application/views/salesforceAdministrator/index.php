<?php
$source = "";
$medium = "";
$canal = "";

if (isset($_GET['s'])) {
    $source = $_GET['s'];
} else {
    $source = "og";
}

if (isset($_GET['m'])) {
    $medium = $_GET['m'];
} else {
    $medium = "og";
}

if (isset($_GET['c'])) {
    $canal = $_GET['c'];
} else {
    $canal = "og";
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salesforce Administrator - Emtech</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

    <!-- Stylesheet -->
    <link href="<?= base_url('assets/css/owl.carousel.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/owl.theme.default.min.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('assets/course/css/vendor.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/course/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/course/css/responsive.css') ?>">
    <link href="<?= base_url('assets/css/animate.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/bootsnav.css') ?>" rel="stylesheet">

    <script src="https://kit.fontawesome.com/0b7e7939a5.js" crossorigin="anonymous"></script>


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '494697005492673');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=494697005492673&ev=PageView
    &noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>

    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-fixed white on no-full bootsnav">
            <!-- Start Top Search -->
            <div class="container-full">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->
            <div class="container-full">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('Home') ?>">
                        <img src="<?= base_url('assets/img/logo-emtech.svg') ?>" class="logo logo-display" alt="Logo" style="width: 250px;">
                        <img src="<?= base_url('assets/img/logo-emtech2.svg') ?>" class="logo logo-scrolled" alt="Logo" style="width: 180px;">
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="<?= base_url('Home') ?>">Inicio</a>
                        </li>
                        <li>
                            <a href="Home#aboutUs">Nosotros</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programas</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('SalesforceAdministrator') ?>" style="color:#000">Salesforce Administrator</a></li>
                                <li><a href="<?= base_url('SalesforceBusinessAnalyst') ?>">Salesforce Business Analyst</a></li>
                                <li><a href="<?= base_url('SalesforceDeveloper') ?>">Salesforce Developer</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#beneficios">Beneficios</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>

    <!-- Banner -->
    <div class="banner-area banner-area-1 bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 order-lg-12 align-self-center">
                    <div class="thumb b-animate-thumb">
                        <a href="" data-toggle="modal" data-target=".modalTrailer">
                            <img class="zoom" src="<?= base_url('assets/course/img/administrator-t.png') ?>" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1 align-self-center">
                    <div class="banner-inner text-center text-lg-left mt-5 mt-lg-0">
                        <h1 class="b-animate-2 title font-Laurentiareg" style="line-height:1;color:#000000;">
                            Salesforce <br>
                            <span style="color:#B69256">Administrator</span>
                        </h1>
                        <h4 class="b-animate-1" style="color:#000000">Conviértete en el experto que le dé vida <br>a la <b>innovación tecnológica</b> de las compañías.</h4>
                        <div class="mt-4">
                            <a style="background: #B69256!important;" class="btn btn-base b-animate-3" href="https://emtech.digital/salesforce-admin/?s=<?= $source ?>&m=<?= $medium ?>&c=<?= $canal ?>">Aplicar</a>
                            <a style="color: #B69256!important;border: 2px solid #B69256!important;" class="btn btn-border-black m-2 b-animate-3" href="<?= base_url('SalesforceAdministrator/downloadSyllabus') ?>">Descargar Syllabus</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->

    <!-- Datos del curso -->
    <div class="intro-area intro-area--top">
        <div class="container">
            <div class="intro-area-inner bg-black" style="background:#8D0537; border-radius:30px;">
                <div class="row no-gutters">
                    <div class="col-lg-12 align-self-center">
                        <div class="row p-4">
                            <div class="col-xs-12 col-md-6 col-lg-3  responsive-cards-course zoom">
                                <div class="card fondo-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12 col-lg-5 my-auto">
                                                <img class="p-2" src="<?= base_url('assets/course/img/ni-1.png') ?>">
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-lg-7 my-auto info-text">
                                                <p><b>Inicio:<br> Octubre 2022</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-3  responsive-cards-course zoom">
                                <div class="card fondo-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12 col-lg-5 my-auto">
                                                <img class="p-2" src="<?= base_url('assets/course/img/ni-2.png') ?>">
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-lg-7 my-auto info-text">
                                                <p><b>Duración:<br> 10 semanas</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-3 responsive-cards-course zoom">
                                <div class="card fondo-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12 col-lg-5 my-auto">
                                                <img class="p-2" src="<?= base_url('assets/course/img/ni-3.png') ?>">
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-lg-7 my-auto info-text">
                                                <p><b>Nivel:<br> Intermedio</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-3  responsive-cards-course zoom">
                                <div class="card fondo-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12 col-lg-5 my-auto">
                                                <img class="p-2" src="<?= base_url('assets/course/img/ni-4.png') ?>">
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-lg-7 my-auto info-text">
                                                <a data-toggle="modal" data-target=".modalRequisitos" href="">
                                                    <p><b>Requisitos <img style="width:auto;padding-bottom:0rem!important" src="<?= base_url('assets/course/img/n-info.svg') ?>"><br> técnicos</b></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Datos del curso -->

    <!-- Acerca del curso -->
    <div class="about-area pd-top-140">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6 my-auto pl-0 pr-0">
                        <div class="left-icon">
                            <div class="about-icon"><img src="<?= base_url('assets/course/img/pc-curso.png') ?>" alt="img"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="about-inner-wrap pl-xl-4 pt-3 pt-lg-0 mt-lg-0">
                            <div class="section-title mb-0">
                                <h2 class="title font-Laurentiareg" style="color: #000000;">Acerca del curso</h2>
                                <h6 class="content font-Novbold" style="color:#000000;font-weight:500">Conviértete en un experto en implementación de la innovación digital de<span class="font-Novbold font-Novbold"> Salesforce,</span> gestionando las herramientas más importantes del ecosistema en cualquier industria, a través del rol <span class="font-Novbold">Salesforce Administrator.</span></h6>
                                <ul class="single-list-wrap">
                                    <li class="single-list-inner style-check-box-grid">
                                        <div class="media">
                                            <div class="media-left my-auto" style="color: #007A53 !important;">
                                                <i class="fa fa-check fa-xl"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="font-Novreg">Desarrollarás habilidades técnicas para la certificación en <b>Salesforce Administrator</b> y serás parte del impacto en los negocios en la automatización de procesos comerciales complejos, podrás entrenar a otros en el uso de la plataforma, crear reportes y tableros para mantener la eficacia en el negocio.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list-inner style-check-box-grid">
                                        <div class="media">
                                            <div class="media-left my-auto" style="color: #007A53 !important;">
                                                <i class="fa fa-check fa-xl"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="font-Novreg">A través de los <b>4 módulos</b> que dura este curso, tendrás tutorías con expertos en este rol de Salesforce, así como ejercicios didácticos que consistirán en la profunda interacción de las plataformas digitales que ofrece <b>Salesforce</b> y con las que podrás brindar soluciones más rápidas e inteligentes a diversos problemas que enfrentarás en el mundo real.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list-inner style-check-box-grid">
                                        <div class="media">
                                            <div class="media-left my-auto">
                                            </div>
                                            <div class="media-body">
                                                <a style="background: #B69256;" class="btn btn-base-s b-animate-3 mr-sm-3 mr-2" href="https://emtech.digital/salesforce-admin/?s=<?= $source ?>&m=<?= $medium ?>&c=<?= $canal ?>" style="margin-top:10px">Aplicar</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Acerca del curso -->

    <!-- Datos clave -->
    <div class="mt-5 client-area bg-base pb-5 pt-5 img-fondo-info" style="background: #F5F5F5 !important;">
        <div class="container">
            <!-- Escritorio -->
            <div class="d-none d-sm-none d-md-block">
                <div class="row text-center" style="--bs-gutter-x:-25rem">
                    <div class="col-md-2 col-lg-2 col-xs-12"></div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <h6 style="color:#000000">Sueldos desde</h6>
                        <h2 class="banner-descripcion" style="color:#B69256">$<span class="counter" style="font-size: 40px;color:#B69256 !important;">40</span> mil</h2>
                        <h6 style="color:#000000">pesos por mes</h6>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <h6 style="color:#000000">Incremento del</h6>
                        <h2 class="banner-descripcion" style="color:#B69256"><span class="counter" style="font-size: 40px;color:#B69256 !important;">400</span>%</h2>
                        <h6 style="color:#000000">en la tasa anual de demanda <br>laboral en este rol</h6>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-12"></div>
                </div>
            </div>

            <!-- Mobil -->
            <div class="d-block d-sm-block d-md-none">
                <div class="row text-center">
                    <div class="col-12 pt-3 pb-3">
                        <h6 style="color:#000000">Más de</h6>
                        <h2 class="banner-descripcion" style="color:#B69256"><span class="counter" style="font-size: 40px;color:#B69256 !important;">85</span></h2>
                        <h6 style="color:#000000">Ofertas de empleo</h6>
                    </div>
                    <hr>
                    <div class="col-12 pt-3 pb-3">
                        <h6 style="color:#000000">Sueldos de hasta</h6>
                        <h2 class="banner-descripcion" style="color:#B69256">$<span class="counter" style="font-size: 40px;color:#B69256 !important;">40</span> mil</h2>
                        <h6 style="color:#000000">pesos por mes</h6>
                    </div>
                    <hr>
                    <div class="col-12 pt-3 pb-3">
                        <h6 style="color:#000000">Incremento del</h6>
                        <h2 class="banner-descripcion" style="color:#B69256"><span class="counter" style="font-size: 40px;color:#B69256 !important;">400</span>%</h2>
                        <h6 style="color:#000000">en la tasa anual de demanda <br>laboral en este rol</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Datos clave -->

    <!-- ¿Qué aprenderás?
    ============================================= -->
    <div id="features" class="pt-5 our-features-area wavesshape-bottom carousel-shadow default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 info my-auto">
                    <h2 class="title text-center pb-5 font-Laurentiareg" style="color: #000000;">¿Qué aprenderás?</h2>
                    <div class="feature-items feature-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Preparación integral para obtener la certificación como Salesforce Administrator.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Exploración y resolución de casos con App Exchange, Mobile App y Chatter.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Automatización de procesos con el uso de herramientas como Process Builder y Flow Builder.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Optimizar los procesos de ventas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Creación de reportes y tableros interactivos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Manejo de datos y reglas de validación.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Usos potenciales de Lightning App Builder.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Personalización de objetos, campos y páginas con Lightning Experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item text-center my-auto mx-auto">
                            <div class="row">
                                <div class="col-12 pt-4 pb-3">
                                    <img style="width:2.5rem;display:inline-block" src="<?= base_url('assets/course/img/icon-carrusel-2.svg') ?>">
                                </div>
                                <div class="col-12 txt-item">
                                    <p class="font-Novbold">
                                        Mantenimiento de usuarios y opciones de seguridad.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="">
                        <img src="<?= base_url('assets/course/img/aprenderas-admin-2.png') ?>" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /¿Qué aprenderás? -->

    <!-- ¿Qué incluye el curso? -->
    <div class="counter-area bg-gray pb-4">
        <div class="container">
            <div class="counter-area-inner">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0 align-self-center text-center">
                        <h2 class="title pb-5 pt-3 font-Laurentiareg" style="color:#000000;">¿Qué incluye el curso?</h2>
                        <img src="<?= base_url('assets/course/img/que-incluye-2.png') ?>" width="80%">
                    </div>
                    <div class="col-lg-6 align-self-center incluye-cards my-auto">
                        <ul class="single-list-wrap">
                            <li class="single-list-inner style-box-bg">
                                <div class="media">
                                    <div class="media-left icono1">
                                        <img src="<?= base_url('assets/course/img/1.svg') ?>" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6 class="font-Saravekreg">Soporte con <br>tutor/experto</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="single-list-inner style-box-bg">
                                <div class="media">
                                    <div class="media-left icono2">
                                        <img src="<?= base_url('assets/course/img/2.svg') ?>" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6 class="font-Saravekreg">Recursos adicionales <br>PDF, ebooks.</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="single-list-inner style-box-bg">
                                <div class="media">
                                    <div class="media-left icono3">
                                        <img src="<?= base_url('assets/course/img/3.svg') ?>" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6 class="font-Saravekreg">Acceso a comunidad <br>EmTech</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="single-list-inner style-box-bg">
                                <div class="media">
                                    <div class="media-left icono4">
                                        <img src="<?= base_url('assets/course/img/4.svg') ?>" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6 class="font-Saravekreg">Acceso a portafolio <br>GitHub</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /¿Qué incluye el curso? -->


    <!-- testimonial area start -->
    <!--
    <div class="testimonial-area img-fondo-info">
        <div class="container">
            <div class="testimonial-area-inner bg-cover" >
                <div class="row">
                    <div class="col-lg-8">
                        <div class="testimonial-slider owl-carousel">
                            <div class="item">
                                <div class="single-testimonial-inner style-white">
                                    <span class="testimonial-quote"><i class="fa fa-quote-left"></i></span>
                                    <p class="mb-4">A lo largo del curso, conté con un tutor que me ayudó a resolver todas mis dudas, y además realicé actividades de integración entre un grupo de personas de toda la República Mexicana. 
                                        Esta fue una experiencia súper gratificante que me ayudó 
                                        a obtener los conocimientos necesarios para sentirme segura y poder incursionar en el mundo laboral”.</p>
                                    <div class="media testimonial-author">
                                        <div class="media-left">
                                            <img src="<?= base_url('assets/course/img/author/2.png') ?>" alt="img">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h6>Alondra Jazmín Soto del Valle
                                            <br>Lic. en Administración
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto text-center pb-4">
                        <a class="btn btn-base b-animate-3 mr-sm-3 mr-2" href="#">Aplicar</a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- testimonial area end -->



    <!-- ¿Cómo comenzar? -->
    <div id="process" class="work-process-area default-padding-act">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center">
                        <h2 class="title pb-5 font-Laurentiareg">¿Cómo comenzar?</h2>
                    </div>
                </div>
            </div>
            <div class="works-process-items text-center">
                <div class="row pb-3">
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-problem">
                                    <img style="width:2rem" src="<?= base_url('assets/course/img/proceso1.svg') ?>" alt="img" class="center">
                                </i>
                                <span class="font-Novbold">1</span>
                            </div>
                            <div class="info">
                                <h6>Aplica</h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon my-auto">
                                <i class="flaticon-problem"><img style="width:2rem" src="<?= base_url('assets/course/img/proceso3.svg') ?>" alt="img"></i>
                                <span class="font-Novbold">2</span>
                            </div>
                            <div class="info">
                                <h6>Elige fecha y <br>asegura tu lugar</h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-problem"><img style="width:2rem" src="<?= base_url('assets/course/img/proceso2.svg') ?>" alt="img"></i>
                                <span class="font-Novbold">3</span>
                            </div>
                            <div class="info">
                                <h6>Comienza el curso</h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- /¿Cómo comenzar? -->

    <div class="dots">
        <div class="row">
            <div class="col-lg-12 img-dots-r"></div>
        </div>
    </div>


    <!-- Start Our About
    ============================================= -->
    <div id="about" class="about-area pt-5 text-center bg-gray pb-5">
        <div class="container">
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="center-tabs">
                            <ul id="tabs" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link"><span class="font-Novbold">Aplicación</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab2" data-toggle="tab" class="nav-link"><span class="font-Novbold">Fechas de inicio</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab3" data-toggle="tab" class="nav-link"><span class="font-Novbold">Facilidades de pago</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab4" data-toggle="tab" class="nav-link"><span class="font-Novbold">Costo</span></a>
                                </li>
                            </ul>
                            <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                                <div id="tab1" class="tab-pane fade active show">
                                    <div class="row align-center">
                                        <div class="col-lg-6 col-md-12 info" style="padding-left: 0px;">
                                            <div class="about-inner-wrap pl-xl-4 pt-3 pt-lg-0 mt-lg-0">
                                                <div class="section-title mb-0">
                                                    <ul class="single-list-wrap">
                                                        <li class="single-list-inner style-check-box-grid">
                                                            <div class="media">
                                                                <div class="media-left" style="display:list-item;line-height:unset">
                                                                    <i class="fa fa-check fa-xl"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <p style="line-height:20px">El objetivo del diagnóstico de competencias es identificar las habilidades y actitudes que se vinculan con los perfiles profesionales de una carrera exitosa en <b>Salesforce.</b></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="single-list-inner style-check-box-grid">
                                                            <div class="media">
                                                                <div class="media-left" style="display:list-item;line-height:unset">
                                                                    <i class="fa fa-check fa-xl"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <p style="line-height:20px">Al terminar este diagnóstico, te daremos una perspectiva con base en tus respuestas, para determinar si eres elegible o no para el curso.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="single-list-inner style-check-box-grid">
                                                            <div class="media">
                                                                <div class="media-left" style="display:list-item;line-height:unset">
                                                                </div>
                                                                <div class="media-body">
                                                                    <a class="btn btn-base-s b-animate-3 mr-sm-3 mr-2" href="https://emtech.digital/salesforce-admin/?s=<?= $source ?>&m=<?= $medium ?>&c=<?= $canal ?>">Aplicar</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 thumb">
                                            <img src="<?= base_url('assets/course/img/ac-curso.png') ?>" alt="Thumb">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <div class="row align-center">
                                        <div class="col-lg-12 col-md-12 info">
                                            <div class="card card-fecha">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-4 text-center my-auto">
                                                                    <img src="<?= base_url('assets/course/img/dates-icon.svg') ?>" style="width:3.5rem">
                                                                </div>
                                                                <div class="col-md-8 pl-0 curso-nombre my-auto">
                                                                    <h6 class="font-Novbold" style="line-height:22px;margin-bottom:0px;color:#333333"><b>Salesforce Administrator<br> <span class="font-Novbold color-sf font-Novbold">Octubre 2022</span></b></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-6 col-xs-12 text-right">
                                                            <a class="btn btn-base-s b-animate-3 mr-sm-3 mr-2" href="https://emtech.digital/salesforce-admin/?s=<?= $source ?>&m=<?= $medium ?>&c=<?= $canal ?>">Aplicar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane fade">
                                    <div class="row align-center pb-4 equal-cols">
                                        <div class="col-12 text-center pl-4 pr-4 pb-5 pt-2 mb-4">
                                            <h6>Queremos que el pago sea la menor de tus preocupaciones y te enfoques en acelerar
                                                tu desarrollo profesional, por eso te ofrecemos diversas opciones de pago.
                                            </h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4  col-xs-12 info pb-3">
                                            <div class="card card-pagos">
                                                <div class="card-body text-center">
                                                    <img src="<?= base_url('assets/course/img/pagos-icon.svg') ?>" alt="Thumb" style="width:4rem;padding-bottom:1rem">
                                                    <p style="line-height:20px">Realiza tu pago de <span class="color-sf font-Novbold">forma segura</span> por medio de tu tarjeta de crédito o de débito.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4  col-xs-12 info pb-3">
                                            <div class="card card-pagos">
                                                <div class="card-body text-center">
                                                    <img src="<?= base_url('assets/course/img/pagos-icon.svg') ?>" alt="Thumb" style="width:4rem;padding-bottom:1rem">
                                                    <p style="line-height:20px">Difiere tu pago hasta en <span class="color-sf font-Novbold">24 mensualidades con cuota fija</span> utilizando tu tarjeta de crédito.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4  col-xs-12 info pb-3">
                                            <div class="card card-pagos">
                                                <div class="card-body text-center">
                                                    <img src="<?= base_url('assets/course/img/pagos-icon.svg') ?>" alt="Thumb" style="width:4rem;padding-bottom:1rem">
                                                    <p style="line-height:20px">Difiere tu pago hasta en <span class="color-sf font-Novbold">5 quincenas sin intereses.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab4" class="tab-pane fade">
                                    <div class="row align-center pb-4">
                                        <div class="col-lg-7 col-md-7  col-xs-12 info pb-3 my-auto">
                                            <div class="text-center">
                                                <img class="pb-4" src="<?= base_url('assets/course/img/pc-costo.png') ?>" alt="Thumb">
                                                <h4>Salesforce <span style="color:#B69256">Administrator</span></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5  col-xs-12 info pb-3">
                                            <div class="about-inner-wrap pl-xl-4 pt-3 pt-lg-0 mt-lg-0">
                                                <div class="section-title mb-0">
                                                    <h2 style="color:#282827;padding-left:10px">MX$25,000</h2>
                                                    <ul class="single-list-wrap">
                                                        <li class="single-list-inner style-check-box-grid costo my-auto">
                                                            <div class="media">
                                                                <div class="media-left" style="display:list-item;line-height:unset">
                                                                    <i class="fa-solid fa-circle-check"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6>Acompañamiento de un experto</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="single-list-inner style-check-box-grid costo my-auto">
                                                            <div class="media">
                                                                <div class="media-left" style="display:list-item;line-height:unset">
                                                                    <i class="fa-solid fa-circle-check"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6>Examen de certificación</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="single-list-inner style-check-box-grid costo my-auto">
                                                            <div class="media">
                                                                <div class="media-left" style="display:list-item;line-height:unset">
                                                                    <i class="fa-solid fa-circle-check"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6>Acceso a comunidad EmTech</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="single-list-inner style-check-box-grid costo my-auto">
                                                            <div class="media">
                                                                <div class="media-left" style="display:list-item;line-height:unset">
                                                                    <i class="fa-solid fa-circle-check"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6>Garantía de empleo</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <a class="btn btn-base-s b-animate-3 ml-2" href="https://emtech.digital/salesforce-admin/?s=<?= $source ?>&m=<?= $medium ?>&c=<?= $canal ?>">Aplicar</a>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->


    <div class="dots">
        <div class="row">
            <div class="col-lg-12 img-dots-l"></div>
        </div>
    </div>

    <!-- Start Blog Area
    ============================================= -->
    <div id="blog" class="blog-area left-border default-padding-act bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-12 text-center pb-5">
                        <h2 class="font-Laurentiareg">
                            Conoce las otras oportunidades <br> que Salesforce tiene para ti
                        </h2>
                    </div>
                </div>
            </div>
            <div class="blog-items content-less">
                <div class="row pb-3 equal-cols">
                    <div class="col-lg-2 col-md-2 col-xs-6"> </div>
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item top-card">
                        <div class="item">
                            <div class="thumb">
                                <a href="SalesforceBusinessAnalyst">
                                    <img src="<?= base_url('assets/course/img/analyst.png') ?>" alt="Thumb">
                                    <div class="date text-left">
                                        <span class="font-Novbold"><strong>Próximamente <br></strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="font-Laurentiareg" style="color: #000000;">
                                    <a href="SalesforceBusinessAnalyst">Salesforce <br> Business Analyst</a>
                                </h4>
                                <p class="font-Saravekreg" style="color:#333333">Duración: 10 semanas</p>
                                <p class="font-Saravekreg" style="color:#333333">Nivel: Experto</p>
                                <div class="pt-4">
                                    <a class="btn btn-base-s b-animate-3 mr-sm-3 mr-2" href="https://emtech.digital/salesforce-analyst/">Aplicar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item top-card">
                        <div class="item">
                            <div class="thumb">
                                <a href="SalesforceDeveloper">
                                    <img src="<?= base_url('assets/course/img/developer.png') ?>" alt="Thumb">
                                    <div class="date text-left">
                                        <span class="font-Novbold"><strong>Octubre <br> 2022</strong></span>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="font-Laurentiareg" style="color: #000000;">
                                    <a href="SalesforceDeveloper">Salesforce <br>Developer</a>
                                </h4>
                                <p class="font-Saravekreg" style="color:#333333">Duración: 14 semanas</p>
                                <p class="font-Saravekreg" style="color:#333333">Nivel: Experto</p>
                                <div class="pt-4">
                                    <a class="btn btn-base-s b-animate-3 mr-sm-3 mr-2" href="https://emtech.digital/salesforce-developer/">Aplicar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <div class="col-lg-2 col-md-2 col-xs-6"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->


    <!-- Start Our About
    ============================================= -->
    <div id="about" class="about-area pt-5 bg-gray pb-5">
        <div class="container col-lg-12">
            <div class="row">
                <div class="heading-left col-lg-6 pb-2 pt-5">
                    <div class="mt-5 pl-5 col-lg-12">
                        <h2 class="font-Laurentiareg"> Nuestras Alianzas</h2>
                        <p class="font-Saravekreg mt-5">A lo largo de los años hemos construido relaciones con distintos actores clave del ecosistema global que han contribuido al diseño del contenido.</p>
                    </div>
                </div>
                <div class="about-items pb-3 col-lg-6 text-center pb-2 pt-5">
                        <div class="col-lg-12 col-md-12 col-xs-12 info pb-3">
                            <img src="<?= base_url('assets/img/alianzas.png') ?>" alt="Thumb" style="padding-bottom:1rem">
                        <!-- </div>
                        <div class="col-lg-6 col-md-6  col-xs-12 info pb-3">
                            <img src="<?= base_url('assets/img/logo-universia.png') ?>" alt="Thumb" style="width:12rem;padding-bottom:1rem">
                        </div>
                        <div class="col-lg-6 col-md-6  col-xs-12 info pb-3">
                            <img src="<?= base_url('assets/img/logo-santander.png') ?>" alt="Thumb" style="width:6.5rem;padding-bottom:1rem">
                        </div>
                        <div class="col-lg-6 col-md-6  col-xs-12 info pb-3">
                            <img src="<?= base_url('assets/img/logo-salesforce.png') ?>" alt="Thumb" style="width:6.5rem;padding-bottom:1rem">
                        </div> -->
                    </div>
                </div>
           </div>
        </div>
    </div>
        <!-- End Our About -->

        <footer class="bg-dark text-light">
            <div class="container">
                <div class="f-items default-padding">
                    <div class="row">
                        <div class="equal-height col-lg-3 col-md-6 item">
                            <div class="f-item link">
                                <img src="<?= base_url('assets/img/logo-panamericana.png')?>" alt="" srcset="">
                            </div>
                        </div>
                        <div class="equal-height col-lg-3 col-md-6 item">
                            <div class="f-item link">
                                <!-- <h4 class="widget-title">Inicio</h4> -->
                                <ul>
                                    <li>
                                        <a href="<?= base_url('Home') ?>#aboutUs">¿Quiénes somos?</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Home') ?>#aboutUs">¿Qué hacemos?</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Faqs') ?>">Preguntas frecuentes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="equal-height col-lg-3 col-md-6 item">
                            <div class="f-item link">
                               <!--  <h4 class="widget-title">Cursos</h4> -->
                                <ul>
                                    <li>
                                        <a href="<?= base_url('SalesforceAdministrator') ?>">Salesforce Administrator</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('SalesforceBusinessAnalyst') ?>">Salesforce Business Analyst</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('SalesforceDeveloper') ?>">Salesforce Developer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="equal-height col-lg-3 col-md-6 item">
                            <div class="f-item link">
                                <!-- <h4 class="widget-title">El programa</h4> -->
                                <ul>
                                    <li>
                                        <a href="<?= base_url('Home') ?>#caracteristicas">Características</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Home') ?>#beneficios">Beneficios</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('Home') ?>#testimonios">Testimoniales</a>
                                    </li>
                                    <li>
                                        <a href="#">Nuestra Alianza</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="equal-height col-lg-3 col-md-6 item">
                            <div class="f-item contact">
                               <!--  <h4 class="widget-title" style="color:#FFF">Contáctanos</h4> -->
                                <p>
                                    Síguenos en nuestras redes sociales.
                                </p>
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/home/iconoFacebook.png') ?>"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/home/iconoInstagram.png') ?>"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/home/iconoLinkedin.png') ?>"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="p-2 footer-bottom" style="background-color: #E8E9EB;">
            <div class="row container">
                <div class="col-lg-2 col-md" style="padding-left: 2rem;">
                    <img src="<?= base_url('assets/img/logo-emtech2.svg') ?>" style="width: 90%;">
                </div>
                <div class="col-10 col-md my-auto">
                    <small class="d-block mb-3 text-muted my-auto" style="color: #00215B !important;">
                        Emerging Technologies Institute | All Rights Reserved
                    </small>
                </div>
            </div>
        </div>
        <!-- End Footer-->

        <!-- back to top area start 
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
     back to top area end -->

        <!--Modal: Trailer-->
        <div class="modal fade modalTrailer" id="modalTrailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <!--Content-->
                <div class="modal-content" style="background-color: transparent;border: none;">
                    <div class="modal-header" style="border-bottom:0px">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#FFF;text-shadow:none;opacity:1;font-size:2rem">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mb-0 p-0">
                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <video width="320" height="240" controls>
                                <source src="<?= base_url('assets/videos/SFA_Trailer_v1.mp4') ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal: Trailer-->


        <!-- Modal -->
        <div class="modal fade modalRequisitos" id="modalRequisitos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="border-radius:15px">
                    <div class="modal-header" style="border-bottom:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#000 !important;font-size: 2.5rem;font-weight:500;opacity:1">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Requisitos previos: <br><br>
                        Este programa es recomendado para aquellas personas a punto de certificarse o están certificadas en Salesforce Administrator.
                        Se sugieren habilidades en: Comunicación, resolución de problemas, atención al detalle, aprendizaje continuo,
                        gestión de usuarios, gestión de seguridad, análisis de negocios, análisis de datos, gestión de datos, mentalidad de diseñador,
                        gestión al cambio, automatización de procesos, gestión de productos y gestión de proyectos.
                    </div>
                </div>
            </div>
        </div>

        <script>

        </script>

        <!-- all plugins here -->
        <script src="<?= base_url('assets/course/js/vendor.js') ?>"></script>
        <!-- main js  -->
        <script src="<?= base_url('assets/course/js/main.js') ?>"></script>


        <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery-1.12.4.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/equal-height.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/modernizr.custom.13711.js') ?>"></script>
        <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/progress-bar.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/count-to.js') ?>"></script>
        <script src="<?= base_url('assets/js/YTPlayer.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/circle-progress.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootsnav.js') ?>"></script>
        <script src="<?= base_url('assets/course/js/main-course.js') ?>"></script>
</body>

</html>