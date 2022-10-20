<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="equal-height col-lg-3 col-md-6 item">
                    <div class="f-item about">
                        <img class="imgFooterUp" src="<?= base_url('assets/img/logoPanamericanoFooter.png') ?>" alt="Logo" style="max-width: 100%;margin-left: -2rem;">
                    </div>
                </div>
                <div class="equal-height col-lg-2 col-md-6 item">
                    <div class="f-item link">
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

                <div class="equal-height col-lg-2 col-md-6 item">
                    <div class="f-item link">
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

                <div class="equal-height col-lg-2 col-md-6 item">
                    <div class="f-item link">
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
                                <a href="<?= base_url('Home') ?>#about">Nuestra Alianza</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-lg-3 col-md-6 item">
                    <div class="f-item contact">
                        <p class="font-Novreg">
                        ¿Estás listo para dar ese salto hacia <b>tu éxito profesional?</b>
                        Tu oportunidad de llegar a las nubes, está en Salesforce
                        </p>
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/home/iconoFacebook.png') ?>"></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/home/iconTwitter.png') ?>"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/emtech.inst/"><img src="<?= base_url('assets/img/home/iconoInstagram.png') ?>"></a>
                            </li>                                
                            <li>
                                <a href="https://www.facebook.com/emtech.inst"><img src="<?= base_url('assets/img/home/iconoPinterest.png') ?>"></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="lineaBanner">
</footer>
<div class="pt-5 footer-bottom" style="background-color: rgba(232, 233, 235, 0.7);">
    <div class="row container">
        <div class="col-lg-2 col-md-2 div-img-footer" style="padding-left: 2rem;padding-bottom: 2rem;">
            <img class="img-footer" src="<?= base_url('assets/img/home/footerLogo.png') ?>" style="width: 100%;">
        </div>
        <div class="col-lg-10 col-md-10 div-text-footer">
            <small class="d-block mb-3 text-muted" style="color: #000 !important;font-weight: 600;">
                Emerging Technologies Institute | All Rights Reserved
            </small>
        </div>
    </div>
</div>
<!-- End Footer-->
<!-- jQuery Frameworks
    ============================================= -->
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
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
<script src="<?= base_url('assets/js/TweenMax.js') ?>"></script>
<?php if(isset($scriptVista)){ echo $scriptVista; } ?>
</body>

</html>