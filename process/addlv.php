<?php
include 'init.php';
$nomeuser = $_SESSION['nome']; 
$nome = $_POST['nome'];
$autor = $_POST['autor'];
$idioma = $_POST['idioma'];
$descricao = $_POST['descricao'];

$dados = join(',', [$nome, $autor, $idioma, $descricao]);
$handle =  fopen('guardado.csv','a');
fwrite($handle, $dados);
header('location: ');		
 ?>
