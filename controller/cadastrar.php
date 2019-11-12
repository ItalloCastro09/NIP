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

  if($_POST["senha"] != $_POST["confirmarSenha"]) {
    header("Location: /views/cadastro.php?message=Senhas não coincidem.");
   exit();
  }

  if (!empty($email) && !empty($senha) && !empty($nome) && !empty($sobrenome) && !empty($telefone) && !empty($confirmarSenha) ) {
    if($usuario->verificaUsuarioExiste($_POST["email"])) {
      $usuario->cadastrarUsuario($nome, $sobrenome, $email, $senha, $telefone);
      $usuario->login($email, $senha);
      header("Location: /views/index.php");
    } else {
      header("Location: /views/cadastro.php?message=Usuario já cadastrado.");
    }
  } else {
    header("Location: /views/cadastro.php?message=Preencha todos os campos.");
  }
