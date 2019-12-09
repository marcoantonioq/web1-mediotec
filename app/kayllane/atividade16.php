
<meta charset="UTF-8">

<?php

function soma($numero1, $numero2){

    if ($numero1 >$numero2) {
        echo "O menor valor é $numero2";
        
    }else {
        echo 'menor numero';
}
    return $numero1 + $numero2;

}

echo soma(4,8); // exibe: 12
