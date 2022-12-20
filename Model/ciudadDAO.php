<?php
class ciudadDAO extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCiudades(int $id_pais)
    {
        $sql = "SELECT * FROM ciudad WHERE id_pais='$id_pais'";
        $data = $this->selectAll($sql);
        return $data;
    }
}
