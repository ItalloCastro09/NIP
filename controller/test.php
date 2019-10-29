<?php
  require_once "../model/Livro.php";

  $livro = new Livro();
  

?>



<pre>

  
<?php print_r($livro->listarTodosLivros());  ?>

<img src="<?= $livro->listarTodosLivros()[7]["IMAGEM"]; ?>" alt="">
</pre>