<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Loading Bootstrap -->
    <link href="public/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Loading Flat UI -->
	<link href="public/css/flat-ui.css" rel="stylesheet">
	<link href="public/css/demo.css" rel="stylesheet">

	<link rel="shortcut icon" href="public/images/favicon.ico">
	
</head>
<body>
	<header class="container">			
		<div class="text-center">
			<h1 class="demo-logo">
				<a href="#">#mejorandoPHP</a>
				<small>@imontalvomiguel</small>
			</h1>
			
		</div>
	</header>
	
	<nav class="container navbar navbar-inverse">

		<ul class="nav navbar-nav">
			<li><a href="contactos">Contactanos</a></li>
			<li><a href="noticias">Noticias</a></li>
			<li><a href="portafolio">Portafolio</a></li>
		</ul>

	</nav>
	
	
	<div class="container">
		<?= $tpl_content; ?>
	</div>

	<footer>
		<div class="container text-center">
			© <?= date('Y'); ?> @imontalvomiguel Some Rights Reserved
		</div>
	</footer>
</body>
</html>