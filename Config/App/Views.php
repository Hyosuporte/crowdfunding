<?php
class Views{
 
    public function getView($ruta, $vista, $data="")
    {
        if ($ruta == "Home") {
            $vista = "View/".$vista.".php";
        }else{
            $vista = "View/".$ruta."/".$vista.".php";
        }
        require $vista;
    }
}