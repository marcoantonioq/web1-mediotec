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

$numero1= 2;
$numero2= 4;

function soma($numero1, $numero2) {
    
        for ($i=$numero1; $i <= $numero2;$i++ ) { 
            echo "<br>".$i;
            
        }
        return $numero2 - $numero1;

    }
   
echo "<br>o resultado da soma é ". soma($numero1, $numero2);

