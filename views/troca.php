<?php
  session_start();
  require_once "../model/Livro.php";

  $livro = new Livro();

  ?>

<!DOCTYPE html>
<html lang="pt-BR">
  <?php include "../components/header.php" ?>
  <link rel="stylesheet" type="text/css" href="../css/descriplivros.css">
<body>

  <?php include "../components/menu-top.php" ?>

  
  <form action="/controller/troca.php" method="POST" style="margin: 200px">
    <label for="">
      <h1>Selecione um livro</h1>
      <select name="idMeuLivro" id="">
      <?php foreach($livro->todosLivrosUsuario($_SESSION["id_usuario"]["ID"]) as $data): ?>
        <option value=<?=$data["ID"]?>><?=$data["NOME"]?></option>
      <?php endforeach ?>
      </select>
    </label>
    <input type="text" name="<?=$_GET["id"]?>" value="<?=$_GET["livroNome"]?>" disabled>
    <input type="hidden" name="idInteresse" value="<?=$_GET["id"]?>">
    <input type="submit">
  </form>

  <?php include "../components/footer.php"; ?>
</body>
</html>


<pre>

<?php
  print_r($_SESSION);
?>
</pre>