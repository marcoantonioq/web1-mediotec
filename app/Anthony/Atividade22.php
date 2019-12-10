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


if($_POST){ 

        if( empty( $_POST['nome'] ) ){
            echo "<p>Nome empty ";
        }
        if( empty( $_POST['cpf'] ) ){
            echo "<p>CPF empty";
        }
        if( empty( $_POST['idade'] ) ){
            echo "<p>Idade empty";
        }
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "Idade: " . $_POST['idade'] . "</br>";
}

        
?> 

        <h1>Minha página de contato- Receitas</h1>

        <form action="" method="post">

            Nome: <input type=text name="nome"> </br>
            CPF: <input type=text name="cpf"> </br>
            Idade: <input type=text name="idade"> </br>
            Endereço: <input type=text name="end"> </br>
        
            <button type="submit">Enviar</button>

        </form>
?>