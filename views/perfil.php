<!DOCTYPE html>
<html lang="en">
  <?php include "../components/header.php" ?>
<body>
  <?php include "../components/menu-top.php" ?>
  <form class="form" action="/controller/updatePerfil.php" enctype="multipart/form-data" method="POST">
    <h1>Alterar informações</h1>
    <label class="form__label"for="nome">Nome:</label>
    <input class="form__input" type="text" value="<?=$_SESSION["id_usuario"]["NOME"]?>" id="nome" name="nome">
    <label class="form__label"for="nome">Sobrenome:</label>
    <input class="form__input " type="text" value="<?=$_SESSION["id_usuario"]["SOBRENOME"]?>" name="sobrenome">
    <label class="form__label"for="nome">Email:</label>
    <input class="form__input" type="text" value="<?=$_SESSION["id_usuario"]["EMAIL"]?>" name="email">
    <label class="form__label"for="nome">Senha antiga:</label>
    <input class="form__input" type="password" name="senhaAntiga">
    <label class="form__label"for="nome">Nova senha:</label>
    <input class="form__input" type="password" name="senha">
    <label class="form__label"for="nome">Repete a senha:</label>
    <input class="form__input" type="password" name="senha2">
    <label class="form__label"for="nome">Telefone:</label>
    <input class="form__input" type="number" value="<?=$_SESSION["id_usuario"]["TELEFONE"]?>" name="telefone">
    <input type="hidden" name="usuarioId" value="<?=$_SESSION["id_usuario"]["ID"]?>">
    <input type="submit" value="Upload"/>
  </form>

  <?php include "../components/footer.php" ?>
	<script src="../js/scrollMenuEfect.js"></script>
</body>
</html>
