<?php
session_start();
require("php/conexion.php");
require("/Class/tablaUsuario.php");

if(!empty($_POST['usuario']) AND !empty($_POST['contra'])  ){
  $usuario=$_POST['usuario'];
  $contra=$_POST['contra'];

  $con=mysql_query("SELECT * from USUARIOS
    WHERE usuario='".$usuario."'
    AND contra='".$contra."'
    ");

  
  if($dato=mysql_fetch_array($con)){
    $_SESSION['usuario']=$dato['usuario'];
    $_SESSION['tipo']=$dato['tipo'];

    if($dato['usuario']=='Guille' AND $dato['tipo']=='a'){
      header('location:Admon/admon.php');
    }else{
      if($dato['tipo']=='u'){
        header('location:User/user.php');
      }
    }
  }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GIEMCH</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="css/estilosmenu.css">
	<link href="fonts/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilomodal.css">
	<link rel="stylesheet" href="css/estilologin2.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
	<input type="checkbox" id="cerrar">
	<label for="cerrar" id="btn-cerrar">X</label>
	<div class="modal" id="abrir">
		<div class="contenido">
			<div class="login__container">
       <div class="login__top">
          <img  class="login__img" src="img/user.png" alt="">
          <h2 class="login__title">Ingresa a <span>Giemch</span></h2>
       </div>
        
        <form action="" method="POST" class="login__form">
            <input type="text" name="usuario" placeholder="&#128100; Usuario" required autofocus>
            <input type="password" name="contra" placeholder="&#x1F512; Contraseña" required>
            <input class="btn__submit1" type="submit" value="ENTRAR">
            <a class="form__recover" href="php/registro.php">¿No tienes una cuenta?</a>
        </form>
    </div>
		</div>
	</div>
	<header class="header">
		<div class="contenedor">
			<img src="img/logo.png" alt="logo de la empresa" class="logo">
			<span class="icon-menu" id="btn-menu"></span>
			<nav class="nav" id="nav">
				<ul class="menu">
					<li class="menu__item"><a class="menu__link" href="index.php">Inicio</a></li>
					<li class="menu__item"><a class="menu__link" href="nosotros.php">Nosotros</a></li>
					<li class="menu__item"><a class="menu__link select" href="servicios.php">Servicios</a></li>
					<li class="menu__item"><a class="menu__link" href="contacto.php">Contacto</a></li>
					<li class="menu__item"><a class="menu__link" href="php/registro.php">&#128100; Cuenta</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="banner">
		<img src="img/banner2.jpg" alt="banner de la empresa Giemch" class="banner__img">
		<div class="contenedor">
			<h2 class="banner__titulo">Servicios</h2>
			
		</div>
	</div>
	<main class="main">
		<div class="contenedor">
		
			<section class="servicios">
				
				<div class="servicios_columna">
					<img src="img/servicio3.jpg" alt="" class="servicios__img">
					<div class="servicios__descripcion">
						<h3 class="servicios__titulo">Reparación</h3>
						<p class="servicios__txt">Las Reparaciones que realizamos en Giemch no se limitan a cambiar tarjetas...</p>
					</div>
				</div>
				<div class="servicios_columna">
					<img src="img/servicio2.jpg" alt="" class="servicios__img">
					<div class="servicios__descripcion">
						<h3 class="servicios__titulo">Mantenimiento</h3>
						<p class="servicios__txt">En Giemch tenemos amplia experiencia en mantenimientos preventivos así como correctivos...</p>
					</div>
				</div>
				<div class="servicios_columna">
					<img src="img/servicio1.jpg" alt="" class="servicios__img">
					<div class="servicios__descripcion">
						<h3 class="servicios__titulo">Instalaciones</h3>
						<p class="servicios__txt">La experiencia de Giemch no se ha limitado a sólo un sector del mercado...</p>
					</div>
				</div>
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
	<script src="js/menu.js"></script>
</body>
</html>