<?php

  require_once "../model/Livro.php";
  $livro = new Livro();

  $nome = $_POST["nome"];
  $autor = $_POST["autor"];
  $idioma = $_POST["idioma"];
  $descricao = $_POST["descricao"];
  $pagina = $_POST["pagina"];
  $usuarioId = $_POST["usuarioId"];


  $img=$_FILES['img'];
  if(isset($_POST['submit'])){ 
   if($img['name']==''){  
    echo "<h2>An Image Please.</h2>";
   }else{
    $filename = $img['tmp_name'];
    $client_id="e35e33314640b51";
    $handle = fopen($filename, "r");
    $data = fread($handle, filesize($filename));
    $pvars   = array('image' => base64_encode($data));
    $timeout = 30;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
    curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
    $out = curl_exec($curl);
    curl_close ($curl);
    $pms = json_decode($out,true);
    $url=$pms['data']['link'];
    $livro->cadastrar($nome, $autor, $idioma, $descricao, $pagina, $usuarioId, $url);
    header("Location: /listLivros.php");
   }
  }
  
   
  

?>



<pre>
  <?php
    print_r($pms);
  ?>
</pre>

