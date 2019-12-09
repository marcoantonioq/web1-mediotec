<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 22</title>
</head>
<body>

<?php 

    if($_POST){ 
        if( empty( $_POST['nome'] ) ){
            echo " <p>Nome Inválido </p>";   
        }
        
        if( empty( $_POST['cpf'] ) ){
            echo "<p>CPF Inválido </p>";
        }

        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
       
    }
?> 

<h1>Cadastro de Cliente</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    CPF: <input type=text name="cpf"> </br>

    <button type="submit">Enviar</button>

</form>