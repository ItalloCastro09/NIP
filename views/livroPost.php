<?php
  session_start();
	include "../model/Livro.php";
  $livro = new Livro();
  $id = $_GET["id"];
  $data = $livro->buscaLivroEspecifico($id);
  $nome = $livro->buscarNome($data["USUARIO_ID"]);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <?php include "../components/header.php" ?>
  <link rel="stylesheet" type="text/css" href="../css/descriplivros.css">
<body>

  <?php include "../components/menu-top.php" ?>

  <div class="container">
    <div class="book-img">
      <img src="<?= $data['IMAGEM'] ?>" alt="">
    </div>
    <div class="book-info">
      <div>
        <h1 class="box"><?= $data["NOME"] ?></h1>
        <h1 class="box"><span><?= $data["AUTOR"] ?></span></h1>
      </div>
      <div class="descricao box">
        <p><?= $data["DESCRICAO"] ?></p>
      </div>
      <a class="btn-int" href="/views/troca.php?id=<?=$data[0]?>&livroNome=<?=$data["NOME"]?>">Tenho interesse</a>
    </div>
 
  </div>

  <!-- <div class="container">
    <div class="post">
      <img src="<?= $data['IMAGEM'] ?>" alt="">
      <h1><?= $data["NOME"] ?>, <?= $data["AUTOR"] ?></h1>
      <h1><?= $data["IDIOMA"] ?></h1>
      <p><?= $data["DESCRICAO"] ?></p>
      <h1>Enviador por: <?=$nome["NOME"]?></h1>
      <?php if($data["USUARIO_ID"] != $_SESSION["id_usuario"]["ID"]) : ?>
      <?php endif  ?>      
        <div>
      </div>
    </div>
  </div> -->

  <?php include "../components/footer.php"; ?>
</body>
</html>

