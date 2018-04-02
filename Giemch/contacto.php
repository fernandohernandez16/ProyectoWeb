<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GIEMCH</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilosmenu.css">
	<link href="fonts/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estiloscontacto.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
	<header class="header">
		<div class="contenedor">
			<img src="img/logo.png" alt="logo de la empresa" class="logo">
			<span class="icon-menu" id="btn-menu"></span>
			<nav class="nav" id="nav">
				<ul class="menu">
					<li class="menu__item"><a class="menu__link" href="index.php">Inicio</a></li>
					<li class="menu__item"><a class="menu__link" href="nosotros.php">Nosotros</a></li>
					<li class="menu__item"><a class="menu__link" href="servicios.php">Servicios</a></li>
					<li class="menu__item"><a class="menu__link select" href="contacto.php">Contacto</a></li>
					<li class="menu__item"><a class="menu__link" href="php/registro.php">&#128100; Cuenta</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="banner">
		<img src="img/banner11.jpg" alt="banner de la empresa Giemch" class="banner__img">
		<div class="contenedor">
			<h2 class="banner__titulo"></h2>
				</div>
	</div>
	<main class="main">
		<div class="ibody">
			<div class="jumbotron">
				<h1>Contáctanos</h1>
			</div>
			<div class="fcontacto">
				
				<form method="POST" name="fcontacto" id="fcontacto" action="php/enviar.php">
					<div class="row">
						<div class="col-md-6">
							<label>Tu nombre:</label>
							<input type="text" placeholder="Introduce nombre" name="nombre" id="name" class="form-control" required>
						</div>

						<div class="col-md-6">
							<label>Tu Email:</label>
							<input type="text" placeholder="Introduce email" name="email" id="email" class="form-control" required>
						</div>
					</div>
					<label>Asunto:</label>
					<input type="text" name="asunto" placeholder="Introduce el asunto" id="asunto" class="form-control" required>
					<label>Tu Mensaje:</label>
					<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
					<input type="submit" class="btn btn-info" value="Enviar">

				</form>
			</div>
		</div>
			
			
		
	</main>
	<footer class="footer">
		<div class="social">
			<a href="" class="icon-facebook"></a>
			<a href="" class="icon-gplus"></a>
		</div>
		<p class="copy">&copy; Giemch 2018 - Todos los derechos reservados.</p>
	</footer>
	<script src="js/menu.js"></script>
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>