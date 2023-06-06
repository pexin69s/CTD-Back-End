<?php
require_once "../banco/conexao.php";

if(isset($_GET["id"])){

$id = $_GET["id"];

$sql = "SELECT * FROM `ator` WHERE  `idator`= ?;"; 

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

$resultado = $comando->get_result();

$ator = $resultado->fetch_object();

}