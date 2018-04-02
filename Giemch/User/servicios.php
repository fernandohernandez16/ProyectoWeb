<?php
	session_start();
	include('../php/conexion.php'); 
	include_once('../Class/tablaServicios.php'); 
		
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
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/arrow.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link href="../fonts/styles.css" rel="stylesheet">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
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
				<li ><a href="nosotros.php">Nosotros</a>
				<li class="select"><a href="servicios.php">Servicios</a>
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
		<img src="../img/banner2.jpg" alt="banner de la empresa Giemch" class="banner__img">
		<div class="contenedor">
			<h2 class="banner__titulo">Servicios</h2>
			
		</div>
	</div>
	    <?php   //Datos que vienen de la forma ***MODAL INGRESAR **
                if(!empty($_POST['nombre'])){
                  
            //Datos que vienen de la forma INGRESAR              
                    
                      //Datos que vienen de la forma INGRESAR      
                          //  $matricula=$_SESSION['matricula'];
                            $nombre=$_POST['nombre'];
                            $appa=$_POST['appa'];
                            $apma=$_POST['apma'];
                            $domicilio=$_POST['domicilio'];
                            $municipio=$_POST['municipio'];
                            $colonia=$_POST['colonia'];
                            $estado=$_POST['estado'];
                            $cp=$_POST['cp'];
                            $edad=$_POST['edad'];
                            $servicio=$_POST['servicio'];
                            
                            
                            $c_operadores = new tablaservicios($nombre,$appa,$apma,$domicilio,$municipio,$colonia,$estado,$cp,$edad,$servicio);
                            $c_operadores->Tablaserviciosinsertar();
                            
                            echo '  <div class="alert alert-info" align="center">
                                       <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>
                                               Los datos fueron registrados con Exito en la Base de Datos                            
                                            </strong>
                                        </div>';
                                    }
            //recargar menu
                      ?>
            
	<main class="main">
		<div class="contenedor">
		
			<section class="servicios">
					<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			<!--
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>
				
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado_civil" name="estado_civil">
							<option value="SOLTERO">SOLTERO</option>
							<option value="CASADO">CASADO</option>
							<option value="OTRO">OTRO</option>
						</select>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
			-->	
				<form name="form2" method="POST" enctype="multipart/form-data" action="">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Ingresar Nuevo Operador</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span6">
                
                <strong>Nombre</strong><br>
                <input type="text" name="nombre" autocomplete="off" maxlength="18" required><br>
                <strong>Ap.Paterno</strong><br>
                <input type="text" name="appa" autocomplete="off" maxlength="18" required><br>
                <strong>Ap.Materno</strong><br>
                <input type="text" name="apma" autocomplete="off" maxlength="18" required><br>
                <strong>Domicilio</strong><br>
                <input type="text" name="domicilio" autocomplete="off" maxlength="18" required><br>
                <strong>Municipio</strong><br>
                <input type="text" name="municipio" autocomplete="off" maxlength="18" required><br>
                <strong>Colonia</strong><br>
                <input type="text" name="colonia" autocomplete="off" maxlength="18" required><br>
                
            </div>
            <div class="span6">
                <strong>Estado</strong><br>
                <input type="text" name="estado" autocomplete="off" maxlength="10" required><br>
                
                <strong>Codigo Postal</strong><br>
                <input type="text" name="cp" autocomplete="off" maxlength="5" required><br>
                
                <strong>Edad</strong><br>
                <input type="text" name="edad" autocomplete="off" required><br>
                 <strong>Tipo de Servicio</strong><br>
                <select name="servicio">
                <option value="" selected="selected">Seleccione...</option>
                    <option value="soltero">INSTALACIÓN</option>
                    <option value="casado">MANTENIMIENTO</option>
                    <option value="casado">REPARACIÓN</option>
                </select>

              
            </div>
        
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn"><strong><i class="icon-ok"></i> Guardar</strong></button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><strong>
            <i class="icon-remove"></i> Cerrar</strong>
        </button>
    </div>
    </form>

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