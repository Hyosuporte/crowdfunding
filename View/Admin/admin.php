<?php require_once("View/Template/header.php") ?>
<div class="content">
  <div class="d-flex flex-row text-white ">
    <div class="col-2 fondoBlanco menu">
      <div class="list-group">
        <a href="#cuenta" class=" list-group-item-action active nav-link textoMenu" data-bs-toggle="tab" aria-selected="true" role="tab"><img style="margin-right: 1vw;" src="<?php echo BASE_URL; ?>Assets/img/proyectosSubidosDashboard.svg" alt="">Proyectos subidos</a>
        <a href="#perfil" class=" list-group-item-action textoMenu" data-bs-toggle="tab" aria-selected="false" role="tab"><img style="margin-right: 1vw;" src="<?php echo BASE_URL; ?>Assets/img/proyectosDonadosDashboard.svg" alt="">Proyectos
          Donados</a>
        <a href="/Home/usuario/salir" class=" list-group-item-action textoMenuAbajo" data-bs-toggle="tab" aria-selected="false" role="tab"><img style="margin-right: 1vw;" src="<?php echo BASE_URL; ?>Assets/img/cerrarSesionDashboard.svg" alt="">Cerrar Sesión</a>
      </div>
    </div>
    <div class="col-10  tab-content bloqueDashboard panelDashboard">
      <div class="tab-pane fade active show fondoDashboard fondoBlanco" role="tabpanel1" id="cuenta">
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
          <p class="tituloFormSubirProyecto">Proyectos Donados</p><br>
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