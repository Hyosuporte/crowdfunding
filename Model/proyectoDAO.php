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
    $sql = "SELECT p.id_proyecto,p.titulo,p.video,p.abstrac,p.monto_financiacion,COUNT(d.monto),SUM(d.monto),p.fecha_comienzo,p.fecha_final FROM proyecto p JOIN donacion d ON d.id_proyecto=p.id_proyecto WHERE p.id_proyecto='$id'";
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

  public function insertarProy($camara, $RUT, $rep_legal, $cedula, $bancario, $aprob_donacion, $form_declaraciones, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional, $id, $id_organizacion)
  {
    $sql = "INSERT INTO proyecto(camara_comercio, RUT,rep_legal,cedula,bancario,aprob_donacion, form_declaraciones,keywords,tiempo_ejecucion,titulo,foto,duracion_campana,fecha_comienzo,fecha_final, abstrac, indicador_impacto,monto_financiacion,video,informacion_adicional,id_usuario,id_organizacion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $datos = array($camara, $RUT, $rep_legal, $cedula, $bancario, $aprob_donacion, $form_declaraciones, $keywords, $tiempo_ejecucion, $titulo, $foto, $duracion_campaña, $fecha_comienzo, $fecha_final, $abstrac, $indicador, $monto, $video, $info_adicional, $id, $id_organizacion);
    $data = $this->save($sql, $datos);
    if ($data == 1) {
      $res = "ok";
    } else {
      $res = "error";
    }
    return $res;
  }
}
