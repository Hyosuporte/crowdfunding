<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/Assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body class="main">
    <nav class=" navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand ">Registro Usuario</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
       </nav>  
    <form action="" method="post">
        <div class="formulario">
            <div class="container mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group mb-3">                    
                            <span class="input-group-text">Primer Nombre</span>
                            <input type="text" class="form-control" placeholder="Primer Nombre" id="nombre" required>                            
                        </div>       
                        <div class="input-group mb-3">                    
                            <span class="input-group-text">Primer Apellido</span>
                            <input type="text" class="form-control" placeholder="Primer Apellido" id="apellido" required>                            
                        </div>        
                        <div class="input-group mb-3">                    
                            <span class="input-group-text">Correo</span>
                            <input type="email" class="form-control" placeholder="Correo Electronico" id="correo" required>                            
                        </div>  
                        <div class="input-group mb-3">                    
                            <span class="input-group-text">Contraseña</span>
                            <input type="password" class="form-control" placeholder="Contraseña" id="password" required>                            
                        </div>     
                        <div class="input-group mb-3">                    
                            <span class="input-group-text">Dirección</span>
                            <input type="text" class="form-control" placeholder="Direccion" id="direccion" required>                            
                        </div>       
                        <div class="input-group mb-3">
                            <span class="input-group-text">Pais</span>
                            <select name="pais" id="pais" style="margin-right: 13rem; border-radius: 10px;">
                               
                              </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Ciudad</span>
                            <select name="ciudad" id="ciudad" style="margin-right: 13rem;">
                              </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">ROL</span>
                            <select name="rol" id="rol" style="margin-right: 13rem; border-radius: 10px;">
                                <option value="admin">Admin</option>
                                <option value="cliente">Cliente</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" finalButton">
            <button class="btn btn-primary mb-3 mt-2" type="submit" style="width: 250px; ;height: 50px;" id="btnContinuar">Enviar</button>
        </div>
    </form>
    <script>
        const base_url = "<?php echo BASE_URL; ?>"
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/Assets/js/login.js"></script>
    <script src="https://kit.fontawesome.com/b2831985f5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>