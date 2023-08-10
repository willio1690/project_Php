<?php
function sumarNumeros($num1,$num2,$num3){

    /*
    ========================================
    return 

    retorna los valores de la funcion pero
    no los imprime cuando llamo la funcion
    retorna los valores que le estoy pasando
    
    ========================================
    */
    return $num1+$num2+$num3;


}

/*
=============================================
$sumaTotal

Como return devuelve los valores asignados 
cuando utilizo la funcion, entonces debo
asignar lo que retorna de informacion a 
una variable en este caso sumaTotal
============================================

*/

$sumaTotal=sumarNumeros(1,24,19);
// se imprime la variable sumaTotal 
echo "la sumatoria total es:".$sumaTotal."<br>";

function restarNumeros($n1,$n2){


return $n1-$n2;

}

$restarNumero=restarNumeros(33,27);
echo "la resta total es:". $restarNumero;















?>