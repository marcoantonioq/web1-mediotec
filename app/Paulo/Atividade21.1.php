<!DOCTYPE html>
<meta charset="UTF-8">
<title>Atividade 21</title>

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

        echo "O seu IMC é : " . $resultado;

        if ($resultado < 18.5) {
            echo "Abaixo do peso";
        } elseif ($resultado >= 18.5 && $resultado <= 24.99) {
            echo "Acima do peso";
        } elseif ($resultado >= 30 && $resultado <= 43.99) {
            echo "Obesidade I";
        } elseif ($resultado >= 35 && $resultado <= 34.99) {
            echo "Obesidade II";
        } 
}
?> 


</body>
</html>
