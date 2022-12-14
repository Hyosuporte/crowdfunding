<?php require_once("View/Template/header.php") ?>
<div class="content">
  <div class="d-flex flex-row text-white ">
    <div class="col-2 fondoBlanco menu">
      <div class="list-group">
        <a href="#cuenta" class="  active textoMenu" data-bs-toggle="tab" aria-selected="true" role="tab"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/proyectosSubidosDashboard.svg" alt="">Proyectos subidos</a>
        <a href="#perfil" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab"><img class="iconoMenu" src="<?php echo BASE_URL; ?>Assets/img/proyectosDonadosDashboard.svg" alt="">Proyectos
          Donados</a>
        <a href="#correos" class="  textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab">
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
          <table id="tblProyectosAdm" class="display tablita" style="width:100%">
            <thead>
              <tr>
                <th data-class-name="bordeDerecha bordeAbajo">Título</th>
                <th data-class-name="bordeDerecha bordeAbajo">Comienzo</th>
                <th data-class-name="bordeDerecha bordeAbajo">Final</th>
                <th data-class-name="bordeDerecha bordeAbajo">Estado</th>
                <th data-class-name="bordeDerecha bordeAbajo">Acciones</th>
                <th data-class-name="bordeAbajo">Observaciones</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade fondoDashboard fondoBlanco pantallaInicialDashboard contenido scrollTablita" role="tabpanel1" id="perfil">
        <div>
          <p class="tituloFormSubirProyecto">Proyectos Donados</p><br>
        </div>
        <table class="tablita " style="width:100%" id="tblDonadores">
          <thead class="headerTabla">
            <tr>
              <th data-class-name="bordeDerecha bordeAbajo">Proyecto</th>
              <th data-class-name="bordeDerecha bordeAbajo">Total Donaciones</th>
              <th data-class-name="bordeDerecha bordeAbajo">Donadores</th>
              <th data-class-name="bordeAbajo"></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade fondoDashboard fondoBlanco pantallaInicialDashboard contenido" role="tabpanel1" id="correos">
        <div>
          <p class="tituloFormSubirProyecto">Lista de Interesados</p><br>
        </div>
        <table id="tblInteresados" data-class-name="tablita" style="width:100%">
          <thead>
            <tr>
              <th data-class-name=" bordeAbajo">Correos</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php require_once("View/Template/footer.php") ?>
<script src="<?php echo BASE_URL; ?>Assets/js/Dashboard.js"></script>
</body>

</html>