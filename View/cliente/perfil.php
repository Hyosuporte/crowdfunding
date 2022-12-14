<?php require_once("View/Template/header.php") ?>
<div class="content">
  <div class="d-flex flex-row text-white">
    <div class="col-2">
      <div class="list-group">
        <a href="#cuenta" class=" list-group-item-action active nav-link" data-bs-toggle="tab" aria-selected="true" role="tab">Proyectos subidos</a>
        <a href="#perfil" class=" list-group-item-action" data-bs-toggle="tab" aria-selected="false" role="tab">Proyectos Donados</a>
        <a href="#misProtectos" class=" list-group-item-action" data-bs-toggle="tab" aria-selected="false" role="tab">Actualización Datos</a>
      </div>
    </div>
    <div class="col-10  tab-content bloqueDashboard bg-primary" id="configPerfil">
      <div class="tab-pane fade active show " role="tabpanel1" id="cuenta">
        <table id="tblProyectos" class="display tablita" style="width:100%">
          <thead>
            <tr>
              <!--id, nombre, boton-->
              <th>Id</th>
              <th>Título</th>
              <th>Comienzo</th>
              <th>Final</th>
              <th>Estado</th>
              <th>Acciones</th>
              <th>Observaciones</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" role="tabpanel1" id="perfil">
        <table class=" tablita" style="width:100%">
          <thead>
            <tr>
              <!--id, nombre, boton-->
              <th>Proyecto</th>
              <th>Cantidad</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tbody>
        </table>
      </div>
      <div class="tab-pane  fade bg-primary" role="tabpanel1" id="misProtectos">
        <div class="container">
          <div class="row mt-4">
            <div class="col-md-6">
              <form id="frmUpdateCorreo">
                <div class="form-group">
                  <label for="newCorreo">Correo Actual</label>
                  <input id="newCorreo" class="form-control" type="email" name="newCorreo" />
                  <input id="ActCorreo" class="form-control" type="hidden" name="ActCorreo" />
                  <button type="button" class="btn btn-success mt-3" onclick="UpdateCorreo()">
                    Cambiar Correo
                  </button>
                </div>
              </form>
            </div>
          </div>
          <form id="frmUpdatePassword">
            <div class="row flex-row mt-4">
              <h4>Contraseña</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="passwordNow">Contraseña actual</label>
                  <input id="passwordNow" class="form-control" type="password" name="passwordNow" />
                </div>
                <div>
                  <button type="button" class="btn btn-success mt-3 mb-4" onclick="UpdatePassword();">
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
          </form>
        </div>
        <div class="container">
          <form >
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
                  <input id="correo" class="form-control" type="email" name="correo" disabled value="<?php echo $_SESSION['usuario']; ?>" />
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
      <div class="tab-pane fade bg-primary" role="tabpanel1" id="proyectosApoyados">
        <p>Panel 4</p>
      </div>
    </div>
  </div>
</div>
</div>
<?php require_once("View/Template/footer.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  const id_usuario = "<?php echo $_SESSION['id'] ?>"
</script>
<script src="<?php echo BASE_URL; ?>Assets/js/DataTable.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/funciones.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/Dashboard.js"></script>
</body>

</html>