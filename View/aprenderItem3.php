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
                <img class="imagenMenu" src="<?php echo BASE_URL; ?>Assets/img/Picture3.svg" alt="">
            </div>
            <div class="cartas">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprende / General / 3 razones por las que deberías apoyar proyectos de mujeres</h5>
                        <h2 class="tituloItem">3 razones por las que deberías apoyar proyectos de mujeres </h2>
                        <p class="textoItem">
                        <p class="textoAprende">Vivimos en un mundo donde las mujeres no son tratadas por igual, no tienen las mismas oportunidades de educación, empleo o puestos de liderazgo. A menudo son discriminadas, abusadas e incluso asesinadas por su género. Lastimosamente, según la ONU las mujeres tienen un mayor riesgo de pobreza e inseguridad económica y suelen tener menor acceso a recursos para hacer realidad sus proyectos. En esta sección, hablaremos de las mejores razones por las que deberías apoyar proyectos de mujeres.</p> <br>
                        <ol>
                            <li>Las mujeres constituyen la mitad de la población del mundo, pero todavía no reciben el mismo trato. Somos nosotras las que nos enfrentamos a mayor desigualdad en nuestra vida cotidiana. La brecha de género es real y se evidencia en estadísticas que recuerdan que aún no existe paridad en los puestos de decisión y en los roles de acción de los proyectos que lideran la economía.</li>
                            <li>Las mujeres tienen menos probabilidades de tener acceso a recursos financieros. Este es el resultado de una combinación de factores, incluida la discriminación de género, la falta de educación y habilidades, y la falta de educación financiera. Banco Mundial estima que si las mujeres tuvieran el mismo acceso a los recursos que los hombres, sus ingresos aumentarían en $12 billones de dólares durante la próxima década</li>
                            <li>La pobreza tiene género. Según la CEPAL el número de mujeres que viven en la pobreza es mayor que el número de hombres que viven en la pobreza. La UNWOMEN menciona que tan sólo en América látina por cada 100 hombres hay 124 mujeres en pobreza extrema.</li>
                        </ol>
                        <p class="subtituloAprende">¿Cómo puedes dar tu apoyo a las mujeres?</p>
                        <p class="textoAprende">Es verdad que podemos estar subrepresentadas en el lugar de trabajo y en las organizaciones Sin embargo, aún hay muchos proyectos de mujeres que necesitan tu apoyo para marcar la diferencia. Te cuento tan sólo 4 formas en las que puedes mostrar tu apoyo a los proyectos de mujeres:</p> <br>
                        <ol>
                            <li>Donar directamente a un proyecto de mujeres a través de una plataforma de crowdfunding o directamente a la página de su organización.</li>
                            <li>Compartir contenido de un proyecto de mujeres en las redes sociales y etiquetar la organización o el proyecto.</li>
                            <li>Haz voluntariado con una organización o proyecto de mujeres, donando tiempo y talento para ayudarlas a lograr sus objetivos. ¡Esta es una excelente manera de conocer a otras personas que también se preocupan por estos temas! Puede usar sitios web como VolunteerMatch o Idealist para encontrar oportunidades de voluntariado cerca de usted. También puede contactar a las organizaciones directamente en su sitio web si tienen oportunidades de voluntariado disponibles.</li>
                            <li>Apoyar a las empresas que son propiedad de mujeres o emplean principalmente a mujeres.</li>
                        </ol>
                        <br>
                        <p class="textoAprende">Ahora que ya conoces por qué deberías estar apoyando a un proyecto liderado por una mujer, es el momento de que conozcas los proyectos que las chicas de TFInancia han empezado a través de sus campañas de financiación. Ingresa a www.tfilatam.com/tfinancia y conoce más.</p> <br>
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
                        <li class="textoInformacionesFooter">info@tfilatam.com/li>
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