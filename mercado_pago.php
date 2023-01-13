<?php
require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-5266226948659448-110816-6aea6b9808bcb46adc9c2237700cb0f6-1217455549');
$json = file_get_contents("php://input");
$data = json_decode($json);
$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = $data->description;
$item->quantity = 1;
$item->unit_price = $data->price;
$item->currency_id = "COP";
$preference->items = array($item);

$preference->back_urls = array(
    "success" => "http://localhost/crowdfunding/cliente/pago?cost=" . $data->price . "&id_proyecto=" . $data->id ,
    "failure" => "http://localhost/crowdfunding/cliente/pagoRecha/",
    "pending" => "http://localhost/crowdfunding/cliente/pagoPend/"
);

$preference->auto_return = "approved";

$preference->save();

$response = array(
    'id' => $preference->id,
);

echo json_encode($response);
?>