<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Crowfunding</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
</head>

<body>
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <span class="navbar-brand navbarLogo"><img src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></span>
            </li>
            <li>
                <a href="">Ver Proyectos</a>
            </li>
            <li>
                <a href="">Subir Proyecto</a>
            </li>
            <li>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonLogin" type="button">Llamado accion</button></a></div>
            </li>
        </ul>
    </nav>

    <div class="content">
        <div class="bannerLanding">
            <div class="oneColumnBanner">
                <div class="titulo">Crowfunding para mujeres de la industria creativa</div>
                <div class="textoBannerLanding">Texto prueba</div>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonBannerLanding" type="button">Llamado accion</button></a></div>
            </div>
            <div class="twoColumnBanner">
                <div>
                    <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                    <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                </div>
            </div>
            <div class="threeColumnBanner">
                <div>
                    <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                    <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                </div>
            </div>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide carusel" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <table>
                        <tr>
                            <td>
                                <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                            </td>
                            <td style="margin-left: 100px;">
                                <p>Hola soy pepe</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="carousel-item">
                    <table>
                        <tr>
                            <td>
                                <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                            </td>
                            <td style="margin-left: 100px;">
                                <p>Hola soy pepe</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="carousel-item">
                    <table>
                        <tr>
                            <td>
                                <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                            </td>
                            <td style="margin-left: 100px;">
                                <p>Hola soy pepe</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="beneficios">
            <div class="oneColumnBeneficio">
                <img class="imagenBeneficio" src="<?php echo BASE_URL; ?>Assets/img/Beneficio.svg" alt="">
                <p class="beneficioTitulo1">Beneficio1</p>
                <p class="beneficioTexto">Texto Beneficio</p>
            </div>
            <div class="twoColumnBeneficio">
                <img class="imagenBeneficio" src="<?php echo BASE_URL; ?>Assets/img/Beneficio.svg" alt="">
                <p class="beneficioTitulo2">Beneficio2</p>
                <p class="beneficioTexto2">Texto Beneficio</p>
            </div>
            <div class="threeColumnBeneficio">
                <img class="imagenBeneficio" src="<?php echo BASE_URL; ?>Assets/img/Beneficio.svg" alt="">
                <p class="beneficioTitulo3">Beneficio3</p>
                <p class="beneficioTexto3">Texto Beneficio</p>
            </div>
        </div>




    </div>
    <script>
        const base_url = "<?php echo BASE_URL; ?>"
    </script>
    <script src="https://kit.fontawesome.com/b2831985f5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>