<?php
  require_once "../model/Usuario.php";
  $email = $_POST["email"];
  $senha = md5($_POST["senha"]);

  $usuario = new Usuario();

  if (!empty($email) && !empty($senha)) {
    if ($usuario->login($email, $senha)) {
      http_response_code("202");
      echo json_encode(["message" => "entrou"]); 
     // header("Location: /index.php");    
    } else {
      echo json_encode(["message" => "Usuario não exisite"]);
    }
  } else {
    echo json_encode(["message" => "Preencha todos os campos"]);
  }