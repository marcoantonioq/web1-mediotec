<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 17</title>
</head>
<body>

<?php
$numero1=8;
$numero2=3;

function subtração ($numero1 , $numero2) {
    
    

    $subtração = 0;
    for ($i=$numero1; $i >= $numero2; $i++) { 
    $subtração = $subtração + $i;
    }
    

    return $subtração;


}

echo "<p>" . subtração($numero1, $numero2);