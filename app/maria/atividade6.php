<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 5</title>
</head>
<body>
    
    
    <?php

$peso = 56;
$altura = 1.50;

$Altura= $altura*$altura;

$IMC=$peso / $Altura;


echo "O seu IMC é " . $IMC ;


$peso = 1001; 
$altura = -2;

if( $peso <= 0 || $peso >= 1000 ) 
{
    echo ("<p> valor de peso " . $peso . "invalido</p>");
}

if ($altura > 0) 
{
    echo ("<p> valor de altura " . $altura . "invalido</p>");
}


$resultado = $peso / ($altura * $altura );

echo " O seu IMC é : ";

echo " $resultado ";

?>
</body>
</html>

?>
</body>
</html>