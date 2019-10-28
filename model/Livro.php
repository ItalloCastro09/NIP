<?php
  require_once "../config/Conexao.php";

  class Livro {
    
    public function cadastrar($nome, $autor, $idioma, $descricao, $pagina, $usuarioId, $imagem) {
      $con = Connection::getConn();
      $query = $con->prepare("INSERT INTO LIVRO (NOME, AUTOR, IDIOMA, DESCRICAO, PAGINA, IMAGEM, USUARIO_ID)
        VALUES (:NOME, :AUTOR, :IDIOMA, :DESCRICAO, :PAGINA, :IMAGEM, :USUARIO)");
      $query->bindValue(":NOME", $nome);
      $query->bindValue(":AUTOR", $autor);   
      $query->bindValue(":IDIOMA", $idioma);   
      $query->bindValue(":DESCRICAO", $descricao);   
      $query->bindValue(":PAGINA", $pagina);   
      $query->bindValue(":USUARIO", $usuarioId);   
      $query->bindValue(":IMAGEM", $imagem);   
     $query->execute();
      
  }


}