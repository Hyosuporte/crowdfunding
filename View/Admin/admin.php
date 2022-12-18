<?php require_once("View/Template/header.php") ?>
<div class="content">
    <div class="d-flex flex-row text-white ">
      <div class="col-2 fondoBlanco menu">
        <div class="list-group">
          <a href="#cuenta" class=" list-group-item-action active nav-link textoMenu" data-bs-toggle="tab"
            aria-selected="true" role="tab" onclick="aparecerVista('cuenta')"><img style="margin-right: 1vw;"
              src="/Assets/img/proyectosSubidosDashboard.svg" alt="">Proyectos subidos</a>
          <a href="#perfil" class=" list-group-item-action textoMenu" data-bs-toggle="tab" aria-selected="false"
            role="tab"
            onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img
              style="margin-right: 1vw;" src="/Assets/img/proyectosDonadosDashboard.svg" alt="">Proyectos
            Donados</a>
          <a href="/Home/usuario/salir" class=" list-group-item-action textoMenuAbajo" data-bs-toggle="tab"
            aria-selected="false" role="tab"><img style="margin-right: 1vw;" src="/Assets/img/cerrarSesionDashboard.svg"
              alt="">Cerrar Sesión</a>
        </div>
      </div>
      <div class="col-10  tab-content bloqueDashboard panelDashboard" id="configPerfil">
        <div class="tab-pane fade active show fondoDashboard fondoBlanco" role="tabpanel1" id="cuenta">
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
                <div class="list-group botonBannerDashboardSubirProyecto"><a href="#v-pills-subir-proyecto-1"
                    class="botonFormBanner" data-bs-toggle="tab" aria-selected="false" role="tab"
                    onclick="desaparecerVista('cuenta'),aparecerVista('v-pills-subir-proyecto-1')">Subir Proyecto</a>
                </div>
              </div>
            </div>
          </div>
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
        </div>
        <div class="tab-pane fade fondoDashboard fondoBlanco pantallaInicialDashboard" role="tabpanel1" id="perfil">
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
            <tbody>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tbody>
          </table>
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