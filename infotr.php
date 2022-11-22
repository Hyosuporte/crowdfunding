<?php

$payment = $GET['payment_id'];
$status = $GET['status'];
$payment_type = $GET['payment_type'];
$order_id = $GET['merchant_order_id'];

echo "<h3>Su donación ha sido realizada con éxito</h3>";
echo $payment. '<br>';
echo $status.  '<br>';
echo $payment_type. '<br>';
echo $order_id. '<br>';

?>
