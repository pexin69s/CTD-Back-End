<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "db_catalogo_3infob";
$port = 3306;


//cria uma conexão com o mysql
$conexao = new mysqli($host,
                      $user,
                      $password,
                      $database,
                      $port);

    
    //verificar se existe erros na conxão
    if($conexao->connect_error){
        echo $conexao->connect_error;
        die();
    }

