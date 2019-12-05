<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 16</title>
</head>
<body>

<meta charset="UTF-8">

<?php



$numero1 = 2;
$numero2 = 4;

function menor_ou_maior($numero1, $numero2){
    if($numero1 < $numero2){    
        return $numero1;
    } else{
        return $numero2;
    }
 }

function soma($numero1, $numero2) {
    echo "o menor numero é: " . menor_ou_maior($numero1, $numero2);

}

echo soma(2, 4);

