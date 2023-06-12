<?php
require_once "../banco/conexao.php";


$SQL = "SELECT * FROM ator"; 

$comando = $conexao->prepare($SQL);

$comando->execute();

$resultado = $comando->get_result();

$atores = [];
while ($ator = $resultado->fetch_object()){
    $atores[] = $ator; }
