<meta charset="UTF-8" >
<title>Cadastro de Aluno</title>

<?php 
    require_once("conexao.php"); // Banco de dados

    // Cadastro: Alunos
    if($_POST){ 

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $conteudo = $_POST['conteudo'];

        $query = "INSERT INTO contato (nome,email,conteudo) VALUES ('$nome','$email','$conteudo')";
        
        mysql_query($query, $conexao) or die("Erro ao cadastrar aluno");



    }
?> 

<h1>Cada....s</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    email: <input type=text name="email"> </br>
    texto: <input type=text name="conteudo1"> </br>

    <button type="submit">Enviar</button>

</form>


<?php 

    // cria a query
    $query = "SELECT * FROM contato";

    // executa a query
    $result = mysql_query($query, $conexao); // or die("Erro select");

    // mostra resultados
    while($dados=mysql_fetch_assoc($result)) {

        echo $dados['nome'].' | ';
        echo $dados['email'].' | ';
        echo  $dados['texto'].'<br>';
        
    }
?> 





