<?php require_once("View/Template/header.php") ?>

    <div class="content">
        <div class="bannerLanding">
            <div class="oneColumnBanner mt-5">
                <div class="titulo">Crowfunding para mujeres de la industria creativa</div>
                <div class="textoBannerLanding">Es momento de financiar tu proyecto de forma colectiva.</div>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonBannerLanding" type="button">Llamado accion</button></a>
                </div>
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
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bloqueCaruselItem">
                        <div>
                            <img src="<?php echo BASE_URL; ?>Assets/img/caruselImagen.svg" alt="">
                        </div>
                        <div class="caruselTexto">
                            <p class="caruselTitulo">Hola soy pepe</p>
                            <p class="subirProyectoTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                interdum, arcu eget blandit suscipit, ex magna
                                pharetra ante, ut convallis neque ipsum eu nisi.Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Duis interdum, arcu eget blandit
                                suscipit, ex magna pharetra ante, ut convallis neque ipsum eu nisi.</p>
                            <p class="caruselMeta">Meta 10.000.000 cop</p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 25%" role="progressbar"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="botonCardDestacado mt-5">Llamado acción</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="bloqueCaruselItem">
                        <div>
                            <img src="<?php echo BASE_URL; ?>Assets/img/caruselImagen.svg" alt="">
                        </div>
                        <div class="caruselTexto">
                            <p class="caruselTitulo">Hola soy pepe</p>
                            <p class="subirProyectoTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                interdum, arcu eget blandit suscipit, ex magna
                                pharetra ante, ut convallis neque ipsum eu nisi.Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Duis interdum, arcu eget blandit
                                suscipit, ex magna pharetra ante, ut convallis neque ipsum eu nisi.</p>
                            <p class="caruselMeta">Meta 10.000.000 cop</p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 25%" role="progressbar"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="botonCardDestacado mt-5">Llamado acción</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="bloqueCaruselItem">
                        <div>
                            <img src="<?php echo BASE_URL; ?>Assets/img/caruselImagen.svg" alt="">
                        </div>
                        <div class="caruselTexto">
                            <p class="caruselTitulo">Hola soy pepe</p>
                            <p class="subirProyectoTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                interdum, arcu eget blandit suscipit, ex magna
                                pharetra ante, ut convallis neque ipsum eu nisi.Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Duis interdum, arcu eget blandit
                                suscipit, ex magna pharetra ante, ut convallis neque ipsum eu nisi.</p>
                            <p class="caruselMeta">Meta 10.000.000 cop</p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 25%" role="progressbar"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="botonCardDestacado mt-5">Llamado acción</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="beneficios">
            <div class="oneColumnBeneficio">
                <img class="imagenBeneficio" src="<?php echo BASE_URL; ?>Assets/img/Beneficio.svg" alt="">
                <p class="beneficioTitulo1">Beneficio1</p>
                <p class="beneficioTexto">Verificamos la veracidad de cada proyecto previamente y te asesoramos gratis
                    para ayudarte y garantizar el éxito de tu financiación.</p>
            </div>
            <div class="twoColumnBeneficio">
                <p class="beneficioTitulo2">Beneficio2</p>
                <p class="beneficioTexto2">Construimos puentes de oportunidades y de monetización para el sector
                    cultural, artístico y turístico.</p>
            </div>
            <div class="threeColumnBeneficio">
                <p class="beneficioTitulo3">Beneficio3</p>
                <p class="beneficioTexto3">Queremos disminuir la brecha de género y apoyar a aquellas mujeres que están
                    iniciando o fortaleciendo su idea creativa, para impulsarlas y materializarlos en proyectos
                    sostenibles y rentables.</p>
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
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Llamado acción <img src="/Assets/img/Ojo.svg"
                                width="20" alt=""></button>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img class="imageDestacado" src="<?php echo BASE_URL; ?>Assets/img/Destacados.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">Nombre</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Llamado acción <img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg"
                                width="20" alt=""></button>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img class="imageDestacado" src="<?php echo BASE_URL; ?>Assets/img/Destacados.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">Nombre</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Llamado acción <img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg"
                                width="20" alt=""></button>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img class="imageDestacado" src="<?php echo BASE_URL; ?>Assets/img/Destacados.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="tituloCardDestacado">Nombre</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="metaCardDestacado">Meta $11.000.000</p>
                        <p class="barraProgresoCard"></p>
                        <button type="button" class="botonCardDestacado">Llamado acción <img src="<?php echo BASE_URL; ?>Assets/img/Ojo.svg"
                                width="20" alt=""></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bannerLanding">
            <div class="oneColumnBanner2">
                <div>
                    <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner2.svg" alt="">
                </div>
            </div>
            <div class="twoColumnBanner2">
                <div>
                    <img src="<?php echo BASE_URL; ?>Assets/img/imagenBanner2.svg" alt="">
                </div>
            </div>
            <div class="threeColumnBanner2">
                <div class="titulo">Crowfunding para mujeres de la industria creativa</div>
                <div class="textoBannerLanding">Puedes aportar con tu donativo a mujeres que están tratando de realizar
                    su proyecto.

                    Puedes empezar un proyecto de arte (música, literatura, artes plásticas, artes aduiovisuales,
                    fotografía, diseño, artes escénicas) o de gestión cultural.

                    Puedes financiar tu proyecto turístico (Promoción, infraestructura, sostenibilidad, educación, etc)
                </div>
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonBannerLanding" type="button">Llamado accion</button></a>
                </div>
            </div>
        </div>

        <div class="bloqueSubirProyecto">
            <div class="subirFirstColumn">
                <p class="subirProyectoTitulo">Subir Proyecto</p>
                <p class="subirProyectoTexto">Sigue este paso a paso para empezar a materializar tu proyecto:</p>
                <ul>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Beneficio1</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Beneficio2</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Beneficio3</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Beneficio4</p>
                    </li>
                    <li>
                        <div class="">
                            <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                            <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                        </div>
                        <p>Beneficio5</p>
                    </li>
                    <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonBannerLanding" type="button">Llamado
                                accion</button></a></div>
                </ul>
            </div>
            <div class="subirSecondColumn">
                <img src="<?php echo BASE_URL; ?>Assets/img/subirProyecto.svg" alt="">
            </div>
        </div>

        <div class="bloqueImagnes">
            <img src="<?php echo BASE_URL; ?>Assets/img/ministerioCultura.svg" alt="">
            <img src="<?php echo BASE_URL; ?>Assets/img/pne.svg" alt="">
        </div>

        <div class="bannerFooter">
            <div class="formFooter">
                <div class="subirFirstColumn">
                    <p class="tituloFormFooter">Frase de conexion comunidad</p>
                    <div class="iconosFooter">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                </div>
                <div class="subirSecondColumn" style="margin-top: 10%;">
                    <input type="text" name="" id="">
                    <input type="text" name="" id="">
                    <a href="<?php echo BASE_URL; ?>Home/login/"><button class="botonFormFooter" type="button">Llamado accion</button></a>
                </div>
            </div>
            <div class="bloqueInfoFooter">
                <div>
                    <h1>Logo</h1>
                </div>
                <div style="margin-left: 10%;">
                    <h2>Seccion</h2>
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
                <div style="margin-left: 50%;">
                    <h3>Seccion</h3> <br>
                    info@fundtur.com
                </div>
            </div>
        </div>

    </div>
    <?php require_once("View/Template/footer.php") ?>
    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>

</body>

</html>