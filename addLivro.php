<?php
  session_start(); 
  $id = $_SESSION["id_usuario"];
  if(!isset($id)){
    header("Location: /index.php");
    exit();
  }
?>


<!DOCTYPE html>
<html lang="pt-BR">
	<?php include "components/header.php" ?>
	<body>
		<?php include "components/menu-top.php" ?>


    <form class="form" action="/controller/addLivro.php" enctype="multipart/form-data" method="POST">
      <h1>Cadastre seu livro</h1>
      <input class="form__input" type="text" name="nome">
      <input class="form__input" type="text" name="autor">
      <input class="form__input" type="text" name="idioma">
      <input class="form__input" type="text" name="descricao">
      <input class="form__input" type="number" name="pagina">
      <input type="hidden" name="usuarioId" value="<?=$_SESSION["id_usuario"]["ID"]?>">
      Choose Image : <input name="img" size="35" type="file"/><br/>
      <input type="submit" name="submit" value="Upload"/>
    </form>


		</section>
	


    <script src="js/scrollMenuEfect.js"></script>
    <!--<script src="js/enviarLivro.js"></script>-->
    <?php include "components/footer.php" ?>
	</body>
</html>
