<?php
class proyecto extends Controller
{
    public function __construct()
    {
        session_start();
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

        $foto = ($_FILES['foto']);
        $rutaDeSubidas = __DIR__ . "/subidas";
        if (!is_dir($rutaDeSubidas)) {
            mkdir($rutaDeSubidas, 0777, true);
        }
        $ubicacionTemporal = $foto["tmp_name"];
        $nombreArchivo = $foto["foto"];
        $nuevaUbicacion = $rutaDeSubidas . "/" . $nombreArchivo;
        $resultado = move_uploaded_file($ubicacionTemporal, $nuevaUbicacion);
        if ($resultado === true) {
            echo "Archivo subido correctamente";
        } else {
            echo "Error al subir archivo";
        }
    }
    public function insertarproyecto()
    {
<<<<<<< Updated upstream
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
=======
        $camara = $_FILES[$_POST['camara']];
        $keywords = strClean($_POST['keywords']);
        $tiempo_ejecucion = strClean($_POST['ejecucion']);
        $titulo = strClean($_POST['titulo']);
        $foto = $_FILES[$_POST['foto']];
        $duracion_campaña = strClean($_POST['comienzo']); //pendiente actualizar
        // $fecha_comienzo = strClean($_POST['']); //pendiente actualizar
        $fecha_final = strClean($_POST['final']);
        $abstrac = strClean($_POST['Abstract']);
        $indicador = strClean($_POST['impacto']);
        $monto = strClean($_POST['monto']);
        $video = strClean($_POST['video']);
        $info_adicional = strClean($_POST['info']);
>>>>>>> Stashed changes

            if (empty($camara) || empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($foto) || 
            empty($duracion_campaña) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador)
             || empty($monto) || empty($video) || empty($info_adicional)) {
                $msg = "Todos los campos son obligatorios";
            } else {
<<<<<<< Updated upstream
                    $data = $this->model->insertarproyecto($camara,$keywords,$tiempo_ejecucion,$titulo,$foto,$duracion_campaña,$fecha_comienzo,$fecha_final,$abstrac,$indicador,$monto,$video,$info_adicional);
                    if ($data === "ok") {
                        $msg = "registrado";
                    } else {
                        $msg = "Error";
                    }
                }
            
=======
                $msg = "Error";
            }
        }
        subirbinariofoto($_FILES['foto']);
        subirbinariocamara($_FILES['camara']);
>>>>>>> Stashed changes
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

        if (empty($camara) || empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($foto) || 
        empty($duracion_campaña) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador)
         || empty($monto) || empty($video) || empty($info_adicional)) {
            $msg = "Todos los campos son obligatorios";
        } else {
                $data = $this->model->editarproyecto($camara,$keywords,$tiempo_ejecucion,$titulo,$foto,$duracion_campaña,$fecha_comienzo,$fecha_final,$abstrac,$indicador,$monto,$video,$info_adicional);
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


    /*
    public function salir()
    {
        session_destroy();
        header("location: " . BASE_URL);
    }
    */

