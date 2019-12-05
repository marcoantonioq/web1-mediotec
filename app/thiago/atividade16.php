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
    $soma= 0;
   for ($i=$numero1; $i <= $numero2; $i++) { 
       $soma= $soma + $i;
       echo "<br>".$i;
     
   }
   return $soma;

    }
   
echo "<br>o resultado da soma é ". soma(2, 4);

