<?php require_once("View/Template/header.php") ?>
<div class="content">
  <div class="d-flex flex-row text-white ml-2 margenIzquierda">
    <div class="fondoBlanco sizeMenu">
      <div class="list-group menu">
        <a href="#cuenta" class="  active textoMenu" data-bs-toggle="tab" aria-selected="true" role="tab" onclick="aparecerVista('cuenta'),desaparecerVistas(['v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/proyectosSubidosDashboard.svg" alt="">Proyectos subidos</a>
        <a href="#perfil" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/proyectosDonadosDashboard.svg" alt="">Proyectos
          Donados</a>
        <a href="#misProtectos" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/actualizarDatosDashboard.svg" alt="">Actualización
          Datos</a>
        <a href="#v-pills-subir-proyecto-1" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="aparecerVista('v-pills-subir-proyecto-1'),desaparecerVistas(['cuenta','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])">
          <img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/file-arrow-up-solid.svg" alt="">Subir Proyecto</a>
      </div>
      <div class="ultimaOpcion"><a href="<?php echo BASE_URL; ?>usuario/salir" class="textoMenuAbajo"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/cerrarSesionDashboard.svg" alt="">Cerrar Sesión</a></div>
    </div>
    <div class="col-10  tab-content bloqueDashboard panelDashboard" id="configPerfil">
      <div class="tab-pane fade active show fondoDashboard fondoBlanco contenido" role="tabpanel1" id="cuenta">
        <?php if (!isset($data["numProyects"])) { ?>
          <div class="pantallaInicialDashboard">
            <p class="tableDashboardTitulo">Aun no tienes ningun proyecto subido</p>
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
          <div class=" pantallaInicialDashboard">
            <div>
              <p class="tituloFormSubirProyecto">Proyectos Subidos</p>
              <p class="subtituloFormSubirProyecto">Los proyectos que has creado y su estado</p>
            </div>
            <table id="tblProyectos" class="display tablita">
              <thead>
                <tr>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Proyecto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Estado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Observaciones&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Cámara de Comercio <i class="fa-solid fa-cloud-arrow-down"></i></strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>RUT</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Representante Legal</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Cédula</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Certificado Bancario</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Aprobación de Donación</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Formulario de Declaraciones</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Abstract&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Keywords&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Tiempo de Ejecución</strong></th>            
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Foto</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Duración campaña</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Indicador Impacto</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Monto Financiación</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Link Video</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Información Adicional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Usuario</strong></th>
                  <th data-class-name="bordeDerecha bordeAbajo   textoTabla"><strong>Organización</strong></th>
                 <th data-class-name="bordeAbajo "></th>
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
          <form id="frmOrganiza" enctype="multipart/form-data" method="POST">
            <div class="headerForm">
              <p class="tituloFormSubirProyecto">Subir Proyecto </p>
              <p class="textoPaso">Paso 1 de 3</p>
            </div>
            <p class="subtituloFormSubirProyecto">Datos de la Organización</p>
            <input class="inputGrandeForm" type="hidden" name="miToken" id="miToken" value="<?php echo $_SESSION['miToken']; ?>">
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
          <form id="frmProyec" enctype="multipart/form-data" method="POST">
            <div class="headerForm">
              <p class="tituloFormSubirProyecto">Subir Proyecto </p>
              <p class="textoPaso">Paso 2 de 3</p>
            </div>
            <p class="subtituloFormSubirProyecto">Datos del proyecto</p>
            <input class="inputGrandeForm" type="text" name="titulo" id="titulo" placeholder="Titulo del proyecto*">
            <div class="grupoInputsForm">
              <input type="text" class="grupoInput1" placeholder="Palabras Clave*" required id="palabras" name="palabras">
              <input type="number" class="grupoInput1" placeholder="Indicador Impacto*" required id="impacto" name="impacto">
            </div>
            <textarea class="inputTextArea" name="resumen" id="resumen" cols="30" rows="5" placeholder="Resumen*"></textarea>
            <div class="grupoInputsForm">
              <label class="labelInputs labelFoto" for="comienzo">Foto</label>
            </div>
            <div class="grupoInputsForm">
              <input class="inputFileForm" type="file" name="fotoPro" id="foto" style="width: 100%;">
              <input class="grupoInput1" type="text" name="video" id="video" placeholder="URL Video*">
            </div>
            <div class="grupoInputsForm">
              <input class="grupoInput1" type="text" name="monto" id="monto" placeholder="Monto a Recaudar">
              <input type="number" class="grupoInput1" id="duracion" name="duracion" placeholder="Duración de la campaña">
            </div>
            <div class="grupoInputsForm">
              <label class="labelInputs" for="comienzo">Fecha Comienzo</label>
              <label class="labelInputs2" for="final">Fecha Final</label>
            </div>
            <div class="grupoInputsForm">
              <input type="date" class="grupoInput1" id="comienzo" name="comienzo">
              <input class="grupoInput1" type="date" name="final" id="final">
              <input type="number" class="grupoInput1" id="ejecucion" name="ejecucion" placeholder="Tiempo Ejecución">
            </div>
            <div class="grupoInputsForm">
              <textarea class="inputTextArea" name="adicional" id="adicional" cols="30" rows="10" placeholder="Informacion Adicional"></textarea>
            </div>
            <div class="list-group"><a href="#v-pills-subir-proyecto-3" class="botonForm" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="verificarCampos2('v-pills-subir-proyecto-2','v-pills-subir-proyecto-3')">Subir
                Proyecto >></a></div>
          </form>
        </div>
      </div>
      <div class="tab-pane fade fondoDashboard" role="tabpanel1" id="v-pills-subir-proyecto-3">
        <div class="contenido">
          <form id="frmDocuments" enctype="multipart/form-data" method="post">
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
            <button class="botonFormFinal" type="button" onclick="subirProyecto()">Subir Proyecto>></button>
          </form>
        </div>
      </div>
      <div class="tab-pane fade fondoDashboard fondoBlanco pantallaInicialDashboard contenido scrollTablita" role="tabpanel1" id="perfil">
        <div>
          <p class="tituloFormSubirProyecto">Proyectos Donados</p>
          <p class="subtituloFormSubirProyecto">Los proyectos que estas ayudando a que se hagan realidad </p>
        </div>
        <table class="display tablita " style="width:100% !important;" id="Donaciones">
          <thead>
            <tr>
              <th data-class-name="bordeDerecha bordeAbajo  "><strong>Proyecto</strong></th>
              <th data-class-name="bordeDerecha bordeAbajo  "><strong>Cantidad</strong></th>
              <th data-class-name="bordeDerecha bordeAbajo  "><strong>Fecha</strong></th>
              <th data-class-name="bordeAbajo "></th>
            </tr>
          </thead>
          <tbody>
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
                  <button type="button" class=" botonFormActualizar  mb-3" onclick="UpdateCorreo()">
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
                  <button type="button" class=" botonFormActualizar mb-4" onclick="UpdatePassword();">
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
                  <select name="pais" id="paisUser" class="form-control selectCiudad" onclick="listarCiudad();">
                  </select>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <select name="ciudad" id="ciudadUser" class="form-control selectCiudad">
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
                  <button type="button" class=" botonFormActualizar  mb-4" onclick="UpdateDates()">
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

<script src="<?php echo BASE_URL; ?>Assets/js/Dashboard.js"></script>
</body>

</html>