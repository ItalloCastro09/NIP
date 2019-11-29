<?php
  require_once "../model/Usuario.php";
  
  $idInteresse = $_POST["idInteresse"];
  $idMeuLivro = $_POST["idMeuLivro"];
  
  $usuario = new Usuario();
  $usuario->troca($idInteresse, $idMeuLivro);
  