<!DOCTYPE html>
<html lang="es-MX">
<!-- utilizo el index-8-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Salesforce | Home">
    <meta name="theme-color" content="#2ab0be">
    <!-- ========== Page Title ========== -->
    <title>Salesforce - Emtech | Home</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/themify-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/flaticon-set.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/owl.carousel.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/owl.theme.default.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/animate.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/bootsnav.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/responsive.css') ?>" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '494697005492673'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=494697005492673&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-fixed white no-background bootsnav">
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
                        <img src="<?= base_url('assets/img/logoUniversia1.svg') ?>" class="logo logo-display" alt="Logo" style="width: 250px;">
                        <img src="<?= base_url('assets/img/logoUniversia2.svg') ?>" class="logo logo-scrolled" alt="Logo" style="width: 180px;">
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="<?= base_url('Home') ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Home') ?>#aboutUs">Sobre Nosotros</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programas</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('SalesforceAdministrator') ?>">Salesforce Administrator</a></li>
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