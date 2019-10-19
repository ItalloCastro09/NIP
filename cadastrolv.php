<?php include 'process/init.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<title>Cadastro de Livros</title>
</head>
<body>
	
	<form action="addlv.php" method="POST">
		<legend>Cadastro dos Livros</legend>
		<input type="text" name="nome" placeholder="Nome do Livro">
		<input type="text" name="autor" placeholder="Autor">
		<input type="text" name="idioma" placeholder="Idioma">
		<input type="text" name="descricao" placeholder="Descrição do Livro">
		<button>Cadastrar</button>

	</form> 
	

</body>
</html>