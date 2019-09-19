<?php
$email = $_POST['e-mail'];
$pwd = $_POST['senha'];

$usuarios = file('dados.csv');
foreach($usuarios as $usuario) {
    $usuarioData = explode(',', $usuario);
    if (trim($usuarioData[2]) == $email && trim($usuarioData[3]) == $pwd) {
    	header('location: index.php');
    }
    else{
    	header('location: cadastro.php');
    }
        //login($usuarioData[0], $usuarioData[2]);
        //break;
?>