<?php
$shopping_cart = 220;
$tipo = "cables";
$shipping_price = 0;

if($shopping_cart <20 && $tipo == 'cables'){
    echo "No se puede enviar";
}
if($shopping_cart >=20 && $shopping_cart <=50) {
    $shipping_price = 4.99;
    echo "Los gastos de envio son $shipping_price €";
}
if($shopping_cart >50 && $shopping_cart <=150) {
    $shipping_price = 0;
    echo "Los gastos de envio son $shipping_price €";
}
if($shopping_cart >150) {
    $shipping_price = 0;
    echo "Los gastos de envío son $shipping_price €. Has recibido un código de descuento para tu próxima compra: GIMBERNAT_20_%";
}
?>


