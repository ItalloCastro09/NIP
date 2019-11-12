<?php
  include "../model/Livro.php";

  $livro = new Livro();
  $data = $livro->buscaLivroEspecifico($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="en">
  <?php include "../components/header.php" ?>
<body>
  <?php include "../components/menu-top.php" ?>

	<link rel="stylesheet" href="../css/message.css">

  <?php if(isset($_GET["msg"])) : ?>
		<div class="message"><?= $_GET["msg"] ?></div>
	<?php endif ?>

  <form style="margin-top: 140px" class="form" action="/controller/updateLivro.php" enctype="multipart/form-data" method="POST">
    <h1>Alterar informações</h1>
    <label class="form__label"for="nome">Nome:</label>
    <input class="form__input" required type="text" value="<?=$data["NOME"]?>" id="nome" name="nome">
    <label class="form__label"for="nome">Autor:</label>
    <input class="form__input " required type="text" value="<?=$data["AUTOR"]?>" name="autor">
    <label class="form__label"for="nome">Idioma:</label>
    <input class="form__input" required type="text" value="<?=$data["IDIOMA"]?>" name="idioma">
    <label class="form__label"for="nome">Descrição</label>
    <input class="form__input" required type="text" name="descricao" value="<?=$data["DESCRICAO"]?>">
    <label class="form__label"for="nome">Número de paginas:</label>
    <input class="form__input" required type="number" name="pagina" value="<?=$data["PAGINA"]?>">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <input type="submit" value="Upload"/>
  </form>

  <?php include "../components/footer.php" ?>
	<script src="../js/scrollMenuEfect.js"></script>
</body>
</html>


<?php 
  // print_r($_GET['id']);
  print_r($data);

?>