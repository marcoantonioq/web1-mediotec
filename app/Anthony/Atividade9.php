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

$nota1= 10;
$nota2=-4;
$media= ($nota1 + $nota2)/2;

      echo "maior nota: $nota1";
      echo "menor nota: $nota2";
      echo "sua media é: $media";

if($nota1 and $nota2>=6)
{

 echo("Aprovado");

}


if($nota1 and $nota2 > 5 )
{

echo(" Recuperação");

}

if($nota1 and $nota2 < 5)
{

echo("Reprovado");

}

if ($media)
{

echo(" Sua média é " . $media ) ; 
}





