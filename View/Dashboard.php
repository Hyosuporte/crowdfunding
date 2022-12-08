<?php require_once("View/Template/header.php") ?>
<div class="content">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="botonTab active" id="v-pills-subir-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subir" type="button" role="tab" aria-controls="v-pills-subir" aria-selected="true">Subir proyectos</button>
            <button class="botonTab" id="v-pills-subidos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subidos" type="button" role="tab" aria-controls="v-pills-subidos" aria-selected="false" onclick="consultarProyectos()">Proyectos subidos</button>
            <button class="botonTab" id="v-pills-donados-tab" data-bs-toggle="pill" data-bs-target="#v-pills-donados" type="button" role="tab" aria-controls="v-pills-donados" aria-selected="false">Proyectos donados</button>
            <button class="botonTab" id="v-pills-datos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-datos" type="button" role="tab" aria-controls="v-pills-datos" aria-selected="false">Actualizacion de datos</button>
        </div>
        <div class="tablaDashboard" style="background-color: #FFFFFF;">
            <div class="tableDashboard">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-subir" role="tabpanel" aria-labelledby="v-pills-subir-tab" tabindex="0">
            
                    <p class="tableDashboardTitulo">Aun no tines ningun proyecto subido</p>
                        <div class="bloqueAunSinProyectos">
                            <p class="bloqueAunSinProyectosTitulo">Frase trigger</p>
                            <p class="bloqueAunSinProyectosTexto">Recuerda leer el paso a paso y tener todo lo que necesitas a la mano para subir tu proyecto. <br>
                                Una vez se suba nuestro equipo se comunicará para verificar la veracidad de tu proyecto y te brindará asesoría para garantizar el éxito de tu campaña. <br>
                                Ver condiciones para subir proyecto</p>
                            <button type="button" class="bloqueAunSinProyectosBoton" onclick="frmRegistro()">Subir Proyecto</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-subidos" role="tabpanel" aria-labelledby="v-pills-subidos-tab" tabindex="0">
                        <table class="content" id="tblProyectos" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <!--id, nombre, boton-->
                                    <th>id</th>
                                    <th>titulo</th>
                                    <th>comienzo</th>
                                    <th>final</th>
                                    <th>estado</th>
                                    <th>acciones</th>
                                    <th>observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade  bg-primary" id="v-pills-donados" role="tabpanel" aria-labelledby="v-pills-donados-tab" tabindex="0">
                    <table class="tablaDonados" style="width:100%">
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
                    <div class="tab-pane fade" id="v-pills-datos" role="tabpanel" aria-labelledby="v-pills-datos-tab" tabindex="0">
                        <h1>Hola</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("View/Template/footer.php") ?>
<script src="<?php echo BASE_URL; ?>Assets/js/DataTable.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/Dashboard.js"></script>
</body>

</html>