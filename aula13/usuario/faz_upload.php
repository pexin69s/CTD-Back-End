<?php 

if(!empty($_FILES['foto']['name']) ){
//local tempporario onde foi realizado o upload da imagem
$origem = $_FILES['n4']['tmp_name'];

//cria um novo nome único para a foto
$nome_foto=time().$_FILES['n4']['name'];

//local para onde o arquivo de upload vai ser movido
$destino ="../uploads/$nome_foto";

//move o arquivo de upload para a pasta destino
move_uploaded_file($origem, $destino);

}else{
    $nome_foto = "sem_foto.png";
}