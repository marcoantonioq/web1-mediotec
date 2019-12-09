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

$nota1= 4;
$nota2= 2;
$media= ($nota1 + $nota2)/2;
$valor=  7;

{
if($nota1 && $nota2 >=6)



 echo("Aprovado");

}


if($nota1 && $nota2 > 5 )
{

echo(" Recuperação");

}

if($nota1 && $nota2 < 5)
{

echo("Reprovado");

}

if($media)
{

echo(" sua média é $media ");

}

{
if( $valor < 0 )

echo( " o valor é maior que 0 " );

}

{
 if( $nota1 >= 0 && $nota1 <= 10 ){  
        echo "<br>Nota 1 é valida";
    } else {
        echo "<br>Nota 1 invalida!!!";
    }
    
    if( $nota2 >= 0 && $nota2 <= 10 ){
        echo "<br>Nota 2 é valida";
    } else {
        echo "<br>Nota 2 invalida!!!";
    }


    if($nota1 == $nota2){
        echo "Nota 1 e Nota 2 são iguais";
    } elseif($nota1 > $nota2){ 
        echo "<br>Maior nota é nota 1: $nota1";
    } else {
        echo "<br>Maior nota é nota 2: $nota2 ";
    }

}