<?php
    class paisDAO extends Query
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getPaises()
        {
            $sql = "SELECT * FROM pais";
            $data = $this->selectAll($sql);
            return $data;
        }
    }
?>