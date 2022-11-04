<?php
    class proyectoDAO extends Query
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getProyectos(){
            $sql = "SELECT * FROM proyecto";
            $data = $this->selectAll($sql);
            return $data;
        }
    }
?>