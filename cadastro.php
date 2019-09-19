<!DOCTYPE html>
<html>
<?php include "components/header.php"?>
<body>
	<?php include "components/menu-top.php" ?>

	<form action="process/auth.php" method="POST" class="formuser">
		<fieldset>
			<legend>Entrar</legend>
			E-mail:<br>
			<input type="email" name="e-mail"><br>
			Senha:<br>
			<input type="password" name="senha"><br>
			<input type="submit" value="Entrar">
		</fieldset>	
	</form>

	<form action="process/armazenado.php" method="POST" class="formuser">
		<fieldset>
			<legend>Cadastro</legend>
			Nome:<br>
			<input type="text" name="nome"><br>
			Telefone:<br>
			<input type="number" name="telefone"><br>
			E-mail:<br>
			<input type="email" name="e-mail"><br>
			Senha:<br>
			<input type="password" name="senha"><br>
			<input type="submit" value="Cadastrar">
		</fieldset> 
	</form>
		<script src="js/scrollMenuEfect.js"></script>
</body>
</html>
