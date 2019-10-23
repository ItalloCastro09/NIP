<?php
  include "../model/Usuario.php";

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = md5($_POST["senha"]);
  $telefone = $_POST["telefone"];
  
  $messageSucess = ["sucess" => "Usuario criado com sucesso"];
  $messageErro = ["erro" => "E-mail já cadastrado"];

  $usuario = new Usuario();
  
  if($usuario->verificaUsuarioExiste($_POST["email"])) {
    $usuario->cadastrarUsuario($nome, $email, $senha, $telefone);
    echo json_encode($messageSucess);
    print_r($_POST);
    http_response_code(201);
    header("Location: /index.php");
  } else {
    echo json_encode($messageErro);
    header("Location: /index.php");

  }
