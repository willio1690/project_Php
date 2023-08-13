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
$numero1 = 2;
function duplicar($numero1)
{
    $numero1 *= 2; // Multiplicamos el número por 2
    return $numero1; // Devolvemos el resultado
}
// Asignación de valor original
$numero_original = 3;

// Llamada a la función y asignación de variable 
$numero_duplicado = duplicar($numero_original);

// Mostrar resultados

echo "Número original: " . $numero_original . "<br>";
echo "Número duplicado: " . $numero_duplicado . "<br>";


/*
========*****=======

Ejemplo 
*/



//$numerop=16;
function dividir($numerop)
{
    $numerop /= 3;
    return $numerop;
}

$numero_div = 13;
$numero_divi = dividir($numero_div);

// Mostrar resultados division
echo "Número dividido: " . $numero_divi . "<br>";



/* 

=========****===*****======*****===*****=====*****=====*****

ejercicios con funciones por valor 

*/

function hacer_cafe($tipo = "capuchinno")
{
    // funcion hacer cafe y recibe un parametro llamado capucchino

    return "el cafe es de $tipo <br>";
    /*
una funcion para ser utilizada en el contexto debe tener
siempre un return para poder utilizarla

en este caso retornamos una cadena de estring concatenado
con la variable tipo acompañado con un salto de linea 

*/
}

echo hacer_cafe();
/*
para utilizar la funcion fuera de su contexto es 
necesario utilizar el nombre seguido de los 
parentesis aqui toma el valor por defecto
*/

echo hacer_cafe(null);

/*
en este caso tambien me respeta el parametro
que debo pasarle 

*/
echo hacer_cafe("moka<br>");
/*
en este caso estamos pasando parametros 
que permiten utilizar el espacio 
sin remplazar el valor original 

*/

/*
es posible pasarle varios parametros predefinidos
en la funcion igualmente por valor 


*/

function persona($sunombre = "paula", $suApellido = "garcia", $edad = 16)
{
    return "Bienvenida $sunombre $suApellido de $edad años de edad";
}
//si no pasamos los valores completos sufre cambios inesperados
echo persona() . "<br>";
echo persona("paulita");

/*
si utilizamos solo una variable solo cambia esa dado que
si remplaza el valor pero deja intacta la variable original 

*/



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


// Función que incrementa el valor de una variable por referencia


function incrementar(&$numero)
{
    $numero++; // Incrementa el valor de $numero en 1
}

// Variable inicial
$miNumero = 5;

echo "<br>Antes de incrementar: $miNumero <br>";

// Llamada a la función
incrementar($miNumero); // Se pasa $miNumero como referencia

echo "Después de incrementar: $miNumero<br>";


/*

ejemplo 

*/


// Variable
$miNumero = 6;

// Función que verifica si un número es par
function esPar($numero)
{
    return $numero % 2 == 0;
}

// Función que duplica un número por referencia
function duplicar1(&$numero)
{
    $numero *= 2;
}



// Verificar si el número es par y duplicarlo
if (esPar($miNumero) && duplicar1($miNumero)) {
    echo "El número es par y se ha duplicado: $miNumero";
} else {
    echo "El número no es par o no se ha podido duplicar<br>";
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


/*
 
ejemplo asignacion por referencia 


 */

function referencia(&$parametro)
{

    //

    $parametro = 'cambio de valor';
}
$elNombre = 'codigofacilito';
print "{$elNombre}<br>";

referencia($elNombre);
print "{$elNombre}\n"; 
