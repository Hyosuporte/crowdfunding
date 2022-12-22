<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
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
    <title><?php echo $data['title']; ?></title>
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
                <a href="<?php echo BASE_URL; ?>Home/SubirProyecto" class="navbarText">Aprende</a>
            </li>
            <li>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="boton" type="button">Iniciar Sesión</button></a></div>
            </li>
        </ul>
    </nav>

    <div class="content">
        <div class="bannerLanding">
            <div class="oneColumnBanner mt-5">
                <div class="titulo">Crowfunding <br> para mujeres de <br> la industria <br> creativa</div>
                <div class="textoBannerLanding">Es momento de financiar tu proyecto de forma colectiva.</div>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonBannerLanding" type="button">Quiero aportar</button></a>
                </div>
            </div>
            <div class="twoColumnBanner">
                <div>
                    <img class="imagenBannerLanding" src="<?php echo BASE_URL; ?>Assets/img/imagenBanner.svg" alt="">
                    <img class="imagenBannerLanding" src="<?php echo BASE_URL; ?>Assets/img/imagenBanner1.svg" alt="">
                </div>
            </div>
            <div class="threeColumnBanner">
                <div>
                    <img class="imagenBannerLanding" src="<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto3.svg" alt="">
                    <img class="imagenBannerLanding" src="<?php echo BASE_URL; ?>Assets/img/imagenBanner4.svg" alt="">
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
                    <div class="bloqueCaruselItem">
                        <div>
                            <img class="imagenCarusel" src="<?php echo BASE_URL; ?>Assets/img/caruselImagen.svg" alt="">
                        </div>
                        <div class="caruselTexto">
                            <p class="caruselTitulo">Nombre del Proyecto</p>
                            <p class="subirProyectoTextoCarusel">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                interdum, arcu eget blandit suscipit, ex magna
                                pharetra ante, ut convallis neque ipsum eu nisi.Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Duis interdum, arcu eget blandit
                                suscipit, ex magna pharetra ante, ut convallis neque ipsum eu nisi.</p>
                            <p class="caruselMeta">Meta 10.000.000 cop</p>
                            <div class="progress">
                                <div class="progress-bar barraMeta" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="botonCardDestacado mt-5">Ver Proyecto</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="bloqueCaruselItem">
                        <div>
                            <img class="imagenCarusel" src="<?php echo BASE_URL; ?>Assets/img/imagenBanner1.svg" alt="">
                        </div>
                        <div class="caruselTexto">
                            <p class="caruselTitulo">Nombre del Proyecto</p>
                            <p class="subirProyectoTextoCarusel">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                interdum, arcu eget blandit suscipit, ex magna
                                pharetra ante, ut convallis neque ipsum eu nisi.Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Duis interdum, arcu eget blandit
                                suscipit, ex magna pharetra ante, ut convallis neque ipsum eu nisi.</p>
                            <p class="caruselMeta">Meta 10.000.000 cop</p>
                            <div class="progress">
                                <div class="progress-bar barraMeta" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="botonCardDestacado mt-5">Ver Proyecto</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="bloqueCaruselItem">
                        <div>
                            <img class="imagenCarusel" src="<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto3.svg" alt="">
                        </div>
                        <div class="caruselTexto">
                            <p class="caruselTitulo">Nombre del Proyecto</p>
                            <p class="subirProyectoTextoCarusel">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                interdum, arcu eget blandit suscipit, ex magna
                                pharetra ante, ut convallis neque ipsum eu nisi.Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Duis interdum, arcu eget blandit
                                suscipit, ex magna pharetra ante, ut convallis neque ipsum eu nisi.</p>
                            <p class="caruselMeta">Meta 10.000.000 cop</p>
                            <div class="progress">
                                <div class="progress-bar barraMeta" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="botonCardDestacado mt-5">Ver Proyecto</button>
                        </div>
                    </div>
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
                <p class="beneficioTitulo1">Proyectos reales y <br> de gran impacto</p>
                <p class="beneficioTexto">Verificamos la veracidad de cada proyecto <br> previamente y te asesoramos gratis
                    para ayudarte <br> y garantizar el éxito de tu financiación.</p>
            </div>
            <div class="twoColumnBeneficio">
                <p class="beneficioTitulo2">Conectamos la <br> creatividad</p>
                <p class="beneficioTexto2">Construimos puentes de oportunidades y de monetización <br> para el sector
                    cultural, artístico y turístico.</p>
            </div>
            <div class="threeColumnBeneficio">
                <p class="beneficioTitulo3">Hecho por y para <br> mujeres</p>
                <p class="beneficioTexto3">Queremos disminuir la brecha de género y apoyar a aquellas <br> mujeres que están
                    iniciando o fortaleciendo su idea creativa, <br> para impulsarlas y materializarlos en proyectos
                    sostenibles <br> y rentables.</p>
            </div>
        </div>


        <div class="bloqueDestacados">
            <p class="tituloSecundario">Nuestros proyectos destacados</p>
            <div class="cardsDestacados">
                <div class="card">
                    <div>
                        <img class="imageDestacado" src="<?php echo BASE_URL; ?>Assets/img/Destacados.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">Nombre</h5>
                        <p class="textoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Ver Proyecto <img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></button>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img class="imageDestacado" src="<?php echo BASE_URL; ?>Assets/img/Destacados.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">Nombre</h5>
                        <p class="textoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Ver Proyecto <img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></button>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img class="imageDestacado" src="<?php echo BASE_URL; ?>Assets/img/Destacados.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">Nombre</h5>
                        <p class="textoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Ver Proyecto <img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></button>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img class="imageDestacado" src="<?php echo BASE_URL; ?>Assets/img/Destacados.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">Nombre</h5>
                        <p class="textoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Ver Proyecto <img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg" width="20" alt=""></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bannerLanding">
            <div class="oneColumnBanner2 imagenBannerLanding1">
                <div>
                    <img class="imagen1Paso2" src="<?php echo BASE_URL; ?>Assets/img/imagenBanner2.svg" alt="" width="500">
                </div>
            </div>
            <div class="twoColumnBanner2 imagenBannerLanding2">
                <div>
                    <img class="imagen2Paso2" src="<?php echo BASE_URL; ?>Assets/img/imagen2Banner2.svg" alt="" width="500">
                </div>
            </div>
            <div class="threeColumnBanner2">
                <div class="tituloBannerLanding2">Crowfunding para mujeres de la industria creativa</div>
                <div class="textoBannerLanding">
                    <ul class="listaBannerLanding2">
                        <li>Puedes aportar con tu donativo a mujeres que están tratando de realizar
                            su proyecto.</li>
                        <li>Puedes empezar un proyecto de arte (música, literatura, artes plásticas, artes aduiovisuales,
                            fotografía, diseño, artes escénicas) o de gestión cultural.</li>
                        <li>Puedes financiar tu proyecto turístico (Promoción, infraestructura, sostenibilidad, educación, etc)</li>
                    </ul>
                </div>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonBannerLanding" type="button">Conoce más</button></a>
                </div>
            </div>
        </div>

        <div class="bloqueSubirProyecto">
            <div class="subirFirstColumn">
                <p class="subirProyectoTitulo">¿Cómo puedo subir mi proyecto?</p>
                <p class="subirProyectoTexto">Sigue este paso a paso para empezar a materializar tu proyecto:</p>
                <ul>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Registrate e Inicia Sesión</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>En tu perfil, Ingresa a la sección de proyectos subidos y da click en subir proyecto</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Llena el formulario con tus datos y descripción del proyecto.</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Se verificará la veracidad de la organización o persona a cargo del proyecto, este proceso tarda de 15 días a 1 mes en aprobación del equipo experto.</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>En caso de ser aprobado se subirá inmediatamente tu proyecto. En caso de estar en revisión, el equipo te enviará observaciones y asesoría para hacer cambios a tu proyecto. Este tendrá un tiempo determinado para su revisión.</p>
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

        <div class="bloqueImagnes">
            <img src="<?php echo BASE_URL; ?>Assets/img/ministerioCultura.svg" alt="">
            <img src="<?php echo BASE_URL; ?>Assets/img/pne.svg" alt="">
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
                <div style="margin-left: 10%;">
                    <h2>Nosotros</h2>
                    <ul>
                        <li>
                            <a class="textoInformacionesFooter" href="">Sobre TFI</a>
                        </li>
                        <li>
                            <a class="textoInformacionesFooter" href="<?php echo BASE_URL; ?>Home/SubirProyecto">Aprende más</a>
                        </li>
                        <li>
                            <a class="textoInformacionesFooter" href="<?php echo BASE_URL; ?>Home/aplicar">¿Cómo funciona?</a>
                        </li>
                    </ul>
                </div>
                <div style="margin-left: 30%;">
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

    <?php require_once("View/Template/footer.php") ?>
</body>

</html>