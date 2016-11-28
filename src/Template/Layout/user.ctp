<!DOCTYPE html>
<html lang="en" class="scrollable">
<head>
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

    <script id="custom-js"></script>
    <link type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-glyphicons.css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <style type="text/css">
      .scrollable {
        height: 100px;
        overflow-y: scroll;
      }
    </style>
    <!-- Aquí continúa el código normal -->
</head>
<body class="scrollable">
<nav  class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Handy-Hand</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Mensajes</a></li>
      <li><a href="#">Notificaciones</a></li>
      <li><a href="https://www.youtube.com/watch?v=9Q7mHG9t0Js">Click me?</a></li>
    </ul>
  </div>
</nav>

<!-- Here's where I want my views to be displayed -->
<?= $this->fetch('content') ?>


</body>
</html>

