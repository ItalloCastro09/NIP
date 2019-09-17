<!DOCTYPE html>
<html>
<?php include "components/header.php"?>
<body>
	<?php include "components/menu-top.php" ?>
	<form action="process/armazenado.php" method="POST" class="formuser">
		<fieldset>
			<legend>Cadastro</legend>
			Nome:<br>
			<input type="text" name="nome"><br>
			Telefone:<br>
			<input type="phone" name="telefone"><br>
			E-mail:<br>
			<input type="email" name="e-mail"><br>
			Senha:<br>
			<input type="password" name="senha"><br>
			<input type="submit" value="Cadastrar">
		</fieldset> 
	</form>

</body>
</html>