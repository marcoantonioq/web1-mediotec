<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 21</title>
</head>
<body>

<form action="" method="post">

    peso: <input type=text name="peso"> </br>
    altura: <input type=text name="altura"> </br>
  

    <button type="submit">Enviar</button>

</form>

<?php


if($_POST){
        echo "peso: " . $_POST['peso'] . "</br>";
        echo "altura: " . $_POST['altura'] . "</br>";

        $peso = 90; 
        $altura = 1.90;
        $resultado = $peso / ($altura * $altura );

            echo "O seu IMC é : ";

            echo "$resultado";
                }
            ?> 



</body>
</html>