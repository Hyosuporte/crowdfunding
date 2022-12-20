<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken(''); //key private access
$preference = new MercadoPago\Preference();
$item = new MercadoPago\Item();
$item->title = 'Titulo del Item';
$item->quantity = 1;
$item->unit_price = 75; //traer del array de donación
$preference->items = array($item);
/*$preference->urls = array(
    "success" => "http://localhost/crowfunding/infotr.php", //pago exitoso
    "failure" => "http://localhost/crowdfunding/mercado_pago.php" //fallo en el pago puede redirecciónar a otra parte
);*/
//$preference->autoreturn = "approved"; //aqui estaba el error
//$preference->binary_mode = "false"; //crear script de escucha para pagos pendientes

$preference->save();
?>