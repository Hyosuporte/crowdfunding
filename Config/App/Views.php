<?php
class Views{
 
    public function getView($ruta, $vista, $data="")
    {
        $ruta = get_class($ruta);
        if ($ruta == "Home") {
            $vista = "View/".$vista.".php";
        }else{
            $vista = "View/".$ruta."/".$vista.".php";
        }
        require $vista;
    }
}