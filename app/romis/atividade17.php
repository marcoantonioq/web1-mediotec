<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 16</title>
</head>
<body>

<?php
$numero1=5;
$numero2=7;

echo "<br>Valor de numero1 é: $numero1";
echo "<br>Valor de numero2 é: $numero2";

function soma($numero1,$numero2) {
    $dif=0;
    if ($numero1 < $numero2) {
        echo "<br>Menor numero é ". $numero1;
        $dif = $numero2-$numero1;
    } else {
        echo "<br>Menor numero é ". $numero2;
        $dif = $numero1-$numero2;
    }
    echo "<p>";
    for ($i=$numero1; $i <= $numero2; $i++) { 
        echo "$i, ";
    }

    return $dif;
  
}

echo "<br>Intervalo é: ". soma($numero1, $numero2);
