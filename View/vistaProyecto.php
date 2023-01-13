<?php require_once("mercado_pago.php") ?>

<!DOCTYPE html>
<html lang="es">

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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/vistaProyecto.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Security-Policy" content="">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <title><?php echo $data['title']; ?></title>
</head>

<body>
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <a href="https://www.fundtur.com"><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
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
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="boton" type="button">Iniciar Sesión</button></a></div>
            </li>
        </ul>
    </nav>
    <div class="content" id="vistaProyecto">

        <div>
            <img class="bannerProyecto" src="<?php echo BASE_URL; ?>Assets/img/Hero Banner.svg" alt="">
        </div>

        <div class="bloqueVistaProyecto">
            <p class="tituloVistaProyecto" id="nombre" name="nombre"><?php echo $data['titulo']; ?></p>
            <p><?php echo $data['abstrac']; ?></p>
            <iframe class="imagenYutu" width="640" height="360" src="https://www.youtube.com/embed/<?php echo explode("=", $data['video'])[1]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="informacionVistaProyecto">
                <div class="detallesProyecto">
                    <div class="Meta">
                        <div class="montoDonacion">
                            <div style="display: flex;">
                                <div style="display: flex;">
                                    <p class="fuentePrincipal">Recibido: </p>
                                    <p class="fuenteSecundaria"> $<?php
                                                                    if ($data['SUM(d.monto)'] != null) {
                                                                        echo $data['SUM(d.monto)'];
                                                                    } else {
                                                                        echo 0;
                                                                    }
                                                                    ?></p>
                                </div>
                                <div style="display: flex; margin-left: 15vw;">
                                    <p class="fuentePrincipal">Meta: </p>
                                    <p class="fuenteSecundaria"> $<?php echo $data['monto_financiacion']; ?></p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar colorBarraProgreso" style="width: <?php echo (($data['SUM(d.monto)'] * 100) / $data['monto_financiacion']); ?>%" role="progressbar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="Donadores">
                        <div class="montoDonadores">
                            <img src="<?php echo BASE_URL; ?>Assets/img/people.svg" alt="" width="50">
                            <p class="fuentePrincipal" style="margin-top: 1vw; margin-left: 1vw;"><?php echo $data['COUNT(d.monto)']; ?> Donadores</p>
                            <p class="fuenteSecundaria" style="margin-left: 1vw;margin-top: 1vw;">Ver todos</p>
                            <img style="margin-left: 15%;" src="<?php echo BASE_URL; ?>Assets/img/compartir.svg" alt="" width="40">
                        </div>
                    </div>
                    <div class="fechas">
                        <div class="FechaInicio">
                            <div class="fechaInicio">
                                <p class="fuentePrincipal">Fecha de Inicio</p>
                                <p class="fuenteSecundaria"><?php echo $data['fecha_comienzo']; ?></p>
                            </div>
                        </div>
                        <div class="FechaCierre">
                            <div class="fechaCierre">
                                <p class="fuentePrincipal">Fecha de Cierre</p>
                                <p class="fuenteSecundaria"><?php echo $data['fecha_final']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="Dias">
                        <div class="carta">
                            <div class="box">
                                <div class="percent">
                                    <svg>
                                        <circle cx="200" cy="100" r="100"></circle>
                                        <circle cx="200" cy="100" r="100"></circle>
                                    </svg>
                                    <p>15</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php if ($data['SUM(d.monto)'] < $data['monto_financiacion']) { ?>
                <div class="inputsDonar">
                    <div>
                        <p>Cantidad. $ COP</p>
                        <input class="cantidadDonar" type="text" name="cantidad" id="cantidad">
                    </div>
                    <div class="checkout-btn cantidadDonar" style="margin-top: 1.5vw; margin-left: 1vw;"></div>
                </div>
                <div>
                <?php } else { ?>
                    <h4 class="fuentePrincipal">Lo sentimos las donaciones para este proyecto se han cerrado</h4><br>
                <?php } ?>
                <table class="tablaDonador">
                    <thead>
                        <th>Donador</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                    </thead>
                    <tbody>
                        <?php for ($i = 0, $j = 1; $i < sizeof($data['topDonadores']); $i++, $j++) {
                            $fecha = explode(" ", $data['topDonadores'][$i]['fecha_donacion']);
                            echo "<tr>";
                            echo "<td>" . $j . "</td>";
                            echo "<td>" . $data['topDonadores'][$i]['monto'] . "</td>";
                            echo "<td>" . $fecha[0] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
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
    <script>
        const mp = new MercadoPago('TEST-af98f1a8-b5d7-464f-b9f7-d8263610c69f', {
            locale: 'es-CO'
        });

        mp.checkout({
            preference: {
                id: '<?php echo $preference->id; ?>'
            },
            render: {
                container: '.checkout-btn',
                label: 'Donar'
            }
        })
    </script>
    <?php require_once("View/Template/footer.php") ?>
</body>

</html>