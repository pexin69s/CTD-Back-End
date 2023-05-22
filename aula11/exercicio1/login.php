<h1> ahbalkjnusa </h1>

<?php

   if($_GET["user"] == "admin" && $_GET["pw"] == 123) {
    echo "Usuário logado";
   }
   else{
    echo "Usuário ou senha inválidos!";
   }

?>