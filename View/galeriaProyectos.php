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
                <a href="<?php echo BASE_URL; ?>"><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
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
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="boton" type="button">Iniciar Sesi??n</button></a></div>
            </li>
        </ul>
    </nav>
    <div class="content">
        <div class="bannerLanding-2">
            <p class="titulo-2">Ayuda a que un proyecto creativo hecho por mujeres se convierta en realidad</p>
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
                <p class="subirProyectoTitulo">??C??mo puedo subir mi proyecto?</p>
                <p class="subirProyectoTexto">Sigue este paso a paso para empezar a materializar tu proyecto:</p>
                <ul>
                    <li>
                        <div class="pasosSubirProyecto">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoInstruccionesSubir">Registrate e Inicia Sesi??n</p>
                    </li>
                    <li>
                        <div class="pasosSubirProyecto">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoInstruccionesSubir">En tu perfil, Ingresa a la secci??n de proyectos subidos y da
                            click en subir proyecto</p>
                    </li>
                    <li>
                        <div class="pasosSubirProyecto">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoInstruccionesSubir">Llena el formulario con tus datos y descripci??n del proyecto.
                        </p>
                    </li>
                    <li>
                        <div class="pasosSubirProyecto">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoInstruccionesSubir">Se verificar?? la veracidad de la organizaci??n o persona a
                            cargo del proyecto, este proceso tarda de 15 d??as a 1 mes en aprobaci??n del equipo experto.
                        </p>
                    </li>
                    <li>
                        <div class="pasosSubirProyecto">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p class="textoInstruccionesSubir">En caso de ser aprobado se subir?? inmediatamente tu proyecto.
                            En caso de estar en revisi??n, el equipo te enviar?? observaciones y asesor??a para hacer
                            cambios a tu proyecto. Este tendr?? un tiempo determinado para su revisi??n.</p>
                    </li>
                </ul>
            </div>
            <div class="subirSecondColumn">
                <img class="imagenComoSubirProyecto" src="<?php echo BASE_URL; ?>Assets/img/subirProyecto.svg" alt="">
            </div>
        </div>
        <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonSubirProyecto" type="button">Subir Proyecto</button></a></div>
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
                <p class="textoSigue">Sigue en contacto con nosotros, escribe tu correo aqu??.</p>
                <input class="txtFooter" type="text" name="" id="">
                <a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonFormFooter" type="button">Quiero estar
                        conectado</button></a>
            </div>
        </div>
        <div class="bloqueInfoFooter">
            <div>
                <img src="<?php echo BASE_URL; ?>Assets//img//logoFooter.svg" alt="">
            </div>
            <div class="contactanos">
                <h2>Nosotros</h2>
                <ul>
                    <li>
                        <a class="textoInformacionesFooter" href="">Sobre TFI</a>
                    </li>
                    <li>
                        <a class="textoInformacionesFooter" href="<?php echo BASE_URL; ?>Home/aprende">Aprende m??s</a>
                    </li>
                    <li>
                        <a class="textoInformacionesFooter" href="<?php echo BASE_URL; ?>Home/aplicar">??C??mo funciona?</a>
                    </li>
                </ul>
            </div>
            <div class="contactanos">
                <h3>Cont??ctanos</h3>
                <ul>
                    <li class="textoInformacionesFooter">Telefono +57 317 4336722</li>
                    <li class="textoInformacionesFooter">Whatsapp +57 315 8475169</li>
                    <li class="textoInformacionesFooter">info@fundtur.com</li>
                    <li class="textoInformacionesFooter">Cr 13 # 90 - 17, Bogot?? D.C.</li>
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