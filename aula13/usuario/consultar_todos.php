<?php
require_once "../banco/conexao.php";


$sql = "SELECT * FROM usuario"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$usuarios = [];
while ($usuario = $resultado->fetch_object()){
    $usuarios[] = $usuario; }
