<?php
class Home extends Controller
{
   /* public function __construct()
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
*/
    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function login()
    {
        $this->views->getView($this, "login");
    }

    public function registro()
    {
        $this->views->getView($this, "registro");
    }

    public function recuperar()
    {
        $this->views->getView($this, "recuperar");
    }

}