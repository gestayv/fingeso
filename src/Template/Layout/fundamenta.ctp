<!DOCTYPE html>
<html>
<head>
	<title>Home - Ejecutor</title>
	<?php $this->Html->charset() ?>
	<title><?= h($this->fetch('title')) ?></title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Aquí se llama a bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://s3.amazonaws.com/jetstrap-site/css/frame.css?10">
    <style id="custom-css">#jumbo 
        {
          background-color: #333;
          color: #eee;
        }

        #jumbo p 
        {
          font-size: 16px;
        }
        #try-header {
          margin: 30px 0px;
        }
        #try-more {
          margin: 30px 0px;
          font-style: italic;
        }
    </style>

    <script>
      parent.FrameWindow = window;
      parent.FrameDocument = document;
    </script>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>


	<header id="darkFundamenta">
		<div id="logo">
			<a href="http://www.fundamenta.cl"><img src="/img/Fundamenta1.png" alt="Logo Fundamenta" border="0" class="ribbon"> </img></a>

		</div>
		<br>
		<div class="container">
			<div class="jumbotron col-md-offset-1" id="darkFundamenta">
				<h1>Login - Sistema de Postventa</h1>
			</div>
		</div>
	</header>
	<?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>