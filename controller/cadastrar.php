<?php
  include "../model/Usuario.php";
  
  $servername = "localhost";
  $dbname = "tradebook";
  $username = "lucas";
  $password = "felinto";
  
  $messageSucess = ["sucess" => "Usuario criado com sucesso"];
  $messageErro = ["erro" => "E-mail já cadastrado"];

  $usuario = new Usuario($servername, $dbname, $username, $password);
  
  if($usuario->verificaUsuarioExiste($_POST["email"])) {
    $usuario->cadastrar($_POST["nome"], $_POST["email"], $_POST["telefone"], $_POST["senha"]);
    echo json_encode($messageSucess);
    http_response_code(201);
  } else {
    echo json_encode($messageErro);
  }
