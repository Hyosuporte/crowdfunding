<?php
class Views{
 
    public function getView($ruta, $vista, $data="")
    {
        if ($ruta == "home") {
            $vista = "View/".$vista.".php";
        }else{
            $vista = "View/".$ruta."/".$vista.".php";
        }
        require $vista;
    }
}