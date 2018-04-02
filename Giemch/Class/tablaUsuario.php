<?php
class tablaUsuarios{

var $nombre;
var $apellido;
var $email;
var $usuario;
var $contra;
var $telefono;
var $tipo;

function __construct($nom,$app,$ema,$usu,$con,$tel,$tip){
		$this->nombre=$nom;
		$this->apellido=$app;
		$this->email=$ema;
		$this->usuario=$usu;
		$this->contra=$con;
		$this->telefono=$tel;
		$this->tipo=$tip;

}

function TablaUsuarioinsertar(){
	$nom=$this->nombre;
	$app=$this->apellido;
	$ema=$this->email;
	$usu=$this->usuario;
	$con=$this->contra;
	$tel=$this->telefono;
	$tip=$this->tipo;


	mysql_query("INSERT INTO usuarios
		(nombre,apellido,email,usuario, contra, telefono, tipo) 
		VALUES
		('$nom','$app','$ema','$usu','$con','$tel','$tip') ");
}


}

?>