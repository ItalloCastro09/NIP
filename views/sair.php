<?php
  session_start();
  unset($_SESSION["id_usuario"]);
  header("location: /views/index.php");
  