<?php
session_start();
require("conexion.php");
require("../Class/tablaUsuario.php");

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
      header('location:../Admon/admon.php');
    }else{
      if($dato['tipo']=='u'){
        header('location:../User/user.php');
      }
    }
  }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/estilosregistro.css">
	<link rel="stylesheet" href="../css/estilologin2.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

	<title>Formulario</title>
</head>
<body>
	<!-- Modal -->
<div class="modal fade" id="mimodalejemplo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
    <div class="login__container">
       <div class="login__top">
          <img  class="login__img" src="../img/user.png" alt="">
          <h2 class="login__title">Ingresa a <span>Giemch</span></h2>
       </div>
        
        <form action="" method="POST" class="login__form">
            <input type="text" name="usuario" placeholder="&#128100; Usuario" required autofocus>
            <input type="password" name="contra" placeholder="&#x1F512; Contraseña" required>
            <input class="btn__submit1" type="submit" value="ENTRAR">
        </form>
    </div>
    </div>
    </div>
  </div>
</div>
<?php
	if(!empty($_POST['Regnombre'])){
		$nom=$_POST['Regnombre'];
		$app=$_POST['Regapellidos'];
		$ema=$_POST['Regcorreo'];
		$usu=$_POST['Regusuario'];
		$con=$_POST['Regclave'];
		$tel=$_POST['Regtelefono'];
		$tip='u';
	

		$t_user=new tablaUsuarios($nom, $app, $ema, $usu, $con, $tel, $tip);
		$t_user->TablaUsuarioinsertar();

		echo '<div class="alert alert-info align="center" 
				<button type="button" class="close" data-dismiss="alert"> X </button>
				<strong>Registro Insertado Exitosamente</strong>
			  </div>  ';
		
	}

?>
	<div class="container">
		<div class="form__top">
			<h2>Formulario <span>Registro</span></h2>
		</div>		
		<form action="" method="POST" class="form__reg" action="">
			<div class="contenedor-inputs">
			<input type="text" name="Regnombre" placeholder="&#128100; Nombre" class="input-48" required>
			<input type="text" name="Regapellidos" placeholder="&#128100; Apellidos" class="input-48" required>
			<input type="email" name="Regcorreo" placeholder="&#9993; Correo" class="input" required>
			<input type="text" name="Regusuario" placeholder="&#128100; Usuario" class="input-48" autocomplete="off" required>
			<input type="password" name="Regclave" placeholder="&#128274;Contraseña" class="input-48" autocomplete="off" required>
			<input type="text" name="Regtelefono" placeholder="&#128222; Teléfono" class="input">
			</div>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
            <p class="form__link">¿Ya tienes una cuenta? <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mimodalejemplo">
 Ingresa Aquí
</button></p>
		</form>
	</div>
</body>
</html>