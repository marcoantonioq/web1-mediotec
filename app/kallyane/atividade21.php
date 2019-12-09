<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 21</title>
</head>
<body>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    Peso: <input type=text name="peso"> </br>
    Altura: <input type=text name="altura"> </br>

    <button type="submit">Enviar</button>

</form>

<?php

if($_POST){
        echo "peso: " . $_POST['peso'] . "</br>";
        echo "altura: " . $_POST['altura'] . "</br>";

        $peso = 62; 
        $altura = 1.60;
        $resultado = $peso / ($altura * $altura );

            echo "O seu IMC é : ";

            echo "$resultado";
                }
                if ($resultado >= 18.5 && $resultado <= 24.99) ;
                  echo "<br>peso normal"
            ?> 

</body>
</html>