<meta charset="UTF-8">
<?php
    // crie 2 variáveis, nota1 e nota2;
    $nota1=8;  // <= ler variável
    $nota2=9;

    echo "<br>Nota 1: $nota1";
    echo "<br>Nota 2: $nota2";

    // verifique se valor é maior que zero e menor que dez;
    if( $nota1 >= 0 && $nota1 <= 10 ){  
        echo "<br>Nota 1 é valida";
    } else {
        echo "<br>Nota 1 invalida!!!";
    }
    
    if( $nota2 >= 0 && $nota2 <= 10 ){
        echo "<br>Nota 2 é valida";
    } else {
        echo "<br>Nota 2 invalida!!!";
    }

    // exiba a maior nota; 
    if($nota1 == $nota2){
        echo "Nota 1 e Nota 2 são iguais";
    } elseif($nota1 > $nota2){ 
        echo "<br>Maior nota é nota 1: $nota1";
    } else {
        echo "<br>Maior nota é nota 2: $nota2 ";
    }

    // calcule e exiba a média geral;
    $media = ( ($nota1 + $nota2) / 2);
    echo "<br>Média é: $media";

    // E por fim, 
    //caso a média seja maior ou igual a seis, 
    if($media >= 6){
        //exiba aprovado, 
        echo "<br>Aprovado!";
    } elseif($media >= 5){
        //caso média seja maior cinco, 
        //exiba recuperação, 
        echo "<br>Aluno de recuperação!";
    } else {
    // caso contrário, 
        //exiba reprovado.
        echo "Aluno reprovado";
    }



    
