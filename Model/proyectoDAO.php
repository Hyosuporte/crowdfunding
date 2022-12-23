<?php
class proyectoDAO extends Query
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getGaleriaP()
  {
    $sql = "SELECT p.id_proyecto,p.keywords,p.titulo,p.foto,p.abstrac,p.monto_financiacion,COUNT(d.monto),SUM(d.monto) FROM proyecto p LEFT JOIN donacion d ON d.id_proyecto=p.id_proyecto WHERE p.id_estado=1 GROUP BY p.id_proyecto";
    $datos = $this->selectAll($sql);
    return $datos;
  }

  public function getGaleriaDes()
  {
    $sql = "SELECT p.id_proyecto,p.titulo,p.foto,p.abstrac,p.monto_financiacion,COUNT(d.monto),SUM(d.monto) FROM proyecto p LEFT JOIN donacion d ON d.id_proyecto=p.id_proyecto WHERE p.id_estado=1 GROUP BY p.id_proyecto ORDER BY SUM(d.monto) DESC limit 7 OFFSET 4";
    $datos = $this->selectAll($sql);
    return $datos;
  }

  public function getGaleriaCar()
  {
    $sql = "SELECT p.id_proyecto,p.titulo,p.foto,p.abstrac,p.monto_financiacion,COUNT(d.monto),SUM(d.monto) FROM proyecto p LEFT JOIN donacion d ON d.id_proyecto=p.id_proyecto WHERE p.id_estado=1 GROUP BY p.id_proyecto ORDER BY SUM(d.monto) DESC limit 3";
    $datos = $this->selectAll($sql);
    return $datos;
  }

  public function getProyecto($id)
  {
    $sql = "SELECT p.id_proyecto,p.titulo,p.foto,p.abstrac,p.monto_financiacion,COUNT(d.monto),SUM(d.monto) FROM proyecto p LEFT JOIN donacion d ON d.id_proyecto=p.id_proyecto WHERE p.id_proyecto ='$id' GROUP BY p.id_proyecto";
    $data = $this->select($sql);
    return $data;
  }

  public function getProyectos()
  {
    $sql = "SELECT * FROM proyecto";
    $data = $this->selectAll($sql);
    return $data;
  }

  public function getDonadores($id)
  {
    $sql = "SELECT d.monto,d.fecha_donacion FROM donacion AS d WHERE d.id_proyecto='$id' ORDER BY d.monto DESC limit 10";
    $datos = $this->selectAll($sql);
    return $datos;
  }

  public function UpdateEstado($id,$estado)
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

  public function insertarproyecto($camara, $RUT, $rep_legal, $cedula, $bancario, $aprob_donacion, $form_declaraciones, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional)
  {
    $sql = "INSERT INTO organizacion(camara_comercio, RUT, rep_legal, cedula, bancario, aprob_donacion, form_declaraciones, keywords, tiempo_ejecucion, titulo, foto, duracion_campana, fecha_comienzo, fecha_final, abstrac, indicador_impacto, monto_financiacion, video, info_adicional) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $datos = array($camara, $RUT, $rep_legal, $cedula, $bancario, $aprob_donacion, $form_declaraciones, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional);
    $data = $this->save($sql, $datos);
    if ($data == 1) {
      $res = "ok";
    } else {
      $res = "error";
    }
    return $res;
  }

}
