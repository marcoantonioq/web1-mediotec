<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prova/Anthony</title>
</head>
<body>
<meta charset="UTF-8" >
<title>Cadastro de Cliente</title>

<?php // inicio php
    if($_POST){ // se $_POST existe
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "RG:" . $_POST['rg'] . "</br>";
        echo "Data de nascimento:" . $_POST['data_de_nascimento'] . "</br>";
        echo "Sexo: " . $_POST['sexo'] . "</br>";
        echo "e-mail:" . $_POST['e-mail'] . "</br>";
        echo "nome da mãe:" . $_POST['nome_da_mãe'] . "</br>";
        echo "área de atuação" . $_POST['área_de_atuação']."</br>";
        echo "escolaridade:" . $_POST['escolaridade'] . "</br>";
        echo "endereço" . $_POST['endereço']."</br>";
        echo "telefone para contato:" . $_POST['telefone_de_contato'] . "</br>";
       
    }
?> 

<h1>Cadastro Currículo</h1>

<form action="" method="post">

    nome: <input type=text name="nome"> </br>
    CPF: <input type=text name="cpf"> </br>
    RG: <input type=text name="rg"> </br>
    data de nascimento: <input type=text name="data_de_nascimento"> </br>
    sexo: 
        <input type="radio" name="sexo" value="M"> Masculino | 
        <input type="radio" name="sexo" value="F"> Feminino </br>
    e-mail: <input type=text name="e-mail"> </br>
    nome da mãe: <input type=text name="nome_da_mãe"> </br>
    área de atuação: <input type=text name="área_de_atuação"> </br>
    escolaridade: <input type=text name="escolaridade"> </br>
    telefone de contato: <input type=text name="telefone_de_contato"> </br>
    endereço: <input type=text name="end"> </br>
    
    <button type="submit">Enviar</button>

</form>

<?php

if($_POST){ 

        if( empty( $_POST['nome'] ) ){
            echo "<p>nome empty ";
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
            echo "<p>sexo empty";
        }
         if( empty( $_POST['e-mail'] ) ){
            echo "<p>e-mail empty";
        }
         if( empty( $_POST['nome da mãe'] ) ){
            echo "<p> nome da mãe empty";
        }
         if( empty( $_POST['area de atuação'] ) ){
            echo "<p>área de atuação empty";
        }
        if( empty( $_POST['escolaridade'] ) ){
            echo "<p>escolaridade empty";
        }
        if( empty( $_POST['telefone de contato'] ) ){
            echo "<p>telefone de Contato empty";
        }
        if( empty( $_POST['endereço'] ) ){
            echo "<p>endereço empty";
        }
        echo "nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "RG: " . $_POST['rg'] . "</br>";
        echo "data de nascimento: " . $_POST['data de nascimento'] . "</br>";
        echo "sexo: " . $_POST['sexo'] . "</br>";
        echo "e-mail: " . $_POST['e-mail'] . "</br>";
        echo "nome da mãe: " . $_POST['nome da mãe'] . "</br>";
        echo "área de atuação: " . $_POST['área de atuação'] . "</br>";
        echo "escolaridade: " . $_POST['escolaridade'] . "</br>";
        echo "telefone de Contato: " . $_POST['telefone de contato'] . "</br>";
        echo "endereço: " . $_POST['endereço'] . "</br>";
}
?>