<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no" />
    <meta name="copyright" content="" />
    <meta name="date" content="2021" />
    <meta name="author" content="" />
    <meta name="robots" content="All" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="fragment" content="" />
    <meta name="theme-color" content="#000000" />
    <title>Mack Trucks - Colombia</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!--Style-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='assets/css/app.css' type='text/css' media='all' />
    <!-- Global site tag (gtag.js) - Google Ads: 365701067 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-365701067"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-365701067');
    </script>
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
        fbq('init', '1478182898948673');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1478182898948673&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <main id="wrapper">
        <!-- Header -->
        <header class="header">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-tra ">
                <div class="container">
                    <a class="navbar-brand logo-mack" href="index.php" title="Mack">
                        <img src="assets/images/logo.svg" alt="Mack">
                    </a>
                </div>
            </nav>
        </header>
        <!--/ Header -->

        <!--Banner-->
        <div class="homepage-content header-thanks">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 relative min-heigh-thank">
                    <!-- Info -->
                    <div class="title-mack thank">
                        <h3>¡TUS DATOS</h3>
                        <h1>HAN SIDO ENVIADOS CON ÉXITO!</h1>
                        <h3>MUY PRONTO NOS COMUNICAREMOS CONTIGO!</h3>
                        <a href="index.php" class="btn btn-primary">Volver al inicio</a>
                    </div>
                    <!--/ Info -->
                </div>
            </div>
        </div>
        <!--Banner-->

        <!--Mapa-->
        <section class="cont-map clearfix">
            <!-- <h3>Nuestras Sedes</h3> -->
            <section class="relative">
                <!--Points Map-->
                <h5 class="title-map"><i class="fa fa-map-marker" aria-hidden="true"></i> Nuestras Sedes</h5>
                <div class="panelOficinasBg wow fadeInLeft">
                    <ul class="listPoints clic">
                    </ul>
                </div>
                <!--Fin Points Map-->
                <!--Filter-->
                <div class="filter_map">
                    <div class="itemFilter filterCity">
                        <h6>
                            <label>DEPARTAMENTO</label>
                            <span>Seleccionar</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </h6>
                        <ul class="catgMaps">
                            <li class="item" data-lat="4.656374" data-lng="-74.056778" data-city="Bogotá">
                                <a href="javascript:void(0)">Bogotá</a>
                            </li>
                            <li class="item" data-lat="10.980511960287028" data-lng="-74.79796131067351" data-city="Barranquilla">
                                <a href="javascript:void(0)">Barranquilla</a>
                            </li>
                            <li class="item" data-lat="7.086660" data-lng="-73.138136" data-city="Bucaramanga">
                                <a href="javascript:void(0)">Bucaramanga</a>
                            </li>
                            <li class="item" data-lat="3.407025" data-lng="-76.526783" data-city="Cali">
                                <a href="javascript:void(0)">Cali</a>
                            </li>
                            <li class="item" data-lat="6.168337840962436" data-lng="-75.61950912504366" data-city="Itagüí">
                                <a href="javascript:void(0)">Itagüí</a>
                            </li>
                            <li class="item" data-lat="4.800844" data-lng="-75.707747" data-city="Pereira">
                                <a href="javascript:void(0)">Pereira</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ Filter-->
                <div class="all_offices"><i class="ti ti-list" aria-hidden="true"></i></div>
                <div id="map-canvas"></div>
            </section>
        </section>
        <!--Fin Mapa-->

        <!-- Footer -->
        <footer>
            <div class="footer-socials-copyright style_2 footer-copyright">
                <div class="container-footer">
                    <div class="row bottom-footer">
                        <div class="col-sm-2 d-flex align-items-center justify-content-center">
                            <div class="copyrights footer-bottom">
                                <p><a href="https://solucionsoft.com/" target="_blank" class="credit">Powered by: <span>Solucionsoft.com</span></a></p>
                            </div>
                        </div>
                        <div class="col-sm-2 d-flex align-items-center justify-content-center">
                            <div class="copyrights footer-bottom">
                                <a href="https://pracodidacol.com/terminos-condiciones/" target="_blank">Términos y Condiciones</a>
                            </div>
                        </div>
                        <div class="col-sm-2 d-flex align-items-center justify-content-center">
                            <div class="copyrights footer-bottom">
                                <a href="https://pracodidacol.com/wp-content/themes/pracodidacol/assets/pdf/POLITICA_INSTITUCIONAL_DE_TRATAMIENTO_Y_USO_DE_DATOS_E_INFORMACION_PERSONAL_2022.pdf" target="_blank">Política insitucional de tratamiento y uso de datos</a>
                            </div>
                        </div>
                        <div class="col-sm-2 d-flex align-items-center justify-content-center">
                            <div class="copyrights footer-bottom">
                                <a href="https://pracodidacol.com/wp-content/themes/pracodidacol/assets/pdf/Autorizacion_Redes_Sociales.pdf" target="_blank">Autorización para el uso y tratamiento de datos</a>
                            </div>
                        </div>
                        <div class="col-sm-2 d-flex align-items-center justify-content-center">
                            <div class="copyrights footer-bottom">
                                <p>MackTrucks @ 2021 All rights reserved</p>
                            </div>
                        </div>
                        <div class="col-sm-2 text-right">
                            <a href="https://www.macktrucks.com/" class="logoF" target="_blank">
                                <img src="assets/images/logo.svg" />
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->

        <a id="scrollUp" href="#top"><i class="fa fa-angle-up"></i></a>
    </main>

    <!-- Js -->
    <script type='text/javascript' src='assets/js/app.min.js?ver=1.8.0'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrt-8u346VZCpmjwFbVsQ_XkQK9aazB8k"></script>
    <script type='text/javascript' src="assets/js/map.min.js?ver=1.8.0"></script>
</body>

</html>