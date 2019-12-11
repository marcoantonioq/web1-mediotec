<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prova/izadora</title>
</head>
<body>
<meta charset="UTF-8" >
<title>Cadastro de Cliente</title>

<?php // inicio php
    if($_POST){ // se $_POST existe
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "RG:" . $_POST['rg'] . "</br>";
        echo "Data de nascimento:" . $_POST['data de nascimento'] . "</br>";
        echo "Sexo: " . $_POST['sexo'] . "</br>";
        echo "e-mail:" . $_POST['e-mail'] . "</br>";
        echo "nome da mãe:" . $_POST['nome da mãe'] . "</br>";
        echo "área de atuação" . $_POST['área de atuação']."</br>";
        echo "escolaridae:" . $_POST['escolaridae'] . "</br>";
        echo "endereço" . $_POST['endereço']."</br>";
        echo "telefone para contato:" . $_POST['telefone de contato'] . "</br>";
       
    }
?> 

<h1>Cadastro Currículo</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    CPF: <input type=text name="cpf"> </br>
    RG: <input type=text name="rg"> </br>
    data de nascimento: <input type=text name=" data de nascimento"> </br>
    Sexo: 
        <input type="radio" name="sexo" value="M"> Masculino | 
        <input type="radio" name="sexo" value="F"> Feminino </br>
    e-mail: <input type=text name="e-mail"> </br>
    nome da mãe: <input type=text name="nome da mãe"> </br>
    Aréa de atuação: <input type=text name="área de atuação"> </br>
    Escolaridade: <input type=text name="escolaridade"> </br>
    Telefone de contato: <input type=text name="telefone de contato"> </br>
    Endereço: <input type=text name="end"> </br>
    
    <button type="submit">Enviar</button>

</form>

<?php

if($_POST){ 

        if( empty( $_POST['nome'] ) ){
            echo "<p>Nome empty ";
        }
        if( empty( $_POST['cpf'] ) ){
            echo "<p>CPF empty";
        }
        if( empty( $_POST['rg'] ) ){
            echo "<p> RG empty";
        }
         if( empty( $_POST['data de nascimento'] ) ){
            echo "<p>data de Nascimento empty";
        }
        if( empty( $_POST['sexo'] ) ){
            echo "<p>Sexo empty";
        }
         if( empty( $_POST['e-mail'] ) ){
            echo "<p>E-mail empty";
        }
         if( empty( $_POST['nome da mãe'] ) ){
            echo "<p>Nome da Mãe empty";
        }
         if( empty( $_POST['area de atuação'] ) ){
            echo "<p>Área de atuação empty";
        }
        if( empty( $_POST['escolaridade'] ) ){
            echo "<p>Escolaridade empty";
        }
        if( empty( $_POST['telefone de contato'] ) ){
            echo "<p>Telefone de Contato empty";
        }
        if( empty( $_POST['endereço'] ) ){
            echo "<p>Endereço empty";
        }
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "RG: " . $_POST['rg'] . "</br>";
        echo "Data de nascimento: " . $_POST['data de nascimento'] . "</br>";
        echo "Sexo: " . $_POST['sexo'] . "</br>";
        echo "e-mail: " . $_POST['e-mail'] . "</br>";
        echo "nome da mãe: " . $_POST['nome da mãe'] . "</br>";
        echo "área de atuação: " . $_POST['área de atuação'] . "</br>";
        echo "Escolaridade: " . $_POST['escolaridade'] . "</br>";
        echo "Telefone de Contato: " . $_POST['telefone de contato'] . "</br>";
        echo "Endereço: " . $_POST['endereço'] . "</br>";
}
?>