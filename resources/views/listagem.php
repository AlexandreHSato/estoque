<!DOCTYPE html>
<html>
<head>
	<title>Controle de Estoque</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="container">
		<h1>Lista de produtos com Laravel</h1>
		<table class="table table-striped table-bordered">
		<?php 
			foreach($produtos as $p):
		 ?>
			 <tr>
			 	<td><?=$p->nome?></td>
			 	<td><?=$p->valor?></td>
			 	<td><?=$p->descricao?></td>
			 	<td><?=$p->quantidade?></td>
			 	<td><a href="/produtos/mostra"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
			 	<td><a href="/produtos/mostra"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
			 	
			 </tr>
		<?php 
			endforeach
		 ?>

		</table>
	</div>
</body>
</html>