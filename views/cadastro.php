<!DOCTYPE html>
<html>
<?php include "../components/header.php"?>
<body>
	<?php include "../components/menu-top.php" ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="../css/message.css">
	<link rel="stylesheet" type="text/css" href="../css/cadastroelogin.css">
	        
	<?php if(isset($_GET["message"])) : ?>
		<div class="message"><?= $_GET["message"] ?></div>
	<?php endif ?>

	<div class="display">
		<div class="container" id="container">
			<div class="form-container sign-in-container">
				<form action="/controller/login.php" method="POST" class="formuser" data-form="login">
					<h1 class="tt">Entrar</h1>
					<legend class="lg">E-mail</legend>
					<input type="email" name="email" placeholder="Ex: mario@gmail.com">
					<legend class="lg">Senha</legend>
					<input type="password" name="senha" placeholder="••••••••">
					<a href="#">Esqueceu a senha?</a>
					<button>Entrar</button>	
				</form>
			</div>

				<div class="form-container sign-up-container" >
				<form action="/controller/cadastrar.php" method="POST" class="formuser" data-form="cadastrar">
					<h1 class="tt">Cadastro</h1>
					<legend class="lg">Nome</legend>
					<input class="ip" type="text" name="nome">
					<legend class="lg">Sobrenome</legend>	
					<input class="ip" type="text" name="sobrenome">
					<legend class="lg">Telefone</legend>
					<input class="ip" type="number" name="telefone">
					<legend class="lg">E-mail</legend>
					<input class="ip" type="email" name="email" placeholder="Ex: mario@gmail.com">
					<legend class="lg">Senha</legend>
					<input class="ip" type="password" name="senha" placeholder="••••••••">
					<legend class="lg">Confirmar Senha</legend>
					<input class="ip" type="password" name="confirmarSenha" placeholder="••••••••">
					<button class="bt">Cadastrar</button>
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
	
		<?php include "../components/footer.php" ?>
		<script src="../js/scrollMenuEfect.js"></script>
		<script src="../js/cel.js"></script>
		<script src="../js/validaInputCadastro.js"></script>	
</body>
</html>
