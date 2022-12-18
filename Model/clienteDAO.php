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

    public function UpdateCorreo(string $newCorreo, $id)
    {
        $existCorreo = $this->getEmail($newCorreo);
        if($existCorreo){
            $data = 0;
        }else{
            $sql = "UPDATE usuarios SET correo = ? WHERE id_usuario = ?";
            $datos = array($newCorreo, $id);
            $data = $this->save($sql, $datos);
        }
        return $data;
    }

}