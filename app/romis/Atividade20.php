<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 5</title>
</head>
<body>
<?php


?>
</body>
</html>

<?php // inicio php
    if($_POST){ // se $_POST existe 
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $Anoatual = getdate()["year"];

        echo "Ola, meu nome é $nome e nasci no ano de ".($Anoatual-$idade);
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "Idade: " . $_POST['idade'] . "</br>";
    }
?>
   <form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    Idade: <input type=text name="idade"> </br>

     <button type="submit">Enviar</button>

</form>
