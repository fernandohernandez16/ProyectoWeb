<?php

class tablaservicios{

    var $nombre;
    var $appa;
    var $apma;
    var $domicilio;
    var $municipio;
    var $colonia;
    var $estado;
    var $cp;
    var $edad;
    var $servicio;
    function __construct($nom,$ap,$am,$dom,$mun,$col,
                        $esta,$c,$ed,$serv){
        
        $this ->nombre=$nom;
        $this ->appa=$ap;
        $this ->apma=$am;
        $this ->domicilio=$dom;
        $this ->municipio=$mun;
        $this ->colonia=$col;
        $this ->estado=$esta;
        $this ->cp=$c;
        $this ->edad=$ed;
        $this ->servicio=$serv;
        
    }
    function Tablaserviciosinsertar(){
        $nom= $this -> nombre;
        $ap=$this -> appa;
        $am=$this -> apma;
        $dom=$this -> domicilio;
        $mun=$this -> municipio;
        $col= $this -> colonia;
        $esta= $this -> estado;
        $c= $this -> cp;
        $ed=$this -> edad;
        $serv=$this -> servicio;
        mysql_query("INSERT INTO operadores(nombre,appa,apma,domicilio,municipio,
        colonia,estado,cp,edad,servicio) 
        VALUES
        ('$nom','$ap','$am','$dom','$mun','$col','$esta','$c','$ed','$serv') ");
    }
}

?>