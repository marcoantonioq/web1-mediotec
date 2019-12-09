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
$nota2=5;
$media= ($nota1 + $nota2)/2;
$valor= $media;

if($nota1 and $nota2 >=6)
{

 echo("Aprovado.");

}


if($nota1 and $nota2 = 5 )

{

echo(" Recuperação.");

}

if ($nota1 and $nota2 < 5)
{

echo("Reprovado.");

}

if ($media)
{

echo(" Sua média é $media");

}

if($valor > 0)
{

    echo(" .Maior do que 0");
}

elseif($valor  < 10)
{

    echo(" .Menor que 10");
}