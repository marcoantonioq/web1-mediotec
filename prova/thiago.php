<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prova/thiago</title>
</head>
<body>


<meta charset="UTF-8" >

<title>Cadastro de Cliente</title>


<?php // inicio php
    if($_POST){ // se $_POST existe
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "RG:" . $_POST['RG'] . "</br>";
        echo "data de nascimento:" . $_POST['data de nascimento'] . "</br>";
        echo "Sexo: " . $_POST['sexo'] . "</br>";
        echo "e-mail:" . $_POST['e-mail'] . "</br>";
        echo "nome da mãe:" . $_POST['nome da mãe'] . "</br>";
        echo "área de atuação" . $_POST['área de atuação'] . "</br>";
        echo "escolaridade" . $_POST['escolaridade'] . "</br>";
        echo "endereço" . $_POST['endereço'] . "</br>";
        echo "tefone para contato" . $_POST['telefone para contato'] . "</br>";

    }
?> 

<h1>Cadastro Currículo</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    CPF: <input type=text name="cpf"> </br>
    RG: <input type=text name="RG"> </br>
    data de nascimento: <input type=text name="data de nascimento"> </br>
    Sexo: 
        <input type="radio" name="sexo" value="M"> Masculino | 
        <input type="radio" name="sexo" value="F"> Feminino </br>
    e-mail: <input type=text name="e-mail"> </br>
    nome da mãe: <input type=text name="nomedamae"> </br>
    área de atuação: <input type=text name="areadeatuaçao"> </br>
    escolaridade: <input type=text name="escolaridade"> </br>
    endereço: <input type=text name="escolaridade"> </br>
    telefone de contato: <input type=text name="telefonedecontato"> </br>
   
    <button type="submit">Enviar</button>

</form>

if($_POST){ 

        if( empty( $_POST['nome'] ) ){
            echo "<p>Nome empty ";
        }
        if( empty( $_POST['cpf'] ) ){
            echo "<p>CPF empty";
        }
        if( empty( $_POST['rg'] ) ){
            echo "<p>RG empty";
        }
        if( empty( $_POST['data de nascimento'] ) ){
            echo "<p>data de nascimento empty";
        }
        if( empty( $_POST['sexo'] ) ){
            echo "<p>sexo empty";
        }
        if( empty( $_POST['e-mail'] ) ){
            echo "<p>e-email mpty";
        }
        if( empty( $_POST['nome da mae'] ) ){
            echo "<p>nome da mae empty";
        }
        if( empty( $_POST['area de atuaçao'] ) ){
            echo "<p>area de atuaçao empty";
        }
        if( empty( $_POST['escolaridade'] ) ){
            echo "<p>escolaridade empty";
        }
        if( empty( $_POST['endereço'] ) ){
            echo "<p>endereço empty";
        }
        if( empty( $_POST['telefone de contato'] ) ){
            echo "<p>telefone de contato empty";
        }
        
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "rg: " . $_POST['rg'] . "</br>";
        echo "data de nascimento: " . $_POST['data de nascimento'] . "</br>";
        echo "sexo: " . $_POST['sexo'] . "</br>";
        echo "e-mail: " . $_POST['e-mail'] . "</br>";
        echo "nome da mae: " . $_POST['nome da mae'] . "</br>";
        echo "area de atuaçao: " . $_POST['area de atuaçao'] . "</br>";
        echo "escolaridade: " . $_POST['escolaridade'] . "</br>";
        echo "endereço: " . $_POST['endereço'] . "</br>";
        echo "telefone de contato: " . $_POST['telefone de contato'] . "</br>";
        
         
}

