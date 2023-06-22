<?php
/* 
==========================================
funciones por valor

en este caso estamos realmente pasando
los datos que contiene la variable v1 
y no la direcion fisica de la variable 

la variable v1 presta su valor no su 
referencia o espacio de memoria 

la asignación por valor en PHP implica que se
crea una copia del valor original y se trabaja
con esa copia dentro de la función. Cualquier 
modificación realizada dentro de la función
no afecta al valor original fuera de ella.
==========================================
*/
// Definición de la función para multiplicar un número por 2
function duplicar($numero) {
    $numero *= 2; // Multiplicamos el número por 2
    return $numero; // Devolvemos el resultado
}

// Asignación de valor original
$numero_original = 5;

// Llamada a la función y asignación del resultado
$numero_duplicado = duplicar($numero_original);

// Mostrar resultados
echo "Número original: " . $numero_original . "\n";
echo "Número duplicado: " . $numero_duplicado . "\n";


/*
===================*******====================
funciones por referencia

desde la funcion se acceda de forma indirecta
a una variable que este afuera y referenciarla
por medio de una referencia &
para poder trabajar con el valor original de 
la variable.
=====*****======****=====****====****=====***===

*/


// Función que incrementa el valor de una variable por referencia
function incrementar(&$numero) {
    $numero++; // Incrementa el valor de $numero en 1
}

// Variable inicial
$miNumero = 5;

echo "Antes de incrementar: $miNumero <br>";

// Llamada a la función
incrementar($miNumero); // Se pasa $miNumero como referencia

echo "Después de incrementar: $miNumero";


/*






*/








?>



















