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
    <div class="post">
      <img src="<?= $data['IMAGEM'] ?>" alt="">
      <h1><?= $data["NOME"] ?>, <?= $data["AUTOR"] ?></h1>
      <h1><?= $data["IDIOMA"] ?></h1>
      <p><?= $data["DESCRICAO"] ?></p>
      <h1>Enviador por: <?=$nome["NOME"]?></h1>
      <?php if($data["USUARIO_ID"] != $_SESSION["id_usuario"]["ID"]) : ?>
        <h1><a href="/views/troca.php?id=<?=$data[0]?>&livroNome=<?=$data["NOME"]?>">Tenho interesse</a></h1>
      <?php endif  ?>      
        <div>
      </div>
    </div>
  </div>

  <!-- <div class="book__description">
    <img class="exemplodelivros" src="" alt="">
    <div class="description">
	    <h1></h1>
      <h2>Autor: </h2>
      <h2>Idioma: </h2>
      <h2>Descrição: <?= $data["DESCRICAO"] ?></h2>
      <a href="/interesse.php/?id=<?=$data[0]?>&userId=<?=$userId?>">Tenho interesse</a>
    </div>
  </div> -->
  <?php include "../components/footer.php"; ?>
</body>
</html>


<pre>

  <?php
    print_r($data["NOME"]);
  ?>
</pre>