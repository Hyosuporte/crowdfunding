<?php
class admin extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                $data['title'] = "Administrador";
                $this->views->getView("admin", "admin", $data);
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function getDonaciones()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                $data = $this->model->getDonaciones();
                for ($i = 0; $i < count($data); $i++) {
                    $data[$i]['ver'] =
                        '<a class="botonDonador" style="padding:5px;" href="' . BASE_URL . 'proyecto/listarProyecto?id_proyecto=' . $data[$i]['id_proyecto'] . '" >Ver Proyecto</a>';
                    $data[$i]['SUM(d.monto)'] == null ? $data[$i]['SUM(d.monto)'] = 0 :
                        $data[$i]['SUM(d.monto)'] == $data[$i]['SUM(d.monto)'];
                }
                echo json_encode($data, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                $data['title'] = "Principal";
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function getInteresados()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                $data = $this->model->getInteresados();
                echo json_encode($data, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                $data['title'] = "Principal";
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function UpdateObser()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                $id = $_GET['id_proyecto'];
                $obser = $_GET['obser'];
                $data = $this->model->UpdateObser($id, $obser);
                if ($data === 1) {
                    $msg = "exito";
                } else {
                    $msg = "fallo";
                }
                echo json_encode($msg, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                $data['title'] = "Principal";
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

    public function UpdateEstado()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                $id = $_GET['id_proyecto'];
                $estado = $_GET['estado'];
                $data = $this->model->UpdateEstado($id, $estado);
                if ($data === 1) {
                    $msg = "exito";
                } else {
                    $msg = "fallo";
                }
                echo json_encode($msg, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                $data['title'] = "Principal";
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }
}
