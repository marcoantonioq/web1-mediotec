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
$variavel1 = 3;
$variavel2 = 5;
$operaçao = "/";
 switch ($operaçao) {
        case '+':
        $total1 = ($variavel1 + $variavel2);
        echo("$variavel1 $operaçao $variavel2 = $total1");
         break;
        case '-':
        $total2 = ($variavel1 - $variavel2);
         echo("$variavel1 $operaçao $variavel2 = $total2 ");
         break;
        case '*':
         $total3 = ($variavel1 * $variavel2);
         echo("$variavel1 $operaçao $variavel2 = $total3 "); 
             break;
        case'/':
         $total4 = ($variavel1 / $variavel2);
        echo("$variavel1 $operaçao $variavel2 = $total4 ");
        break;
     }
 ?>