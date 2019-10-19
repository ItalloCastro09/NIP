<!DOCTYPE html>
<html>
<?php include "components/header.php"?>
<body>
	<?php include "components/menu-top.php" ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/cadastroelogin.css">

	<div class="display">
		<div class="container" id="container">
			<div class="form-container sign-in-container">
				<form action="/controller/login.php" method="POST" class="formuser">
					<h1>Entrar</h1>
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="senha" placeholder="Senha">
					<a href="#">Esqueceu a senha?</a>
					<button>Entrar</button>	
				</form>
			</div>

			<div class="form-container sign-up-container">
				<form action="/controller/cadastrar.php" method="POST" class="formuser">
					<h1>Cadastro</h1>
					<input type="text" name="nome" placeholder="Nome">
					<input type="number" name="telefone" placeholder="Telefone">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="senha" placeholder="Senha">
					<input type="password" name="confirmarSenha" placeholder="Confirmar Senha">
					<button>Cadastrar</button>
				</form>
			</div>

				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-left">
							<h1>Já Tem Uma Conta?</h1>
							<p>
								Clique abaixo para Entrar.
							</p>
							<button class="ghost" id="signIn">Entrar</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h1>Não Tem Uma Conta?</h1>
							<p>
								Clique abaixo para Cadastrar.
							</p>
							<button class="ghost" id="signUp">Cadastro</button>
						</div>
					</div>
				</div>
		</div> 
	</div>
	
		<?php include "components/footer.php" ?>
		<script src="js/scrollMenuEfect.js"></script>
		<script src="js/cel.js"></script>
		<script src="js/validaInputCadastro.js"></script>	
</body>
</html>
