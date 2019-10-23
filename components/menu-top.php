<?php 
  session_start(); 
  $id = $_SESSION["id_usuario"];

?>
<header class="header">
  <div class="header__logo-box">
    <h1><a data-color="white" class="heading-logo" href="/index.php">tradebook</a></h1>
  </div>
  <nav class="header-menu">
    <ul class="header-menu__list">
      <li class="header-menu__item"><a data-color="white" href="../index.php">Início</a></li> 
      <li class="header-menu__item"><a data-color="white" href="../sobre.php">Sobre</a></li>
      <?php if(!isset($_SESSION["id_usuario"])) : ?>
          <li class="header-menu__item" ><a data-color="white" href="../cadastro.php">Entrar</a></li>
          <li class="header-menu__item" ><a data-color="white" href="../cadastro.php">Cadastrar</a></li>
        <?php endif ?>
        <?php if(isset($_SESSION["id_usuario"])) : ?>
        <div class="btn-group">
          <li class="dropdown-toggle header-menu__item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?=$_SESSION["id_usuario"]["NOME"]?>
        </li>
        <div class="dropdown-menu">
          <li style="font-size: 1.5rem; cursor: "class="header-menu__item" >Perfil<a data-color="white" href="../cadastro.php"></a></li>
          <li style="font-size: 1.5rem;"class="header-menu__item" ><a data-color="white" href="sair.php">Sair</a></li>
        </div>
        
        <div class="btn-group">
          <li class="dropdown-toggle header-menu__item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LivTelefonero
        </li>
        <div class="dropdown-menu">
          <li style="font-size: 1.5rem; cursor: "class="header-menu__item" >Perfil<a data-color="white" href="../cadastro.php"></a></li>
          <li style="font-size: 1.5rem;"class="header-menu__item" >Sair<a data-color="white" href="../cadastro.php"></a></li>
        </div>
        <?php endif ?>        
      <div class="line"></div>
    </ul>
  </nav>
</header>
