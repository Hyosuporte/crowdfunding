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
        $email = strClean($_POST['email']);
        $password = strClean($_POST['password']);
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $msg = "Error campos vacios";
        } else {
            $data = $this->model->getEmail($email);
            if ($data) {
                if (password_verify($password, $data['password'])) {
                    $_SESSION['id'] = $data['id_usuario'];
                    $_SESSION['nombre'] = $data['primer_nombre'];
                    $_SESSION['usuario'] = $data['correo'];
                    $_SESSION['rol'] = $data['rol'];
                    $msg = $data['rol'];
                } else {
                    $msg = "Usuario o contraseña incorrecta";
                }
            } else {
                $msg = "Usuario o contraseña incorrecta";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        if ($this->valid_email($_POST['correo'])) {
            $nombre = strClean($_POST['nombre']);
            $apellido = strClean($_POST['apellido']);
            $correo = strClean($_POST['correo']);
            $password = strClean($_POST['password']);
            $passwordConf = strClean($_POST['passwordConf']);
            $direccion = strClean($_POST['direccion']);
            $ciudad = strClean($_POST['ciudad']);
            $pais = strClean($_POST['pais']);
            if (empty($nombre) || empty($apellido) || empty($correo) || empty($direccion) || empty($ciudad) || empty($pais) || empty($password) || empty($passwordConf)) {
                $msg = "Todos los campos son obligatorios";
            } else {
                if ($password !== $passwordConf) {
                    $msg = "Las contraseñas no coinciden";
                } else {
                    $opciones = [
                        'cost' => 12,
                    ];
                    $hash = password_hash($password, PASSWORD_BCRYPT, $opciones);
                    $data = $this->model->registrarUsuario($nombre, $apellido, $correo, $hash, $ciudad, $pais, $direccion);
                    if ($data === "ok") {
                        $msg = "registrado";
                    } else if ($data === "existe") {
                        $msg = "Usuario no disponible";
                    } else {
                        $msg = "Error";
                    }
                }
            }
        } else {
            $msg = "email no valido";
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
                    if (email($data, $auxiliarPass)) {
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

    public function obtenerUsuario()
    {
        $id_usuario = $_GET['id_usuario'];
        $data = $this->model->getUsuario($id_usuario);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function salir()
    {
        session_destroy();
        header("location: " . BASE_URL);
    }
}
