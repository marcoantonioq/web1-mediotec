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

$nota1= 3;
$nota2= 4;
$media= ($nota1 + $nota2)/2;

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
