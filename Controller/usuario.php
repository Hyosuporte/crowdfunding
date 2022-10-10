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

    public function valid_email($str)
    {
        return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }

    public function recuperarPassword()
    {
        if (empty($_POST['email'])) {
            echo "Error email vacio";
        } else {
            $email = strClean($_POST['email']);
            $data = $this->model->getEmail($email);
            if ($data) {
                $auxiliarPass = bin2hex(openssl_random_pseudo_bytes(4));
                $opciones = [
                    'cost' => 12,
                ];
                $hash = password_hash($auxiliarPass, PASSWORD_BCRYPT, $opciones);
                $actualizarPass = $this->model->modificarPass($hash, $data['id_usuario']);
                if ($actualizarPass === 1) {
                    if ($email($data, $auxiliarPass)) {
                        echo "Mensaje enviado con exito";
                    } else {
                        echo "Error al enviar el correo";
                    }
                } else {
                    echo "Error al enviar el correo por favor intentelo de nuevo mas tarde";
                }
            } else {
                echo "Error usuario no encontrado";
            }
        }
    }
}
/*
    public function salir()
    {
        session_destroy();
        header("location: " . BASE_URL);
    }
    */

