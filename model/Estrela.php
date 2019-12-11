<?php
  require_once "../config/Conexao.php";

class Estrela {

    public function avaliar($estrela, $livroId, $usuarioId) {
      $con = Connection::getConn();
      $query = $con->prepare("INSERT INTO AVALIACAO (VOTOS, PONTOS, ID_LIVRO, ID_USUARIO)
        VALUES (:VOTOS, :PONTOS, :USUARIO, :LIVRO)");
      $query->bindValue(":VOTOS", $estrela);
      $query->bindValue(":LIVRO", $livroId);
      $query->bindValue(":USUARIO", $usuarioId);
      $query->execute();
    }

    public function buscarAvaliacao($id) {
      $con = Connection::getConn();
      $query = $con->prepare("SELECT * FROM AVALIACAO WHERE ID = ?");
      $query->execute(array($idLivro));
      while($row = $query->fetchObject()){
        $calculo = ($row->pontos == 0) ? 0 : round(($row->PONTOS/$row->VOTOS), 1);
      }
    }
}