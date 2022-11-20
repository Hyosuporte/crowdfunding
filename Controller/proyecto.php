<?php

class proyecto extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function subirbinariocamara()
    {
        $camara = ($_FILES['camara']);
        $rutaDeSubidas = __DIR__ . "/subidas";
        if (!is_dir($rutaDeSubidas)) {
            mkdir($rutaDeSubidas, 0777, true);
        }
        $ubicacionTemporal = $camara["tmp_name"];
        $nombreArchivo = $camara["camara"];
        $nuevaUbicacion = $rutaDeSubidas . "/" . $nombreArchivo;
        $resultado = move_uploaded_file($ubicacionTemporal, $nuevaUbicacion);
        if ($resultado === true) {
            echo "Archivo subido correctamente";
        } else {
            echo "Error al subir archivo";
        }
    }
    public function subirbinariofoto()
    {

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
                <textarea name="observaciones" id="observaciones" cols="30" rows="5"></textarea>    </div>';
        }
        //print(json_encode($data,JSON_UNESCAPED_UNICODE));
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function subirArchivo($name)
    {
        $fichero_subido = dir_subida . basename($_FILES[$name]['name']);
        echo '<pre>';
        echo $_FILES[$name]['name'];
        if (move_uploaded_file($_FILES[$name]['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }
        return $fichero_subido;
    }

    public function insertarproyecto()
    {
        $keywords = strClean($_POST['keywords']);
        $tiempo_ejecucion = strClean($_POST['ejecucion']);
        $titulo = strClean($_POST['titulo']);
        $duracion_campaña = strClean($_POST['ejecucion']); //pendiente actualizar
        $fecha_comienzo = strClean($_POST['ejecucion']); //pendiente actualizar
        $fecha_final = strClean($_POST['final']);
        $abstrac = strClean($_POST['Abstract']);
        $indicador = strClean($_POST['impacto']);
        $monto = strClean($_POST['monto']);
        $video = strClean($_POST['video']);
        $info_adicional = strClean($_POST['info']);
        $camara = $this->subirArchivo('camara');
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
        $camara = $_FILES[$_POST['camara']];
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
