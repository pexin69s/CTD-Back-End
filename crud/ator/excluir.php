<?php
require_once "../banco/conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM `ator` WHERE  `ator`= ? ;"; 

$comando = $conexao->prepare($SQL);

$comando->bind_param("i", $id); 

$comando->execute();

header('location: index.php');