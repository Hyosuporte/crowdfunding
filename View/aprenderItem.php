<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/aprender.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <title><?php echo $data['title']; ?></title>
</head>

<body>
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <a href="<?php echo BASE_URL; ?>"><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
            </li>
            <li class="descubre">
                <a href="<?php echo BASE_URL; ?>Home/galeriaProyectos" class="navbarText itemsNavbar">Descubre</a>
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
        <div class="bannerAprender">
            <img src="<?php echo BASE_URL; ?>Assets/img/bannerAprender.svg" alt="">
        </div>
        <div class="principalAprende">
            <div class="menu">
                <div class="card">
                    <div class="card-body">
                        <input class="buscar" placeholder="Buscar" type="text" name="" id="">
                        <ul>
                            <li>General</li>
                            <li>Tema 1
                                <ul>
                                    <li>Item1</li>
                                    <li>Item2</li>
                                    <li>Item3</li>
                                </ul>
                            </li>
                            <li>Tema2</li>
                            <li>Tema3</li>
                            <li>Tema4</li>
                            <li>Tema5</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cartas">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprende / General / Item</h5>
                        <h2 class="tituloItem">Titulo del Item </h2>
                        <p class="textoItem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor magna nunc, sit amet dignissim arcu dignissim cursus. Donec tempus nunc justo. Donec suscipit tristique leo, sit amet lacinia turpis convallis et. Fusce tincidunt felis elit, posuere eleifend mi volutpat ut. Nam sem ex, faucibus ac nunc eu, scelerisque sollicitudin erat. Phasellus non metus accumsan, suscipit tortor eu, venenatis magna. In pretium velit at tellus pretium molestie. Phasellus posuere, lorem eu tempus euismod, felis elit convallis enim, a tincidunt velit lectus sed felis. Fusce vel nunc tincidunt, auctor mauris id, dapibus nisi. Sed consequat dui sed augue fermentum, in aliquet ipsum sagittis. Nullam vitae tortor non massa fringilla rhoncus in vel metus. Maecenas sed gravida turpis, in ultrices ante. Phasellus sed malesuada dui, vestibulum dignissim massa.

                            Nam ac elit augue. Nulla consectetur ut lorem eu faucibus. Donec cursus purus porta eros pharetra hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras euismod quis nibh ac sagittis. Proin vitae leo quis quam consectetur maximus eleifend sed massa. Nunc gravida diam orci, et malesuada tortor consectetur malesuada. Aenean in sem id urna pulvinar pulvinar et sed massa. Fusce pellentesque fermentum risus eget suscipit. Aliquam justo purus, iaculis vehicula auctor nec, mollis eu elit.
                            
                            Nunc nec urna tristique, mattis nunc eget, tempor ex. Nullam tempus erat ut nisi lobortis lobortis. Nullam cursus, lectus quis lacinia feugiat, urna felis scelerisque mi, quis ornare dui nisl a ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam dignissim tellus orci, at elementum velit ullamcorper sed. Donec faucibus nisl non dictum ultricies. Quisque sit amet tortor eget risus bibendum fringilla. Proin et velit non mauris ultricies faucibus. Morbi malesuada massa eget vestibulum aliquam. Nunc sed facilisis eros. Vestibulum at sagittis turpis. Vivamus vel augue a purus laoreet dignissim ac ut nisi. Aenean in lorem molestie, vehicula turpis fringilla, dictum turpis. Proin a dui felis.
                            
                            Ut et nisi elementum, faucibus turpis vitae, convallis sem. Maecenas diam turpis, congue sit amet lacus non, porta convallis diam. Integer nec vehicula justo. Etiam sollicitudin auctor nisl, aliquet faucibus mauris vestibulum et. Proin dapibus gravida dolor id scelerisque. Praesent mollis orci vel nisi venenatis malesuada. Integer aliquam sapien id ante iaculis lobortis.
                            
                            Morbi congue gravida libero, vel luctus ante. Morbi tempus arcu ut sem rutrum, quis vestibulum libero faucibus. Praesent tempor interdum hendrerit. Quisque pretium, ligula eleifend ultrices aliquet, leo mi faucibus quam, vestibulum hendrerit erat eros vel nibh. Cras vel sapien quis nulla congue consectetur. Maecenas sed gravida tellus. Aliquam quis nisi luctus, egestas lacus a, maximus purus. Nulla fringilla accumsan sem, sed fermentum tortor pulvinar id. Nulla aliquet hendrerit nulla, in malesuada elit fermentum vel. Etiam eu semper quam, in dapibus sapien. Aenean ac tortor eros. Praesent consectetur gravida tempor.</p>
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
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                </div>
                <div class="subirSecondColumn" style="margin-top: 10%;">
                    <p class="textoSigue">Sigue en contacto con nosotros, escribe tu correo aquí.</p>
                    <input type="text" name="" id="">
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
                            <a href="<?php echo BASE_URL; ?>Home/aprende">Aprende más</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>Home/aplicar">¿Cómo funciona?</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>

</body>

</html>