<meta charset="UTF-8" >
<title>Cadastro de Aluno</title>

<?php 
    require_once("conexao_mysql.php"); // Banco de dados

    // cria a query
    $query = "SELECT * FROM alunos";

    // executa a query
    $result = mysql_query($query, $conexao); // or die("Erro select");

    // mostra resultados
    while($dados=mysql_fetch_assoc($result)) {

        echo $dados['nome'].', ';
        echo $dados['idade'].', ';
        echo 'Telefone: ' . $dados['telefone'].'<br>';
        
    }
?> 

