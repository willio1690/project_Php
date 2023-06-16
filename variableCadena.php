<?php

// variables y nombres en php 

$nombre ="william arvey";

// es posible en php iniciar con guiòn bajo

$_apellido="alvarez bolaños";

/* no esta permitido iniciar con caracteres 
especiales   @&%$·"*/ 

// la variables en php son sencibles a mayusculas

$color = "morao";
$Color="Azul";
$COLOR="Verde ";
$COLOR ="blue";
 
echo $COLOR;
echo $Color;
echo $color;
echo $nombre;
echo $_apellido;

// funcion para saber que tipo de variable
// es 
echo gettype ($_apellido);
//

var_dump($_apellido);



?>