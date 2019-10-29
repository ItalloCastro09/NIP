<?php
  require_once "../model/Livro.php";

  $livro = new Livro();
  
  $idUsuario = $_GET["idUsuario"];
  $id = $_GET["id"];

  $livro->apgarLivro($idUsuario, $id);
  header("Location: /views/listLivro.php");