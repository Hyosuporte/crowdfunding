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
$preference->save();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integración Mercado Pago</title>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>
    <h3>Esto es mercado pago</h3>
    <div class="checkout-btn"></div>
    <script>
        const mp = new MercadoPago('TEST-af98f1a8-b5d7-464f-b9f7-d8263610c69f', {
            locale: 'es-CO'
        });

        mp.checkout({
            preference: {
                id: '<?php echo $preference->id; ?>'
            },
            render: {
                container: '.checkout-btn',
                label: 'Pagar con MercadoPago'
            }
        })
    </script>
</body>

</html>