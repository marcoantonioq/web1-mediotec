<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade16</title>
</head>
<body>

<?php

$numero1=8;
$numero2=8;

function soma($numero1, $numero2) {

    if ($numero1>$numero2) {
        echo "o menor valor é:  " . $numero2;
    } else {
        echo "o menor valor é:" . $numero1;
    }
    
    $soma = 0;
    for ($i=$numero1; $i <= $numero2; $i++) { 
        // echo "<br>". $i;
        $soma = $soma + $i;
        
    }
    

    return $soma;

}

echo "<p>" . soma($numero1, $numero2);


