<?php
class Home extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Principal";
        $this->views->getView($this, "index", $data);
    }

    public function login()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                header("location: " . BASE_URL . "admin");
            } else {
                header("location: " . BASE_URL . "cliente");
            }
        } else {
            $data['title'] = "Login";
            $this->views->getView($this, "login", $data);
        }
    }

    public function registro()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                header("location: " . BASE_URL . "admin");
            } else {
                header("location: " . BASE_URL . "cliente");
            }
        } else {
            $data['title'] = "Registro";
            $this->views->getView($this, "registro", $data);
        }
    }

    public function recuperar()
    {
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == 1) {
                header("location: " . BASE_URL . "admin");
            } else {
                header("location: " . BASE_URL . "cliente");
            }
        } else {
            $this->views->getView($this, "recuperar");
        }
    }

    public function aplicar()
    {
        $data['title'] = "aplicar";
        $this->views->getView($this, "aplicar", $data);
    }

    public function aprende()
    {
        $data['title'] = "aprende";
        $this->views->getView($this, "aprende", $data);
    }

    public function aprenderItem()
    {
        $data['title'] = "aprenderItem";
        $this->views->getView($this, "aprenderItem", $data);
    }

    public function galeriaProyectos()
    {
        $data['title'] = "galeriaProyectos";
        $this->views->getView($this, "galeriaProyectos", $data);
    }

    public function vistaProyecto()
    {
        $data['title'] = "vistaProyecto";
        $this->views->getView($this, "vistaProyecto", $data);
    }
}
