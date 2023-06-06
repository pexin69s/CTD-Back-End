<?php
require_once "../banco/conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM `ator` WHERE  `ator`= ?;"; 

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

header('location: index.php');