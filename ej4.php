<?php

$productos = [10,55,43.99,12.50];
$descuento = [0,10,5,15];

function productoFinal($prod, $desc) {
    $final = [];
    for ($i=0; $i < count($prod); $i++) { 
        $precio = 0;
        $precio = $prod[$i] - ($prod[$i]*$desc[$i] / 100);
        $precio = $precio * 1.21;
        array_push($final, $precio); 
    }

    return $final;
}

var_dump(productoFinal($productos, $descuento));

?>