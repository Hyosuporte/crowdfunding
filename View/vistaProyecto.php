<?php
include('mercado_pago.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="">
    <meta http-equiv="Content-Security-Policy" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <title><?php echo $data['title']; ?></title>
</head>

<body>
    <nav class="navbar fixed-top">
        <ul class="navbarList">
            <li>
                <a href=""><img class="navbarLogo" src="<?php echo BASE_URL; ?>Assets/img/LOGO_21.svg" alt=""></a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>Home/galeriaProyectos" class="navbarText activeNavbar">Descubre</a>
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

        <div>
            <img class="bannerProyecto" src="<?php echo BASE_URL; ?>Assets/img/Hero Banner.svg" alt="">
        </div>

        <div class="bloqueVistaProyecto">
            <p class="tituloVistaProyecto" id="nombre" name="nombre">Nombre Proyecto</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum, arcu eget blandit suscipit, ex
                magna pharetra ante, ut convallis neque ipsum eu nisi. Phasellus at arcu vitae diam faucibus imperdiet.
                Proin eu tortor purus. Vivamus purus nunc, feugiat et vestibulum id, cursus non felis. Nullam elementum
                at augue non hendrerit. Nullam semper, nunc ut fermentum placerat, purus nunc vestibulum sem, ut varius
                tortor arcu non massa. Donec fermentum turpis sagittis magna accumsan, ut aliquam augue volutpat. Nam
                mollis ipsum risus, a facilisis nunc fringilla id.</p>
            <img src="<?php echo BASE_URL; ?>Assets/img/caruselImagen.svg" alt="">
            <div class="informacionVistaProyecto">
                <div class="donaciones">
                    <div class="montoDonacion">
                        <div style="display: flex;">
                            <p>Recibido $11.000.000</p>
                            <p style="margin-left: 50%;">Meta $11.000.000</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar colorBarraProgreso" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="montoDonadores">
                        <img src="<?php echo BASE_URL; ?>Assets/img/people.svg" alt="" width="50">
                        <p style="margin-left: 5%; font-size: 20px;">55 Donadores</p>
                        <p style="margin-left: 15%;margin-top: 2%;">Ver todos</p>
                        <img style="margin-left: 15%;" src="<?php echo BASE_URL; ?>Assets/img/compartir.svg" alt="" width="40">
                    </div>
                </div>
                <div class="fechas">
                    <div class="fechaInicio">
                        <p>Fecha de Inicio</p>
                        <p>10 - 05 - 2022</p>
                    </div>
                    <div class="fechaCierre">
                        <p>Fecha de Cierre</p>
                        <p> 10 - 09 - 2022</p>
                    </div>
                </div>
                <div class="diasRestantes">
                    15
                </div>
            </div>
            <div class="inputsDonar"></div>
                    <p>Cantidad. $ COP</p>
                    <input class="cantidadDonar" type="text" name="cantidad" id="cantidad">
                   
                        <div>
                        <div class="checkout-btn"></div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>

</body>

</html>