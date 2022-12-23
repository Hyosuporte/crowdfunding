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
        $this->views->getView("Home", "index", $data);
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
            $this->views->getView("Home", "login", $data);
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
            $this->views->getView("Home", "registro", $data);
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
            $this->views->getView("Home", "recuperar");
        }
    }

    public function aplicar()
    {
        $data['title'] = "aplicar";
        $this->views->getView("Home", "aplicar", $data);
    }

    public function aprende()
    {
        $data['title'] = "aprende";
        $this->views->getView("Home", "aprende", $data);
    }

    public function aprenderItem()
    {
        $data['title'] = "Aprender Item";
        $this->views->getView($this, "aprenderItem", $data);
    }
    public function aprenderItem2()
    {
        $data['title'] = "Aprender Item";
        $this->views->getView($this, "aprenderItem2", $data);
    }
    public function aprenderItem3()
    {
        $data['title'] = "Aprender Item";
        $this->views->getView($this, "aprenderItem3", $data);
    }
    public function aprenderItem4()
    {
        $data['title'] = "Aprender Item";
        $this->views->getView($this, "aprenderItem4", $data);
    }
    public function aprenderItem5()
    {
        $data['title'] = "Aprender Item";
        $this->views->getView($this, "aprenderItem5", $data);
    }

    public function galeriaProyectos()
    {
        $data['title'] = "galeriaProyectos";
        $this->views->getView("Home", "galeriaProyectos", $data);
    }

    public function vistaProyecto()
    {
        $data['title'] = "vistaProyecto";
        $this->views->getView("Home", "vistaProyecto", $data);
    }
}
