<?php

    class pais extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function obtenerPaises()
        {
            $data = $this->model->getPaises();
            echo json_encode($data ,JSON_UNESCAPED_UNICODE);
            die();
        }

    }
