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
      $query->bindValue(":IMAGEM", $imagem);
      $query->bindValue(":DESCRICAO", $descricao);
      $query->bindValue(":PAGINA", $pagina);
      $query->bindValue(":USUARIO", $usuarioId);
      $query->execute();
    }

    public function listarTodosLivros() {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT * FROM LIVRO");
      $query->execute();
      return $query->fetchAll();
    }

    public function buscaLivroEspecifico($id) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT * FROM LIVRO WHERE ID = :ID");
      $query->bindValue(":ID", $id);
      $query->execute();
      return $query->fetch();
    }

    public function todosLivrosUsuario($id) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT * FROM LIVRO WHERE USUARIO_ID = :ID");
      $query->bindValue(":ID", $id);
      $query->execute();
      return $query->fetchAll();
    }

    public function apgarLivro($usuarioId, $id) {
      $con = Connection::getConn();
      $query = $con->prepare("DELETE FROM LIVRO WHERE USUARIO_ID = :USUARIO_ID AND ID = :ID");
      $query->bindValue(":USUARIO_ID", $usuarioId);
      $query->bindValue(":ID", $id);
      $query->execute();
    }

    public function buscarNome($id) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT NOME FROM USUARIO WHERE ID = :ID");
      $query->bindValue(":ID", $id);
      $query->execute();
      return $query->fetch();
    }

    public function update($id, $nome, $autor, $idioma, $descricao, $pagina) {
      $con = Connection::getConn();
      $query = $con->prepare("UPDATE LIVRO
      SET NOME = :nome, AUTOR = :autor, IDIOMA = :idioma, DESCRICAO = :descricao, PAGINA = :pagina WHERE id = :id");
      $query->bindValue(":id", $id);
      $query->bindValue(":nome", $nome);
      $query->bindValue(":autor", $autor);
      $query->bindValue(":idioma", $idioma);
      $query->bindValue(":descricao", $descricao);
      $query->bindValue(":pagina", $pagina);
      $query->execute();
    }
  }
