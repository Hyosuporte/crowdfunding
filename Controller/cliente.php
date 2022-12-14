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
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 2) {
                $data['title'] = "Perfil";
                $data['numProyects'] = $this->model->getCantPro($_SESSION['id']);
                $this->views->getView("cliente", "perfil", $data);
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function UpdateCorreo()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 2) {
                if ($this->valid_email($_POST['newCorreo'])) {
                    $newCorreo = strClean($_POST['newCorreo']);
                    $Actcorreo = strClean($_POST['ActCorreo']);
                    if ($newCorreo === $Actcorreo) {
                        $msg = "0";
                    } else {
                        $data = $this->model->UpdateCorreo($newCorreo, $_SESSION['id']);
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
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function UpdatePassword()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 2) {
                $passwordNow = strClean($_POST['passwordNow']);
                $newPassword = strClean($_POST['newPassword']);
                $newPasswordTry = strClean($_POST['newPasswordTry']);
                if (empty($passwordNow) || empty($newPassword) || !empty($newPasswordTry)) {
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
                                    $msg = "La nueva contrase??a no puede ser igual a la actual";
                                }
                            } else {
                                $msg = "La contrase??a actual es incorrecta";
                            }
                        }
                    } else {
                        $msg = "las contrase??as no coinciden";
                    }
                } else {
                    $msg = "Todos los campos son obligatorios";
                }
                echo json_encode($msg, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function UpdateData()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 2) {
                $nombreCompleto = strClean($_POST['nombreCompleto']);
                $pais = intval(strClean($_POST['pais']));
                $ciudad = strClean($_POST['ciudad']);
                $direccion = strClean($_POST['direccion']);
                $telefono = strClean($_POST['telefonoUser']);
                if (empty($nombreCompleto) || empty($pais) || empty($ciudad) || !empty($direccion) || empty($telefono)) {
                    list($primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido) = explode(" ", $nombreCompleto);
                    $nombre = $primer_nombre . " " . $segundo_nombre;
                    $apellido = $primer_apellido . " " . $segundo_apellido;
                    $data = $this->model->UpdateData($nombre, $apellido, $ciudad, $pais, $direccion, $telefono, $_SESSION['id']);
                    $data == 1 ? $msg = "exito" : $msg = "fallo";
                } else {
                    $msg = "Todos los campos son obligatorios";
                }
                echo json_encode($msg, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function userData()
    {
        $data = $this->model->getUsuario($_SESSION['id']);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function getDonaciones()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 2) {
                $data = $this->model->getDonaciones($_SESSION['id']);
                for ($i = 0; $i < count($data); $i++) {
                    $data[$i]['monto'] = "$" . $data[$i]['monto'];
                    $data[$i]['fecha_donacion'] = explode(" ", $data[$i]['fecha_donacion'])[0];
                    $data[$i]['ver'] = '<a class="botonDonador" style="padding:5px;" href="' . BASE_URL . 'proyecto/listarProyecto?id_proyecto=' . $data[$i]['id_proyecto'] . '" >Ver Proyecto</a>';
                }
                echo json_encode($data, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function getProyectos()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 2) {
                $data = $this->model->getProyectos($_SESSION['id']);
                for ($i = 0; $i < count($data); $i++) {
                    if ($data[$i]['estado'] == "Aprovado") {
                        $data[$i]['observaciones'];
                        $data[$i]['fecha_final'] <= date('Y-m-d') ? $data[$i]['estado'] = "Finalizado" : $data[$i]['estado'] = "En campa??a";
                        $data[$i]['ver'] = '<a class="botonDonador" style="padding:5px; margin-left:20%" href="' . BASE_URL . 'proyecto/listarProyecto?id_proyecto=' . $data[$i]['id_proyecto'] . '" >Ver Proyecto</a>';
                    } else {
                        if ($data[$i]['estado'] == "NoAprovado") {
                            $data[$i]['observaciones'];
                            $data[$i]['estado'] = "No Aprovado";
                            $data[$i]['ver'] = '';
                        } else {
                            $data[$i]['estado'] = "En Revision";
                            $data[$i]['observaciones'];
                            $data[$i]['ver'] = '<button type="button" class="btnActual" data-toggle="modal" data-target="#Modal2">Actualizar</button>';
                        }
                    }
                }
                echo json_encode($data, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function valid_email($str)
    {
        return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }
}
