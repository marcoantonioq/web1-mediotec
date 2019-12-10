<meta charset="UTF-8" >
<title>Cadastro de Aluno</title>

<?php 
    require_once("conexao_mysql.php"); // Banco de dados

    // Cadastro: Alunos
    if($_POST){ 

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['end'];
        
        $query = "INSERT INTO alunos (nome, idade, telefone, endereco) VALUES ('$nome', '$idade', '$telefone', '$endereco')";
        mysql_query($query, $conexao) or die("Erro ao cadastrar aluno");

    }
?> 

<h1>Cadastro de Alunos</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    Idade: <input type=text name="idade"> </br>
    Telefone: <input type=text name="telefone"> </br>
    Endereço: <input type=text name="end"> </br>

    <button type="submit">Enviar</button>

</form>

