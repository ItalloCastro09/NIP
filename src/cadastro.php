<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Usuário</title>
</head>
<body>
	<form action="process/armazenado.php" method="POST">
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