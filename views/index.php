<?php
	include "../model/Livro.php";
	$livro = new Livro();
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<?php include "../components/header.php" ?>
	<body>
		<?php include "../components/menu-top.php" ?>

		<div>
			<section class="book-box">
				<?php foreach($livro->listarTodosLivros() as $dataLivros ): ?>
				<div class="book" >
					<div class="book__img">
						<a href="/views/livroPost.php?id=<?= $dataLivros['ID'] ?>">
							<img src="<?= $dataLivros["IMAGEM"] ?>" alt="">
						</a>
					</div>
					<a href="/views/livroPost.php?id=<?= $dataLivros['ID'] ?>">
						<h1 class="book__title" ><?= $dataLivros["NOME"] ?></h1>
					</a>

				
		
					<!-- <a href="/views/livroPost.php?id=<?= $dataLivros['ID'] ?>" class="book">
						<img class="book__img" src="<?= $dataLivros["IMAGEM"] ?>" alt="">
						<div class="book__paragraph">
							<h1 class="heading-logo heading-logo--white"><?= $dataLivros["NOME"] ?></h1>
						</div>
					</a> -->
				</div>
				<?php endforeach ?>
			</section>
		</div>


		<section class="hero">
			<p> “A doação é um exercício de desapego.<br /> Ela deve beneficiar mais quem doa do<br /> que quem recebe.”</p>
		</section>


	<?php include "../components/footer.php" ?>
	<script src="../js/scrollMenuEfect.js"></script>
	</body>
</html>
