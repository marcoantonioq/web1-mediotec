<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 6</title>
</head>
<body>
 
 <?php
    $número=3;

    switch ($número) {
        case 1:
            echo "<br>valor digitado: um";
            break;
        case 2:
            echo "<br>valor digitado: dois";
            break;
        case 3:
        echo "<br>valor digitado: três";
        break;
        case 4:
        echo "<br>valor digitado: quatro";
        break;
        case 5:
            echo "<br>valor digitado: cinco";
            break;
        default:
            echo "<br>valor digitado: ";
            break;
     }