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
    <link rel="stylesheet" href="../css/estilologin2.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <title>Login</title>
</head>
<body class="ibody">
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
</body>
</html>