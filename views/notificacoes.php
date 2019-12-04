<?php
	require_once "../model/Usuario.php"

	// require_once '../config/Conexao.php';

	// $notificationStmt = $con -> query('
	// 	SELECT MEU_LIVRO,
	// 		   INTERESSE_LIVRO 
	// 	FROM TROCA
	// ');
	// $notifications = $notificationStmt -> fetchAll(); 
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="">
 	<meta charset="utf-8">
 	<?php include "../components/header.php" ?>
 	<title></title>
 </head>
 <body>
<?php include "../components/menu-top.php" ?>

<?php foreach ($notifications->notificarUsuario($idMeuLivro, $idInteresse) as $notification): ?>
<table>
		<tr>
			<td><?= $notification['MEU_LIVRO']?></td>
			<td><?= $notification ['INTERESSE_LIVRO']?></td>
		</tr>
</table>
<?php endforeach ?>

<?php include "../components/footer.php"  ?> 
 </body>
 </html>