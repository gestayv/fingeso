<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>

<<<<<<< HEAD

	<div id="logo">
		<a href="http://www.fundamenta.cl"><img src="\img\Fundamenta1.png" alt="Logo Fundamenta" border="0" class="ribbon"> </img></a>
	</div>
=======
	<header id="darkFundamenta">
		<div id="logo">
			<a href="http://www.fundamenta.cl"><img src="/img/Fundamenta1.png" alt="Logo Fundamenta" border="0" class="ribbon"> </img></a>
>>>>>>> 721e7a9cb7ff89bab17c6e6dafa910ca7e90c4f0

	<div id="upright">
		<button class="btn btn-warning">Cerrar Sesion</button>
	</div>
	<header class="nologin">
		<br>
		<div class="container">
			<div class="" id="darkFundamenta">
				<h1 id="titulo">Bienvenido al sistema de Post-venta</h1>
			</div>
		</div>

	</header>

	<br>
	<br>
	
	<?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>