<?php
class organizacion extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function insertarorg()
    {
        $id_org = strClean($_POST['nit']);
        $nombre_org = strClean($_POST['nombre']);
        $pagina_web = strClean($_POST['web']);
        $redes_sociales = strClean($_POST['redes']);
        $telefono_contacto = strClean($_POST['telefono']);
        $id_tipo = intval(strClean($_POST['organizacion']));
        $banco = strClean($_POST['banco']);
        $nro_cuenta = strClean($_POST['cuenta']);
        if (
            empty($id_org) || empty($nombre_org) || empty($pagina_web) || empty($redes_sociales) || empty($telefono_contacto) ||
            empty($id_tipo) || empty($nro_cuenta) || empty($banco)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->insertarorg($id_org, $nombre_org, $pagina_web, $redes_sociales, $telefono_contacto, $id_tipo, $banco, $nro_cuenta);
            if ($data === "ok") {
                $msg = "org registrada";
            } else {
                $msg = "Error";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editarorg()
    {
        $id_org = strClean($_POST['id_org']); //pendiente por agregar al formulario
        $nombre_org = strClean($_POST['nombre']);
        $pagina_web = strClean($_POST['pagina']);
        $redes_sociales = strClean($_POST['redes']);
        $telefono_contacto = strClean($_POST['telefono']);
        $id_tipo = strClean($_POST['organizacion']); //pendiente actualizar
        $nro_cuenta = strClean($_POST['cuenta']); //pendiente actualizar

        if (
            empty($id_org) || empty($nombre_org) || empty($pagina_web) || empty($redes_sociales) || empty($telefono_contacto) ||
            empty($id_tipo) || empty($nro_cuenta)
        ) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->editarorg($id_org, $nombre_org, $pagina_web, $redes_sociales, $telefono_contacto, $id_tipo, $nro_cuenta);
            if ($data === "ok") {
                $msg = "organizacion editada";
            } else {
                $msg = "Error";
            }
        }

        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminarorg($id_org)
    {
        $data = $this->model->eliminarorg($id_org);
        if ($data === 0) {
            $msg = "org eliminada";
        } else if ($data === "existe") {
            $msg = "Error";
        }
    }

    public function listarOrg()
    {
        $id_org = strClean($_POST['nit']);
        $data = $this->model->VerorgExistente($id_org);
        $msg = !empty($data) ? "org registrada" : "no existe";
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

}
