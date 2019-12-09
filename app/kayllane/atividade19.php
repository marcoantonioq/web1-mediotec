<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 18</title>
</head>
<body>

<?php 

 

    $hora = date('19');
if (($hora >= 0) AND ($hora < 12)) {
$mensagem = "<font color='red'>Bom dia! </font>";
} else if (($hora >= 12) AND ($hora < 18)) {
$mensagem = "<font color='green'>Boa tarde!  </font>";
} else if (($hora >= 18) AND ($hora < 24)){
$mensagem = "<font color='blue'>Boa noite!  </font>";
}
echo $mensagem;