<?php
require_once "../banco/conexao.php";


$sql = "SELECT distinct nome FROM ator"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$nomes = [];
while ($ator = $resultado->fetch_object()){
    $nomes [] = $ator; }

?>