<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>Assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Recuperar Contraseña</title>
</head>
<body>
    
    <form action="<?php echo BASE_URL; ?>usuario/recuperarPassword/" method="post">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recuperar Contraseña</h5>
                    <p class="card-text">Escriba su correo y se le enviara un email para recuperar su contraseña</p>
                    <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@ejemplo.ejemplo">
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/b2831985f5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>