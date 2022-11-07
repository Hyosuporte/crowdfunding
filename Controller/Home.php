<?php
class Home extends Controller
{
   public function __construct()
    {
        session_start();
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == "1") {
                header("location: " . BASE_URL . "administrador");
            } else {
                header("location: " . BASE_URL . "cliente");
            }
        }
        parent::__construct();
    }

    public function index()
    {
        $this->views->getView("Home", "index");
    }

    public function login()
    {
        $data['title'] = "Login";
        $this->views->getView("Home", "login",$data);
    }

    public function registro()
    {
        $this->views->getView("Home", "registro");
    }

    public function recuperar()
    {
        $this->views->getView("Home", "recuperar");
    }

    public function SubirProyecto()
    {
        $this->views->getView("Home", "formulario");
    }

    public function dashboardAdmin()
    {
        $this->views->getView($this,"Dashboard");
    }
}