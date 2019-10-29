<?php
  session_start(); 
  
  if(!isset($_SESSION["id_usuario"])){
    header("Location: /views/index.php");
    exit();
  }

  require_once "../model/Livro.php";
  $idUsuario = $_SESSION["id_usuario"]["ID"];
  $livro = new Livro();

?>


<!DOCTYPE html>
<html lang="pt-BR">
	<?php include "../components/header.php" ?>
  <link rel="stylesheet" href="../css/tabela.css">
  <body>
		<?php include "../components/menu-top.php" ?>

    <section class="tabela-container">
      <table>
        <tr>
          <th>Nome</th>
          <th>Remover</th>
        <?php foreach($livro->todosLivrosUsuario($idUsuario) as $data): ?>
          </tr>
            <td><?= $data["NOME"] ?></td>
            <td><a href="/controller/deletarLivro.php?idUsuario=<?= $idUsuario ?>&id=<?= $data["ID"] ?>">Remover</a></td>
          </tr>
        <?php endforeach ?>
      </table> 
    </section>

    <script src="../js/scrollMenuEfect.js"></script>
    <!--<script src="js/enviarLivro.js"></script>-->
    <?php include "../components/footer.php" ?>
	</body>
</html>


