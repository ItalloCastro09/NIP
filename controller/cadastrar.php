<?php
  include "../model/Usuario.php";

  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $email = $_POST["email"];
  $senha = md5($_POST["senha"]);
  $confirmarSenha = $_POST["confirmarSenha"];
  $telefone = $_POST["telefone"];
  

  $usuario = new Usuario();


  
  if($usuario->verificaUsuarioExiste($_POST["email"])) {
    $usuario->cadastrarUsuario($nome, $sobrenome, $email, $senha, $telefone);
    echo json_encode(["message" => "cadastrado com sucesso"]);
    http_response_code(201);
  } else {
    echo json_encode(["message" => "usuario já cadastrado"]);
  }
