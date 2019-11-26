<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 6</title>
</head>
<body>


<?php
$peso = 1001; 
$altura = -2;

if ( $peso > 0 && $peso < 1000 ) 
{
    echo ("<p> valor de peso " . $peso . "invalido</p>");
}

if ($altura > 0) 
{
    echo ("<p> valor de altura " . $altura . "invalido</p>");
}



echo ("</p>valor de " . $altura . "invalido");

$resultado = $peso / ($Altura * $Altura );

echo " O seu IMC é : ";

echo " $resultado ";

?>
</body>
</html>
