<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" href="https://static.wixstatic.com/media/df72ce_9438b428c20d483789e4a085e71f91d1%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/df72ce_9438b428c20d483789e4a085e71f91d1%7Emv2.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <title><?php echo $data['title']; ?></title>
</head>

<body>
    <form action="<?php echo BASE_URL; ?>organizacion/insertarorg" method="post">
        <div class="container-fluid">
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">id de la Organizacion</span>
                    <input type="number" class="form-control" placeholder="id de la organizacion" name="id_org" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre de la Organizacion</span>
                    <input type="text" class="form-control" placeholder="Nombre de la organizacion" name="nombre" name="nombre" id="nombre" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tipo Organizacion</span>
                    <select name="organizacion" id="organizacion" style="margin-right: 3rem;">
                        <option value="1">ONG</option>
                        <option value="2">OSC</option>
                        <option value="3">Empresa</option>
                        <option value="4">Persona Natural</option>
                        <option value="5">Academia</option>
                        <option value="6">Grupos No Constituidos</option>
                    </select>
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <input type="number" class="form-control " placeholder="Telefono de contacto de la persona encargada" required id="telefono" name="telefono" onkeydown="filtro()">
                    <script>
                        function filtro() {
                            var tecla = event.key;
                            if (['.', 'e'].includes(tecla))
                                event.preventDefault()
                        }
                    </script>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Redes Sociales" required id="redes" name="redes">
                    <span class="input-group-text">Pagina WEB</span>
                    <input type="text" class="form-control" placeholder="Pagina WEB" id="pagina" name="pagina" name="pagina" required>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Numero de cuenta</span>
                    <input type="text" class="form-control" placeholder="Numero de cuenta" id="cuenta" name="cuenta" maxlength="20" required>
                </div>
            </div>
            <center>
                <button class="btn btn-primary mb-3 mt-2" type="submit" style="width: 250px; ;height: 50px; margin:auto;" id="btnContinuar">Guardar</button>
            </center>
        </div>
    </form>
    <form action="<?php echo BASE_URL; ?>proyecto/insertarproyecto" method="post" enctype="multipart/form-data">
        <div class="formulario">
            <div class="card">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Titulo del Proyecto</span>
                        <input type="text" class="form-control" placeholder="Titulo del Proyecto" id="titulo" name="titulo" size="90rem" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                        <input type="text" class="form-control" placeholder="KeyWords" required id="keywords" name="keywords">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Abstract" id="Abstract" name="Abstract" style="height: 150px"></textarea>
                        <label for="floatingTextarea">Abstract</label>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Indicador Impacto</span>
                        <input type="number" class="form-control" placeholder="Indicador Impacto" id="impacto" name="impacto" style="margin-right: rem;" required>
                        <span class="input-group-text">Monto financiero</span>
                        <input type="number" class="form-control" placeholder="Monto financiero" id="monto" name="monto" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group">
                                    <label for="final">Fecha Final Campaña</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                        <input type="date" class="form-control" id="final" name="final">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group">
                                    <label for="ejecucion">Tiempo de ejecucion</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                        <input type="date" class="form-control" id="ejecucion" name="ejecucion">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Foto</span>
            <input class="form-control" type="file" id="foto" name="foto" required itemid="foto">
            <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
            <input type="text" class="form-control" placeholder="Video" required id="video" name="video">
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Informacion Adicional" id="info" name="info" name="info" style="height: 150px"></textarea>
            <label for="floatingTextarea">Informacion Adicional</label>
        </div>
        <div class="input-group mb-3">
            <div class="card">
                <div class="card-body">
                    <div class=" mb-3">
                        <label for="camara" class="form-label">Camara de comercio</label>
                        <input class="form-control" type="file" id="camara" name="camara" required itemid="camara">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <button class="btn btn-primary mb-3 mt-2" type="submit" style="width: 250px; ;height: 50px; margin:auto;" id="btnContinuar">Enviar</button>
    </form>

    <?php require_once("View/Template/footer.php") ?>
    <script src="<?php echo BASE_URL; ?>Assets/js/index.js"></script>
</body>

</html>