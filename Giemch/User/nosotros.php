<?php
	session_start();
	include('../php/conexion.php'); 
		
    if($_SESSION['tipo']!=='u'){
		 header('location:error.php');
     
    }else{
        $titulo='Usuario';
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GIEMCH</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../css/estilosadmin.css">
	<link rel="stylesheet" href="../css/arrow.css">
	<link rel="stylesheet" href="../css/estilosmenu.css">
	<link href="../fonts/styles.css" rel="stylesheet">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<body>
	<header>
		<img src="../img/logo.png" alt="logo de la empresa" class="logo">
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu" class="icon-menu"></label>

		<nav class="menu">
			<ul>
				<li ><a href="user.php">Inicio</a>
				<li class="select"><a href="nosotros.php">Nosotros</a>
				<li ><a href="servicios.php">Servicios</a>
				<li class="submenu"><a href="#">Bienvenido <?php echo $titulo?> <?php echo $_SESSION['usuario']; ?><span>&#129175;</span></a>
					<ul>
						<li><a href="../php/login.php">Cambiar de Usuario</a></li>
						<li><a href="../index.php">Cerrar Sesión</a></li>
					</ul></li>
			</ul>
		</nav>
	</header>
<!-- 	
	<header class="header">
		<div class="contenedor">
			<img src="../img/logo.png" alt="logo de la empresa" class="logo">
			<span class="icon-menu" id="btn-menu"></span>
			<nav class="nav" id="nav">
				<ul class="menu">
					<li class="menu__item"><a class="menu__link select" href="user.php">Inicio</a></li>
					<li class="menu__item"><a class="menu__link" href="../nosotros.php">Nosotros</a></li>
					<li class="menu__item"><a class="menu__link" href="../servicios.php">Servicios</a></li>
					<li class="menu__item"><a class="menu__link" href="../contacto.php">Contacto</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Bienvenido <?php echo $titulo?> <?php echo $_SESSION['usuario']; ?></a></li>
				</ul>
			</nav>
		</div>
	</header>
-->
	<div class="banner">
		<img src="../img/banner12.jpg" alt="banner de la empresa Giemch" class="banner__img">
		<div class="contenedor">
			<h2 class="banner__titulo">Conócenos</h2>
			
		</div>
	</div>
	<main class="main">
		<div class="contenedor">
			<section class="info">
				<article class="info__columna">
					<img src="../img/nosotros.jpg" alt="" class="info__img">
					<h2 class="info__titulo">Nuestros Inicios</h2>
					<p class="info__txt">GIEMCH inició operaciones en febrero del 2018 presentando soluciones en reparaciones a nivel componente de las marcas mas importantes del mercado, nuestro principal objetivo fue siempre llenar el vacío de un servicio que muchos fabricantes no tienen, el centro de servicio. Con éxito hemos logrado posicionarnos como una de las empresas que han integrado más centros de servicio para varias marcas del mercado del CCTV, los esfuerzos han cruzado fronteras al llevar hasta la CDMX de México una de nuestras sucursales.</p>
				</article>
				
			</section>
		</div>
	</main>
	<footer class="footer">
		<div class="social">
			<a href="" class="icon-facebook"></a>
			<a href="" class="icon-gplus"></a>
		</div>
		<p class="copy">&copy; Giemch 2018 - Todos los derechos reservados.</p>
	</footer>
	<script src="../js/menuadmin.js"></script>
</body>
</html>