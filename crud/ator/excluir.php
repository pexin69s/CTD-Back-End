<?php
require_once "../banco/conexao.php";

$id = $_GET["id"];

$SQL = "DELETE FROM `ator` WHERE  `idator`= ? ;"; 

$comando = $conexao->prepare($SQL);

$comando->bind_param("i", $id); 

$comando->execute();    

header('location: index.php');