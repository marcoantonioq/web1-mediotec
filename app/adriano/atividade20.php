<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 20</title>
</head>
<body>

<?php

if($_POST){
    echo "Nome: " . $_POST['nome'] . "</br>";
    echo "Idade: " . $_POST['idade'] . "</br>";
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $ano = ( 2019-$idade);


    echo "Olá, meu ".$nome ." é nasci no ano de ". $ano ;

}
?> 

<h1>Cadastro de Cliente</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    Idade: <input type=text name="idade"> </br>
    
    <button type="submit">Enviar</button>

</form>
