<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 9</title>
</head>
<body>

<?php

$N1 = 10;
$N2 = 4;
$operacao = "*";

$resutado1 = ($N1 + $N2);
$resutado2 = ($N1 - $N2);

switch ($operacao) {
    case "*":
        $resutado = ($N1 * $N2);
        echo  ("O resutado de $N1 $operacao $N2 = $resutado");
        break;
    case "+":
        $resutado = ($N1 + $N2);
        echo ("O resutado de $N1 $operacao $N2 = $resutado");
        break;
    case "-":
        $resutado = ($N1 - $N2);
        echo ("O resutado de $N1 $operacao $N2 = $resutado");
        break;
    
    default:
        echo("O resutado e invalido");
}

