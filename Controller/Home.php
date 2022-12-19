<?php
class Home extends Controller
{
   public function __construct()
    {
        session_start();
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == "1") {
                header("location: " . BASE_URL . "admin");
            } else {
                header("location: " . BASE_URL . "cliente");
            }
        }
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Principal";
        $this->views->getView("Home", "index", $data);
    }

    public function login()
    {
        $data['title'] = "Login";
        $this->views->getView("Home", "login",$data);
    }

    public function registro()
    {
        $data['title'] = "Registro";
        $this->views->getView("Home", "registro", $data);
    }

    public function recuperar()
    {
        $this->views->getView("Home", "recuperar");
    }

    public function SubirProyecto()
    {
        $data['title'] = "Subir Proyecto";
        $this->views->getView("Home", "formulario",$data);
    }

    public function aplicar()
    {
        $data['title'] = "aplicar";
        $this->views->getView("Home","aplicar",$data);
    }

    public function aprende()
    {
        $data['title'] = "aprende";
        $this->views->getView("Home","aprende",$data);
    }

    public function aprenderItem()
    {
        $data['title'] = "aprenderItem";
        $this->views->getView("Home","aprenderItem",$data);
    }

    public function galeriaProyectos()
    {
        $data['title'] = "galeriaProyectos";
        $this->views->getView("Home","galeriaProyectos",$data);
    }

    public function vistaProyecto()
    {
        $data['title'] = "vistaProyecto";
        $this->views->getView("Home","vistaProyecto",$data);
    }
}   