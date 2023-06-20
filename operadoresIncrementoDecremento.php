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

echo "\npost-incremento\n".$a++;
echo "resultado".$a;

/*
=================================
// pre incremento

variable que aumenta en 1 antes de 
ser utilizada en una expresion se
distingue porque tiene ++ adelante

*/


$b=17;

echo "\npre-incremento\n".++$b;
echo "resultado".$b;

/*
=================================
// postdecremento 

variable que disminuye en --1 despues de ser
utilizada en una expresion la variable
 se distigue porque tiene el -- detras  

*/
$c=20;

echo "\npost-decremento\n".$c--;
echo "resultado".$c;


/*
==========================

pre decremento

variable que disminuye en 1 antes de 
ser utilizada en una expresion se
distingue porque tiene -- adelante

*/


$d=30;

echo "\npre-decremento\n".--$d;
echo "resultado".$d;





?>