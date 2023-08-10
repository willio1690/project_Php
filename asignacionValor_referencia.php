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
$numero1=2;
function duplicar($numero1) {
    $numero1 *= 2; // Multiplicamos el número por 2
    return $numero1; // Devolvemos el resultado
}
// Asignación de valor original
$numero_original = 3;

// Llamada a la función y asignación del resultado
$numero_duplicado = duplicar($numero_original);

// Mostrar resultados
echo "numero:".$numero1."<br>";
echo "Número original: " . $numero_original . "<br>";
echo "Número duplicado: " . $numero_duplicado . "<br>";


/*
===================*******====================
funciones por referencia

desde la funcion se accede de forma indirecta
a una variable que este afuera y referenciarla
por medio de una referencia &
para poder trabajar con el valor original de 
la variable.
=====*****======****=====****====****=====***===

*/
$numerop=16;
function dividir($numerop){
    $numerop /=3;
    return $numerop;

}

$numero_div =13;
$numero_divi = dividir($numero_div);

// Mostrar resultados division
echo "Número dividido: " . $numero_divi . "<br>";
















// Función que incrementa el valor de una variable por referencia
function incrementar(&$numero) {
    $numero++; // Incrementa el valor de $numero en 1
}

// Variable inicial
$miNumero = 5;

echo "Antes de incrementar: $miNumero <br>";

// Llamada a la función
incrementar($miNumero); // Se pasa $miNumero como referencia

echo "Después de incrementar: $miNumero<br>";


/*






*/


// Variable
$miNumero = 6;

// Función que verifica si un número es par
function esPar($numero) {
    return $numero % 2 == 0;
}

// Función que duplica un número por referencia
function duplicar1(&$numero) {
    $numero *= 2;
}



// Verificar si el número es par y duplicarlo
if (esPar($miNumero) && duplicar1($miNumero)) {
    echo "El número es par y se ha duplicado: $miNumero";
} else {
    echo "El número no es par o no se ha podido duplicar";
}

/*
================******==============************=============*******

En esta línea, se utiliza una estructura condicional if para verificar
si $miNumero es par utilizando la función esPar($miNumero) y si la 
función duplicar($miNumero) se ejecuta correctamente. Si ambas 
condiciones son verdaderas, se imprime el mensaje
"El número es par y se ha duplicado: $miNumero"
 De lo contrario, se imprime el mensaje
"El número no es par o no se ha podido duplicar".



*/
































?>



















