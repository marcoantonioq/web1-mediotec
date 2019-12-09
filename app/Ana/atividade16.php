
<meta charset="UTF-8">

<?php

function soma($numero1, $numero2){

    if ($numero1 >$numero2) {
        echo "<br>O menor valor é $numero2";
        
    }else {
       echo "<br>O menor valor e $numero1";
    }
    
    $soma = 0;

    for ($i=$numero1; $i < $numero2 ; $i++) { 
        $soma = $soma + $i;
    }


    return $soma;

}

echo "<p>Soma: " . soma(1, 2); // exibe: numero menor 2

 

