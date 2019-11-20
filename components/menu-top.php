<?php
  session_start();
  $id = $_SESSION["id_usuario"];
?>

<header class="header">
  <div class="header__logo-box">
    <h1><a data-color="white" class="heading-logo" href="/views/index.php">tradebook</a></h1>
  </div>
  <nav class="header-menu">
    <ul class="header-menu__list">
      <li class="header-menu__item"><a data-color="white" href="/views/index.php">Início</a></li>-
      <li class="header-menu__item"><a data-color="white" href="/views/sobre.php">Sobre</a></li>-

      <?php if(!isset($_SESSION["id_usuario"])) : ?>
          <li class="header-menu__item" ><a data-color="white" href="/views/cadastro.php">Entrar / Cadastrar</a></li>
        <?php endif ?>

        <?php if(isset($_SESSION["id_usuario"])) : ?>
          <li class=" header-menu__item" data-dropdown="" data-color="white">Livro
            <ul class="dropdown">
              <a href="/views/addLivro.php"><li class="dropdown__item">Anunciar</li></a>
              <a href="/views/listLivro.php"><li class="dropdown__item">Historico</li></a>
            </ul>
          </li>-

          <li class=" header-menu__item" data-dropdown="" data-color="white"><?=$_SESSION["id_usuario"]["NOME"]?> <?=$_SESSION["id_usuario"]["SOBRENOME"]?>
            <ul class="dropdown">
              <a href="/views/perfil.php"><li class="dropdown__item">Editar</li></a>
              <a href="/views/sair.php"><li class="dropdown__item">Sair</li></a>
            </ul>
          </li>

        <?php endif ?>

      <div class="line"></div>
    </ul>
  </nav>
</header>
