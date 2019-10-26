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
		
    <section style="padding-top: 200px;">

      <form action="" data-form="">
        <label for="">Nome
          <input type="text" name="nome"> 
        </label>
        
        <label for="">Autor
          <input type="text" name="autor">
        </label>

        <label for="">Idioma
          <input type="text" name="idioma">
        </label>

        <input type="file" name="image" id="" class="file">

        <input type="hidden" name="usuarioId" value="<?=$_SESSION["id_usuario"]["ID"]?>">
        <input type="submit" value="enviar">
      
      </form>


		</section>
	


    <script src="js/scrollMenuEfect.js"></script>
    <script src="js/enviarLivro.js"></script>
    <?php include "components/footer.php" ?>
	</body>
</html>
