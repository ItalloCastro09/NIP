<?php 
$nome = $_POST['nome'];
$fone = $_POST['telefone'];
$email = $_POST['e-mail'];
$pwd = $_POST['senha'];
?>

<?php 
$dados= join(',', [$nome, $fone, $email, $pwd]) . "\n";
$handle= fopen('../csv/dados.csv' , 'a');
fwrite( $handle , $dados);
header('location: ../cadastro.php');
?>