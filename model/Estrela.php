<?php
  require_once "../config/Conexao.php";

class Estrela {

    public function avaliar($estrela, $livroId, $usuarioId) {
      $con = Connection::getConn();
      $query = $con->prepare("INSERT INTO AVALIACAO (QNT_ESTRELAS, CREATED, ID_LIVRO, ID_USUARIO)
        VALUES (:QNT_ESTRELAS, :CREATED, :USUARIO, :LIVRO)");
      $query->bindValue(":QNT_ESTRELAS", $estrela);
      $query->bindValue(":LIVRO", $livroId);
      $query->bindValue(":CREATED", NOW());
      $query->bindValue(":USUARIO", $usuarioId);
      $query->execute();
    }

    public function buscarAvaliacao($id) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT QNT_ESTRELAS FROM AVALIACAO WHERE ID = :ID");
      $query->bindValue(":ID", $id);
      $query->execute();
      return $query->fetch();
    }
}