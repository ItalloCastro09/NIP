<?php
  session_start();
  include "../model/Usuario.php";

  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $email = $_POST["email"];
  $senha = md5($_POST["senha"]);
  $confirmarSenha = $_POST["confirmarSenha"];
  $telefone = $_POST["telefone"];
  

  $usuario = new Usuario();

  if($senha != $confirmarSenha) {
    header("Location: /cadastro.php?message=Senhas nao coincidem.");
  }

  if (!empty($email) && !empty($senha) && !empty($nome) && !empty($sobrenome) && !empty($telefone) && !empty($confirmarSenha) ) {
    if($usuario->verificaUsuarioExiste($_POST["email"])) {
      $usuario->cadastrarUsuario($nome, $sobrenome, $email, $senha, $telefone);
      $usuario->login($email, $senha);
      header("Location: /index.php");
    } else {
      header("Location: /cadastro.php?message=Usuario já cadastrado.");
    }
  } else {
    header("Location: /cadastro.php?message=Preencha todos os campos.");
  }
  
 