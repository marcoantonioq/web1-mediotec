<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade10</title>
</head>
<body>

<?php

$date = getdate();

// print_r($date);

if( $date['hours'] >= 0 && $date['hours'] <= 12 ) {
    echo "bom dia";
}

if( $date['hours'] >= 12 && $date['hours'] <= 18 ) {
    echo "Boa tarde";
}

if( $date['hours'] > 18 && $date['hours'] <= 24 ) {
    echo "Boa Noite";
}

