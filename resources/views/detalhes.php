<!DOCTYPE html>
<html>
<head>
	<title>Controle de Estoque</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="container">
		<h1>Detalhes do produto <?= $p->nome ?></h1>
		<ul>
			<li>
				Descrição: <?= $p->descricao ?>
			</li>
		</ul>
	</div>
</body>
</html>