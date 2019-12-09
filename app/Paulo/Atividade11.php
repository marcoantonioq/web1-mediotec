<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 11</title>
</head>
<body>
 
 <?php

 $numero1 = 2;
 $numero2 = 5;
 $operaçao = "+";
 
  $total3 = ($numero1 * $numero2);
 $total4 = ($numero1 / $numero2);

 switch ($operaçao) {
        case '+':
            $total1 = ($numero1 + $numero2);
            echo("$numero1 $operaçao $numero2 = $total1 ");
            break;
        case '-':
            $total2 = ($numero1 - $numero2);
            echo("$numero1 $operaçao $numero2 = $total2 ");
            break;
        case '*':
            $total3 = ($numero1 * $numero2);
            echo("$numero1 $operaçao $numero2 = $total3 ");
            break;
        default:
            echo("Operação inválida");
            case '*':
            $total4 = ($numero1 / $numero2);
            echo("$numero1 $operaçao $numero2 = $total4 ");
            break;
        default:
            echo("Operação inválida");
    }