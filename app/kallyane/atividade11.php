<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 6</title>
</head>
<body>
 
 <?php


$número1 = 28;
$número2 = 7;
$operação = "/";

 switch ($operação) {
        case '+':
        $total1 = ($número1 + $número2);
        echo("$número1 $operação $número2 = $total1");
         break;
         case '-':
        $total2 = ($número1 - $número2);
         echo("$número1 $operação $número2 = $total2 ");
         break;
        case '*':
         $total3 = ($número1 * $número2);
         echo("$número1 $operação $número2 = $total3 "); 
             break;
        case'/':
         $total4 = ($número1 / $número2);
        echo("$número1 $operação $número2 = $total4 ");
        break;
     }
 ?>


    