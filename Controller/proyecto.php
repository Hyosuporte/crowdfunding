<?php
class proyecto extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
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

            if (empty($camara) || empty($keywords) || empty($tiempo_ejecucion) || empty($titulo) || empty($foto) || 
            empty($duracion_campaña) || empty($fecha_comienzo) || empty($fecha_final) || empty($abstrac) || empty($indicador)
             || empty($monto) || empty($video) || empty($info_adicional)) {
                $msg = "Todos los campos son obligatorios";
            } else {
                    $data = $this->model->insertarproyecto($camara,$keywords,$tiempo_ejecucion,$titulo,$foto,$duracion_campaña,$fecha_comienzo,$fecha_final,$abstrac,$indicador,$monto,$video,$info_adicional);
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

