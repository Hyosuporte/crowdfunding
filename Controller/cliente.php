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
            $data['title'] = "Cliente";
            $this->views->getView("cliente", "perfil",$data);
        }else{
            header("location: " . BASE_URL );
        }
    }

}
