<?php
  $servername = "localhost";
  $dbname = "tradebook";
  $username = "lucas";
  $password = "felinto";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$tradebook", $username, $password);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  function cadastrar($nome, $email, $senha, $telefone) {
    $consulta = $conn->prepare("INSERT INTO TB_USUARIO (US_NOME, US_EMAIL, US_SENHA, US_TELEFONE)
      VALUES (:NOME, :EMAIL, :SENHA, :TELEFONE)");
    $consulta->bindValue(":NOME", $nome);
    $consulta->bindValue(":EMAIL", $email);
    $consulta->bindValue(":SENHA", $senha);
    $consulta->bindValue(":TLEFONE", $telefone);
    $consulta->execute();
  }