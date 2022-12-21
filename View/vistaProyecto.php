<?php require_once("mercado_pago.php") ?>

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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/vistaProyecto.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Security-Policy" content="">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <title><?php echo $data['title']; ?></title>
</head>

<body>
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
                <div><a href="<?php echo BASE_URL; ?>Home/login/"><button class="boton" type="button">Iniciar Sesión</button></a></div>
            </li>
        </ul>
    </nav>
    <div class="content" id="vistaProyecto" >

        <div>
            <img class="bannerProyecto" src="<?php echo BASE_URL; ?>Assets/img/Hero Banner.svg" alt="">
        </div>

        <div class="bloqueVistaProyecto">
            <p class="tituloVistaProyecto" id="nombre" name="nombre"><?php echo $data['titulo']; ?></p>
            <p><?php echo $data['abstrac']; ?></p>
            <img src="<?php echo $data['foto']; ?>" alt="" width="640" height="360" style="margin-left: 23vw;">
            <div class="informacionVistaProyecto">
                <div class="detallesProyecto">
                    <div class="Meta">
                        <div class="montoDonacion">
                            <div style="display: flex;">
                                <div style="display: flex;">
                                    <p class="fuentePrincipal">Recibido</p>
                                    <p class="fuenteSecundaria">$<?php echo $data['SUM(d.monto)']; ?></p>
                                </div>
                                <div style="display: flex; margin-left: 15vw;">
                                    <p class="fuentePrincipal">Meta</p>
                                    <p class="fuenteSecundaria">$<?php echo $data['monto_financiacion']; ?></p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar colorBarraProgreso" style="width: 25%" role="progressbar"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="200"></div>
                            </div>
                        </div>
                    </div>

                    <div class="Donadores">
                        <div class="montoDonadores">
                            <img src="<?php echo BASE_URL; ?>Assets/img/people.svg" alt="" width="50">
                            <p class="fuentePrincipal" style="margin-top: 1vw; margin-left: 1vw;"><?php echo $data['COUNT(d.monto)']; ?>  Donadores</p>
                            <p class="fuenteSecundaria" style="margin-left: 1vw;margin-top: 1vw;">Ver todos</p>
                            <img style="margin-left: 15%;" src="<?php echo BASE_URL; ?>Assets/img/compartir.svg" alt="" width="40">
                        </div>
                    </div>
                    <div class="fechas">
                        <div class="FechaInicio">
                            <div class="fechaInicio">
                                <p class="fuentePrincipal">Fecha de Inicio</p>
                                <p class="fuenteSecundaria">10 - 05 - 2022</p>
                            </div>
                        </div>
                        <div class="FechaCierre">
                            <div class="fechaCierre">
                                <p class="fuentePrincipal">Fecha de Cierre</p>
                                <p class="fuenteSecundaria"> 10 - 09 - 2022</p>
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
            <div class="inputsDonar">
                <div>
                    <p>Cantidad. $ COP</p>
                    <input class="cantidadDonar" type="text" name="cantidad" id="cantidad">
                </div>
                <div class="checkout-btn cantidadDonar" style="margin-top: 1.5vw; margin-left: 1vw;"></div>
            </div>
            <div>
                <table class="tablaDonador">
                    <thead>
                        <th>Donador</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                    </thead>
                    <tr>
                        <td>1.000.00</td>
                        <td>1.000.00</td>
                        <td>1.000.00</td>
                    </tr>
                </table>
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
                    <p>Sigue en contacto con nosotros, escribe tu correo aquí.</p>
                    <input type="text" name="" id="">
                    <a href="/Home/login/"><button class="botonFormFooter" type="button">Quiero estar
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
                <div style="margin-left: 50%;">
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
                label: 'Pagar con MercadoPago'
            }
        })
    </script>
    <?php require_once("View/Template/footer.php") ?>
    <script src="<?php echo BASE_URL; ?>Assets/js/funciones.js"></script>

</body>

</html>