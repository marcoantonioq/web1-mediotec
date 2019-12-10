<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 23</title>
</head>
<body>

<?php 

    require_once("conexao_mysql.php"); // Banco de dados

    // Cadastro: Alunos
    if($_POST){ 

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $conteudo = $_POST['conteudo'];
        $query = "INSERT INTO contato (nome, email, texto) VALUES ('$nome', '$email', '$conteudo')";
        mysql_query($query, $conexao) or die("Erro ao cadastrar aluno");

    }
?> 

<h1>Contatos</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    email: <input type=text name="email"> </br>
    texto: <input type=text name="conteudo"> </br>

    <button type="submit">Enviar</button>

</form>

<meta charset="UTF-8" >
<title>Cadastro de Aluno</title>

<?php 
    require_once("conexao_mysql.php"); // Banco de dados

    // cria a query
    $query = "SELECT * FROM contato";

    // executa a query
    $result = mysql_query($query, $conexao); // or die("Erro select");

    // mostra resultados
    while($dados=mysql_fetch_assoc($result)) {

        echo $dados['nome'].' | ' . $dados['email'] .' | ' . $dados['texto']. ' | ' .  "<p>";

      
    }
?> 

