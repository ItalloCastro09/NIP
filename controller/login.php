<?php
  require_once "../model/Usuario.php";
  $email = $_POST["email"];
  $senha = md5($_POST["senha"]);

  $usuario = new Usuario();
  
  if (!empty($email) && !empty($senha)) {
    if ($usuario->login($email, $senha)) {
      echo json_encode(["message" => "entrou"]); 
      header("Location: /index.php");
    } else {
      header("Location: /cadastro.php?message=E-mail ou senha inválidos.");
    }
  } else {
    header("Location: /cadastro.php?message=Preencha todos os campos.");
  }