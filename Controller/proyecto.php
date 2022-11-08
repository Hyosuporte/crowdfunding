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
            $data[$i]['acciones'] = '
               <select name="acciones" id="acciones">
                    <option value="">-</option>
                    <option value="aprobado">Aprobado</option>
                    <option value="noAprobado">NoAprobado</option>
                    <option value="enRevision">EnRevision</option>
                </select>';
            $data[$i]['observaciones'] = '<div>
                <textarea name="observaciones" id="observaciones" cols="15" rows="3"></textarea>    </div>';
        }
        //print(json_encode($data,JSON_UNESCAPED_UNICODE));
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function insertarproyecto()
    {
        $camara = strClean($_POST['camara']);
        $keywords = strClean($_POST['keywords']);
        $tiempo_ejecucion = strClean($_POST['ejecucion']);
        $titulo = strClean($_POST['titulo']);
        $foto = strClean($_POST['foto']);
        $duracion_campaña = strClean($_POST['direccion']); //pendiente actualizar
        $fecha_comienzo = strClean($_POST['']); //pendiente actualizar
        $fecha_final = strClean($_POST['final']);
        $abstrac = strClean($_POST['Abstract']);
        $indicador = strClean($_POST['impacto']);
        $monto = strClean($_POST['monto']);
        $video = strClean($_POST['video']);
        $info_adicional = strClean($_POST['info']);

        if (
            empty($camara) || empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($foto) ||
            empty($duracion_campaña) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador)
            || empty($monto) || empty($video) || empty($info_adicional)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->insertarproyecto($camara, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional);
            if ($data === "ok") {
                $msg = "registrado";
            } else {
                $msg = "Error";
            }
        }

        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editarproyecto()
    {
        $camara = strClean($_POST['camara']);
        $keywords = strClean($_POST['keywords']);
        $tiempo_ejecucion = strClean($_POST['ejecucion']);
        $titulo = strClean($_POST['titulo']);
        $foto = strClean($_POST['foto']);
        $duracion_campaña = strClean($_POST['direccion']); //pendiente actualizar
        $fecha_comienzo = strClean($_POST['']); //pendiente actualizar
        $fecha_final = strClean($_POST['final']);
        $abstrac = strClean($_POST['Abstract']);
        $indicador = strClean($_POST['impacto']);
        $monto = strClean($_POST['monto']);
        $video = strClean($_POST['video']);
        $info_adicional = strClean($_POST['info']);

        if (
            empty($camara) || empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($foto) ||
            empty($duracion_campaña) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador)
            || empty($monto) || empty($video) || empty($info_adicional)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->editarproyecto($camara, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional);
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
    
}