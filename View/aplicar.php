<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'TT Norms';
            src: url('<?php echo BASE_URL; ?>Assets/fonts/TT-Norms-Black/TTNorms-Black.otf');
            font-style: normal;
            font-weight: 900;
            font-size: 32px;
            line-height: 38px;
        }
        @font-face {
            font-family: 'Be Vietnam';
            src: url('<?php echo BASE_URL; ?>Assets/fonts/Be_Vietnam_Pro/BeVietnamPro-Regular.ttf');
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 26px;

            color: #031C54;
        }        
    </style>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/aplicar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <title>Aplicar</title>
</head>

<body>
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <a href="<?php echo BASE_URL; ?>"><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/galeriaProyectos" class="navbarText ">Descubre</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/aplicar" class="navbarText activeNavbar">Aplica</a>
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
        <div class="bannerLandingAplicar">
            <div class="oneColumnBanner mt-5">
                <div class="tituloBannerAplicar">¿Por qué subir <br> un proyecto? </div>
                <div><a href=""><button class="botonBannerLanding" type="button">Subir Proyecto</button></a>
                </div>
            </div>
            <div class="twoColumnBanner">
                <div>
                    <div class="backGroundImage" style="background-image: url('<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto1.svg');">
                        <p class="textoImagenBannerProyecto posicionTextoImagenBannerProyecto1  colorTextoImagenBanner2">
                            Financia tu proyecto</p>
                        <p class="textoImagenBannerAplicar">Nos preocupamos por ayudarte y asesorarte para garantizar el éxito de tu campaña.</p>
                    </div>
                    <div class="backGroundImage" style="background-image: url('<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto2.svg');">
                        <p class="textoImagenBannerProyecto posicionTextoImagenBannerProyecto1  colorTextoImagenBanner1">
                            Recibe acompañamiento gratuito </p>
                        <p class="textoImagenBannerAplicar">Una oportunidad para recibir aportes colectivos y recursos confiables sin interés o préstamos de por medio.</p>
                    </div>
                </div>
            </div>
            <div class="threeColumnBanner">
                <div>
                    <div class="backGroundImage2" style="background-image: url('<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto3.svg');">
                        <p class="textoImagenBannerProyecto posicionTextoImagenBannerProyecto1  colorTextoImagenBanner1">Construye una comunidad
                        <p class="textoImagenBannerAplicar">Intercambia con otras mujeres de la industria, comunica y da a conocer tu proyecto.</p>
                        </p>
                    </div>
                    <div class="backGroundImage2" style="background-image: url('<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto4.svg');">
                        <p class="textoImagenBannerProyecto posicionTextoImagenBannerProyecto1  colorTextoImagenBanner2">Aprende sobre fondeo</p>
                        <p class="textoImagenBannerAplicar">Gestionar recursos es todo un arte. Inicia este camino de la mano del expertise de TFI.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="pasosSubirProyectos">
            <p class="tituloPasos">Paso a paso para subir proyecto</p>
            <div class="paso1">
                <div class="bloqueSubirProyecto">
                    <div class="subirFirstColumn">
                        <p class="subirProyectoTitulo">Paso 1</p>
                        <p class="subirProyectoTexto">Ingresa a la sección de subir tu proyecto y registra tus datos y
                            los de tu idea en el formulario. Deberás tener a la mano:</p>
                        <ul>
                            <li>
                                <div class="">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPasos">Datos e información sobre el proyecto (Nombre y descripción),
                                    página web, redes
                                    sociales, contacto. Foto y vídeo del proyecto.</p>
                            </li>
                            <li>
                                <div class="">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPasos">Cámara de comercio de la organización que postula con mínimo 30
                                    días.</p>
                            </li>
                            <li>
                                <div class="">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPasos">Tiempo de la campaña y monto de financiación (Por el momento sólo
                                    permitimos
                                    financiar proyectos hasta $30,000,000)</p>
                            </li>
                            <li>
                                <div class="">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPasos">Certificado de cuenta bancaria con mínimo 30 días</p>
                            </li>
                            <div>
                                <a href="<?php echo BASE_URL; ?>Home/login/">
                                    <button class="botonBannerLanding" type="button">Subir Proyecto </button>
                                </a>
                            </div>
                        </ul>
                    </div>
                    <div class="subirSecondColumn">
                        <img class="imagenBannerPasos1" src="<?php echo BASE_URL; ?>Assets/img/imgSubirPaso1.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="paso2">
                <div class="bannerLandingAplicar2">
                    <div class="oneColumnBanner2 imagenBannerAplicar1">
                        <div>
                            <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner2.svg" alt="" width="350">
                        </div>
                    </div>
                    <div class="twoColumnBanner2 imagenBannerAplicar2">
                        <div>
                            <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner2.svg" alt="" width="350">
                        </div>
                    </div>
                    <div class="threeColumnBanner2">
                        <div class="titulo">Paso 2</div>
                        <div class="textoBannerPaso2">
                            Una vez subido tu proyecto, el equipo verificará la veracidad de la organización o persona a
                            cargo del proyecto, este proceso tarda de 15 días a 1 mes en revisión.
                        </div>
                        <div>
                            <a href="<?php echo BASE_URL; ?>Home/login/">
                                <button class="botonBannerLanding" type="button">
                                    Subir Proyecto
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paso1">
                <div class="bloqueSubirProyecto">
                    <div class="subirFirstColumn">
                        <p class="subirProyectoTitulo">Paso 3</p>
                        <p class="subirProyectoTexto">En caso de ser aprobado se subirá inmediatamente tu proyecto. En
                            caso de estar en revisión, el equipo te enviará observaciones y asesoría para hacer cambios
                            a tu proyecto. Este tendrá un tiempo determinado para su revisión. Ten presente que: </p>
                        <ul>
                            <li>
                                <div class="pasosLista">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPaso">El proyecto una vez aprobado no podrá ser editado.</p>
                            </li>
                            <li>
                                <div class="pasosLista">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPaso">Para que el proyecto sea aprobado debe ser liderado por una mujer, estar enmarcado en
                                    el sector artístico, cultural o turístico. La experiencia en el sector no es
                                    determinante pero sí brindará criterios de confianza para el equipo evaluador de
                                    TFI.</p>
                            </li>
                            <li>
                                <div class="pasosLista">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPaso">En caso de que el proyecto no realice los cambios y observaciones por el equipo
                                    evaluador en el tiempo previsto, este será borrado y deberá iniciar una nueva
                                    aplicación.</p>
                            </li>
                            <div>
                                <a href="<?php echo BASE_URL; ?>Home/login/">
                                    <button class="botonBannerLanding" type="button">Subir Proyecto </button>
                                </a>
                            </div>
                        </ul>
                    </div>
                    <div class="subirSecondColumn">
                        <img src="<?php echo BASE_URL; ?>Assets/img/imgSubirPaso3.svg" alt="">
                    </div>
                </div>
            </div>
            <p class="tituloPasos">¿Tienes más dudas?</p>
            <p class="subtituloPasos">Aquí te las resolvemos</p>
            <div class="proyectosFila">
                <div class="card">
                    <div class="cabeceraCardDudas">
                        <i class="fa-solid fa-circle-xmark"></i>
                        <p>¿Subir mi proyecto tiene algún costo?</p>
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">¿Pregunta?</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="cabeceraCardDudas">
                        <i class="fa-solid fa-circle-xmark"></i>
                        <p>¿Qué pasa si no cumplo con la meta propuesta?</p>
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">La plataforma te hará envío de los recursos recaudados, una vez
                            se cumpla el tiempo propuesto.</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerFooter">
            <div class="formFooter">
                <div class="subirFirstColumn">
                    <p class="tituloFormFooter">Con tu aporte impulsas y empoderas a una mujer de la industria creativa
                    </p>
                    <div class="iconosFooter">
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
                <div class="subirSecondColumn" style="margin-top: 10%;">
                    <p class="textoSigue">Sigue en contacto con nosotros, escribe tu correo aquí.</p>
                    <input type="text" name="correo" id="correo" placeholder="Correo Electronico">
                    <a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonFormFooter" type="button">Quiero estar
                            conectado</button></a>
                </div>
            </div>
            <div class="bloqueInfoFooter">
                <div>
                    <img src="<?php echo BASE_URL; ?>Assets//img//logoFooter.svg" alt="">
                </div>
                <div style="margin-left: 10%;">
                    <h2>Nosotros</h2>
                    <ul>
                        <li>
                            Sobre TFI
                        </li>
                        <li>
                            Aprende más
                        </li>
                        <li>
                            ¿Cómo funciona?
                        </li>
                        <li>
                            Términos y condiciones
                        </li>
                    </ul>
                </div>
                <div style="margin-left: 30%;">
                    <h3>Contáctanos</h3> <br>
                    <ul>
                        <li>Telefono</li>
                        <li>Whatsapp</li>
                        <li>info@fundtur.com</li>
                        <li>Cr 13 # 90 - 17, Bogotá D.C.</li>
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


    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>

</body>

</html>