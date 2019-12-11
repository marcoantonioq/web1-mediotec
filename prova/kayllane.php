<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>provakayllane</title>
</head>
<body>
<?php 

    if($_POST){ 
        if( empty( $_POST['nome_completo'] ) ){
            echo "<p>nome_completo Invalido";
        }

        if( empty( $_POST['cpf'] ) ){
            echo "<p>CPF Invalido";
        }

        if( empty( $_POST['RG'] ) ){
            echo "<p>RG Invalido";
        }
            
        if( empty( $_POST['data_de_nascimento'] ) ){
            echo "<p>data_de_nascimento Invalido";
        }

        if( empty( $_POST['sexo'] ) ){
            echo "<p>sexo Invalido";
        }

        if( empty( $_POST['e-mail'] ) ){
            echo "<p>e-mail Invalido";
        }

        if( empty( $_POST['nome_da_mãe'] ) ){
            echo "<p>nome_da_mãe Invalido";
        }

        if( empty( $_POST['área_de_atuação'] ) ){
            echo "<p>área_de_atuação Invalido";
        }

        if( empty( $_POST['escolaridade'] ) ){
            echo "<p>escolaridade Invalido";
        }

        if( empty( $_POST['endereço'] ) ){
            echo "<p>endereço Invalido";
        }

        if( empty( $_POST['telefone_para_contato'] ) ){
            echo "<p>telefone_para_contato Invalido";
        }
        echo "<p>nome_completo: " . $_POST['nome_completo'] . "</br>";
        echo "<p>cpf: " . $_POST['cpf'] . "</br>";
        echo "<p>RG: " . $_POST['RG'] . "</br>";
        echo "<p>Data_de_nascimento: " . $_POST['data_de_nascimento'] . "</br>";
        echo "<p>Sexo: " . $_POST['sexo'] . "</br>";
        echo "<p>E-mail: " . $_POST['e-mail'] . "</br>";
        echo "<p>nome_dos_responsaveis: " . $_POST['nome_da_mãe'] . "</br>";
        echo "<p>Área_de_atuação: " . $_POST['área_de_atuação'] . "</br>";
        echo "<p>Escolaridade: " . $_POST['escolaridade'] . "</br>";
        echo "<p>Endereço: " . $_POST['endereço'] . "</br>";
        echo "<p>Telefone_para_contato: " . $_POST['telefone_para_contato'] . "</br>";
       
    }
?> 

<h1>Cadastro Currículo</h1>

<form action="" method="post">

    Nome Completo: <input type=text name="nome_completo"> </br>
    CPF: <input type=text name="cpf"> </br>
    RG: <input type=text name="RG"> </br>
    Data de nascimento: <input type=text name="data_de_nascimento"> </br>
    Sexo: <input type=text name="sexo"> </br>
    E-mail: <input type=text name="e-mail"> </br>
    Nome dos responsaveis: <input type=text name="nome_dos_responsaveis"> </br>
    Área de atuação: <input type=text name="área_de_atuação"> </br>
    Escolaridade: <input type=text name="escolaridade"> </br>
    Endereço: <input type=text name="endereço"> </br>
    Telefone para contato: <input type=text name="telefone_para_contato"> </br>

    <button type="submit">Enviar</button>

</form>