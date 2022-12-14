<?php require_once("View/Template/header.php") ?>
<div class="content">
  <div class="d-flex flex-row text-white">
    <div class="col-2">
      <div class="list-group">
        <a href="#cuenta" class=" list-group-item-action active nav-link" data-bs-toggle="tab" aria-selected="true" role="tab" onclick="aparecerVista('cuenta')">Proyectos subidos</a>
        <a href="#perfil" class=" list-group-item-action" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2'])">Proyectos Donados</a>
        <a href="#misProtectos" class=" list-group-item-action" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2'])">Actualización Datos</a>
      </div>
    </div>
    <div class="col-10  tab-content bloqueDashboard bg-primary" id="configPerfil">
      <div class="tab-pane fade active show " role="tabpanel1" id="cuenta">
      <?php if(!isset($_SESSION["datos"]["numProyects"])){?>  
      <div>
          <p class="tableDashboardTitulo">Aun no tines ningun proyecto subido</p>
          <div class="bloqueAunSinProyectos">
            <p class="bloqueAunSinProyectosTitulo">Frase trigger</p>
            <p class="bloqueAunSinProyectosTexto">Recuerda leer el paso a paso y tener todo lo que necesitas a la mano para subir tu proyecto. <br>
              Una vez se suba nuestro equipo se comunicará para verificar la veracidad de tu proyecto y te brindará asesoría para garantizar el éxito de tu campaña. <br>
              Ver condiciones para subir proyecto</p>
            <div class="list-group"><a href="#v-pills-subir-proyecto-1" class="botonForm" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVista('cuenta'),aparecerVista('v-pills-subir-proyecto-1')">Subir Proyecto</a></div>
          </div>
        </div>
        <?php } else { ?>
        <div>
          <table id="tblProyectos" class="display tablita" style="width:100%">
            <thead>
              <tr>
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
        <?php } ?>
      </div>
      <div class="tab-pane fade  bg-primary" id="tablaProyectosSubidos" role="tabpanel" aria-labelledby="v-pills-subir-proyecto-1" tabindex="0">
      </div>
      <div class="tab-pane fade  bg-primary" id="v-pills-subir-proyecto-1" role="tabpanel" aria-labelledby="v-pills-subir-proyecto-1" tabindex="0">
        <div class="contenido">
          <form action="">
            <div class="headerForm">
              <p class="tituloFormSubirProyecto">Subir Proyecto </p>
              <p class="textoPaso">Paso 1 de 2</p>
            </div>
            <p class="subtituloFormSubirProyecto">Datos de la Organización</p>
            <input class="inputGrandeForm" type="text" name="nombre" id="nombre" placeholder="Nombre de la organización*">
            <div class="grupoInputsForm">
              <select class="grupoInput1" name="organizacion" id="organizacion" style="margin-right: 3rem;">
                <option value="">Organizacion</option>
                <option value="1">ONG</option>
                <option value="2">OSC</option>
                <option value="3">Empresa</option>
                <option value="4">Persona Natural</option>
                <option value="5">Academia</option>
                <option value="6">Grupos No Constituidos</option>
              </select>
              <input type="number" class="grupoInput1" placeholder="Telefono Responsable*" required id="telefono" name="telefono" onkeydown="filtro()">
              <script>
                function filtro() {
                  var tecla = event.key;
                  if (['.', 'e'].includes(tecla))
                    event.preventDefault()
                }
              </script>
            </div>
            <input class="inputGrandeForm" type="text" name="web" id="web" placeholder="Sitio WEB">
            <input class="inputGrandeForm" type="text" name="redes" id="redes" placeholder="Redes Sociales*">
            <div class="grupoInputsForm">
              <input class="grupoInput1" type="text" name="banco" id="banco" placeholder="Banco*">
              <input class="grupoInput1" type="text" name="cuenta" id="cuenta" placeholder="Cuenta*">
            </div>
            <div class="list-group"><a href="#v-pills-subir-proyecto-2" class="botonForm" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVista('v-pills-subir-proyecto-1'),aparecerVista('v-pills-subir-proyecto-2')">Subir Proyecto</a></div>
            <!--<button class="botonForm" type="button" onclick="validar()">Siguiente Paso</button>-->
          </form>
        </div>
      </div>
      <div class="tab-pane fade bg-primary" role="tabpanel1" id="v-pills-subir-proyecto-2">
        <div class="contenido">
          <form action="">
            <div class="headerForm">
              <p class="tituloFormSubirProyecto">Subir Proyecto </p>
              <p class="textoPaso">Paso 2 de 2</p>
            </div>
            <p class="subtituloFormSubirProyecto">Datos de la Organización</p>
            <input class="inputGrandeForm" type="text" name="titulo" id="titulo" placeholder="Titulo del proyecto*">
            <div class="grupoInputsForm">
              <input type="text" class="grupoInput1" placeholder="Palabras Clave**" required id="palabras" name="palabras">
              <input type="number" class="grupoInput1" placeholder="Indicador Impacto*" required id="impacto" name="impacto">
            </div>
            <textarea class="inputGrandeFormArea" name="resumen" id="resumen" cols="30" rows="5" placeholder="Resumen*"></textarea>
            <div class="grupoInputsForm">
              <input class="grupoInput1 " type="file" name="foto" id="foto">
              <input class="grupoInput1" type="text" name="video" id="video" placeholder="URL Video*">
            </div>
            <div class="grupoInputsForm">
              <input class="grupoInput1" type="text" name="banco" id="banco" placeholder="Monto a Recaudar">
              <input type="date" class="grupoInput1" id="final" name="final" name="final">
            </div>
            <button class="botonForm" type="button">Siguiente Paso</button>
          </form>
        </div>
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
          <form>
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