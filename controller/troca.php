<?php
  require_once "../model/Usuario.php";
  
  $idInteresse = $_POST["idInteresse"];
  $idMeuLivro = $_POST["idMeuLivro"];
  
  $usario = new Usuario();
  $usario->troca($idInteresse, $idMeuLivro);
  