<?php

class proyecto extends Controller
{
    public function __construct()
    {
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
                <textarea id="observaciones'. $i . '" cols="18" rows="2" onchange="UpdateObser(' . $data[$i]['id_proyecto'] . ',' . $i . ')">' . $data[$i]['observaciones'] . '</textarea></div>';
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function subirArchivo($name)
    {
        $fichero_subido = dir_subida . basename($_FILES[$name]['name']);
        echo $_FILES[$name]['name'];
        if (move_uploaded_file($_FILES[$name]['tmp_name'], $fichero_subido)) {
            $fichero_subido = 'http:\\localhost\\crowdfunding\\uploadeddocuments\\' . basename($_FILES[$name]['name']);
        }
        return $fichero_subido;
    }

    public function insertarproyecto()
    {
        $keywords = strClean($_POST['keywords']);
        $tiempo_ejecucion = strClean($_POST['ejecucion']);
        $titulo = strClean($_POST['titulo']);
        $duracion_campana = strClean($_POST['campana']); 
        $fecha_comienzo = strClean($_POST['comienzo']); 
        $fecha_final = strClean($_POST['final']);
        $abstrac = strClean($_POST['Abstract']);
        $indicador = strClean($_POST['impacto']);
        $monto = strClean($_POST['monto']);
        $video = strClean($_POST['video']);
        print_r($_POST['campana']);
        $foto = $this->subirArchivo($_POST['foto']);
        $info_adicional = strClean($_POST['info']);
        $camara = $this->subirArchivo($_POST['camara']);
        $RUT = $this->subirArchivo($_POST['RUT']);
        $rep_legal = $this->subirArchivo($_POST['rep_legal']);
        $cedula = $this->subirArchivo($_POST['cedula']);
        $bancario = $this->subirArchivo($_POST['bancario']);
        $aprob_donacion = $this->subirArchivo($_POST['aprob_donacion']);
        $form_declaraciones = $this->subirArchivo($_POST['form_declaraciones']);

        if (
            empty($camara) || empty($RUT) || empty($rep_legal) || empty($cedula) || empty($bancario) || empty($aprob_donacion) || empty($form_declaraciones) || empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($foto) ||
            empty($duracion_campana) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador)
            || empty($monto) || empty($video) || empty($info_adicional)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->insertarproyecto($camara, $RUT, $rep_legal, $cedula, $bancario, $aprob_donacion, $form_declaraciones, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campana, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional);
            if ($data === "ok") {
                $msg = "registrado";
            } else {
                $msg = $data;
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
