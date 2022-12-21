<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                <a href="<?php echo BASE_URL; ?>Home/galeriaProyectos" class="navbarText itemsNavbar">Descubre</a>
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
                        <p class="textoImagenBannerAplicar">Nos preocupamos por ayudarte y asesorarte para garantizar el
                            éxito de tu campaña.</p>
                    </div>
                    <div class="backGroundImage" style="background-image: url('<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto2.svg');">
                        <p class="textoImagenBannerProyecto posicionTextoImagenBannerProyecto1  colorTextoImagenBanner1">
                            Recibe acompañamiento gratuito </p>
                        <p class="textoImagenBannerAplicar">Una oportunidad para recibir aportes colectivos y recursos
                            confiables sin interés o préstamos de por medio.</p>
                    </div>
                </div>
            </div>
            <div class="threeColumnBanner">
                <div>
                    <div class="backGroundImage2" style="background-image: url('<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto3.svg');">
                        <p class="textoImagenBannerProyecto posicionTextoImagenBannerProyecto1  colorTextoImagenBanner1">
                            Construye una comunidad
                        <p class="textoImagenBannerAplicar">Intercambia con otras mujeres de la industria, comunica y da
                            a conocer tu proyecto.</p>
                        </p>
                    </div>
                    <div class="backGroundImage2" style="background-image: url('<?php echo BASE_URL; ?>Assets/img/imagenBannerSubirProyecto4.svg');">
                        <p class="textoImagenBannerProyecto posicionTextoImagenBannerProyecto1  colorTextoImagenBanner2">
                            Aprende sobre fondeo</p>
                        <p class="textoImagenBannerAplicar">Gestionar recursos es todo un arte. Inicia este camino de la
                            mano del expertise de TFI.</p>
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
                                <p class="textoPaso">Para que el proyecto sea aprobado debe ser liderado por una mujer,
                                    estar enmarcado en
                                    el sector artístico, cultural o turístico. La experiencia en el sector no es
                                    determinante pero sí brindará criterios de confianza para el equipo evaluador de
                                    TFI.</p>
                            </li>
                            <li>
                                <div class="pasosLista">
                                    <img class="checkCirculo" src="<?php echo BASE_URL; ?>Assets/img/checkCirculo.svg" alt="">
                                    <img src="<?php echo BASE_URL; ?>Assets/img/circulo.svg" alt="">
                                </div>
                                <p class="textoPaso">En caso de que el proyecto no realice los cambios y observaciones
                                    por el equipo
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
            <div class="seccionPreguntas">
                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué es TFInancia?</p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">TFInancia es una plataforma de TFI Latam para apoyar a mujeres
                                de la industria
                                creativa a través de crowdfunding (Financiamiento colectivo a través de internet).
                                En esta plataforma puedes presentar tu proyecto y realizar una campaña de
                                recaudación de fondos que te permita hacer realidad tu idea.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué ventajas tengo al subir mi proyecto en TFInancia?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">
                            <ol>
                                <li class="fuenteRespuestas" value="1">
                                    Obtendrás asesoría para mejorar y organizar una campaña de crowdfunding
                                    exitosa.
                                </li>
                                <li class="fuenteRespuestas">Te rodearás de una comunidad de mujeres liderando la
                                    industria creativa.</li>
                                <li class="fuenteRespuestas">Lograrás el financiamiento para dar un impulso a tu
                                    proyecto.</li>
                                <li class="fuenteRespuestas">
                                    Estarás rodeada de especialistas (TFI Latam) en formulación y ejecución de
                                    proyectos.
                                </li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cómo nació TFInancia?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">TFInancia es una iniciativa de TFI LATAM, cuya misión es mover
                                la industria
                                creativa hacia las oportunidades que brinda la economía digital. Nació gracias al
                                apoyo del Ministerio de Cultura de Colombia en un Crowd-camp realizado por y
                                para mujeres. Un Crowd-camp es un bootcamp o entrenamiento formativo
                                inmersivo para obtener habilidades en la formulación y presentación de proyectos
                                financiados a través de crowdfunding. El Crowd-camp fue realizado por TFI LATAM
                                mediante convocatoria abierta y transparente para mujeres en las artes, la gestión
                                cultural y el turismo de Colombia. Este fue realizado con 10 mujeres en Melgar,
                                Tolima en el 2022, desde allí surgió la idea de crear una plataforma que continúe
                                apoyando a las mujeres en el sector.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cómo puedo participar en un crowd-camp?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Por el momento no hay convocatoria abierta. Sin embargo, se
                                planea continuar con
                                el desarrollo de crowd-camps en los próximos meses. Si quieres participar,
                                deberás estar atenta a las redes sociales de TFI Latam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué tipo de proyectos puedo subir en TFInancia?</p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Se aceptan proyectos sólo relacionados con la industria
                                creativa: artes, gestión
                                cultural y turismo. Los proyectos aceptados deben subirse a nombre de una
                                organización o empresa con o sin fines de lucro.
                                No se aceptan campañas para causas políticas o de emergencia humanitaria.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Por qué sólo proyectos liderados o con representación
                                mayoritariamente de
                                mujeres?</p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">La desigualdad de género lastimosamente aún sigue siendo una
                                realidad en la
                                economía latinoamericana. La brecha es aún más alarmante cuando se trata de
                                creación de emprendimientos o de figuras de liderazgo en proyectos de la
                                industria creativa que, aunque están asociados psicológicamente con actividades
                                más femeninas, siguen teniendo roles de poder y de decisión masculinos.
                                En ese sentido, TFInancia busca brindar una oportunidad para resaltar el trabajo
                                de estas mujeres y crear una vitrina no sólo de financiamiento sino de promoción.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué diferencia a TFInancia de otras plataformas de crowdfunding?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">
                            <ol>
                                <li value="1" class="fuenteRespuestas">
                                    Hemos desarrollado para ti, una plataforma tecnológica segura
                                    para
                                    recaudar fondos para tu proyecto.
                                </li>
                                <li class="fuenteRespuestas">
                                    La seguridad es un aspecto esencial que priorizamos en la creación de
                                    TFInancia.
                                </li>
                                <li class="fuenteRespuestas">
                                    Para subir un proyecto en TFInancia deberás obtener primero el aval de
                                    verificación de los asesores de TFI Latam. Este proceso tarda alrededor de
                                    15 días calendario y se obtiene retroalimentación para mejorar o brindar
                                    mayor confianza en la postulación de tu proyecto.
                                </li>
                                <li class="fuenteRespuestas">
                                    TFInancia es hecho por y para mujeres, por ende nos encargamos de
                                    verificar el impacto de cada proyecto en este sentido.
                                </li>
                                <li class="fuenteRespuestas">
                                    TFInancia está especializado en la industria creativa, el equipo de TFI Latam
                                    ha trabajado más de 10 años por este sector. Así que conocemos muy bien
                                    las necesidades y demandas del sector, así como lo que podemos ofrecer
                                    ante las nuevas realidades.
                                </li>
                                <li class="fuenteRespuestas">
                                    Recibimos sólo proyectos liderados por organizaciones o empresas, esto nos
                                    permite verificar la viabilidad y confianza detrás de un proyecto.
                                </li>
                                <li class="fuenteRespuestas">
                                    TFInancia sólo acepta campañas de corta duración porque creemos que
                                    puede ayudar a financiar más rápido y mejor un proyecto.
                                </li>
                            </ol>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cuáles son los pasos a seguir para subir un proyecto?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Para poder subir tu proyecto deberás entrar la opción con el
                                mismo nombre, llenar
                                los datos y descripción del proyecto. Así mismo, adjuntar los documentos
                                pertinentes para aprobación:
                                Registro Único Tributario de la organización
                                Certificado de Existencia y Representación Legal
                                Cédula de Ciudadanía del Representante Legal
                                Certificado bancario
                                Acta de aprobación de la donación de la organización
                                Formulario con las declaraciones sobre la donación
                                Luego de haber subido la información deberás esperar la aprobación de tu
                                proyecto o la retroalimentación del mismo, hecha por asesores de TFI Latam. Esta
                                retroalimentación pasa por los estados de verificación de documentos
                                previamente. Una vez verificado se aprueba y se realiza el cargue en plataforma
                                para tu aprobación. Te llegará un correo cuando esto suceda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cómo puedo conseguir que me avalen mi proyecto en TFInancia?

                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Algunas recomendaciones para que tu proyecto sea aprobado o
                                avalado
                                rápidamente son:
                            <ol>
                                <li value="1" class="fuenteRespuestas">
                                    Presentar a nombre de una organización o empresa que pueda tener una
                                    trayectoria previa verificable, al menos en redes sociales o en web.
                                </li>
                                <li class="fuenteRespuestas">
                                    Realizar una descripción breve del proyecto respondiendo los 5Qs: ¿Qué es
                                    el proyecto? ¿Quién lo lidera? ¿Cuándo se desea lograr la meta? ¿Porqué se
                                    quiere desarrollar? ¿Cómo se realizará una vez lograda la meta?
                                </li>
                                <li class="fuenteRespuestas">
                                    Los proyectos no pueden excederse del monto de $30,000,000 cop, ni de 6
                                    meses de campaña. 30 días de campaña es un tiempo ideal
                                </li>
                                <li class="fuenteRespuestas">Ser concisa y clara con la información.</li>
                                <li class="fuenteRespuestas">
                                    Subir fotos y relacionar vídeos claros y preferiblemente de buena calidad.
                                    En especial los vídeos deben tener un resumen de lo qué se quiere lograr
                                    con el proyecto.
                                </li>
                            </ol>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cuánto cuesta crear un proyecto en TFInancia?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Crear un proyecto en TFInancia es gratis en primera instancia.
                                TFI Latam cobra
                                una comisión del 10% sobre lo que el proyecto recaude al finalizar el tiempo de
                                campaña propuesto, esto incluye la tasa de uso de la plataforma y las comisiones
                                de la pasarela de pago.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cuánto dinero puedo solicitar en una campaña en TFInancia?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Por ahora sólo se puede solicitar campañas de $30,000,000 cop
                                máximo.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cuánto tiempo debe durar una campaña en TFInancia?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Máximo 6 meses, pero creemos que el tiempo ideal para una
                                campaña es de 30
                                días.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cuándo se considera que una campaña está terminada?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Cuando se logra el objetivo de campaña en tiempo colocado en
                                plataforma o en
                                dinero recaudado
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Puedo ver el progreso de mi campaña?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Sí, este se puede ver en tiempo real cuando se aprueba en
                                plataforma.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Puedo hacer algún cambio a mi proyecto una vez enviado?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Sólo se puede hacer cambios si se solicita en el proceso de
                                verificación y
                                retroalimentación. Una vez aprobado no podrás hacer ningún cambio.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Es legal hacer crowdfunding?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Sí, el gobierno colombiano expidió el decreto 1357 de 2018 en el
                                que se
                                reglamenta la actividad de financiación colaborativa también conocida como
                                crowdfunding. El decreto se centra en regular el tipo de crowdfunding financiero
                                (prestamos o venta de acciones u otros valores por empresas). TFInancia sólo
                                realiza, por ahora, el tipo de crowdfunding de donación.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué implicaciones tributarias hay en un proyecto que se sube en
                                TFInancia?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Al crear un proyecto en TFInancia se solicita certificado
                                bancario, esto legalmente
                                debemos reportarlo ante la DIAN sumado al costo de uso de la plataforma. Tu
                                organización podrá reportar esto ante la declaración de renta.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué tipo de cuentas puedo inscribir para recibir mi pago?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Sólo se aceptan cuentas de ahorros. No se acepta ni cuentas
                                corrientes ni nequi,
                                daviplata o billeteras virtuales.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Desde qué país puedo crear un proyecto?

                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Por el momento sólo se aceptan proyectos realizados en Colombia
                                (independientemente si seas colombiana o no).
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué tipo de cuentas puedo inscribir para recibir mi pago?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Sólo se aceptan cuentas de ahorros. No se acepta ni cuentas
                                corrientes ni nequi,
                                daviplata o billeteras virtuales.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Desde qué país puedo crear un proyecto?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Por el momento sólo se aceptan proyectos realizados en Colombia
                                (independientemente si seas colombiana o no).
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Quién va a promocionar mi campaña?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Tú eres la encargada de dar a conocer tu campaña, para eso
                                siempre
                                recomendamos realizar una adecuada estrategia de comunicaciones. En TFI
                                apoyaremos eventualmente replicando o comunicando sobre algunos proyectos,
                                especialmente los aquellos beneficiados en los Crowd-camps
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Por qué TFInancia usa un tercero para procesar los pagos?

                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Buscamos la transparencia y confianza en los recaudos de dinero,
                                por ello nos
                                acogemos al Decreto 1357 de 2010 relacionado con la actividad de financiación
                                colaborativa o crowdfunding, en dónde se señala en el artículo 2.41.2.1.1 Funciones
                                de las entidades que desarrollen la actividad de financiación colaborativa. "Realizar
                                el recaudo de los recursos relacionados con la financiación de los proyectos
                                productivos a través de entidades vigiladas por la Superintendencia Financiera de
                                Colombia, distintas a las propias entidades de financiación colaborativa".

                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cómo recibo el dinero recolectado en mi proyecto?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Una vez cumplida la meta en tiempo o en monto, se realizará la
                                transferencia total
                                a tu cuenta bancaria. Este proceso tarda un máximo de 15 días calendario.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Cómo puedo realizar una donación a un proyecto?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">En la vista del proyecto se encuentra el botón de "donar". Este
                                botón redirecciona
                                a la pasarela de pago de mercado pago, dónde podrás optar por la que sea tu
                                mejor opción de método de pago. Se acepta tarjeta de crédito, PSE y puntos de
                                pago en efectivo. El donativo puede iniciar desde 1 dólar hasta el momento que
                                prefieras.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Es seguro realizar una donación en TFInancia?
                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">Sí, usamos terceros reconocidos para realizar los donativos. El
                                tercero que
                                utilizamos es MercadoPago.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="proyectosFila">
                    <div class="card">
                        <div class="cabeceraCardDudas">
                            <p class="fuentePreguntas">¿Qué ventajas puedo obtener como donador de un proyecto?

                            </p>
                        </div>
                        <div class="card-body fondoBlanco">
                            <p class="fuenteRespuestas">1. Puedes obtener una recompensa simbólica por parte del
                                proyecto
                                financiado (si así lo plantea la creadora).
                                2. Si el proyecto que ayudarás a financiar está liderado por una organización
                                sin ánimo de lucro, puedes solicitar un certificado de donación.
                            </p>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/b2831985f5.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>

</body>

</html>