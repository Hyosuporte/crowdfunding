<?php require_once("View/Template/header.php") ?>
<div class="content">
  <div class="d-flex flex-row text-white ">
    <div class="col-2 fondoBlanco menu">
      <div class="list-group">
        <a href="#cuenta" class="  active textoMenu" data-bs-toggle="tab" aria-selected="true" role="tab" onclick="aparecerVista('cuenta'),desaparecerVistas(['v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/proyectosSubidosDashboard.svg" alt="">Proyectos subidos</a>
        <a href="#perfil" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/proyectosDonadosDashboard.svg" alt="">Proyectos
          Donados</a>
        <a href="#correos" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab" onclick="desaparecerVistas(['cuenta','v-pills-subir-proyecto-1','v-pills-subir-proyecto-2','v-pills-subir-proyecto-3'])">
          <img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/people.svg" alt="">Lista Interesados</a>
        <div class="ultimaOpcion"><a href="<?php echo BASE_URL; ?>usuario/salir" class="textoMenuAbajo"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/cerrarSesionDashboard.svg" alt="">Cerrar Sesión</a></div>
      </div>
    </div>
    <div class="col-10  tab-content bloqueDashboard panelDashboard">
      <div class="tab-pane fade active show fondoDashboard fondoBlanco contenido" role="tabpanel1" id="cuenta">
        <div>
          <p class="tituloFormSubirProyecto">Proyectos Subidos</p><br>
        </div>
        <div class=" pantallaInicialDashboard">
          <table id="tblProyectos" class="display tablita" style="width:100%">
            <thead>
              <tr>
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
      <div class="tab-pane fade fondoDashboard fondoBlanco pantallaInicialDashboard contenido" role="tabpanel1" id="perfil">
        <div>
          <p class="tituloFormSubirProyecto">Proyectos Donados</p><br>
        </div>
        <table class="tablita" style="width:100%">
          <thead>
            <tr>
              <th data-class-name="bordeDerecha bordeAbajo">Proyecto</th>
              <th data-class-name="bordeDerecha bordeAbajo">Cantidad</th>
              <th data-class-name="bordeDerecha bordeAbajo">Fecha</th>
              <th data-class-name="bordeDerecha bordeAbajo"></th>
            </tr>
          </thead>
          <tbody id="Donaciones">
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade fondoDashboard fondoBlanco pantallaInicialDashboard contenido" role="tabpanel1" id="correos">
        <div>
          <p class="tituloFormSubirProyecto">Lista de Interesados</p><br>
        </div>
        <table class="tablita" style="width:100%">
          <thead>
            <tr>
              <th class=" bordeAbajo">Correos</th>
            </tr>
          </thead>
          <tbody id="Correos">
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
<script src="<?php echo BASE_URL; ?>Assets/js/Dashboard.js"></script>
</body>

</html>