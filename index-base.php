<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no"/>
    <meta name="copyright" content="" />
    <meta name="date" content="2021" />
    <meta name="author" content="" />
    <meta name="robots" content="All" />
    <meta name="keywords" content="" />
    <meta name="description" content=""/>
    <meta name="fragment" content="" />
    <meta name="theme-color" content="#000000"/>
    <title>Mack Trucks - Colombia</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!--Style-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/sweetalert2.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/app.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/responsive.css' type='text/css' media='all' /> -->
    <link rel='stylesheet' href='assets/css/app.min.css?ver=1.1.0' type='text/css' media='all' />
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
                    <div id="navbarSupportedContent" class="navbar-collapse">
                        <div class="header-socials">
                            <ul class="s-links-icons text-center clearfix">
                                <li>
                                    <a class="s-link ico-facebook" href="https://www.facebook.com/macktruckscol/" target="_blank" title="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="s-link ico-instagram" href="https://www.instagram.com/macktruckscol/"  target="_blank" title="instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="s-link ico-youtube" href="https://www.youtube.com/channel/UCxCRkT9ykTeYYQ_5OfXtzSA/featured" target="_blank" title="youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--/ Header -->

        <!--Form-->
        <div class="homepage-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 relative">
                        <!-- Info -->
                        <div class="title-mack">
                            <h3>¡ÚLTIMAS UNIDADES</h3>
                            <h1>MACK ANTHEM 2020</h1>
                            <h3>CON PRECIO EN PESOS!</h3>
                        </div>
                        <div class="mack-contact">
                            <img src="assets/images/iconos-seguridad.svg" />
                            <h4>¡Y ABRIMOS PREVENTA EN UNIDADES 2022!</h4>
                            <h5>PREGUNTA YA</h5>
                            <div class="contact-mack">
                                <a href="tel:320 838 9315"><span><i class="fa fa-phone" aria-hidden="true"></i></span> 320 838 9315</a>
                                <a href="mailto:mack_contacto@didacol.com"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> mack_contacto@didacol.com</a>
                            </div>
                        </div>
                        <!--/ Info -->
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                        <!-- Form Cotizar Mack -->
                        <section class="container_form_mack">
                            <div class="title-subtitle text-right">
                                <h3>CONTÁCTANOS</h3>
                                <p>NUESTROS ASESORES SE CONTACTARÁN CONTIGO</p>
                            </div>
                            <div class="bg_form">
                                <h5 class="d-flex mb-2"><img src="assets/images/icon-contact.svg" /> TU INFOMORMACIÓN</h5>
                                <form id="FormCotizar" action="enviarcorreo.php" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombre(s)</label>
                                                <input type="text" name="name" id="name" size="40" class="form-control" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Apellidos</label>
                                                <input type="text" name="lastname" id="lastname" size="40" class="form-control" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input type="number" name="phone" id="phone" size="40" class="form-control" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Correo</label>
                                                <input type="email" name="email" id="email" size="40" class="form-control" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Cédula</label>
                                                <input type="number" name="identification" id="identification" size="40" class="form-control" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <select name="city" id="city" class="form-control" aria-required="true">
                                                    <option value="">Seleccionar</option>
                                                    <option value="Aguachica Cesar || 20011">Aguachica Cesar</option>
                                                    <option value="Apartadó || 5045">Apartadó</option>
                                                    <option value="Arauca || 81001">Arauca</option>
                                                    <option value="Armenia || 5059">Armenia </option>
                                                    <option value="Barrancabermeja || 68081">Barrancabermeja</option>
                                                    <option value="Barranquilla || 8001">Barranquilla</option>
                                                    <option value="Bello || 5088">Bello </option>
                                                    <option value="Bogotá || 11001">Bogotá</option>
                                                    <option value="Bucaramanga || 68001">Bucaramanga </option>
                                                    <option value="Buenaventura || 76109">Buenaventura</option>
                                                    <option value="Buga || 76111">Buga</option>
                                                    <option value="Cali || 76001">Cali</option>
                                                    <option value="Cartago || 76147">Cartago</option>
                                                    <option value="Cartagena || 13001">Cartagena</option>
                                                    <option value="Caucasia || 5154">Caucasia</option>
                                                    <option value="Cereté || 23162">Cereté </option>
                                                    <option value="Chia || 25175">Chia</option>
                                                    <option value="Ciénaga || 47189">Ciénaga </option>
                                                    <option value="Cúcuta || 54001">Cúcuta</option>
                                                    <option value="Dosquebradas || 66170">Dosquebradas </option>
                                                    <option value="Duitama || 15238">Duitama</option>
                                                    <option value="Envigado || 5266">Envigado</option>
                                                    <option value="Facatativá || 25269">Facatativá </option>
                                                    <option value="Florencia || 18001">Florencia</option>
                                                    <option value="Floridablanca || 68276">Floridablanca</option>
                                                    <option value="Fusagasugá || 25290">Fusagasugá </option>
                                                    <option value="Girardot || 25307">Girardot</option>
                                                    <option value="Girón  || 68307">Girón </option>
                                                    <option value="Ibagué || 73001">Ibagué</option>
                                                    <option value="Ipiales || 52356">Ipiales</option>
                                                    <option value="Itagüí || 5360">Itagüí</option>
                                                    <option value="Jamundí || 76364">Jamundí</option>
                                                    <option value="Lorica || 23417">Lorica</option>
                                                    <option value="Los Patios || 54405">Los Patios</option>
                                                    <option value="Magangué || 13430">Magangué</option>
                                                    <option value="Maicao || 44430">Maicao</option>
                                                    <option value="Malambo || 8433">Malambo</option>
                                                    <option value="Manizales || 17001">Manizales </option>
                                                    <option value="Medellín || 5001">Medellín </option>
                                                    <option value="Melgar || 73449">Melgar </option>
                                                    <option value="Montería || 23001">Montería</option>
                                                    <option value="Neiva || 41001">Neiva </option>
                                                    <option value="Ocaña || 54498">Ocaña</option>
                                                    <option value="Paipa || 15516">Paipa</option>
                                                    <option value="Palmira || 76520">Palmira</option>
                                                    <option value="Pamplona || 54518">Pamplona</option>
                                                    <option value="Pasto || 52001">Pasto</option>
                                                    <option value="Pereira || 66001">Pereira</option>
                                                    <option value="Piedecuesta || 68547">Piedecuesta</option>
                                                    <option value="Pitalito || 41551">Pitalito</option>
                                                    <option value="Popayán || 19001">Popayán </option>
                                                    <option value="Quibdó || 27001">Quibdó </option>
                                                    <option value="Riohacha || 44001">Riohacha</option>
                                                    <option value="Rionegro || 5615">Rionegro</option>
                                                    <option value="Sabanalarga || 5628">Sabanalarga</option>
                                                    <option value="Sahagún || 23660">Sahagún </option>
                                                    <option value="San Andrés || 5647">San Andrés</option>
                                                    <option value="Santa Marta || 47001">Santa Marta </option>
                                                    <option value="Sincelejo || 70001">Sincelejo</option>
                                                    <option value="Soacha || 25754">Soacha </option>
                                                    <option value="Sogamoso || 15759">Sogamoso</option>
                                                    <option value="Soledad || 8758">Soledad </option>
                                                    <option value="Tibú || 54810">Tibú </option>
                                                    <option value="Tuluá || 76834">Tuluá</option>
                                                    <option value="Tumaco || 52835">Tumaco </option>
                                                    <option value="Tunja || 15001">Tunja </option>
                                                    <option value="Turbo || 5837">Turbo</option>
                                                    <option value="Valledupar || 20001">Valledupar</option>
                                                    <option value="Villa || 54871">Villa</option>
                                                    <option value="Villa del Rosario || 54874">Villa del Rosario</option>
                                                    <option value="Villavicencio || 50001">Villavicencio</option>
                                                    <option value="Yopal || 85001">Yopal </option>
                                                    <option value="Yumbo || 76892">Yumbo</option>
                                                    <option value="Zipaquirá || 25899">Zipaquirá</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <h6>AUTORIZACIÓN PARA EL USO Y TRATAMIENTO DE DATOS E INFORMACIÓN PERSONAL</h6>
                                            <div class="form-check checkbox">
                                                <label class="form-check-label container-checkbox">
                                                    Declaro que he sido informado por el grupo empresarial compuesto por las sociedades 
                                                    <b>Praco Didacol S.A.S, Distribuidora Hino de Colombia S.A.S, Inmobiliaria Inchcape Colombia S.A.S y  Matrase S.A.S,;</b> 
                                                    en adelante Las Compañías, que serán el Responsable del Tratamiento de mis  Datos Personales, por lo que autorizo de manera previa, libre, voluntaria, inequívoca, expresa e informada a Las Compañías o quien represente sus derechos, también a la sociedad matriz y/o subordinadas en Colombia o en el exterior, y en especial, a cualquiera de las sociedades del grupo INCHCAPE dentro de las que se encuentra Inchcape DDC Colombia S.A.S, e incluyendo mas no limitándose a INCHCAPE PLC, y en general a sus aliados estratégicos y/o distribuidores autorizados, fabricantes de vehículos que representan e importan y a los concesionarios de la red de Las Compañías en Colombia a recolectar, almacenar, usar, circular y suprimir mis datos personales, conforme a la Política de Tratamiento de Datos Personales descrita en el siguiente link www.pracodidacol.com. 
                                                    <b>Con la presente autorización del tratamiento de mis datos personales se me podrá contactar mediante sms, whatsapp, correo electrónico, dirección de residencia, llamada telefónica y/o cualquier otro medio de comunicación instantáneo o formal por motivos de:  Envío de información relacionada con todo el concepto de experiencia de cualquiera de las marcas que hacen parte de Las Compañías, ya sea para fines de actualización de datos, invitación a eventos, envío de publicidad, fines estadísticos, envío de información de productos y servicios, ofertas, descuentos, información corporativa, auditorias, seguimientos, promociones, encuestas, llamadas de seguimiento, envío de productos a la dirección de residencia, así como envío de información de campañas técnicas de servicio, seguridad o “recall”, de productos financieros y de seguros para la adquisición de bienes y servicios  de cualquiera de las marcas que hacen parte de Las Compañías; de igual forma, esta autorización comprende el mandato expreso para que mi información haga parte de la Base de Datos de cualquiera de las Compañías, así como también pueda ser transferida y/o transmitida a otras compañías externas del grupo con residencia en Colombia o en otros países, incluyendo mas no limitándose a las marcas de los productos que importa, comercializa y distribuyen las Compañías en Colombia.</b> 
                                                    Como titular de la información soy consciente que tengo el derecho a conocer, actualizar y rectificar mis datos personales, solicitar prueba de la autorización otorgada para su trámite, revocar la autorización y/o solicitar la supresión de mis datos por medio de una solicitud escrita dirigida a: 
                                                    <a href="mailto:didacol@didacol.com" target="_blank">didacol@didacol.com</a>.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex py-3">
                                            <div class="radioBtn checkAutorizo">
                                                <input type="radio" id="si" name="terminos" value="on" />
                                                <label for="si">ACEPTO</label>
                                            </div>
                                            <div class="radioBtn checkNoAutorizo">
                                                <input type="radio" id="no" name="terminos" value="off" />
                                                <label for="no">NO ACEPTO</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="checkAutorizoInfo">
                                                <p>En resumen, autorizo contactarme por cualquier medio para el envío de información relacionada con publicidad, invitación a eventos, envío de productos - promociones y encuestas, llamadas de seguimiento, recalls de cualquiera de las marcas de Las Compañías entre otras finalidades relacionadas en la autorización. Así mismo, autorizo el almacenamiento de mi información.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary block w-full">ENVIAR</button>
                                        </div>
                                        <div class="col-sm-12 campaing">
                                            <h6>FORTALECEMOS EL VÍNCULO ESENCIAL ENTRE EL HOMBRE Y LA MÁQUINA</h6>
                                            <p>*VÁLIDO DEL 20 DE MAYO AL 30 DE JUNIO DE 2021. MAYOR INFORMACIÓN EN WWW.PRACODIDACOL.COM</p>
                                        <div>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <!-- / Form Cotizar Mack -->
                    </div>
                </div>
            </div>
        </div>
        <!--Form-->

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
                <div class="container">
                    <div class="row bottom-footer">
                        <div class="col-sm-4 d-flex align-items-center">
                            <div class="copyrights footer-bottom">
                                <p><a href="https://solucionsoft.com/" target="_blank" class="credit">Powered by: <span>Solucionsoft.com</span></a></p>
                            </div>
                        </div>
                        <div class="col-sm-4 d-flex align-items-center justify-content-center">  
                            <div class="copyrights footer-bottom">
                                <p>MackTrucks @ 2021 All rights reserved</p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
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
    <!-- <script type='text/javascript' src='assets/js/lib/jquery.js'></script>
    <script type='text/javascript' src='assets/js/lib/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='assets/js/lib/modernizr.custom.js'></script>
    <script type='text/javascript' src='assets/js/lib/sweetalert2.min.js'></script>
    <script type='text/javascript' src='assets/js/app.js'></script> -->
    <script type='text/javascript' src='assets/js/app.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeGRfNeigkXnmLu_E-kxhclngO-81shFQ"></script>
    <script type='text/javascript' src="assets/js/map.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#FormCotizar').on('submit', function(e) { //use on if jQuery 1.7+
                //e.preventDefault();  //prevent form from submitting
                var name = jQuery('#name').val();
                var identification = jQuery('#identification').val();
                var lastname = jQuery('#lastname').val();
                var phone = jQuery('#phone').val();
                var email = jQuery('#email').val();
                var city = jQuery('#city').val();
                var authorize = jQuery('input[name=terminos]:checked', '#FormCotizar').val();

                if(authorize != 'on') {
                    jQuery('.preloader-pracodidacol').removeClass('open');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error...',
                        text: 'Debe aceptar los terminos!',
                    });
                    return false;
                }

                if(!name){
                    Swal.fire(
                        'Error',
                        'Debe diligenciar el nombre!',
                        'error'
                    );
                    return false;
                }
                if(!lastname){
                    Swal.fire(
                        'Error',
                        'Debe diligenciar el  apellido!',
                        'error'
                    );
                    return false;
                }
                if(!email){
                    Swal.fire(
                        'Error',
                        'Debe diligenciar el email!',
                        'error'
                    );
                    return false;
                }
                if(!phone){
                    Swal.fire(
                        'Error',
                        'Debe diligenciar el celular!',
                        'error'
                    );
                    return false;
                }
                if(!city){
                    Swal.fire(
                        'Error',
                        'Debe diligenciar la ciudad!',
                        'error'
                    );
                    return false;
                }
            });
        });
        
        <?php if(isset($_REQUEST['Error'])):?>
        <?php if($_REQUEST['Error'] == 1): ?>
        Swal.fire(
            'Exito!',
            'Pronto estaremos en contacto!',
            'success'
        );
        <?php endif; ?>
        <?php if($_REQUEST['Error'] == 2): ?>
        Swal.fire(
            'Error',
            'Presentamos errores al enviar el correo intente más tarde!',
            'error'
        );
        <?php endif; ?>
        <?php endif; ?>
    </script>
</body>
</html>