<?php
    // Exemplo de conexão com o banco de dados
    $conexao = mysql_connect("localhost", "root", "123456") or die("Erro: conectar BD");
    mysql_set_charset('utf8',$conexao);
 

    $banco = mysql_select_db("ProgWebBD", $conexao) or die("Erro:Selecionar DB");