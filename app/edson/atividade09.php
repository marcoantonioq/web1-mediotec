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

$nota1= 9;
$nota2=4;

$media=($nota1+$nota2)/2;

if($media>=6)
{

 echo("Aprovado");

}


elseif ($media>=5 )
{

echo(" Recuperação");

}
else
{

echo("Reprovado");

}