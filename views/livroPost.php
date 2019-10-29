<?php
	include "../model/Livro.php";
  $livro = new Livro(); 
  $id = $_GET["id"];
  $data = $livro->buscaLivroEspecifico($id);

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <?php include "../components/header.php" ?>
  <link rel="stylesheet" type="text/css" href="../css/descriplivros.css">
<body>

  <?php include "../components/menu-top.php" ?>


  <div class="book__description">
    <img class="exemplodelivros" src="<?= $data['IMAGEM'] ?>" alt="">
    <div class="description">
	    <h1><?= $data["NOME"] ?></h1>
      <h2>Autor: <?= $data["AUTOR"] ?></h2>
      <h2>Idioma: <?= $data["IDIOMA"] ?></h2>
      <h2>Descrição: <?= $data["DESCRICAO"] ?></h2>
    </div>
  </div>
  <?php include "../components/footer.php"; ?>
</body>
</html> 