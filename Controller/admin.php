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
                $this->views->getView($this, "admin", $data);
            } else {
                header("location: " . BASE_URL);
            }
        } else {
            $data['title'] = "Principal";
            header("location: " . BASE_URL);
        }
    }

}
