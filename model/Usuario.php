<?php
  require_once "../config/Conexao.php";

  class Usuario {

    public function cadastrarUsuario($nome, $sobrenome, $email, $senha, $telefone) {
      $con = Connection::getConn();
      $query = $con->prepare("INSERT INTO USUARIO (NOME, SOBRENOME, EMAIL, SENHA, TELEFONE)
        VALUES (:NOME, :SOBRENOME, :EMAIL, :SENHA, :TELEFONE)");
      $query->bindValue(":NOME", $nome);
      $query->bindValue(":SOBRENOME", $sobrenome);
      $query->bindValue(":EMAIL", $email);
      $query->bindValue(":SENHA", $senha);
      $query->bindValue(":TELEFONE", $telefone);
      $query->execute();
    }

    public function verificaUsuarioExiste($email) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT ID FROM USUARIO WHERE EMAIL = :EMAIL");
      $query->bindValue(":EMAIL", $email);
      $query->execute();

      if($query->rowCount() > 0) return false;
      return true;
    }

    public function login($email, $senha) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT * FROM USUARIO WHERE EMAIL = :EMAIL AND SENHA = :SENHA");
      $query->bindValue(":EMAIL", $email);
      $query->bindValue(":SENHA", $senha);
      $query->execute();

      if ($query->rowCount() > 0) {
        $data = $query->fetch();
        session_start();
        $_SESSION["id_usuario"] = $data;
        print_r($_SESSION["id_usuario"]);
        return true;
      }

      return false;
    }

    public function update($id, $nome, $sobrenome, $email, $senha, $telefone) {
      $con = Connection::getConn();
      $query = $con->prepare("UPDATE USUARIO
      SET NOME = :nome, SOBRENOME = :sobrenome, EMAIL = :email, SENHA = :senha, TELEFONE = :telefone WHERE id = :id");
      $query->bindValue(":id", $id);
      $query->bindValue(":nome", $nome);
      $query->bindValue(":sobrenome", $sobrenome);
      $query->bindValue(":email", $email);
      $query->bindValue(":senha", $senha);
      $query->bindValue(":telefone", $telefone);
      $query->execute();

      $this->login($email, $senha);
    }

    public function troca($idInteresse, $idMeuLivro) {
      $con = Connection::getConn();
      $query = $con->prepare("INSERT INTO TROCA (MEU_LIVRO, INTERESSE_LIVRO) VALUES (:idInteresse, :idMeuLivro)");
      $query->bindValue(":idInteresse", $idInteresse);
      $query->bindValue(":idMeuLivro", $idMeuLivro);
      $query->execute();
    }

    public function notificarUsuario($idInteresse, $idMeuLivro) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT MEU_LIVRO, INTERESSE_LIVRO FROM TROCA WHERE MEU_LIVRO = :idMeuLivro AND INTERESSE_LIVRO = :idInteresse");
      $query->bindValue("idMeuLivro", $idMeuLivro);
      $query->bindValue("idInteresse", $idInteresse);
      $query->execute();
    }
  }
