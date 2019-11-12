<?php
  include "../model/Livro.php";
  $id = $_POST["id"];
  $nome = $_POST["nome"];
  $autor = $_POST["autor"];
  $idioma = $_POST["idioma"];
  $descricao = $_POST["descricao"];
  $pagina = $_POST["pagina"];
  
  
  
  
  $livro = new Livro();
  $livro->update($id, $nome, $autor, $idioma, $descricao, $pagina);
  header("Location: /views/listLivro.php");