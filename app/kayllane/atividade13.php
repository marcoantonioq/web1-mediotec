<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 13</title>
</head>
<body>
 
 <?php

 $var = 1;

while ($var <= 100) {

     if( ( $var % 2 ) == 0 ) {
        echo " <b> <br> $var e par </b>";
    }
    else {
        echo "<i> <br> $var é impar </i>";
    }
    $var++;

}





$var = 1;

do {

   if( ( $var % 2 ) == 0 ) {
        echo " <b> <br> $var e par </b>";
    }
    else {
        echo "<i> <br> $var é impar </i>";
    }
    $var++;


} while ($var <= 100);

for ($var=1; $var <= 100; $var++) { 

    if( ( $var % 2 ) == 0 ) {
        echo " <b> <br> $var e par </b>";
    }
    else {
        echo "<i> <br> $var é impar </i>";
    }


}
