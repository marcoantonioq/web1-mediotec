<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 11</title>

    <?php

$numero1 = 1 ;
$numero2 = 2 ;
$operaçao = '-';

switch ($operaçao) {
    case '+':
        echo("$numero1 $operaçao $numero2 = ". ($numero1 - $numero2) );
        break;
    case '-':
        echo("$numero1 $operaçao $numero2 =  ". ($numero1 - $numero2) );
        break;
    case '*':
        $total3 = ($numero1 * $numero2);
        echo("$numero1 $operaçao $numero2 = $total3 ");
        break;
    case'/':
        echo("$numero1 $operaçao $numero2 = $total4 ");
    

    
    default:
        # code...
        break;
}