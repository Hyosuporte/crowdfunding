<?php
function strClean($cadena)
{
    $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $cadena);
    $string = trim($string);
    $string = stripslashes($string);
    $string = str_ireplace('<script>', '', $string);
    $string = str_ireplace('</script>', '', $string);
    $string = str_ireplace('<script type=>', '', $string);
    $string = str_ireplace('<script src>', '', $string);
    $string = str_ireplace('SELECT * FROM', '', $string);
    $string = str_ireplace('DELETE FROM', '', $string);
    $string = str_ireplace('INSERT INTO', '', $string);
    $string = str_ireplace('SELECT COUNT(*) FROM', '', $string);
    $string = str_ireplace('DROP TABLE', '', $string);
    $string = str_ireplace("OR '1'='1", '', $string);
    $string = str_ireplace('OR ´1´=´1', '', $string);
    $string = str_ireplace('IS NULL', '', $string);
    $string = str_ireplace('LIKE "', '', $string);
    $string = str_ireplace("LIKE '", '', $string);
    $string = str_ireplace('LIKE ´', '', $string);
    $string = str_ireplace('OR "a"="a', '', $string);
    $string = str_ireplace("OR 'a'='a", '', $string);
    $string = str_ireplace('OR ´a´=´a', '', $string);
    $string = str_ireplace('--', '', $string);
    $string = str_ireplace('^', '', $string);
    $string = str_ireplace('[', '', $string);
    $string = str_ireplace(']', '', $string);
    $string = str_ireplace('==', '', $string);
    return $string;
}

function email($data,$auxiliarPass){
    $para = $data['correo'];
    $titulo = "Recuperacion de contraseña de TFInancia";
    $mensaje = "<img src='" . BASE_URL . "Assets/img/LOGO_21.svg' border='0' width='300' height='100' >
    Hola ". $data['primer_nombre']  . "\n\n\n\n\n
    Haz solicitado crear una nueva contraseña en TFInancia, tu \n contraseña temporal en la siguiente: " . $auxiliarPass . " \n
    Recuerda cambiarla por una que recuerdes. \n\n\n\n\n
    Si no has solicitado una contraseña nueva, ignora este email. \n\n\n\n\n
    ¡Gracias!";
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= "From: cacuervo120@gmail.com";
    return (mail($para,$titulo,$mensaje,$cabeceras));
}