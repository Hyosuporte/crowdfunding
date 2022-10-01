<?php
class usuarioDAO extends Query
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario(string $email, string $password)
    {
        $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND password = '$password'";
        $data = $this->select($sql);
        return $data;
    }
}
