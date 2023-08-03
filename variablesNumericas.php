<?php

$octal = 0755;
$hexadecimal =0xC4E;
$binario= 0b1010;

echo $octal." ".$hexadecimal." ".$binario."<br />";

// inferencia de tipos en php 

$nombre ="william ";
$apellido ="alvarez";
$soltero =true;

// saber que tipo de variable es 
// desde el navegador 

echo gettype($nombre)."<br>";





/*
****************************************

Ejercicio # ejemplo algebra de baldor 

un hombre cobra $130 paga una deuda de $80 y luego hace compras
por un valor de 95 cuento tiene 

****************************************
*/

$cobra=130;
$paga=80;
$compra=95;

$tiene=($cobra-$paga)-95;
echo'ejercicio ejemplo algebra de baldor:'." ". "<br><strong>".$tiene."</strong><br>";

/*
****************************************

Ejercicio # 1 algebra de baldor

pedro debia 60 bolivares  y recibio 320 expresar 
su estado economico 

****************************************
*/



function pagar($recibe=320,$debia=60){

    echo"Ejercicio # 1 algebra de baldor";

  echo"pedro debe pagar <br>"."<strong>".($recibe-$debia)."</strong><br>";


};
pagar( );

/*
****************************************

Ejercicio # 2 algebra de baldor

un hombre que tenia 1170 sucres hizo una compra
por valor de 1515 expresar su estado
econmico 

****************************************
*/


function compra($presupuesto=1.170,$Varticulo=1.515){

    echo"Ejercicio # 2 algebra de baldor";

  echo"estado economico: <br>"."<strong>".($presupuesto-$Varticulo)."</strong><br>";


}
compra( );


/*
****************************************

Ejercicio # 3 algebra de baldor

tenia 200 cobre 56 y pague deudas por 189 cuanto tengo

****************************************
*/

function tengo($tengo=200,$cobre=56,$deudas=189){

    echo"Ejercicio # 3 algebra de baldor<br>";

  echo"tengo: <br>"."<strong>".($tengo+$cobre)-$deudas."</strong>";

}
tengo( );


















?>