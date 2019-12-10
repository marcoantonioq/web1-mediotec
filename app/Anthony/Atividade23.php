<meta charset="UTF-8" >
<title>Cadastro de Aluno</title>

<?php 
    require_once("conexao.php");

    
    if($_POST){ 

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $conteudo = $_POST['conteudo'];

        $query = "INSERT INTO contato (nome,email,texto) VALUES ('$nome','$email','$conteudo')";
        
        mysql_query($query, $conexao) or die("Erro ao cadastrar aluno");



    }
?> 

<h1>Contato</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    email: <input type=text name="email"> </br>
    texto: <input type=text name="conteudo"> </br>

    <button type="submit">Enviar</button>

</form>


<?php 

   
    $query = "SELECT * FROM contato";

   
    $result = mysql_query($query, $conexao); 

 
    while($dados=mysql_fetch_assoc($result)) {

        echo $dados['nome'].' | ';
        echo $dados['email'].' | ';
        echo  $dados['texto'].'<br>';
        
    }
?> 





