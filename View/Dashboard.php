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
                            <button class="bloqueAunSinProyectosBoton" id="v-pills-datos-tab1" data-bs-toggle="pill" data-bs-target="#v-pills-subir-proyecto-1" type="button" role="tab" aria-controls="v-pills-datos" aria-selected="false">Actualizacion de datos</button>
                            <button type="button" class="bloqueAunSinProyectosBoton" onclick="frmRegistro()">Subir Proyecto</button>
                        </div>
                    </div>
                    <!--<div class="tab-pane fade" id="v-pills-subidos" role="tabpanel" aria-labelledby="v-pills-subidos-tab" tabindex="0">
                        <table class="content" id="tblProyectos" class="display" style="width:100%">
                            <thead>
                                <tr>                                    
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
                    </div>-->
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
                    <div class="tab-pane fade  bg-primary" id="v-pills-subir-proyecto-1" role="tabpanel" aria-labelledby="v-pills-donados-tab" tabindex="0">
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
                                <button class="botonForm" type="button" onclick="validar()">Siguiente Paso</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-datos" role="tabpanel" aria-labelledby="v-pills-datos-tab" tabindex="0">
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