<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" href="https://static.wixstatic.com/media/df72ce_9438b428c20d483789e4a085e71f91d1%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/df72ce_9438b428c20d483789e4a085e71f91d1%7Emv2.png" type="image/x-icon">
    <style>
        @font-face {
            font-family: 'TT Norms';
            src: url('<?php echo BASE_URL; ?>Assets/fonts/TT-Norms-Black/TTNorms-Black.otf');
        }

        @font-face {
            font-family: 'Be Vietnam';
            src: url('<?php echo BASE_URL; ?>Assets/fonts/Be_Vietnam_Pro/BeVietnamPro-Regular.ttf');
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/galeria.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <title>Galeria</title>
</head>

<body id="bodyGaleria">
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <a href="https://www.fundtur.com"><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/galeriaProyectos" class="navbarText activeNavbar itemsNavbar">Descubre</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/aplicar" class="navbarText">Aplica</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/aprende" class="navbarText">Aprende</a>
            </li>
            <li>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="boton" type="button">Iniciar Sesión</button></a></div>
            </li>
        </ul>
    </nav>
    <div class="content">
        <div class="bannerLanding-2">
            <p class="titulo-2">Ayuda a que un proyecto creativo hecho por mujeres se convierta en realidad</p>
            <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonBannerLanding-2" type="button">Quiero aportar</button></a>
            </div>
        </div>
        <div class="botonesGaleria">
            <div class="bloqueBotonBuscar">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input class="botonBuscar" placeholder="Buscar" type="text" name="buscar" id="buscar">
            </div>
        </div>
        <div class="content" id="galeriaProyectos"></div>
        <div class="bloqueSubirProyecto">
            <div class="subirFirstColumn">
                <p class="subirProyectoTitulo">¿Cómo puedo subir mi proyecto?</p>
                <p class="subirProyectoTexto">Sigue este paso a paso para empezar a materializar tu proyecto:</p>
                <ul>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img class="cicrucloBackground" src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoSubirProyecto">Registrate e Inicia Sesión</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img class="cicrucloBackground" src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoSubirProyecto">En tu perfil, Ingresa a la sección de proyectos subidos y da click en subir proyecto</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img class="cicrucloBackground" src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoSubirProyecto">Llena el formulario con tus datos y descripción del proyecto.</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img class="cicrucloBackground" src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoSubirProyecto">Se verificará la veracidad de la organización o persona a cargo del proyecto, este proceso tarda de 15 días a 1 mes en aprobación del equipo experto.</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img class="cicrucloBackground" src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoSubirProyecto">En caso de ser aprobado se subirá inmediatamente tu proyecto. En caso de estar en revisión, el equipo te enviará observaciones y asesoría para hacer cambios a tu proyecto. Este tendrá un tiempo determinado para su revisión.</p>
                    </li>
                    <div>
                        <a href="<?php echo BASE_URL; ?>Home/login/">
                            <button class="botonBannerLanding" type="button">Subir Proyecto </button>
                        </a>
                    </div>
                </ul>
            </div>
            <div class="subirSecondColumn">
                <img class="imagenComoSubirProyecto" src="<?php echo BASE_URL; ?>Assets/img/subirProyecto.svg" alt="">
            </div>
        </div>
    </div>

    <div class="bannerFooter">
        <div class="formFooter">
            <div class="subirFirstColumn">
                <p class="tituloFormFooter">Con tu aporte impulsas y empoderas a una mujer de la industria creativa
                </p>
                <div class="iconosFooter">
                    <a href="https://www.instagram.com/tfilatam/?hl=es-la"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/tfi-latam/?trk=similar-pages"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://ms-my.facebook.com/TFIlatam/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCKUhC33ox9DzH4dhuaTVpPQ"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="subirSecondColumn" style="margin-top: 10%;">
                <p class="textoSigue">Sigue en contacto con nosotros, escribe tu correo aquí.</p>
                <input class="txtFooter" type="text" name="" id="">
                <a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonFormFooter" type="button">Quiero estar
                        conectado</button></a>
            </div>
        </div>
        <div class="bloqueInfoFooter">
            <div>
            <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>Assets//img//logoFooter.svg" alt=""></a>
            </div>
            <div class="contactanos">
                <h2>Nosotros</h2>
                <ul>
                    <li>
                        <a class="textoInformacionesFooter" href="">Sobre TFI</a>
                    </li>
                    <li>
                        <a class="textoInformacionesFooter" href="<?php echo BASE_URL; ?>Home/aprende">Aprende más</a>
                    </li>
                    <li>
                        <a class="textoInformacionesFooter" href="<?php echo BASE_URL; ?>Home/aplicar">¿Cómo funciona?</a>
                    </li>
                </ul>
            </div>
            <div class="contactanos">
                <h3>Contáctanos</h3>
                <ul>
                    <li class="textoInformacionesFooter">Telefono +57 317 4336722</li>
                    <li class="textoInformacionesFooter">Whatsapp +57 315 8475169</li>
                    <li class="textoInformacionesFooter">info@tfilatam.com</li>
                    <li class="textoInformacionesFooter">Cr 13 # 90 - 17, Bogotá D.C.</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b2831985f5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php require_once("View/Template/footer.php") ?>
    <script src="<?php echo BASE_URL; ?>Assets/js/funciones.js"></script>
</body>

</html>