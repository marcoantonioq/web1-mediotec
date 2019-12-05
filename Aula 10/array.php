<meta charset="UTF-8">

<?php

// Criar ARRAY e exibir índice 1

    // Método 1

    $mes[1] = "Janeiro";
    $mes[2] = "Fevereiro";

    echo "<br>Mês encontrado no índice 1 $mes[1]";

    // Método 2

    $mes = array(0, "Janeiro", "Fevereiro");

    echo "<br>Mês encontrado no índice 1 $mes[1]";

    // Método 3

    $mes = [0, "Janeiro", "Fevereiro"];

    echo "<br>Mês encontrado no índice 1 $mes[1]";