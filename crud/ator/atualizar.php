<?php
require_once "../banco/conexao.php";
require_once "faz_upload.php";
$id = $_POST['idator'];
$nome = $_POST['nome'];
$anonascimento = $_POST['anonascimento'];
$signo = $_POST['signo'];
$sexo = $_POST['sexo'];

$SQL = "UPDATE `ator` SET `nome`=?, `anonascimento`=?, `signo`=?, `sexo`=?, WHERE  `idator`=?;";

echo $SQL;

$comando = $conexao->prepare($SQL);

$comando->bind_param("ssssi", $nome , $anonascimento , $signo, $sexo , $id); 

$comando->execute();

header('location: index.php');