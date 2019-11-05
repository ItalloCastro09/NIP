<?php
	include "../model/Livro.php";
	$livro = new Livro();
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<?php include "../components/header.php" ?>
	<body>
		<?php include "../components/menu-top.php" ?>
		
		<section class="book-box">
			<h1 class="lv">Livros Disponíveis</h1>
			<?php foreach($livro->listarTodosLivros() as $dataLivros ): ?>
				<a href="/views/livroPost.php?id=<?= $dataLivros['ID'] ?>" class="book">
					<img class="book__img" src="<?= $dataLivros["IMAGEM"] ?>" alt="">
					<div class="book__paragraph">
						<h1 class="heading-logo heading-logo--white"><?= $dataLivros["NOME"] ?></h1>
					</div>
				</a>
			<?php endforeach ?>
		</section>
	

		<section class="hero">
			<p> “A doação é um exercício de desapego.<br /> Ela deve beneficiar mais quem doa do<br /> que quem recebe.”</p>
		</section>


	<?php include "../components/footer.php" ?>
	<script src="../js/scrollMenuEfect.js"></script>
	</body>
</html>
