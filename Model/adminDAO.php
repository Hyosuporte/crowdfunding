<?php
class adminDAO extends Query
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getDonaciones()
  {
    $sql = "SELECT p.id_proyecto,p.titulo,COUNT(d.monto),SUM(d.monto) FROM proyecto p LEFT JOIN donacion d ON d.id_proyecto=p.id_proyecto WHERE p.id_estado=1 GROUP BY p.id_proyecto";
    $datos = $this->selectAll($sql);
    return $datos;
  }

  public function getInteresados()
  {
    $sql = "SELECT i.correo FROM interesados i";
    $datos = $this->selectAll($sql);
    return $datos;
  }

  public function UpdateEstado($id, $estado)
  {
    $sql = "UPDATE proyecto SET id_estado = ? WHERE id_proyecto = ?";
    $datos = array($estado, $id);
    $data = $this->save($sql, $datos);
    return $data;
  }

  public function UpdateObser($id, $obser)
  {
    $sql = "UPDATE proyecto SET observaciones = ? WHERE id_proyecto = ?";
    $datos = array($obser, $id);
    $data = $this->save($sql, $datos);
    return $data;
  }
}
