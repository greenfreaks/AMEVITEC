<?php
include "php/con_db.php";
?>
<!doctype html>
<html>

<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.0.0/dist/css/mstepper.min.css">
    <link rel="stylesheet" href="../../css/style.css?v=<?php echo (rand(1, 500)); ?>">
    <link rel="stylesheet" href="../../css/instituciones_labs_form.css?v=<?php echo (rand(1, 500)); ?>">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AMEVITEC - Beneficios para academia </title>
</head>

<body>

    <div class="navbar-fixed">
        <nav id="indexnav">
            <div class="nav-wrapper container">
                <a href="../../index.html" class="center">
                    <!--                    <img id="indexLogo" class="header-logo scale-transition scale-out" src="img/logos_AMEVITEC/AMEVITEC-LOGO.png">-->
                    <img class="header-logo indexLogo" src="../../img/logos_AMEVITEC/logo-white-text.png">
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="../academia.html">Academia</a></li>
                    <li><a href="../empresas.html">Empresas</a></li>
                    <li><a href="../servicios.html">Servicios</a></li>
                    <li><a href="../graficas.html">Consultas</a></li>
                    <li><a href="http://amevitec.org/PACT/">PACT</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>


    <ul id="nav-mobile" class="sidenav">
        <div class="user-view gradient-azul">
            <a href="../../index.html"><img class="mobile-logo responsive-img" src="../../img/logos_AMEVITEC/logo-nombre-white.png"></a>
        </div>

        <li><a href="../academia.html">Academia</a></li>
        <li><a href="../empresas.html">Empresas</a></li>
        <li><a href="../servicios.html">Servicios</a></li>
        <li><a href="../graficas.html">Consultas</a></li>
        <li><a href="http://amevitec.org/PACT/">PACT</a></li>
    </ul>

    <section class="header_banner">
        <img style="max-width: 100%;" src="../../img/inventarioTecnologico/ciencias.png">
    </section>

    <section class="btns_labs center">
        <a class="btn btn-registro" href="index.php">1. Registro Institucional</a>
        <a class="btn btn-ciencias" href="#">2. Capacidades en ciencias</a>
        <a class="btn btn-ing" href="ing_form.php">3. Capacidades de ingeniería</a>
        <a class="btn btn-humani" href="humani_form.php">4. Capacidades en humanidades</a>
    </section>
    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    <!-----------------------------------------------------FORMULARIO DE REGISTRO------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="content">
        <h5 class="bold">2. Capacidades de investigación científica.</h5>

        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">list_alt</i>Instrucciones.</div>
                <div class="collapsible-body">
                    <span>
                        <h6 class="bold">Instrucciones:</h6>
                        <ol>
                            <li>Este formulario debe llenarlo el Equipo de Apoyo Técnico.</li>
                            <li>Identifica tu institución dentro del catálogo y ten a la mano tu Clave Institucional,
                                proporcionado por tu Coordinador del Inventario.<a a href="https://api.whatsapp.com/send?phone=527797966790&text=Qué tal, me gustaría solicitar apoyo para que mi institución participe en el inventario tecnológico" target="_blank">779 796 6790.</a></li>
                            <li>Registra tu información por cada laboratorio o línea de investigación científica que
                                desees inventariar.</li>
                            <li>Realiza el envío de tu información con tu clave institucional.</li>
                            <li>Repite estos pasos por cada laboratorio o línea de investigación científica que desees
                                inventariar.</li>
                        </ol>
                    </span>
                </div>
            </li>
        </ul>

        <div class="divider purple"></div>

        <form method="POST">
            <h6>1. Nombre de la institución.</h6>
            <div class="input-field col s12">
                <select name="insLab" required>
                    <option value="" disabled selected>Selecciona una institución</option>
                    <?php include "php/fill/insPact.php"; ?>
                </select>
            </div>


            <h6>2. Área de conocimiento o línea de investigación a la que pertenece el laboratorio o proyecto.</h6>
            <div class="input-field col s12">
                <select name="areaConocimientoLab" required>
                    <option value="" disabled selected>Selecciona un área de conocimiento</option>
                    <?php include "php/fill/areas_ciencias.php"; ?>
                </select>
            </div>

            <h6>3. Nombre del laboratorio, proyecto o línea de investigación.</h6>
            <input type="text" name="nombreLab" required>


            <h6>4. ¿A qué sectores industriales puede dar servicios el laboratorio, proyecto o línea de investigación?</h6>
            <select multiple name="secIndustrialLab[]" id="" required>
                <option value="" disabled>Puedes seleccionar mas de un sector</option>
                <?php require "php/fill/secIndustriales.php" ?>
            </select>

            <h6>5. Equipamiento con el que cuenta el laboratorio, proyecto o línea de investigación.</h6>
            <textarea name="equipamientoLab" required></textarea>

            <h6>6. Servicios a la industria que puede brindar el laboratorio, proyecto o línea de investigación.</h6>
            <textarea name="serviciosLab" required></textarea>

            <h6>7. Nombre completo del responsable del laboratorio, proyecto o línea de investigación.</h6>
            <input type="text" name="nombreResponsableLab" required>

            <h6>8. Correo de contacto del responsable del laboratorio, proyecto o línea de investigación.</h6>
            <input type="text" name="emailResponsableLab" required>

            <h6>9. Teléfono de contacto del responsable del laboratorio, proyecto o línea de investigación.</h6>
            <input type="text" name="telefonoResponsableLab" required>

            <br>

            <div class="divider"></div>

            <div>
                <p>
                    <label>
                        <input type="checkbox" name="privacidad" required />
                        <span><b>He leído y acepto los términos del <a href="../privacidad.html">aviso de privacidad</a></b></h6></span>
                    </label>
                </p>
            </div>

            <div class="password center">
                <h6 class="texto-azul">Introduce la Clave Institucional que te proporcionó tu Coordinador del Inventario.</h6>
                <input type="password" name="passwordLab" placeholder="Introduce aquí tu clave institucional" required class="browser-default center bold" required>
            </div> <br>

            <div class="submit center">
                <input type="submit" value="Enviar" class="btn" name="submitCienciasLab" onclick="return ConfirmSubmit()">
            </div>
            <?php include "php/envio_ciencias.php"; ?>
        </form>

    </div>


    <footer class="page-footer custom-footer">
        <div class="container">
            <div class="row custom-row">
                <div class="col l5 s12">
                    <h5 class="texto-gris cta-title-white"><strong>Agencia Mexicana de Vinculación Tecnológica, A.C.</strong></h5>
                </div>
                <div class="col l4 s12">
                    <div class="row valign-wrapper">
                        <div class="col s2 center">
                            <i class="material-icons small">location_on</i>
                        </div>
                        <div class="col s10">
                            <a class="white-text" target="_blank" href="https://goo.gl/maps/Bpacyr5JdN52"> Senda del Amor #7, entre camino Real de Carretas y Senda Eterna Col. Milenio 3, C.P. 76060, Querétaro, Qro.</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col s2 center">
                            <i class="material-icons small">phone</i>
                        </div>
                        <div class="col s10">
                            <a class="white-text" href="tel:015521063289">55 21 06 32 89.</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s2 center">
                            <i class="material-icons small">email</i>
                        </div>
                        <div class="col s10">
                            <a class="white-text" href="mailto:contacto@amevitec.org ">contacto@amevitec.org </a>
                        </div>
                    </div>
                </div>
                <div class="col l3 s12">
                    <h6 class="white-text bold">Más información</h6>
                    <ul>
                        <!--                        <li><a class="white-text btn-help" href="#!">Ayuda</a></li>-->
                        <li class="texto-gris"><a class="white-text" href="http://www.amevitec.org/sections/privacidad.html">Política de Privacidad</a></li>
                    </ul>
                    <div class="row center">

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <sub class="right">Made by Mario Sandoval Velázquez using <a class="orange-text text-lighten-3" href="http://materializecss.com" target="_blank">Materialize</a> </sub>
                <p>©AMEVITEC 2022</p>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../../js/init.js"></script>
    <script type="text/javascript">
        function ConfirmSubmit() {
            var respuesta = confirm("¿Estás seguro de querer enviar tus datos? Da clic en ACEPTAR para continuar o en CANCELAR para verificar tu información.");
            if (respuesta == true) {
                return true;
            } else {
                return false
            }
        }
    </script>

</body>

</html>