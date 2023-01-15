<?php

    class Ciudad extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function obtenerCiudades(){            
            $id_pais = intval($_GET['id_pais']);
            $data = $this->model->getCiudades($id_pais);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>