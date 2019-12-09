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

    $nota1=3;
    $nota2=7;
    $média=($nota1+$nota2)/2;
    
        echo "maior nota: $nota1";
        echo "menor nota: $nota2"; 
        echo "Sua média é: $média";

    if( $média>= 6 ) {
                 echo "aprovado";
    }
    elseif($média > 5) {
        echo "recuperação";
    } else {
        echo "reprovado";
    }


    