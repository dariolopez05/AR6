<!DOCTYPE html>
<html>
<head>
    <title>Numeros romanos</title>
</head>
<body>
    <h1>Fusbol:</h1>
    
    <form method="POST" action="">
        <label for="gan">Partidos ganados:</label>
        <input type="number" name="gan" value=""><br>
        <label for="per">Partidos perdidos:</label>
        <input type="number" name="per" value=""><br>
        <label for="emp">Partidos empatados:</label>
        <input type="number" name="emp" value=""><br>
        
        <input type="submit" value="Calcular">
    </form>
<?php

$ganados = $_POST['gan'];
$perdidos = $_POST['per'];
$empatados = $_POST['emp'];

var_dump(calculaPuntos($ganados, $perdidos, $empatados));

function calculaPuntos($g1, $p1, $e1) {
    $arr = [
        "puntos" => 0,
        "porcentaje" => 0,
    ];
    $puntos = ($g1 * 3) + $e1;
    $total = ($g1 + $e1 + $p1) * 3;
    $porcentaje = ($puntos * 100) / $total;
    $arr["puntos"] = $puntos;
    $arr["porcentaje"] = $porcentaje;

    return $arr;
}

?>

</body>
</html>