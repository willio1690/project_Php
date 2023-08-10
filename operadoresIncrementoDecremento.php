<?php
/*
=================================
operadores de incremento 

*/
/*
=================================
// postincremento 

variable que aumenta en 1 despues de ser
utilizada en una expresion la variable
 se distigue porque tiene el ++ detras  

*/
$a=15;

echo "post-incremento <br>".$a++."<br>";
echo "resultado<br>".$a."<br>";


/*
=================================
// pre incremento

variable que aumenta en 1 antes de 
ser utilizada en una expresion se
distingue porque tiene ++ adelante
tiene como caracteristica que cambia 
la variabla original por el valor 
actual 

*/


$b=17;

echo "<br>pre-incremento<br>".++$b;
echo "<br>resultado<br>".$b."<br>";

/*
=================================
// postdecremento 

variable que disminuye en --1 despues de ser
utilizada en una expresion la variable
 se distigue porque tiene el -- detras  

*/
$c=20;

echo "<br>post-decremento<br>".$c--."<br>";
echo "<br>resultado<br>".$c."<br>";


/*
==========================

pre decremento

variable que disminuye en 1 antes de 
ser utilizada en una expresion se
distingue porque tiene -- adelante

*/


$d=30;

echo "<br>pre-decremento<br>".--$d."<br>";
echo "<br>resultado<br>".$d."<br>";





?>