<?php
class cliente extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
            $data['title'] = "Cliente";
            $this->views->getView($this, "perfil", $data);
    }

    public function UpdateCorreo()
    {
        if ($this->valid_email($_POST['newCorreo'])) {
            $newCorreo = strClean($_POST['newCorreo']);
            $Actcorreo = strClean($_POST['ActCorreo']);
            $id = $_SESSION['id'];
            if ($newCorreo === $Actcorreo) {
                $msg = "0";
            } else {
                $data = $this->model->UpdateCorreo($newCorreo, $id);
                if ($data === 1) {
                    $msg = "Correo actualizado con exito";
                    $_SESSION['usuario'] = $newCorreo;
                } else {
                    $msg = "El correo no se encuentra disponible";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function UpdatePassword()
    {
        $passwordNow = strClean($_POST['passwordNow']);
        $newPassword = strClean($_POST['newPassword']);
        $newPasswordTry = strClean($_POST['newPasswordTry']);
        if (!empty($passwordNow) || !empty($newPassword) || !empty($newPasswordTry)) {
            if ($newPassword === $newPasswordTry) {
                $data = $this->model->user_very($_SESSION['id']);
                if ($data) {
                    if (password_verify($passwordNow, $data['password'])) {
                        if ($passwordNow != $newPassword) {
                            $opciones = [
                                'cost' => 12,
                            ];
                            $hash = password_hash($newPassword, PASSWORD_BCRYPT, $opciones);
                            $data = $this->model->UpdatePassword($hash, $_SESSION['id']);
                            $data == 1 ? $msg = "exito" : $msg = "fallo";
                        } else {
                            $msg = "La nueva contraseña no puede ser igual a la actual";
                        }
                    } else {
                        $msg = "La contraseña actual es incorrecta";
                    }
                }
            } else {
                $msg = "las contraseñas no coinciden";
            }
        } else {
            $msg = "Todos los campos son obligatorios";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function UpdateData()
    {
        $nombreCompleto = strClean($_POST['nombreCompleto']);
        $pais = intval(strClean($_POST['pais']));
        $ciudad = strClean($_POST['ciudad']);
        $direccion = strClean($_POST['direccion']);
        $telefono = strClean($_POST['telefonoUser']);
        if (!empty($nombreCompleto) || !empty($pais) || !empty($ciudad) || !empty($direccion) || !empty($telefono)) {
            list($primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido) = explode(" ",$nombreCompleto) ;
            $nombre = $primer_nombre . " " . $segundo_nombre;
            $apellido = $primer_apellido . " " . $segundo_apellido;
            $data = $this->model->UpdateData($nombre, $apellido, $ciudad, $pais, $direccion, $telefono, $_SESSION['id']);
            $data==1?$msg="exito":$msg="fallo";
        } else {
            $msg = "Todos los campos son obligatorios";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function userData()
    {
        $data = $this->model->getUsuario($_SESSION['id']);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function getDonaciones()
    {
        $data = $this->model->getDonaciones($_SESSION['id']);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function valid_email($str)
    {
        return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }
}
