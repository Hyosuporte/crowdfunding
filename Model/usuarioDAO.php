<?php
class usuarioDAO extends Query
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
        $data = $this->select($sql);
        return $data;
    }

    public function getEmail(string $email)
    {
        $sql = "SELECT * FROM usuarios WHERE correo = '$email' ";
        $data = $this->select($sql);
        return $data;
    }

    public function modificarPass($auxiliarPass, $id)
    {
        $sql = "UPDATE usuarios SET password = ? WHERE id_usuario = ?";
        $datos = array($auxiliarPass, $id);
        $data = $this->save($sql, $datos);
        return $data;
    }

    public function registrarUsuario($nombre, $apellido, $correo, $hash, $ciudad, $pais, $direccion)
    {
        $buscar = "SELECT * FROM usuarios WHERE correo = '$correo' ";
        $validar = $this->select($buscar);
        if(empty($validar)){
            $sql = "INSERT INTO usuarios (primer_nombre,primer_apellido,correo,password,id_ciudad,id_pais,rol,direccion) VALUES (?,?,?,?,?,?,?,?)";
            $datos = array($nombre,$apellido,$correo,$hash,$ciudad,$pais,2,$direccion);
            $data = $this->save($sql,$datos);
            if($data == 1){
                $res = "ok";
            } else {
                $res = "error";
            }
        } else {
            $res = "existe";
        }
        return $res;
    }

}
