<?php
  include "../model/Usuario.php";

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = md5($_POST["senha"]);
  $telefone = $_POST["telefone"];
  

  $usuario = new Usuario();
  
  if($usuario->verificaUsuarioExiste($_POST["email"])) {
    $usuario->cadastrarUsuario($nome, $email, $senha, $telefone);
    echo json_encode(["message" => "cadastrado com sucesso"]);
  } else {
    echo json_encode(["message" => "usuario já cadastrado"]);
  }
