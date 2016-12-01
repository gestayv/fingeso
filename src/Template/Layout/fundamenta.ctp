<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>

	<header>
		<div id="logo">
			<a href="http://www.fundamenta.cl"><img src="\img\Fundamenta1.png" alt="Logo Fundamenta" border="0" class="ribbon"> </img></a>
		</div>
		<div class="jumbotron" style="overflow: auto; display: inline-block;padding: 0;margin:0;background-color: black;">
			<h1 id="titulo" class="nologin">Sistema de Postventa</h1>
		</div>
		<div class="logout">
			<a class="btn btn-warning" href="/Users/logout/">Cerrar Sesion</a>
		</div>
		
	</header>

	<br>
	<br>
	
	<?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>