<?php

//importa arquivo
require_once "../banco/conexao.php";

if(isset($_POST["nome"]) && isset($_POST["anonascimento"]) && isset($_POST["signo"]) && isset($_POST["sexo"])){
//faz upload da foto do usuário
require_once "faz_upload.php";

    $nome = $_POST["nome"];
$anonascimento = $_POST["anonascimento"];
$signo = $_POST["signo"];
$sexo = $_POST["sexo"];
$foto = $nome_foto;


$sql = "INSERT INTO `ator` (`nome`, `anonascimento`, `signo`, `sexo`, foto) VALUES (?, ?, ?, ?, ?);";


//
$comando = $conexao->prepare($sql);

//Faz vinculação dos parâmetros
$comando->bind_param("sssss", $nome , $anonascimento , $signo, $sexo, $foto); 

$comando->execute();

}
header('location: index.php');