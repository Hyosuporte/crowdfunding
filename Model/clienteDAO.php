<?php
class clienteDAO extends Query
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getEmail(string $email)
    {
        $sql = "SELECT correo FROM usuarios WHERE correo = '$email' ";
        $data = $this->select($sql);
        return $data;
    }

    public function getUsuario($id)
    {
        $sql = "SELECT u.correo,u.primer_nombre,u.primer_apellido,u.direccion,c.ciudad,c.id_pais,t.id_telefono FROM usuarios AS u LEFT JOIN ciudad AS c ON u.id_ciudad=c.id_ciudad LEFT JOIN pais AS p ON c.id_pais=p.id_pais LEFT JOIN telefono AS t ON t.id_usuario_telefono=u.id_usuario WHERE u.id_usuario = '$id'";
        $data = $this->select($sql);
        return $data;
    }

    public function UpdateCorreo($newCorreo, $id)
    {
        $existCorreo = $this->getEmail($newCorreo);
        if ($existCorreo) {
            $data = 0;
        } else {
            $sql = "UPDATE usuarios SET correo = ? WHERE id_usuario = ?";
            $datos = array($newCorreo, $id);
            $data = $this->save($sql, $datos);
        }
        return $data;
    }

    public function UpdatePassword($password, $id)
    {
        $sql = "UPDATE usuarios SET password = ? WHERE id_usuario = ?";
        $datos = array($password, $id);
        $data = $this->save($sql, $datos);
        return $data;
    }

    public function UpdateData($nombre, $apellido, $ciudad, $pais, $direccion, $telefono, $id)
    {
        $sql = "UPDATE usuarios SET primer_nombre=?,primer_apellido=?,id_ciudad=?,id_pais=?,direccion=? WHERE id_usuario=?;";
        $datos = array($nombre, $apellido, $ciudad, $pais, $direccion, $id);
        $data = $this->save($sql, $datos);
        if ($data) {
            $sql = "UPDATE telefono SET id_telefono=? WHERE id_usuario_telefono=?;";
            $datos = array($telefono, $id);
            $data = $this->save($sql, $datos);
        }
        return $data;
    }

    public function user_very($id)
    {
        $sql = "SELECT password FROM usuarios WHERE id_usuario = '$id' ";
        $data = $this->select($sql);
        return $data;
    }
}
