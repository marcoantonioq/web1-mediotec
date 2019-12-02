<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 5</title>
</head>
<body>


<?php

$peso = 60; 
$altura = 1.70;
$resultado = $peso / ($altura * $altura );
if( $peso <= 0 || $peso > 1000 ) {
    echo "peso inválido";
}
if( $altura <= 0) {
    echo "altura válido";
}

echo "O seu IMC é : ";

echo "$resultado";

?>
</body>
</html>