<?php
/*
======================================
que es una funcion 

es un conjunto de lineas de codigo que 
realizan una tarea especifica y pueden 
retornar un valor y a su vez puede 
recibir parametros, que pueden modificar 
su comportamiento 
==========================================
para que sirve y cuando utilizarla 

*no sirve para descomponer un problema complejo
en tareas senciallas 
* cuando vemos acciones recurrentes en nuestro
codigo con el fin de repetir el codigo llamamos
la funcion cada vez que la necesitemos 
*/


/*
=========================****=============
funcion sin parametro fijo

la estructura de la funcion es la siguiente 
funtion nombre ($parametro) el parametro son
las variables que reciben valores cuando
la funcion es llamada 
===========================================


*/

function saludar($nombre){

    // todo lo que esta aqui es lo que 
    // se ejecuta cuando llamamos la funcion

echo "hola $nombre lokitos como es?<br>";

}
// llamando a la funcion que pasa un parametro 
saludar("rasta");

/*

=========================****=============
funcion con parametro fijo

*/
function saludo ($plata="veo las lukas<br>"){

    // todo lo que esta aqui es lo que 
    // se ejecuta cuando llamamos la funcion

echo ("hola $plata lokitos como es?") ;

}
// llamado a la funcion que pasa un parametro 
saludo ();




















?>
