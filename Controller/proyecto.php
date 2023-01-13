<?php

class proyecto extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function obtenerProyectos()
    {
        $data = $this->model->getProyectos();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['id_estado'] == 1) {
                $data[$i]['acciones'] = '
               <select name="acciones" disabled>
                    <option value="1" selected >Aprobado</option>
                </select>';
            } else {
                $data[$i]['acciones'] = '
               <select id="acciones' . $i . '" onchange="updateEstado(' . $data[$i]['id_proyecto'] . ',' . $i . ')">
                    <option value=""></option>
                    <option value="1">Aprobado</option>
                    <option value="2">No Aprobado</option>
                    <option value="3">Revision Tecnica</option>
                    <option value="4">Revision Documental</option>
                </select>';
            }
            $data[$i]['observaciones'] = '<div>
                <textarea id="observaciones' . $i . '" cols="18" rows="2" onchange="UpdateObser(' . $data[$i]['id_proyecto'] . ',' . $i . ')">' . $data[$i]['observaciones'] . '</textarea></div>';

            $data[$i]['desc_comercio'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['camara_comercio'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';
            $data[$i]['RUT'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['RUT'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';
            $data[$i]['rep_legal'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['rep_legal'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';
            $data[$i]['cedula'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['cedula'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';
            $data[$i]['bancario'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['bancario'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';
            $data[$i]['aprob_donacion'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['aprob_donacion'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';
            $data[$i]['form_declaraciones'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['form_declaraciones'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';
            $data[$i]['foto'] = '<a href="' . BASE_URL . 'proyecto/downloadsArchivos?camara=' . $data[$i]['foto'] . '"><button class="boton" type="button"><i class="fa-solid fa-file-arrow-down"></i></button></a>';

        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function downloadsArchivos()
    {
        $document = explode('\\', $_GET['camara']);
        $rutaArchivo = "C:/xampp/htdocs/crowdfunding/uploadeddocuments/" . $document[8];
        $nombreArchivo = basename($rutaArchivo);
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=$nombreArchivo");
        readfile($rutaArchivo);
    }

    public function subirArchivo($name)
    {
        $fichero_subido = dir_subida . basename($_FILES[$name]['name']);
        if (move_uploaded_file($_FILES[$name]['tmp_name'], $fichero_subido)) {
            $fichero_subido = 'http:\\localhost\\crowdfunding\\uploadeddocuments\\' . basename($_FILES[$name]['name']);
        }
        return $fichero_subido;
    }

    public function insertarproyecto()
    {
        $titulo = strClean($_POST['titulo']);
        $indicador = strClean($_POST['impacto']);
        $monto = strClean($_POST['monto']);
        $fecha_comienzo = strClean($_POST['comienzo']);
        $tiempo_ejecucion = strClean($_POST['ejecucion']);
        $keywords = strClean($_POST['palabras']);
        $video = strClean($_POST['video']);
        $fecha_final = strClean($_POST['final']);
        $abstrac = strClean($_POST['resumen']);
        $info_adicional = strClean($_POST['adicional']);
        $duracion_campaña = strClean($_POST['duracion']);
        $foto = $this->subirArchivo('fotoPro');
        $RUT = $this->subirArchivo('tributario');
        $cedula = $this->subirArchivo('cedula');
        $aprob_donacion = $this->subirArchivo('acta');
        $camara = $this->subirArchivo('camara');
        $rep_legal = $this->subirArchivo('existenciaYrepresentacion');
        $form_declaraciones = $this->subirArchivo('formulario');
        $bancario = $this->subirArchivo('bancario');
        $id_organizacion = 1;
        if (empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($duracion_campaña) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador) || empty($monto) || empty($video) || empty($foto) || empty($info_adicional) || empty($camara) || empty($RUT) || empty($rep_legal) || empty($cedula) || empty($bancario) || empty($aprob_donacion) || empty($form_declaraciones)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->insertarProy($camara, $RUT, $rep_legal, $cedula, $bancario, $aprob_donacion, $form_declaraciones, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional, $_SESSION['id'], $id_organizacion);
            if ($data === "ok") {
                $msg = "pro registrada";
            } else {
                $msg = "Error";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editarproyecto()
    {
        $camara = $this->subirArchivo($_POST['camara']);
        $RUT = $this->subirArchivo($_POST['RUT']);
        $rep_legal = $this->subirArchivo($_POST['rep_legal']);
        $cedula = $this->subirArchivo($_POST['cedula']);
        $bancario = $this->subirArchivo($_POST['bancario']);
        $aprob_donacion = $this->subirArchivo($_POST['aprob_donacion']);
        $form_declaraciones = $this->subirArchivo($_POST['form_declaraciones']);
        $keywords = strClean($_POST['keywords']);
        $tiempo_ejecucion = strClean($_POST['ejecucion']);
        $titulo = strClean($_POST['titulo']);
        $foto = $_FILES[$_POST['foto']];
        $duracion_campaña = strClean($_POST['comienzo']); //pendiente actualizar
        $fecha_comienzo = strClean($_POST['comienzo']); //pendiente actualizar
        $fecha_final = strClean($_POST['final']);
        $abstrac = strClean($_POST['Abstract']);
        $indicador = strClean($_POST['impacto']);
        $monto = strClean($_POST['monto']);
        $video = strClean($_POST['video']);
        $info_adicional = strClean($_POST['info']);

        if (
            empty($camara) || empty($RUT) || empty($rep_legal) || empty($cedula) || empty($bancario) || empty($aprob_donacion) || empty($form_declaraciones) || empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($foto) ||
            empty($duracion_campaña) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador)
            || empty($monto) || empty($video) || empty($info_adicional)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->editarproyecto($camara, $RUT, $rep_legal, $cedula, $bancario, $aprob_donacion, $form_declaraciones, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional);
            if ($data === "ok") {
                $msg = "proyecto editado";
            } else {
                $msg = "Error";
            }
        }

        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminarproyecto($id_proyecto)
    {
        $data = $this->model->eliminarproyecto($id_proyecto);
        if ($data === 0) {
            $msg = "proyecto eliminado";
        } else if ($data === "existe") {
            $msg = "Error";
        }
    }

    public function listarProyectos()
    {
        $data = $this->model->getGaleriaP();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listarProyectosDes()
    {
        $data = $this->model->getGaleriaDes();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listarProyectosCar()
    {
        $data = $this->model->getGaleriaCar();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listarProyecto()
    {
        $id = strClean($_GET['id_proyecto']);
        $data = $this->model->getProyecto($id);
        $data['topDonadores'] = $this->model->getDonadores($id);
        $data['title'] = $data['titulo'];
        $this->views->getView("Home", "vistaProyecto", $data);
        die();
    }
}
