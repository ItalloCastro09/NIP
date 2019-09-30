<?php
  class Usuario {
    private $pdo;
  
    public function __construct($serverName, $dbName, $username, $password) {
      try {
        $this->pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
      } catch (PDOException $e) {
        echo "Erro banco de dados {$e->getMessage}";
      }
    }

    public function cadastrar($nome, $email, $senha, $telefone) {
      $consulta = $this->pdo->prepare("INSERT INTO TB_USUARIO (US_NOME, US_EMAIL, US_SENHA, US_TELEFONE)
        VALUES (:NOME, :EMAIL, :SENHA, :TELEFONE)");
      $consulta->bindValue(":NOME", $nome);
      $consulta->bindValue(":EMAIL", $email);
      $consulta->bindValue(":SENHA", $senha);
      $consulta->bindValue(":TELEFONE", $telefone);
      $consulta->execute();
    }

    public function verificaUsuarioExiste($email) {
      $consulta = $this->pdo->prepare("SELECT US_ID FROM TB_USUARIO WHERE US_EMAIL = :EMAIL");
      $consulta->bindValue(":EMAIL", $email);
      $consulta->execute();

      if($consulta->rowCount() > 0) return false;
      return true; 
    }
    
  }
