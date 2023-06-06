<?php
require_once "../banco/conexao.php";


$sql = "SELECT * FROM ator"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$atores = [];
while ($ator = $resultado->fetch_object()){
    $atores[] = $ator; }
