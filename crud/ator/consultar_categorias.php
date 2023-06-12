<?php
require_once "../banco/conexao.php";


$SQL = "SELECT distinct 'ator' FROM idator"; 

$comando = $conexao->prepare($SQL);

$comando->execute();

$resultado = $comando->get_result();

$nomes = [];
while ($ator = $resultado->fetch_object()){
    $nomes [] = $ator; }

?>