<?php
	session_start();
	include('../php/conexion.php'); 
		
    if($_SESSION['tipo']!=='a'){
		 header('location:error.php');
     
    }else{
        $titulo='Administrador';
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GIEMCH</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../css/estilosadmin.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/arrow.css">
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
				<li class="select"><a href="admon.php">Inicio</a>
				<li class="submenu "><a href="#">Clientes<span>&#129175;</span></a>
					<ul>
						<li><a href="servicios.php">Ver Clientes</a></li>
						<li><a href="gservicios.php">Ver Gráfica</a></li>
					</ul></li>
				<li class="submenu"><a href="#">Usuarios<span>&#129175;</span></a>
					<ul>
						<li><a href="usuarios.php">Ver Usuarios</a></li>
						<li><a href="gusuarios.php">Ver Gráfica</a></li>
					</ul></li>
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
					<li class="menu__item"><a class="menu__link select" href="admon.php">Inicio</a></li>
					<li class="menu__item"><a class="menu__link" href="../nosotros.html">Nosotros</a></li>
					<li class="menu__item"><a class="menu__link" href="../servicios.html">Servicios</a></li>
					<li class="menu__item"><a class="menu__link" href="../contacto.html">Contacto</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Bienvenido <?php echo $titulo; ?></a></li>
				</ul>
			</nav>
		</div>
	</header>
-->
	<div class="banner">
		<img src="../img/banner.jpg" alt="banner de la empresa Giemch" class="banner__img">
		<div class="contenedor">
			<h2 class="banner__titulo">La mejor tecnología a tu alcance</h2>
			<p class="banner__txt">Actualizate con nosotros</p>
		</div>
	</div>
	<main class="main">
		<div class="contenedor">
			<section class="info">
				<article class="info__columna">
					<img src="../img/info1.jpg" alt="" class="info__img">
					<h2 class="info__titulo">Su seguridad es nuestro compromiso</h2>
					<p class="info__txt">En Giemch somos una empresa especializada en reparación, instalación y mantenimiento de equipo de videovigilancia.</p>
				</article>
				<article class="info__columna">
					<img src="../img/info2.jpg" alt="" class="info__img">
					<h2 class="info__titulo">Proteja a su familia y a sus activos</h2>
					<p class="info__txt">Podrá estar más seguro con la instalación de nuestro sistema de seguridad para su hogar.</p>
				</article>
				<article class="info__columna">
					<img src="../img/info3.jpg" alt="" class="info__img">
					<h2 class="info__titulo">¡No dejemos que esto suceda!</h2>
					<p class="info__txt">Se cuenta con un sistema central de monitoreo de alarmas.</p>
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