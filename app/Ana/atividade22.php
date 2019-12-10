<?php

// inicio php
    if($_POST){ // se $_POST existe
        echo "Nome: " . $_POST['nome'] . "</br>";
        echo "CPF: " . $_POST['cpf'] . "</br>";
        echo "Idade: " . $_POST['idade'] . "</br>";
        echo "Sexo: " . $_POST['sexo'] . "</br>";
    }
?> 

<h1>pagina de contato</h1>

<form action="" method="post">

    Nome: <input type=text name="nome"> </br>
    CPF: <input type=text name="cpf"> </br>
    Idade: <input type=text name="idade"> </br>
    Endereço: <input type=text name="end"> </br>
    Sexo: 
        <input type="radio" name="sexo" value="M"> Masculino | 
        <input type="radio" name="sexo" value="F"> Feminino </br>

    <button type="submit">Enviar</button>

</form>