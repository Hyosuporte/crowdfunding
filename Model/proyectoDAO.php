<?php
class proyectoDAO extends Query
{
    public function __construct()
        {
            parent::__construct();
        }    


  }

  function insertarproyecto($camara,$keywords,$tiempo_ejecucion,$titulo,$foto,$duracion_campaña,$fecha_comienzo,$fecha_final,$abstrac,$indicador,$monto,$video,$info_adicional)
  {
    $sql = "INSERT INTO proyecto(camara_comercio,keywords,tiempo_ejecucion,titulo,foto,duracion_campaña,fecha_comienzo,fecha_final,abstrac,indicador_impacto,monto_financiacion,video,informacion_adicional) 
    VALUES(:camara_comercio,:keywords,:tiempo_ejecucion,:titulo,:foto,:duracion_campaña,:fecha_comienzo,:fecha_final,:abstrac,:indicador_impacto,:monto_financiacion,:video,:informacion_adicional)";
            $datos = array($camara,$keywords,$tiempo_ejecucion,$titulo,$foto,$duracion_campaña,$fecha_comienzo,$fecha_final,$abstrac,$indicador,$monto,$video,$info_adicional);
            return $datos;
            $data = $this->save($sql,$datos);
            if($data == 1){
                $res = "ok";
            } else {
                $res = "error";
            }
        }    

  function editarproyecto($camara,$keywords,$tiempo_ejecucion,$titulo,$foto,$duracion_campaña,$fecha_comienzo,$fecha_final,$abstrac,$indicador,$monto,$video,$info_adicional,$id_proyecto)
{
  
    $sql = "UPDATE proyecto SET camara_comercio = :camara_comercio, keywords = :keywords, tiempo_ejecucion = :tiempo_ejecucion, titulo = :titulo, foto = :foto, duracion_campaña = :duracion_campaña, 
    fecha_comienzo = :fecha_comienzo, fecha_final = :fecha_final, abstrac = :abstrac, indicador_impacto = :indicador_impacto, monto_financiacion = :monto_financiacion, video = :video, 
    informacion_adicional = :informacion_adicional WHERE id_proyecto = :id_proyecto";
    $datos = array($camara,$keywords,$tiempo_ejecucion,$titulo,$foto,$duracion_campaña,$fecha_comienzo,$fecha_final,$abstrac,$indicador,$monto,$video,$info_adicional,$id_proyecto);
    $data = $this->save($sql, $datos);
    return $data;
    if($data == 1){
        $res = "ok";
    } else {
        $res = "error";
    }
  }


  function eliminarproyecto($id_proyecto)
  {
    $sql = "DELETE FROM proyecto WHERE id_proyecto= :id_proyecto";
    $datos = array($id_proyecto);
    $data = $this->save($sql, $datos);
    return $data;
  }
  
  
  function verproyecto(){
    $sql = "SELECT * FROM proyecto WHERE id_proyecto = :id_proyecto"; //aca debe hacerse un join
    $data = $this->select($sql);
    return $data;
  }
   
  public function getProyectos(){
    $sql = "SELECT * FROM proyecto";
    $data = $this->selectAll($sql);
    return $data;
  }


?>