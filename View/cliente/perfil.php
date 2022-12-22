<?php require_once("View/Template/header.php") ?>
<div class="content">
  <div class="d-flex flex-row text-white ml-2 margenIzquierda">
    <div class="fondoBlanco sizeMenu">
      <div class="list-group menu">
        <a href="#cuenta" class="  active textoMenu" data-bs-toggle="tab" aria-selected="true" role="tab" onclick="aparecerVista('cuenta'),desaparecerVistas(['v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img style="margin-right: 1vw;" src="<?php echo BASE_URL; ?>Assets/img/proyectosSubidosDashboard.svg" alt="">Proyectos subidos</a>
        <a href="#perfil" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img style="margin-right: 1vw;" src="<?php echo BASE_URL; ?>Assets/img/proyectosDonadosDashboard.svg" alt="">Proyectos
          Donados</a>
        <a href="#misProtectos" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img style="margin-right: 1vw;" src="<?php echo BASE_URL; ?>Assets/img/actualizarDatosDashboard.svg" alt="">Actualización
          Datos</a>
      </div>
      <div class="ultimaOpcion"><a href="<?php echo BASE_URL; ?>usuario/salir" class="textoMenuAbajo"><img style="margin-right: 1vw;" src="<?php echo BASE_URL; ?>Assets/img/cerrarSesionDashboard.svg" alt="">Cerrar Sesión</a></div>
    </div>
    <div class="col-10  tab-content bloqueDashboard panelDashboard" id="configPerfil">
      <div class="tab-pane fade active show fondoDashboard fondoBlanco contenido" role="tabpanel1" id="cuenta">
        <?php if (!isset($_SESSION["datos"]["numProyects"])) { ?>
          <div class="pantallaInicialDashboard">
            <p class="tableDashboardTitulo">Aun no tines ningun proyecto subido</p>
            <div class="bloqueAunSinProyectos">
              <p class="bloqueAunSinProyectosTitulo">Creativa, es hora de financiar tu idea</p>
              <div class="bannerDashboardProyecto">
                <p class="bannerDashboardProyectoTitulo">Es hora de financiar tu idea</p>
                <p class="bannerDashboardProyectoTexto">Recuerda leer el paso a paso y tener todo lo que necesitas a la
                  mano para subir tu proyecto. <br>
                  Una vez se suba nuestro equipo se comunicará para verificar la veracidad de tu proyecto y te brindará
                  asesoría para garantizar el éxito de tu campaña. <br>
                  Ver condiciones para subir proyecto</p>
                <div class="list-group botonBannerDashboardSubirProyecto"><a href="#v-pills-subir-proyecto-1" class="botonFormBanner" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVista('cuenta'),aparecerVista('v-pills-subir-proyecto-1')">Subir Proyecto</a>
                </div>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="fondoBlanco pantallaInicialDashboard">
            <table id="tblProyectos" class="display tablita" style="width:100%">
              <thead>
                <tr>
                  <th class="bordeDerecha bordeAbajo">Id</th>
                  <th class="bordeDerecha bordeAbajo">Título</th>
                  <th class="bordeDerecha bordeAbajo">Comienzo</th>
                  <th class="bordeDerecha bordeAbajo">Final</th>
                  <th class="bordeDerecha bordeAbajo">Estado</th>
                  <th class="bordeDerecha bordeAbajo">Acciones</th>
                  <th class="bordeAbajo">Observaciones</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        <?php } ?>
      </div>
      <div class="tab-pane fade  fondoDashboard" id="v-pills-subir-proyecto-1" role="tabpanel" aria-labelledby="v-pills-subir-proyecto-1" tabindex="0">
        <div class="contenido">
          <form action="">
            <div class="headerForm">
              <p class="tituloFormSubirProyecto">Subir Proyecto </p>
              <p class="textoPaso">Paso 1 de 3</p>
            </div>
            <p class="subtituloFormSubirProyecto">Datos de la Organización</p>
            <input class="inputGrandeForm" type="number" name="nit" id="nit" placeholder="NIT">
            <input class="inputGrandeForm" type="text" name="nombre" id="nombre" placeholder="Nombre de la organización*">
            <div class="grupoInputsForm">
              <select class="grupoInput1" name="organizacion" id="organizacion" style="margin-right: 3rem;">
                <option value="0">Organizacion</option>
                <option value="1">ONG</option>
                <option value="2">OSC</option>
                <option value="3">Empresa</option>
                <option value="4">Academia</option>
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
            <div class="list-group"><a href="#v-pills-subir-proyecto-2" class="botonForm" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="verificarCampos('v-pills-subir-proyecto-1','v-pills-subir-proyecto-2')">
                Siguiente Paso >></a></div>
          </form>
        </div>
      </div>
      <div class="tab-pane fade fondoDashboard" role="tabpanel1" id="v-pills-subir-proyecto-2">
        <div class="contenido">
          <form action="">
            <div class="headerForm">
              <p class="tituloFormSubirProyecto">Subir Proyecto </p>
              <p class="textoPaso">Paso 2 de 3</p>
            </div>
            <p class="subtituloFormSubirProyecto">Datos de la Organización</p>
            <input class="inputGrandeForm" type="text" name="titulo" id="titulo" placeholder="Titulo del proyecto*">
            <div class="grupoInputsForm">
              <input type="text" class="grupoInput1" placeholder="Palabras Clave**" required id="palabras" name="palabras">
              <input type="number" class="grupoInput1" placeholder="Indicador Impacto*" required id="impacto" name="impacto">
            </div>
            <textarea class="inputGrandeFormArea" name="resumen" id="resumen" cols="30" rows="5" placeholder="Resumen*"></textarea>
            <div class="grupoInputsForm">
              <input class="inputFileForm" type="file" name="foto" id="foto" style="width: 100%;">
              <input class="grupoInput1" type="text" name="video" id="video" placeholder="URL Video*">
            </div>
            <div class="grupoInputsForm">
              <input class="grupoInput1" type="text" name="monto" id="monto" placeholder="Monto a Recaudar">
              <input type="date" class="grupoInput1" id="final" name="final" name="final">
            </div>
            <div class="list-group"><a href="#v-pills-subir-proyecto-3" class="botonForm" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="verificarCampos2('v-pills-subir-proyecto-2','v-pills-subir-proyecto-3')">Subir
                Proyecto</a></div>
          </form>
        </div>
      </div>
      <div class="tab-pane fade fondoDashboard" role="tabpanel1" id="v-pills-subir-proyecto-3">
        <div class="contenido">
          <form action="">
            <div class="headerForm">
              <p class="tituloFormSubirProyecto">Subir Proyecto </p>
              <p class="textoPaso">Paso 3 de 3</p>
            </div>
            <p class="subtituloFormSubirProyecto">Documentación</p>
            <div class="titulosInputsFileForm">
              <p>Registro Único</p>
              <p class="titulosInputsFileForm2">Certificado de Existencia</p>
            </div>
            <div class="grupoInputsForm2 inputArchivo">
              <input class="inputFileForm" type="file" name="tributario" id="tributario" class="inputArchivo">
              <input class="inputFileForm" type="file" name="existenciaYrepresentacion" id="existenciaYrepresentacion">
            </div>
            <div class="titulosInputsFileForm">
              <p>Cédula de Ciudadanía</p>
              <p class="titulosInputsFileForm2">Certificado bancario</p>
            </div>
            <div class="grupoInputsForm2">
              <input class="inputFileForm" type="file" name="cedula" id="cedula" class="inputArchivo">
              <input class="inputFileForm" type="file" name="bancario" id="bancario">
            </div>
            <div class="titulosInputsFileForm">
              <p>Acta de aprobación</p>
              <p class="titulosInputsFileForm2">Formulario de declaraciones</p>
            </div>
            <div class="grupoInputsForm2">
              <input class="inputFileForm" type="file" name="acta" id="acta" class="inputArchivo">
              <input class="inputFileForm" type="file" name="formulario" id="formulario">
            </div>
            <div class="titulosInputsFileForm">
              <p>Camara</p>
            </div>
            <div class="grupoInputsForm2">
              <input class="inputFileForm" type="file" name="camara" id="camara">
            </div>
            <button class="botonFormFinal" type="submit">Siguiente Paso</button>
          </form>
        </div>
      </div>
      <div class="tab-pane fade fondoDashboard fondoBlanco pantallaInicialDashboard contenido" role="tabpanel1" id="perfil">
        <div>
          <p class="tituloFormSubirProyecto">Proyectos Donados</p>
          <p class="subtituloFormSubirProyecto">Los proyectos que estas ayudando a que se hagan realidad </p>
        </div>
        <table class="tablita" style="width:100%">
          <thead>
            <tr>
              <th class="bordeDerecha bordeAbajo">Proyecto</th>
              <th class="bordeDerecha bordeAbajo">Cantidad</th>
              <th class="bordeDerecha bordeAbajo">Fecha</th>
              <th class="bordeAbajo">Ver Proyectos</th>
            </tr>
          </thead>
          <tbody id="Donaciones">
          </tbody>
        </table>
      </div>
      <div class="tab-pane  fade fondoDashboard fondoBlanco contenido" role="tabpanel1" id="misProtectos">
        <div class="container">
          <div>
            <div class="col-md-6">
              <form id="frmUpdateCorreo">
                <div class="form-group">
                  <h4 class="textoFormuario">Correo</h4>
                  <input id="newCorreo" class="form-control inputActualizarDatos" type="email" name="newCorreo" placeholder="Correo Actual" />
                  <input id="ActCorreo" class="form-control" type="hidden" name="ActCorreo" />
                  <button type="button" class=" botonFormActualizar mt-3 mb-3" onclick="UpdateCorreo()">
                    Cambiar Correo
                  </button>
                </div>
              </form>
            </div>
          </div>
          <form id="frmUpdatePassword">
            <div class="row flex-row">
              <h4 class="textoFormuario">Contraseña</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <input id="passwordNow" class="form-control inputActualizarDatos" type="password" name="passwordNow" placeholder="Contraseña actual" />
                </div>
                <div>
                  <button type="button" class=" botonFormActualizar mt-3 mb-4" onclick="UpdatePassword();">
                    Cambiar Contraseña
                  </button>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input id="newPassword" class="form-control inputActualizarDatos" type="password" name="newPassword" placeholder="Nueva contraseña" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input id="newPasswordTry" class="form-control inputActualizarDatos" type="password" name="newPasswordTry" placeholder="Vuelve a escribir la contraseña" />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="container">
          <form id="frmUpdateData">
            <h4 class="textoFormuario">Datos Personales</h4>
            <div class="row justify-content-center mt-4">
              <div class="col-md-5">
                <div class="form-group">
                  <input id="nombreCompleto" class="form-control inputActualizarDatos" type="text" name="nombreCompleto" placeholder="Nombre Completo" />
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <input id="correo" class="form-control inputActualizarDatos" type="email" name="correo" disabled value="<?php echo $_SESSION['usuario']; ?>" placeholder="Dirrecion de Correo Electrónico" />
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-4">
              <div class="col-md-5">
                <div class="form-group">
                  <select name="pais" id="paisUser" class="form-control" onclick="listarCiudad();">
                  </select>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <select name="ciudad" id="ciudadUser" class="form-control">
                  </select>
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-4">
              <div class="col-md-5">
                <div class="form-group">
                  <input id="direccion" class="form-control inputActualizarDatos" type="text" name="direccion" placeholder="Direccion">
                </div>
                <div>
                  <button type="button" class=" botonFormActualizar mt-3 mb-4" onclick="UpdateDates()">
                    Guardar Cambios
                  </button>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <input id="telefonoUser" class="form-control inputActualizarDatos" type="number" onkeydown="filtro()" name="telefonoUser" placeholder="Telefono">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once("View/Template/footer.php") ?>
<script>
  const id_usuario = "<?php echo $_SESSION['id'] ?>"
</script>
<script src="<?php echo BASE_URL; ?>Assets/js/DataTable.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/Dashboard.js"></script>
</body>

</html>