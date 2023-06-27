<?php require "consultar_todos.php";
  require_once "../template/cabecalho.php";
  require_once "../template/menu_restrito.php";

?>


    <div class="container">

    <h1>Atores</h1>
    <hr>
    
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success" >Cadastrar Novo</a>
</div>
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Ano Nascimento</th>
      <th scope="col">Signo</th>
      <th scope="col">Sexo</th>
      <th scope="col">Foto</th>
      <th scope="col">Acões</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($atores as $ator): ?>
    <tr>
      <td><?php echo $ator->nome ?></td>
      <td><?php echo $ator->anonascimento ?></td>
      <td><?php echo $ator->signo ?></td>
      <td><?php echo $ator->sexo ?></td>
      <td><img src="../uploads/<?php echo $ator->foto ?>" height="25px"></td>
      <td class="text-end" width="25%">
        <a href="excluir.php?id=<?= $ator->idator?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</a>
        <a href="formulario.php?id=<?= $ator->idator?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?php require_once "../template/rodape.php"; ?>
