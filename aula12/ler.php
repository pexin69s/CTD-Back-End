<<<<<<< HEAD
<?php include_once "dados.php"; ?>
<?php include_once "header.php"; ?>
<?php  include_once "menu.php"; ?>

    <?php
    $id = $_GET["id"];
    $noticia = $noticias[$id];

    ?>

 <div class="container">
    <h1> <?php echo $noticia['titulo']; ?> </h1>
    <hr>
    <img src="<?php echo $noticia['foto']; ?>" class="" />
    <p> <?php echo $noticia['materia']; ?> </p>
</div>

=======
<?php include_once "dados.php"; ?>
<?php include_once "header.php"; ?>
<?php  include_once "menu.php"; ?>

    <?php
    $id = $_GET["id"];
    $noticia = $noticias[$id];

    ?>

 <div class="container">
    <h1> <?php echo $noticia['titulo']; ?> </h1>
    <hr>
    <img src="<?php echo $noticia['foto']; ?>" class="" />
    <p> <?php echo $noticia['materia']; ?> </p>
</div>

>>>>>>> 4aaf6c803af6bf80951f4fc105c91637df04699f
<?php include_once "rodape.php"; ?>