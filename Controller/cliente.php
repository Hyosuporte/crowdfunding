<?php
class cliente extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index(){
        if($_SESSION['rol'] == "2" ){
            $this->views->getView("cliente", "perfil");
        }else{
            header("location: " . BASE_URL );
        }
    }

}
