
<?php
/*
=========================================
operadores de asignacion
=
este simbolo  refleja que el valor
de la parte izquierda se establece
como expresion de la derecha 
("se define como")


operadores de asignacion combinados

 = += *= /= .=

*/

$a=5;
$b=10;

$a+=$b;
echo $a."<br>";

/*
  ============================================
  se asignan los valores a = 5 y b = 10 
  en la linea 17 suma a + b 
  luego el resultado se asigna a la variable a 
  =============================================
  
*/

$a-=$b;
echo $a."<br>";

/*
===============================================
operadores de asignacion concatenacion 

=.

*/

$a.=$b;
echo $a;



?>
