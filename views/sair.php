<?php
  session_start();
  unset($_SESSION["id_usuario"]);
  header("location: /index.php");
  echo $_SESSION["id_usuario"];
  