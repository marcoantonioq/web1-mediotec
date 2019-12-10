<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 22</title>
</head>
<body>

<meta charset="UTM-8" >
<title> Página de Contato </title>


<?php // inicio php
    if($_POST){ // se $_POST existe
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "Idade: " . $_POST['idade'] . "</br>";
        
    }
?> 

<h1>Cadastro de Cliente</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    Idade: <input type=text name="idade"> </br>
    Endereço: <input type=text name="end"> </br>
    

    <button type="submit">Enviar</button>

</form>
