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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/aprender.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <title><?php echo $data['title']; ?></title>
</head>

<body>
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <a href="https://www.fundtur.com"><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
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
                <img class="imagenMenu" src="<?php echo BASE_URL; ?>Assets/img/Picture1.svg" alt="">
            </div>
            <div class="cartas">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprende / General / Guía sobre lo que es el crowdfunding y cómo iniciar tu propia campaña exitosa</h5>
                        <h2 class="tituloItem">Guía sobre lo que es el crowdfunding y cómo iniciar tu propia campaña exitosa</h2>
                        <p class="textoItem">Es el momento de buscar otras alternativas para financiar tus proyectos culturales, artísticos y turísticos. Por ello queremos brindarte en este blog una guía especializada y completa para qué estructures tu propia campaña de crowdfunding exitosa. ¡A por ello! <br>
                        <p class="subtituloAprende">Entonces, ¿Qué es el crowdfunding?</p> <br>
                        <p class="textoAprende">El crowdfunding es la práctica de financiar un proyecto o empresa recaudando dinero de un gran número de personas. El crowdfunding se puede usar para causas personales como emergencias médicas, pero se usa más a menudo para financiar proyectos creativos y nuevas empresas. Se puede utilizar para cualquier cosa, desde financiar un álbum, una película o el diseño de un nuevo producto, hasta recaudar fondos para obras de caridad.</p> <br>
                        <p class="textoAprende">La primera plataforma de financiación colectiva fue ArtistShare en 1997. La empresa permitía a músicos y cineastas ofrecer su trabajo a cambio de donaciones de fans y simpatizantes.</p> <br>
                        <p class="textoAprende">El proceso de crowdfunding generalmente comienza con la persona que tiene una idea para un proyecto o empresa que establece su propia campaña de crowdfunding en una de las muchas plataformas de crowdfunding. Luego crearán incentivos para atraer a las personas a donar dinero para su proyecto. Una vez que hayan establecido su objetivo, comenzarán a promocionar la campaña para que la mayor cantidad de personas posible pueda verla y donar si están interesados en su éxito.</p> <br>
                        <p class="subtituloAprende">¿Cómo elegir la plataforma adecuada para tu campaña?</p> <br>
                        <p class="textoAprende">Elegir la plataforma de crowdfunding adecuada es crucial para tu éxito. Es importante elegir un sitio con la audiencia adecuada, un sitio que pueda atraer los fondos necesarios y un sitio que pueda manejar las necesidades de tu campaña. La mejor plataforma de financiación colectiva que puedes utilizar también dependerá de los objetivos de su campaña, la cantidad de dinero que intenta recaudar y el tipo de recompensas que ofrece.</p> <br>
                        <p class="subtituloAprende">¿Qué tipo de crowdfunding existe?</p> <br>
                        <p class="textoAprende">Existen cuatro tipos de crowdfunding:</p> <br>
                        <ol>
                            <li>El crowdfunding de recompensa es una forma de crowdfunding que consiste en dar a los donadores una recompensa por donar a la campaña. Las recompensas suelen tener la forma de un producto o servicio, pero también pueden ser recompensas no financieras como el reconocimiento.</li>
                            <li>El crowdfunding de donación es un tipo de crowdfunding en el que los donantes donan dinero para ayudar a financiar un proyecto. No obtienen nada a cambio, aparte de la satisfacción de saber que ayudaron a que algo sucediera.</li>
                            <li>El crowdfunding de acciones es una forma de recaudación de fondos en la que las personas invierten a cambio de acciones o propiedad de la empresa. Este tipo de inversión se ha popularizado en sitios como Kickstarter e Indiegogo, así como en sitios como AngelList, que se centran en empresas emergentes y en etapa inicial.</li>
                            <li>La financiación colectiva de préstamos es cuando un proveedor de préstamos ofrece préstamos a los prestatarios a cambio de intereses.</li>
                        </ol>
                        <p class="subtituloAprende">¿De qué depende el éxito de mi campaña?</p> <br>
                        <p class="textoAprende">Las campañas de crowdfunding exitosas suelen ser aquellas que cuentan una buena historia, se conectan con una comunidad y tienen un buen plan de comunicación. Estos tres factores unidos auguran éxito a tu campaña-</p> <br>
                        <p class="textoAprende">El primer factor de éxito es contar una buena historia. La técnica del storytelling es muy utilizada y conocida para conectar con las emociones e informar brevemente de qué trata el proyecto y qué se desea conseguir. Una historia es la razón por la cual la gente respalda su campaña. Si no tiene una historia interesante y atractiva, es poco probable que obtenga patrocinadores para apoyar su campaña.</p> <br>
                        <p class="textoAprende">El segundo factor de éxito es conectar con una comunidad. El crowdfunding trata de construir relaciones con personas que comparten sus intereses y valores. Una campaña exitosa tiene que ofrecer algo de valor al donador para que se involucre en el proyecto y se sienta parte de él. Esto que le puedes ofrecer puede ser una recompensa por su donación o un seguimiento al progreso de tu iniciativa.</p> <br>
                        <p class="textoAprende">El tercer factor de éxito es tener un buen plan de comunicación: esto incluye tener una idea de a quién quiere llegar, qué tipo de contenido les gustaría ver de usted, qué tipo de lenguaje les gustaría escuchar de ti y con qué frecuencia les gustaría. Así mismo, establecer hitos de comunicación que mantengan activa la campaña será primordialmente para conseguir el objetivo.</p> <br>
                        <p class="subtituloAprende">¿Por qué hacer una campaña para financiar un proyecto de la industria creativa?</p> <br>

                        <p class="textoAprende">En los últimos años, el crowdfunding se ha convertido en una forma cada vez más popular para que artistas y creativos financien sus proyectos. Se puede usar como una oportunidad para crear una comunidad de personas que se preocupan por tu proyecto y quieren verlo realidad. También es una oportunidad para mostrar su producto o servicio, algo que puede usar como herramienta de marketing en el futuro. Y finalmente, es un impulso para convertir su producto o servicio en algo que sea viable para el mercado.</p> <br>
                        <p class="textoAprende">En conclusión, hay una serie de factores para tener en cuenta al iniciar una campaña de crowdfunding. El más importante de ellos es tener una meta u objetivo claro para la campaña que esté respaldado por una historia bien narrada que conecte con tu audiencia. Si eres mujer y quieres buscar recursos para tu proyecto creativo, puedes presentar tu idea en TFInancia (ww.tfilatam.com/tfinancia) y empezar a crear tu campaña exitosa. Nosotras te ayudaremos.</p> <br>
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


    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>

</body>

</html>