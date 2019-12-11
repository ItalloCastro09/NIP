<?php

	require_once '../model/Estrela.php';
	$estrelas = new Estrela();

	$estrela = $_POST['estrela'];
	$livroId = $_POST['livroId'];
	$usuarioId = $_POST['usuarioId'];


	/*if(!empty($_POST['estrela'])){
		$estrela = $_POST['estrela'];
		header("Location: ../views/livroPost.php?msg=Avaliado com sucesso.");
	} else {
		header("Location: ../views/livroPost.php?msg=Necessário selecionar pelo menos 1 estrela.");
	}*/