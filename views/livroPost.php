<?php
  session_start();
	include "../model/Livro.php";
  include "../model/Estrela.php";
  $livro = new Livro();
  $id = $_GET["id"];
  $data = $livro->buscaLivroEspecifico($id);
  $nome = $livro->buscarNome($data["USUARIO_ID"]);
  $estrelas = $livro->buscarAvaliacao($data["AVALIACAO_ID"]);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <?php include "../components/header.php" ?>
  <link rel="stylesheet" type="text/css" href="../css/descriplivros.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

  <?php include "../components/menu-top.php" ?>
  <?php if (isset($_GET["msg"])): ?>
    <div class="msg"><?= $_GET["msg"] ?></div>
  <?php endif ?>

  <div class="container">
    <div class="book-img">
      <img src="<?= $data['IMAGEM'] ?>" alt="">
    </div>
    <div class="book-info">
      <div>
        <h1 class="box"><?= $data["NOME"] ?></h1>
        <h1 class="box"><span><?= $data["AUTOR"] ?></span></h1>
        <form class="box" method="POST" action="../controller/avaliar.php" enctype="multipart/form-data">
          <h1><span>Avalie</span></h1>
          <div class="estrelas">
            <input type="radio" id="vazio" name="estrela" value="" checked>
            <label for="estrela_um"><i class="fa"></i></label>
            <input type="radio" id="estrela_um" name="estrela" value="1">

            <label for="estrela_dois"><i class="fa"></i></label>
            <input type="radio" id="estrela_dois" name="estrela" value="2">

            <label for="estrela_tres"><i class="fa"></i></label>
            <input type="radio" id="estrela_tres" name="estrela" value="3">

            <label for="estrela_quatro"><i class="fa"></i></label>
            <input type="radio" id="estrela_quatro" name="estrela" value="4">

            <label for="estrela_cinco"><i class="fa"></i></label>
            <input type="radio" id="estrela_cinco" name="estrela" value="5">

            <input type="hidden" name="usuarioId" value="<?=$nome["ID"]?>">
            <input type="hidden" name="livroId" value="<?=$data["ID"]?>">

            <input type="submit" value="Avaliar">

          </div>
        </form>
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

