<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 22</title>
</head>
<body>

<?php

// inicio php
    if($_POST){ // se $_POST existe
        if( empty( $_POST['nome'] ) ){
        echo "Nome:inválido " . $_POST['nome'] . "</br>";
        }
        if( empty( $_POST['cpf'] ) ){
            echo "cpf invalido!!<p>";
        }

        if( empty( $_POST['idade'] ) ){
            echo "idade invalido!!<p>";
        }
        
    }
?> 

<h1>Minha página de contato- Receitas</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    CPF: <input type=text name="cpf"> </br>
    Idade: <input type=text name="idade"> </br>
    Endereço: <input type=text name="end"> </br>
    Sexo: 
        <input type="radio" name="sexo" value="M"> Masculino | 
        <input type="radio" name="sexo" value="F"> Feminino </br>

    <button type="submit">Enviar</button>

</form>