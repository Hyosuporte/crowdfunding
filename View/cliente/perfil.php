<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ajustes Cuenta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
</head>

<body class="main">
  <div class="container-sm p-5">
    <div class="text-center bg-primary">
      <h3>Editar Cuenta</h3>
    </div>
    <div class="d-flex flex-row text-white">
      <div class="col-2">
        <div class="list-group">
          <a href="#cuenta" class="list-group-item list-group-item-action active nav-link" data-bs-toggle="tab" aria-selected="true" role="tab">Cuenta</a>
          <a href="#perfil" class="list-group-item list-group-item-action" data-bs-toggle="tab" aria-selected="false" role="tab">Perfil</a>
          <a href="#misProtectos" class="list-group-item list-group-item-action" data-bs-toggle="tab" aria-selected="false" role="tab">Mis Proyectos</a>
          <a href="#proyectosApoyados" class="list-group-item list-group-item-action" data-bs-toggle="tab" aria-selected="false" role="tab">Proyectos Apoyados</a>
        </div>
      </div>
      <div class="col-10 bg-dark tab-content" id="configPerfil">
        <div class="tab-pane fade active show" role="tabpanel1" id="cuenta">
          <div class="container">
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="newCorreo">Correo Actual</label>
                  <input id="newCorreo" class="form-control" type="email" name="newCorreo"/>
                  <button type="button" class="btn btn-success mt-3">
                    Cambiar Correo
                  </button>
                </div>
              </div>
            </div>
            <div class="row flex-row mt-4">
              <h4>Contraseña</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="passwordNow">Contraseña actual</label>
                  <input id="passwordNow" class="form-control" type="password" name="passwordNow" />
                </div>
                <div>
                  <button type="button" class="btn btn-success mt-3 mb-4">
                    Cambiar Contraseña
                  </button>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="newPassword">Nueva contraseña</label>
                  <input id="newPassword" class="form-control" type="password" name="newPassword" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="newPasswordTry">Vuelve a escribir la contraseña</label>
                  <input id="newPasswordTry" class="form-control" type="password" name="newPasswordTry" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" role="tabpanel1" id="perfil">
          <div class="container">
            <form action="" method="post">
              <div class="row justify-content-center mt-4">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input id="nombreCompleto" class="form-control" type="text" name="nombreCompleto" />
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="correo">Dirrecion de Correo Electrónico</label>
                    <input id="correo" class="form-control" type="email" name="correo" disabled value="cacuervo120@gmail.com" />
                  </div>
                </div>
              </div>
              <div class="row justify-content-center mt-4">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="pais">Pais</label>
                    <input id="pais" class="form-control" type="text" name="pais">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input id="ciudad" class="form-control" type="text" name="ciudad">
                  </div>
                </div>
              </div>
              <div class="row justify-content-center mt-4">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" class="form-control" type="text" name="direccion">
                  </div>
                  <div>
                    <button type="button" class="btn btn-success mt-3 mb-4">
                      Guardar Cambios
                    </button>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" class="form-control" type="number" name="telefono">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="tab-pane fade" role="tabpanel1" id="misProtectos">
          <div class="container">
            <div class="row mt-4">
              <div class="col-md-6">
                <img src="https://images2.alphacoders.com/150/thumb-350-150260.jpg" class="rounded float-start" alt="...">
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" role="tabpanel1" id="proyectosApoyados">
          <p>Panel 4</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    const base_url = "<?php echo BASE_URL; ?>"
    const id_usuario = "<?php echo $_SESSION['id'] ?>"
  </script>
  <script src="https://kit.fontawesome.com/b2831985f5.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="<?php echo BASE_URL; ?>Assets/js/funciones.js"></script>
</body>

</html>