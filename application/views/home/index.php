<?php

    $source = "";
    $medium = "";
    $canal = "";
    
    if(isset($_GET['s'])) {
        $source= $_GET['s'];
    }else {
        $source = "og";
    }

    if(isset($_GET['m'])) {
        $medium = $_GET['m'];
    }else {
        $medium = "og";
    }
    
    if(isset($_GET['c'])) {
        $canal = $_GET['c'];
    }else {
        $canal = "og";
    }
    

?>


    <!-- End Header -->
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-combo gradient-bg  bg-bottom-center text-light" style="background-image: url(<?= base_url('assets/img/home/bannerUniversia.png') ?>);padding-top: 0px;height: max-content;">
        <div class="item">
            <div class="box-table" style="height: 47rem;">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="double-items">
                                <div class="col-lg-12 info">
                                    <h2 class="wow fadeInLeft font-Laurentiareg" data-wow-duration="1s">
                                        Acelera tu vida
                                        <div>laboral con Salesforce</div>
                                    </h2>
                                    <h3 class="wow fadeInLeft font-Saravekreg" data-wow-duration="1.5s">
                                        Desarrolla tus competencias digitales y<br>
                                        obtén las mejores 
                                        <span class="font-Saravekbold" style="color: #B9975B;">oportunidades de trabajo.</span>
                                    </h3>
                                    <a class="btn circle btn-sm btn-naranja shape wow fadeInUp" data-wow-duration="1.8s" href="#cursos"><span class="font-Saravekreg">Ver cursos</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Star About Area
    ============================================= -->
    <div class="area-titulo shape-left bg-blue-light relative" style="padding-bottom: 5rem;padding-top: 6rem;">
        <div class="container">
            <h4 class="text-center font-Saravekreg">Nos aliamos con estas <span class="font-Saravekbold">organizaciones de clase mundial</span> para ayudarte a impulsar tu carrera:</h4>
            <div class="pt-3 row text-center">
                <div class="col-lg-12">
                    <img src="<?= base_url('assets/img/home/logosJuntosGris.png') ?>" alt="Thumb" style="width: 95%;">
                </div>
            </div>
        </div>
    </div>
    <div id="aboutUs" class="pt-5 about-area shape-left bg-blue-light relative" style="padding-bottom: 2rem;">
        <div class="container">
            <div class="items-box">
                <div class="row">
                    <div class="col-lg-6 thumb wow fadeInDown" style="margin-top: -5rem;">
                        <img src="<?= base_url('assets/img/home/jovenLibro.png') ?>" alt="Thumb" style="width: 95%;">
                    </div>
                    <div class="col-lg-6 info wow fadeInRight" data-wow-duration="1.3s">
                        <div class="about-tabs">
                            <ul id="tabs" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">¿En qué consiste?</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">¿Qué hacemos?</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">¿Cómo lo hacemos?</a>
                                </li>
                            </ul>
                            <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                                <div id="tab1" class="tab-pane fade active show">
                                    <ul>
                                        <li>
                                            <p class="pr-5" style="font-family: 'saravek';">
                                                <span class="font-Saravekbold" style="color: #000;">En la Universidad Panamericana,</span> hemos creado alianzas
                                                estratégicas con otros actores clave, para apostar a tu 
                                                formación académica y laboral en las nuevas tecnologías que 
                                                están transformando el mundo.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="pr-5" style="font-family: 'saravek';">
                                                <span class="font-Saravekbold" style="color: #000;">Creamos un gran esfuerzo personalizado, para que obtengas</span> 
                                                la increíble oportunidad de transformar tu vida personal y 
                                                profesional, al incursionar en el ecosistema digital más 
                                                importante del planeta; Salesforce.  
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <ul>
                                        <li>
                                            <p class="pr-5" style="font-family: 'saravek';">
                                                Te brindamos la oportunidad de iniciar tu camino
                                                profesional en <span class="font-Saravekbold" style="color: #000;">Salesforce, el CRM #1 en el mundo,</span> con la 
                                                finalidad de que obtengas una experiencia única, al 
                                                transformar tus habilidades y competencias para 
                                                especializarte y certificarte en Salesforce.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab3" class="tab-pane fade">
                                    <ul>
                                        <li>
                                            <p class="pr-5" style="font-family: 'saravek';">
                                            <span class="font-Saravekbold" style="color: #000;">Te ofrecemos una beca completa para acceder al curso 
                                            introductorio Salesforce for Success,</span> con el objetivo de 
                                            descubrir el potencial de las herramientas y ventajas 
                                            exponenciales de Salesforce, para que posteriormente puedas 
                                            especializarte en algunos de los career paths que el mundo de 
                                            <span class="font-Saravekbold" style="color: #000;">Salesforce tiene para ti.</span> 
                                            </p>
                                        </li>
                                        <li>
                                            <p class="pr-5" style="font-family: 'saravek';">
                                            Al finalizar tu especialidad y <span class="font-Saravekbold" style="color: #000;">certificarte en Salesforce, 
                                            UNIVERSIA,</span> te conectará con extraordinarias ofertas de 
                                            empleo, en las mejores empresas que están cambiando el 
                                            mundo con Salesforce.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->
    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area bg-gray default-padding numbersMove">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-color:#EDEDED;background-repeat: no-repeat;background-size: cover;">
        </div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="text-center client-items divDesarrolloProfesional" style="padding-left: 5rem;">
                <div class="row">
                    <h2 class="text-center font-Laurentiareg" style="color:#000000;position: relative;font-weight: 600;font-size: 38px;">¿Por qué desarrollarte
                        profesionalmente en el
                        mundo de Salesforce?
                    </h2>
                </div>
                <div class="row rowIconosDesarrolloProfesional equals-cols">
                    <div class="col-lg-4 col-md-6 item">
                        <ul>
                            <li style="float: left;width: 15%;">
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoCalendario.png') ?>" alt="">
                            </li>
                            <li style="float: right;width: 80%;text-align: left;color:#000;">
                                <div class="fun-fact">
                                    <!-- <div class="timer" data-to="9" data-speed="5000">9+<span>m</span></div> -->
                                    <span class="medium font-Novreg">Se crearán</span>
                                    <div id="counter" class="counter" style="color: #000;"><span class="font-Novbold" style="color:#000;">9.3 millones</span>
                                    </div>

                                    <span class="medium">de empleos para 2026</span>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <ul>
                            <li style="float: left;width: 15%;">
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoMaletin.png') ?>" alt="">
                            </li>
                            <li style="float: right;width: 80%;text-align: left;">
                                <div class="fun-fact">
                                    <!-- <div class="timer" data-to="9" data-speed="5000">9+<span>m</span></div> -->
                                    <span class="medium">En México habrá más de </span>
                                    <div id="counter2" class="counter"><span class="font-Novbold">500,000</span></div>
                                    <span class="medium">nuevos puesto de trabajo</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <ul>
                            <li style="float: left;width: 15%;">
                                <img class="pt-4 mx-auto" src="<?= base_url('assets/img/home/iconoCalendario.png') ?>" alt="">
                            </li>
                            <li style="float: right;width: 80%;text-align: left;">
                                <div class="fun-fact">
                                    <!-- <div class="timer" data-to="9" data-speed="5000">9+<span>m</span></div> -->
                                    <span class="medium">Sueldos de hasta </span>
                                    <div id="counter3" class="counter"><span class="font-Novbold">$60,000</span></div>
                                    <span class="medium">pesos al mes</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->
    <!-- Start Work Process Area
    ============================================= -->
    <div class="work-process-area default-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="font-Laurentiareg" style="color: #000;">
                            <b>Salesforce es más que el CRM #1 en el mundo</b>
                        </h2>
                    </div>
                </div>
            </div>
            <style>
                .row.equal-cols {
                  display: -webkit-flex;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-flex-wrap: wrap;
                  -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
                  }
                  
                  .row.equal-cols:before,
                  .row.equal-cols:after {
                  display: block;
                  }
                  
                  .row.equal-cols > [class*='col-'] {
                  display: -webkit-flex;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                  flex-direction: column;
                  }
                  
                  .row.equal-cols > [class*='col-'] > * {
                  -webkit-flex: 1 1 auto;
                  -ms-flex: 1 1 auto;
                  flex: 1 1 auto; 
                  }                
            </style>
            <div class="works-process-items text-center">
                <div class="row equal-cols">
                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        
                            <div class="card detalles-card p-2" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body p-2" style="padding: 0px;padding-bottom: 1rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta.svg') ?>" alt="Icono" width="100" />
                                    <div class="info">
                                        <h5 class="font-Saravekbold" style="color: #000;">¡Salesforce es para todos!</h5>
                                        <p class="font-Saravekreg" style="line-height: 20px;">
                                            No importa lo que hayas
                                            estudiado o a lo que te
                                            dediques, Salesforce tiene un lugar para ti.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        
                            <div class="card detalles-card p-2" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body p-2" style="padding: 0px;padding-bottom: 1.3rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta2.svg') ?>" alt="Icono" width="100" />
                                    <div class="info">
                                        <h5 class="font-Saravekbold" style="color: #000;">Nubes de Salesforce</h5>
                                        <p class="font-Saravekreg" style="line-height: 20px;">
                                            Brindan una innovación
                                            tecnológica en todos los
                                            departamentos de una compañía.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                       
                            <div class="card detalles-card p-3" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body  p-2" style="padding: 0px;padding-bottom: 3rem;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta3.svg') ?>" alt="Icono" width="100" />
                                    <div class="info">
                                        <h5 class="font-Saravekbold" style="color: #000;">Accesibilidad ilimitada</h5>
                                        <p class="font-Saravekreg" style="line-height: 20px;">
                                            Tendrás la oportunidad de
                                            trabajar desde cualquier parte
                                            del mundo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 single-item">
                        
                            <div class="card detalles-card p-2" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                <div class="card-body p-2" style="padding: 0px;">
                                    <img class="pt-2 pb-3 mx-auto d-block" id="iconModulo1" style="cursor: pointer;width: 90px;" src="<?= base_url('assets/img/home/iconoTarjeta4.svg') ?>" alt="Icono" width="100" />
                                    <div class="info">
                                        <h5 class="font-Saravekbold" style="color: #000;">Salesforce se encuentra en
                                            todas las industrias</h5>
                                        <p class="font-Saravekreg" style="line-height: 20px;">
                                            Desde la compañía más pequeña,
                                            hasta la más grande. La flexibilidad
                                            de sus herramientas permiten
                                            situarse en cualquier industria.
                                        </p>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process Area -->
    
    <style>
        .site-heading h3 .bg-vector {
            position: absolute;
            left: 0;
            top: 0px;
            width: 287px;
            height: 7px;
            background: url(assets/img/home/barra_txt.svg) no-repeat;
            z-index: 0;
            -webkit-animation: shape-animation 3s infinite;
            animation: shape-animation 3s infinite;
        }
    </style>
    <!-- Start Our About
    ============================================= -->
    <div class="about-area bg-blue-light overflow-hidden rectangular-shape default-padding">
        <div class="container">
            <div class="about-items choseus-items right-thumb">
                <div class="row align-center">
                    <div class="col-lg-12">
                        <div class="site-heading text-center" style="position:relative">
                            <h2 class="font-Laurentiareg" style="color: #000;" style="position:relative">
                                Incursiona en el ecosistema digital de Salesforce y<br> lleva tu carrera profesional hasta las nubes.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row rowVideo">
                    <div class="col-lg-6 my-auto">
                        <div class="thumb wow fadeInUp" data-wow-delay="0.5s">
                            <video class="video-trailer" controls poster="<?= base_url('assets/img/home/portadaVideo2.png') ?>" style="cursor: pointer;width:100%">
                                <source src="<?= base_url('assets/videos/ADS_S4S.mp4') ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="pt-5 col-lg-6 columnaSliderVertical">
                        <h3 class="font-Laurentiareg"><b>Salesforce for success</b></h3>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="font-Saravekreg">
                                    Con este curso reconocerás el potencial de Salesforce,
                                    las características específicas de su integración a la nube, 
                                    su innovación, aplicaciones, y oportunidades 
                                    exponenciales que ofrece para todos los departamentos de una compañía, 
                                    incluidos marketing, ventas, comercial y servicio. 
                                </p>
                            </div>
                        </div>
                        <div class="pt-5 row">
                            <div class="col-md-12">
                            <a class="btn circle btn-sm btn-naranja shape wow fadeInUp" data-wow-duration="1.8s" href="#cursos"><span class="font-Saravekreg">Aplicar</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->
    <!-- Start Tabs
    ============================================= -->
    <div class="tabs-area default-padding-bottom text-center bg-blue-light seccion-carru-ver" id="cursos">
        <div class="container">
            <div class="pb-5 row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading">
                        <h5 class="font-Saravekbold">Posterior a este curso, 
                            estarás listo para continuar tu proceso en alguno 
                            de los career paths que te ofreceremos para convertirte en 
                            un experto en Salesforce.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="pb-5 row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading">
                        <h2 class="font-Laurentiareg" style="color: #000;">
                        <b>Conoce los diferentes tipos de <span style="font-style: italic;">career
                                path</span> queSalesforce tiene
                                para ti.</b><br>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-tabs">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tabSA" data-toggle="tab" class="active nav-link font-Saravekbold">
                                    Salesforce Administrator
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tabSBA" data-toggle="tab" class="nav-link font-Saravekbold">
                                    Salesforce Business Analyst
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tabSD" data-toggle="tab" class="nav-link font-Saravekbold">
                                    Salesforce Developer
                                </a>
                            </li>
                        </ul>
                        <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                            <div id="tabSA" class="tab-pane fade active show">
                                <div class="row align-center">
                                    <div class="col-lg-6 col-md-12 info">
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                El Administrador de <b>Salesforce</b> es un experto en darle 
                                                vida a la innovación tecnológica de las herramientas de Salesforce. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                Asume su rol, en el alto impacto de la automatización de procesos comerciales complejos, eficientando los tiempos de servicio al cliente, a través de los diversos usos de la plataforma.  
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                Gestiona a los usuarios y brinda vistas personalizadas por medio 
                                                de tableros y reportes para optimizar los <b>procesos internos de la compañía.</b> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a class="btn circle btn-sm btn-naranja wow fadeInUp" data-wow-duration="1.8s" href="<?= base_url('SalesforceAdministrator') ?>/?s=<?=$source?>&m=<?=$medium?>&c=<?=$canal?>" style="border-radius: 16px;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;margin-left:3rem;">Aplicar</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="video-tarjeta col-lg-6 col-md-12 thumb">
                                        <div id="portfolio" class="projects-area overflow-hidden">
                                            <div class="container">
                                                <div class="project-items-area">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="gallery-content">
                                                                <div class="magnific-mix-gallery masonary">
                                                                    <div id="portfolio-grid" class="gallery-items projects-items">
                                                                        <!-- Single Item -->
                                                                        <div class="pf-item consulting branding p-5">
                                                                            <div class="single-item">
                                                                                <div class="thumb item-effect">
                                                                                    <img src="<?= base_url('assets/img/home/imgSalesforceAdmin-c.png') ?>" alt="Thumb">
                                                                                    <div class="effect-info">
                                                                                        <a href="<?= base_url('assets/videos/SFA_Trailer_v1.mp4') ?>" class="popup-youtube">
                                                                                            <i class="fas fa-play"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h6 style="color: #FFFFFF;text-align: center;">
                                                                                        <a style="color: #FFFFFF;text-align: center;margin-top:0px;" href="#">Fecha de inicio: Octubre 2022</a>
                                                                                    </h6>
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
                                </div>
                            </div>
                            <div id="tabSBA" class="tab-pane fade">
                                <div class="row align-center">
                                    <div class="col-lg-6 col-md-12 info">
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                El experto analista de datos, guia a las compañías a mejorar los procesos de negocio con éxito. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                El rol de <b>Salesforce Business Analyst</b> documenta y analiza los requisitos 
                                                en torno a los desafíos de negocio y produce soluciones basadas en el 
                                                análisis profundo de los datos.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                Con un enfoque metódico, es capaz de modelizar datos, diagnósticos
                                                y análisis, que ayuden a tomar las mejores rutas de éxito 
                                                y marcar la <b>diferencia en el mundo empresarial.</b> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a class="btn circle btn-sm btn-naranja wow fadeInUp" data-wow-duration="1.8s" href="<?= base_url('SalesforceBusinessAnalyst') ?>/?s=<?=$source?>&m=<?=$medium?>&c=<?=$canal?>" style="border-radius: 16px;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;margin-left:3rem;">Ver curso</a>
                                            </div>
                                        </div>                                        

                                    </div>
                                    <div class="video-tarjeta col-lg-6 col-md-12 thumb">
                                        <div id="portfolio" class="projects-area overflow-hidden">
                                            <div class="container">
                                                <div class="project-items-area">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="gallery-content">
                                                                <div class="magnific-mix-gallery masonary">
                                                                    <div id="portfolio-grid" class="gallery-items projects-items">
                                                                        <!-- Single Item -->
                                                                        <div class="pf-item consulting branding p-5">
                                                                            <div class="single-item">
                                                                                <div class="thumb item-effect">
                                                                                    <img src="<?= base_url('assets/img/home/imgSalesforceBusiness-c.png') ?>" alt="Thumb">
                                                                                    <div class="effect-info">
                                                                                        <a href="<?= base_url('assets/videos/SBA_Trailer_v2.mp4') ?>" class="popup-youtube">
                                                                                            <i class="fas fa-play"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h6 style="color: #FFFFFF;text-align: center;">
                                                                                        <a style="color: #FFFFFF;text-align: center; margin-top:0px;" href="#">Fecha de inicio: Próximamente</a>
                                                                                    </h6>
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
                                </div>
                            </div>
                            <div id="tabSD" class="tab-pane fade">
                                <div class="row align-center">
                                    <div class="col-lg-6 col-md-12 info">
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                El desarrollador de Salesforce es un profesional 
                                                que conoce a profundidad el funcionamiento de la 
                                                arquitectura de Salesforce; <b>desde la creación de 
                                                bases de datos, hasta programación con Apex y el 
                                                desarrollo de interfaces de usuario profesionales en Visualforce.</b> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row row-tab-cursos">
                                            <div class="col-lg-2 colPalomaIntoTarjeta" style="margin-right: -2rem;">
                                                <img class="palomaIntoTarjeta" src="<?= base_url('assets/img/home/palomita.png') ?>" style="width: 40%;">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pr-3 font-Saravekreg">
                                                Combina su talento de desarrollador, con la finalidad 
                                                de crear <b>plataformas y aplicaciones, 
                                                que brinden diversas soluciones tecnológicas personalizadas.</b> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a class="btn circle btn-sm btn-naranja wow fadeInUp" data-wow-duration="1.8s" href="<?= base_url('SalesforceDeveloper') ?>/?s=<?=$source?>&m=<?=$medium?>&c=<?=$canal?>" style="border-radius: 16px;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;margin-left:3rem;">Ver curso</a>
                                            </div>
                                        </div>                                         

                                    </div>
                                    <div class="video-tarjeta col-lg-6 col-md-12 thumb">
                                        <div id="portfolio" class="projects-area overflow-hidden">
                                            <div class="container">
                                                <div class="project-items-area">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="gallery-content">
                                                                <div class="magnific-mix-gallery masonary">
                                                                    <div id="portfolio-grid" class="gallery-items projects-items">
                                                                        <!-- Single Item -->
                                                                        <div class="pf-item consulting branding p-5">
                                                                            <div class="single-item">
                                                                                <div class="thumb item-effect">
                                                                                    <img src="<?= base_url('assets/img/home/imgSalesforceDeveloper-c.png') ?>" alt="Thumb">
                                                                                    <div class="effect-info">
                                                                                        <a href="<?= base_url('assets/videos/SFD_Trailer_v1.mp4') ?>" class="popup-youtube">
                                                                                            <i class="fas fa-play"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h6 style="color: #FFFFFF;text-align: center;">
                                                                                        <a style="color: #FFFFFF;text-align: center;margin-top:0px;" href="#">Fecha de inicio: Octubre 2022</a>
                                                                                    </h6>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tabs -->
    <div id="caracteristicas" class="work-process-area default-padding">
        <div class="container">
            <div class="works-process-items text-center">
                <div class="row">
                    <div class="col-lg-5 single-item text-left" style="padding-top: 10rem;">
                        <div class="pb-5 item-custom">
                            <h2 class="font-Laurentiareg tituloBeneficiosh2" style="color: #000000;text-align: left;"><b>Característas del</b> <br>
                                <b>programa</b></h2>
                            <h6 class="font-Saravekreg parrafoTituloBeneficios" style="color: #333333; text-align: left;">
                            Reconocerás los beneficios, innovaciones y<br>
                            alcances exponenciales de iniciar una <br>
                            <b>carrera en Salesforce.</b>
                        </div>
                        <a class="btn circle btn-sm btn-naranja wow fadeInUp btnVerCursoBeneficios" data-wow-duration="1.8s" href="#cursos" style="border-radius: 16px;visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">Ver cursos</a>
                    </div>
                    <div class="col-lg-7 single-item">
                        <div class="row">
                            <div class="col-lg-6" style="padding-top: 5rem;">
                                <div class="item-custom">
                                    <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                        <div class="card-body container text-left" style="padding: 12px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoCasosPracticos.svg') ?>" alt="Icono" />
                                                </div>
                                                <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                    <h5 class="font-Laurentiareg" style="color: #000000;padding-top: 1rem;font-weight: 600;">Casos de éxito</h5>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="info parrafoTarjetasDescuadradas">
                                                <p class="font-Saravekreg" style="line-height: 20px;color:rgba(0, 0, 0, 0.7);">
                                                Conocerás los casos de éxito que<br> 
                                                diversas empresas lograron a través<br> 
                                                de las herramientas digitales de<br> 
                                                Salesforce. 
                                                </p>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);margin-bottom: 2rem;">
                                        <div class="card-body container text-left" style="padding: 12px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoTutor.svg') ?>" alt="Icono" />
                                                </div>
                                                <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                    <h5 class="font-Laurentiareg" style="color: #000000;padding-top: 1rem;font-weight: 600;">Acompañamiento</h5>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="info parrafoTarjetasDescuadradas">
                                                <p class="font-Saravekreg" style="line-height: 20px;color:rgba(0, 0, 0, 0.7);">
                                                Tendrás un acompañamiento<br> 
                                                personalizado por parte de los mejores<br> 
                                                expertos, quienes estarán guiándote<br> 
                                                durante todo tu proceso.
                                                </p>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                    <div class="card-body container text-left" style="padding: 12px;">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoContenidoAsincrono.svg') ?>" alt="Icono" />
                                            </div>
                                            <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                <h5 class="font-Laurentiareg" style="color: #000000;padding-top: 1rem;font-weight: 600;">Contenido Asíncrono</h5>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="info parrafoTarjetasDescuadradas">
                                            <p class="font-Saravekreg" style="line-height: 20px;color:rgba(0, 0, 0, 0.7);">
                                            Podrás avanzar a tu propio ritmo y<br> 
                                            tendrás la posibilidad de organizar tus<br> 
                                            tiempos para observar el contenido<br> 
                                            asíncrono en el momento que lo<br> 
                                            decidas.
                                            </p>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <div class="card detalles-card" style="border-radius: 10px;border: none;box-shadow: 0px 25px 30px rgba(126, 126, 126, 0.15);">
                                    <div class="card-body container text-left" style="padding: 12px;">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="pt-2 pb-3 mx-auto d-block imgIconosTarjetasDescuadradas" id="iconModulo1" style="cursor: pointer;width: 100%;" src="<?= base_url('assets/img/home/iconoSesiones.svg') ?>" alt="Icono" />
                                            </div>
                                            <div class="col-lg-9 text-left tituloTarjetasDescuadradas" style="padding-left: 0px;">
                                                <h5 class="font-Laurentiareg" style="color: #000000;padding-top: 1rem;font-weight: 600;">Sesiones Síncronas</h5>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="info parrafoTarjetasDescuadradas">
                                            <p class="font-Saravekreg" style="line-height: 20px;color:rgba(0, 0, 0, 0.7);">
                                            Tendrás la oportunidad de participar <br> 
                                            activamente en las sesiones de trabajo<br> 
                                            e interactuar con otros integrantes del<br> 
                                            programa. Serán guiadas por tutores y<br> 
                                            expertos, con los que tendrás el apoyo<br> 
                                            didáctico para la resolución de dudas.
                                            </p>
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
    <!-- Star About Area
    ============================================= -->
    <div id="beneficios" class="about-area default-padding bg-blue-light seccion-beneficios relative">
        <div class="container">
            <div class="items-box">
                <div class="row">
                    <div class="col-lg-7 info">
                        <h2 class="font-Laurentiareg" style="color: #000000;padding-bottom: 2rem;"><b>Beneficios<br> del programa</b></h2>
                        <ul style="display: flex; flex-direction: column;">
                            <li class="li-beneficios">
                                <h5 class="font-Saravekreg" style="color: #000000;font-size: 18px;">Vinculación laboral</h5>
                                <p class="font-Saravekreg">
                                    <b>Por medio de UNIVERSIA,</b> tendrás la 
                                    oportunidad de vincularte con diferentes 
                                    empresas tanto nacionales como internacionales.
                                </p>
                                <p class="font-Saravekreg">
                                    Al obtener tu certificación en un career path, <b>te 
                                    garantizamos recibir al menos 1 oferta de empleo 
                                    durante los siguientes 3 meses.</b>
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?= base_url('assets/img/home/logoUniversia.png') ?>" alt="Thumb" style="width: 60%;">
                                    </div>
                                </div>  
                                
                            </li>
                            <li class="li-beneficios" style="padding-top:3rem;">
                                <h5 class="font-Saravekreg" style="color: #000000;font-size: 18px;">Doble Certificación</h5>
                                <p class="font-Saravekreg">
                                <b>EmTech es un partner autorizado por<br> 
                                Salesforce, para formar académicamente a <br>
                                sus futuros expertos.</b> Dentro de este<br> 
                                programa, incluimos la certificación oficial por <br>
                                parte de Salesforce en cualquiera de los <br>
                                career path que decidas incursionar.<br>
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?= base_url('assets/img/home/salesforcePartner.png') ?>" alt="Thumb" style="width: 60%;">
                                    </div>
                                </div>  
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 thumb">
                        <img class="img-beneficiosDerecha" src="<?= base_url('assets/img/home/imgBeneficios.png') ?>" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->
    <div id="testimonios" class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="font-Novbold" style="color: #00215B; text-transform: capitalize;">Testimonios</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-items text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="<?= base_url('assets/img/home/imgLizbeth.png') ?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="<?= base_url('assets/img/home/imgGloria.png') ?>" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="<?= base_url('assets/img/home/imgIvonne.png') ?>" alt="Thumb">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h4 style="color: #00215B;padding-bottom: 1rem;" class="font-Novreg">Mtra. Lizbeth<br> Gregorio Avila</h4>
                                    <!-- <span>CEO of Softing</span> -->
                                    <img src="<?= base_url('assets/img/home/iconoEstrellas1.png') ?>" style="width: 15%;padding-bottom: 1rem;">
                                    <p style="color: #333333;">
                                        Fue muy significativo que a lo largo del curso en vez de situarme
                                        como una estudiante o usuario, asumí el rol de arquitecto cognitivo.
                                        Este último término fue el impulso para que en mi formación profesional
                                        tuvieran sentido las herramientas y metodologías desde una pedagogía
                                        centrada en el alumno y las cuales me permitieran hacer un puente
                                        entre un aprendizaje holístico mediado por la tecnología y los retos
                                        que demanda la educación contemporánea. ¡Una increíble experiencia!
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <h4 style="color: #00215B;padding-bottom: 1rem;">Dra. Gloria de los Ángeles<br> Bennetts Carlock</h4>
                                    <!-- <span>CEO of Softing</span> -->
                                    <img src="<?= base_url('assets/img/home/iconoEstrellas1.png') ?>" style="width: 15%;padding-bottom: 1rem;">
                                    <p style="color: #333333;">
                                        El curso me ha parecido muy dinámico desde el principio, la mayoría de las actividades de estudio independiente estaban
                                        diseñadas desde un enfoque constructivista, sobre todo el proyecto integrador, lo que ayudó a unificar mis funciones laborales
                                        con las necesidades del contexto en el cual me encuentro inmersa. Por otro lado, integrar una hora de tutoría semanal ayudó
                                        a explorar más a fondo algunas temáticas que quedaban sueltas durante las sesiones de aprendizaje guiadas por el asesor, otra de las cosas que noté fue la mejora de la narrativa académica en cuanto a los contenidos educativos alojados en la plataforma LMS.
                                        Por último, finalizo con un enorme agradecimiento a todo el equipo que diseñó y llevó a cabo la presente oferta educativa, debido a que fue uno de los diplomados más retadores que curse en los últimos años.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <h4 style="color: #00215B;padding-bottom: 1rem;">Dra. Ivonne Estela<br> Martínez Hernández</h4>
                                    <!-- <span>CEO of Softing</span> -->
                                    <img src="<?= base_url('assets/img/home/iconoEstrellas1.png') ?>" style="width: 15%;padding-bottom: 1rem;">
                                    <p style="color: #333333;">
                                        El valor que imprime el instructor es sin lugar a dudas un sello de calidad del boot camp en su módulo 2, su dinamismo y conocimiento de los temas te brindan confianza en que, aunque estás saturado de aprendizaje llegarás a un lugar seguro en la consolidación de este con tu proyecto.. El grupo también, dinamizado por el instructor, fue un potencial enorme para compartir experiencias, conocer nuestros talentos y retarnos a dar lo mejor de nosotros, vivenciando el curso desde la esencia de nuestras instituciones y renovándonos.
                                        Se percibe un equipo armonioso de trabajo en el bootcamp, el apoyo técnico, los invitados que nos compartieron de guion y producción,
                                        lo cual redondea excelente el curso.
                                        Muchas gracias por esta experiencia detonadora de cambios en mi vida profesional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-factor-area bg-gray default-padding numbersMove">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url('<?=base_url("assets/img/home/bannerRedUniversia.png") ?>'); background-repeat: no-repeat;background-size: cover;">
        </div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="client-items divDesarrolloProfesional">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="font-Laurentiareg" style="color:#ffff;position: relative">
                            ¡Forma parte de la comunidad de <span class="font-Laurentiareg"><b>innovadores digitales más importante del planeta!</b></span>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn circle btn-sm btn-blanco shape wow fadeInUp" data-wow-duration="1.8s" href="#" style="padding-left: 3rem;padding-right: 3rem;">Aplicar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="skill-area overflow-hidden circular-shape default-padding">
                        <div class="container">
                            <div class="skill-items">
                                <div class="row">
                                    <div class="col-lg-6 info">
                                        <h2 class="font-Laurentiareg"><b>Nuestra alianza</b></h2>
                                        <p class="font-Novareg">
                                            <b>
                                                Consolidamos una alianza estratégica entre las 
                                                mejores compañías, para sumar nuestras visiones hacia 
                                                un mundo de extraordinarias oportunidades de empleo 
                                                para los futuros profesionistas del país. 
                                            </b>
                                        </p>
                                        <p class="font-Novareg">
                                            Sumamos nuestros esfuerzos y estructuramos nuestros objetivos 
                                            para enfocarnos en el compromiso de exponenciar el 
                                            crecimiento profesional de los estudiantes y transformar el 
                                            mundo empresarial a través de las nuevas tecnologías.
                                        </p>
                                        <p class="font-Novareg">
                                            Hoy estamos conectando <b>talento, conocimiento, experiencia e 
                                            innovación</b> para impulsar el desarrollo de las competencias 
                                            digitales en cada uno de nuestros distinguidos alumnos.
                                        </p>
                                    </div>
                                    <div class="col-lg-6 thumb">
                                        <div class="image-box">
                                            <img class="wow fadeInRight" data-wow-delay="0.6s" src="<?= base_url('assets/img/home/alianzaImg.png') ?>" alt="Thumb" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;max-width: 95%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img class="wow fadeInRight" data-wow-delay="0.6s" src="<?= base_url('assets/img/home/logosJuntos.png') ?>" alt="Thumb" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Star Footer
    ============================================= -->