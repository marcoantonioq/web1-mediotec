<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade10</title>
</head>
<body>

<?php

$operação = "-";
$numero1 = 2;
$numero2 = 4;


switch ($operação) {
    case '*':
        $total =  ($numero1 * $numero2);
        echo("o total de $numero1 $operação $numero2  = $total:");
        break;
    case '+':
        $total  =  ($numero1 + $numero2);
        echo("o total de $numero1 $operação $numero2 = $total:");
    case '/':
        $total = ($numero1 / $numero2);
        echo("o total de $numero1 $operação $numero2 = $total:");
    case '-':
        $total = ($numero1 - $numero2);
        echo("o total de $numero1 $operação $numero2 = $total:");
    default:
        break;
}