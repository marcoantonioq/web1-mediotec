<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 18</title>
</head>
<body>

<?php

$date = getdate();

print_r($date);
 if($date['hours'] <= 0 && $date['hours'] <= 12){
    echo("<font color='red'>Bom dia</font>");
    }

if($date['hours'] >= 12 && $date['hours'] <= 18){
    echo("<font color='geen'>Boa tarde</font>");

}
 
if($date['hours'] < 18 && $date['hours'] <= 24){
    echo("<font color='blue'>Boa Noite</font>");
}
?>
</pre>;
