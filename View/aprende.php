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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/aprender.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <title>Aprende</title>
</head>

<body>
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <a href="<?php echo BASE_URL; ?>"><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/galeriaProyectos" class="navbarText itemsNavbar">Descubre</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/aplicar" class="navbarText">Aplica</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/aprende" class="navbarText activeNavbar">Aprende</a>
            </li>
            <li>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="boton" type="button">Iniciar Sesión</button></a></div>
            </li>
        </ul>
    </nav>
    <div class="content">
        <div class="bannerAprender">
            <img src="<?php echo BASE_URL; ?>Assets/img/bannerAprender.svg" alt="">
        </div>
        <div class="principalAprende">
            <div class="menu">
                <div class="card">
                    <div>
                        <input class="buscar" placeholder="Buscar" type="text" name="" id="">
                        <ul>
                            <li><a class="textoMenu" href="<?php echo BASE_URL; ?>Home/aprender">General</a></li>
                            <li><a class="textoMenu" href="<?php echo BASE_URL; ?>Home/aprenderItem">Tema 1</a></li>
                            <li><a class="textoMenu" href="<?php echo BASE_URL; ?>Home/aprenderItem2">Tema 2</a></li>
                            <li><a class="textoMenu" href="<?php echo BASE_URL; ?>Home/aprenderItem3">Tema 3</a></li>
                            <li><a class="textoMenu" href="<?php echo BASE_URL; ?>Home/aprenderItem4">Tema 4</a></li>
                            <li><a class="textoMenu" href="<?php echo BASE_URL; ?>Home/aprenderItem5">Tema 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cartas">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprende / General</h5>
                        <div class="filaTemas">
                            <div class="card2 fondoBlanco">
                                <div>
                                    <img class="imagenTema" src="<?php echo BASE_URL; ?>uploadeddocuments/18.jpeg" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="tituloTema">¿Qué es el crowdfunding?</h5>
                                    <p class="textoCard">Resumen del tema que se encontrara en la base de conocimiento
                                    </p>
                                    <a href="<?php echo BASE_URL; ?>Home/aprenderItem" class="botonCardTema">Ver Tema<img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></a>
                                </div>
                            </div>
                            <div class="card2 fondoBlanco">
                                <div>
                                    <img class="imagenTema" src="<?php echo BASE_URL; ?>uploadeddocuments/21.jpeg" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="tituloTema">¿Cómo elegir la plataforma adecuada para tu campaña?</h5>
                                    <p class="textoCard">Resumen del tema que se encontrara en la base de conocimiento
                                    </p>
                                    <a href="<?php echo BASE_URL; ?>Home/aprenderItem2" class="botonCardTema">Ver Tema<img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="filaTemas">
                            <div class="card2 fondoBlanco">
                                <div>
                                    <img class="imagenTema" src="<?php echo BASE_URL; ?>uploadeddocuments/22.jpg" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="tituloTema">¿Qué tipo de crowdfunding existe?</h5>
                                    <p class="textoCard">Resumen del tema que se encontrara en la base de conocimiento
                                    </p>
                                    <a href="<?php echo BASE_URL; ?>Home/aprenderItem3" class="botonCardTema">Ver Tema<img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></a>
                                </div>
                            </div>
                            <div class="card2 fondoBlanco">
                                <div>
                                    <img class="imagenTema" src="<?php echo BASE_URL; ?>uploadeddocuments/19.jpeg" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="tituloTema">¿De qué depende el éxito de mi campaña?</h5>
                                    <p class="textoCard">Resumen del tema que se encontrara en la base de conocimiento
                                    </p>
                                    <a href="<?php echo BASE_URL; ?>Home/aprenderItem4" class="botonCardTema">Ver Tema<img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="filaTemas">
                            <div class="card2 fondoBlanco">
                                <div>
                                    <img class="imagenTema" src="<?php echo BASE_URL; ?>uploadeddocuments/20.jpeg" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="tituloTema">¿Por qué hacer una campaña para financiar un proyecto de la industria creativa?</h5>
                                    <p class="textoCard">Resumen del tema que se encontrara en la base de conocimiento
                                    </p>
                                    <a href="<?php echo BASE_URL; ?>Home/aprenderItem5" class="botonCardTema">Ver Tema<img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></a>
                                </div>
                            </div>
                        </div>
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
                        <li class="textoInformacionesFooter">info@fundtur.com</li>
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


    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>

</body>

</html>