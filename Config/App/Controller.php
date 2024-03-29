<?php
class Controller{
    public $views;
    public $model;
    public function __construct()
    {
        $this->views = new Views();
        $this->cargarModel();
    }
    
    public function cargarModel()
    {
        $model = get_class($this)."DAO";
        $ruta = "Model/".$model.".php";
        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $model();
        }
    }
}
