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
      <li class="header-menu__item"><a data-color="white" href="../index.php">Início</a></li>-
      <li class="header-menu__item"><a data-color="white" href="../sobre.php">Sobre</a></li>-
        
      <?php if(!isset($_SESSION["id_usuario"])) : ?>
          <li class="header-menu__item" ><a data-color="white" href="../cadastro.php">Entrar / Cadastrar</a></li>
        <?php endif ?>
        
        <?php if(isset($_SESSION["id_usuario"])) : ?>
          <li class=" header-menu__item" data-dropdown="" data-color="white">Livro
            <ul class="dropdown">
              <li class="dropdown__item"><a href="/sair.php">Anunciar</a></li>
              <li class="dropdown__item"><a href="/sair.php">Historico</a></li>
            </ul>
          </li>-

          <li class=" header-menu__item" data-dropdown="" data-color="white"><?=$_SESSION["id_usuario"]["NOME"]?>
            <ul class="dropdown">
              <li class="dropdown__item"><a href="/sair.php">Sair</a></li>
            </ul>
          </li>
        
        <?php endif ?>        
     
      <div class="line"></div>
    </ul>
  </nav>
</header>
