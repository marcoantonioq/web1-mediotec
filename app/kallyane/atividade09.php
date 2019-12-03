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

    $nota1=5;
    $nota2=1;
    $média=($nota1+$nota2)/2;
    
        echo "<br>Nota 1: $nota1";
        echo "<br>Nota 2: $nota2";
        echo "<br>Maior nota: $nota1";
        echo "<br>Menor nota: $nota2"; 
        echo "<br>Média: $média";

        if( $nota1 >= 0 && $nota1 <= 10 ){  
        echo "<br>Nota 1: válida";
    } else {
        echo "<br>Nota 1: invalida";
    }

    if( $nota2 >= 0 && $nota2 <= 10 ){
        echo "<br>Nota 2: válida";
    } else {
        echo "<br>Nota 2: invalida";
    }

    if( $média>= 6 ) {
                 echo "<br>Status: aprovado";
    }
    elseif($média > 5) {
        echo "<br>Status: recuperação";
    } else {
        echo "<br>Status: reprovado";
    }