<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito.php";
?>

   <h1>Cadastro de Atores</h1>
    <hr>

    <div class="container">
    <form action="<?php echo isset($ator) ? "atualizar.php" : "inserir.php"; ?>" method="post" method="post" enctype="multipart/form-data">
    

        <input type="hidden" name="idusuario" id="n1" value="<?php echo $ator->idator ?? "" ;?>"><br>  

        <label class="form-label">Nome</label><br>
        <input class= "form-control" type="text" name="nome" id="nome" value="<?php echo $ator->nome ?? "" ;?>"><br>

        <label class="form-label">Ano Nascimento</label><br>
        <input class= "form-control" type="text" name="anonascimento" id="anonascimento" value="<?php echo $ator->anonascimento ?? "" ;?>"><br>

        <label class="form-label">Signo</label><br>
        <input class= "form-control" type="text" name="signo" id="signo" value="<?php echo $ator->signo ?? "" ;?>"><br>

        <label class="form-label">Sexo</label><br>
     
        <select class="form-select" aria-label="Default select example" name="sexo" id="sexo">
        <option selected>Sexo</option>
        <option value="M"    <?php echo isset($ator->sexo) ?  ($ator->sexo=="M") ? "selected":"": "" ;?>>Masculino</option>
        <option value="F" <?php isset($ator->sexo) ?  ($ator->sexo=="F") ? "selected":"": "" ;?>>Feminino</option>

        </select>

        <label class="form-label">Foto</label><br>
        <input class= "form-control" type="file" name="foto" id="foto" value="<?php echo $ator->foto ?? "" ;?>"><br>

        <button type="submit" class="btn btn-dark" >Inserir</button>
    </form>

</div>
    <?php require_once "../template/rodape.php"; ?>