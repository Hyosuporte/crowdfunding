<?php
class orgDAO extends Query
{
    public function __construct()
        {
            parent::__construct();
        }    

  function insertarorg($id_org,$nombre_org,$pagina_web,$redes_sociales,$telefono_contacto,$id_tipo,$nro_cuenta)
  {
    $sql = "INSERT INTO organizacion(id_organizacion,nombre_org,pagina_web,redes_sociales,telefono_contacto,id_tipo,nro_cuenta) 
    VALUES(:id_organizacion,:nombre_org,:pagina_web,:redes_sociales,:telefono_contacto,:id_tipo,:nro_cuenta)";
            $datos = array($id_org,$nombre_org,$pagina_web,$redes_sociales,$telefono_contacto,$id_tipo,$nro_cuenta);
            return $datos;
            $data = $this->save($sql,$datos);
            if($data == 1){
                $res = "ok";
            } else {
                $res = "error";
            }
        }    

  function editarorg($id_org,$nombre_org,$pagina_web,$redes_sociales,$telefono_contacto,$id_tipo,$nro_cuenta)
{
  
    $sql = "UPDATE organizacion SET id_organizacion = :id_organizacion, nombre_org = :nombre_org, pagina_web = :pagina_web,
    redes_sociales = :redes_sociales, telefono_contacto = :telefono_contacto, id_tipo = :id_tipo, nro_cuenta = :nro_cuenta
     WHERE id_organizacion = :id_organizacion";
    $datos = array($id_org,$nombre_org,$pagina_web,$redes_sociales,$telefono_contacto,$id_tipo,$nro_cuenta);
    $data = $this->editar($sql, $datos);
    return $data;
    if($data == 1){
        $res = "ok";
    } else {
        $res = "error";
    }
  }


  function eliminarorg($id_org)
  {
    $sql = "DELETE FROM organizacion WHERE id_organizacion= :id_organizacion";
    $datos = array($id_org);
    $data = $this->eliminar($sql, $datos);
    return $data;
  }
  
  
  function verorg(){
    $sql = "SELECT * FROM organizacion WHERE id_organizacion= :id_organizacion"; //aca debe hacerse un join
    $data = $this->select($sql);
    return $data;
  }
   
} 
?>