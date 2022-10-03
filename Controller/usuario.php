<?php
class usuario extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function validar()
    {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $msg = "Error campos vacios";
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data = $this->model->getUsuario($email, $password);
        }
        if ($data) {
            $_SESSION['id'] = $data['id_usuario'];
            $_SESSION['nombre'] = $data['primer_nombre'];
            $_SESSION['usuario'] = $data['correo'];
            $_SESSION['rol'] = $data['rol'];
            $msg = $data['rol'];
        } else {
            $msg = "Usuario o contraseña incorrecta";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function salir()
    {
        session_destroy();
        header("location: " . BASE_URL);
    }
}