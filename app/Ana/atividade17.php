
<meta charset="UTF-8">

<?php

$numero1=25;
$numero2=1;

echo "<br>Valor de numero1 é: $numero1";
echo "<br>Valor de numero2 é: $numero2";

function soma($numero1,$numero2) {
    $dif=0;
    if ($numero1 < $numero2) {
        echo "<br>Menor numero é ". $numero1;
        $dif = $numero2-$numero1;
    } else {
        echo "<br>Menor numero é ". $numero2;
        $dif = $numero1-$numero2;
    }
    echo "<p>";
    for ($i=$numero1; $i <= $numero2; $i++) { 
        echo "$i, ";
    }

    return $dif;
  
}

echo "<br>Intervalo é: ". soma($numero1, $numero2);
