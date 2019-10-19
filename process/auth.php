<?php
include 'init.php';
$email = $_POST['email'];
$pwd = $_POST['senha'];

$usuarios = file('../csv/dados.csv');
foreach($usuarios as $usuario) {
    $usuarioData = explode(',', $usuario);
    // var_dump($usuarioData, $email, $pwd);
    if (trim($usuarioData[2]) == $email && trim($usuarioData[3]) == $pwd) {
    	header('location: ../index-logado.php');
    	exit();
    	
    }
    else{
    	
    }
 }
header('location: ../cadastro.php');
        //login($usuarioData[0], $usuarioData[2]);
        //break;
?>