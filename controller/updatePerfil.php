<?php
  session_start();
  include "../model/Usuario.php";

  $usuario = new Usuario();


  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $senha = $_POST["senha"];
  $email = $_POST["email"];
  $id = $_POST["id"];
  $telefone = $_POST["telefone"];

  $senhaAntiga = $_POST["senhaAntiga"];
  $senha = $_POST["telefone"];
  $senha2 = $_POST["senha2"];


  if (md5($senhaAntiga) === $_SESSION["id_usuario"]["SENHA"]) {
    if ($_POST["senha"] === $senha2) {
      $usuario->update($_SESSION["id_usuario"]["ID"], $nome, $sobrenome, $email, md5($senha), $telefone);
      header("Location: /views/perfil.php?msg=Dados atualizados");

    } else {
    header("Location: /views/perfil.php?msg=as senhas nao coi");
    }
  } else {
    header("Location: /views/perfil.php?msg=senha antiga não corresponde");
  }

  // print_r($_POST["usuarioId"]);

  // echo strcmp($senha, $senha2);
  // echo $senha;
  // echo $senha2;
  // print_r($_POST);
  // print_r($_SESSION["id_usuario"]);
?>


<pre>
  <?php
    var_dump($_SESSION["id_usuario"]);
  ?>
</pre>
