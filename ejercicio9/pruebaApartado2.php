<?php
/* 
*  Ejercicio 9 - Apartado 2
*  - Utiliza los métodos especiales para crear los métodos 
*    consultores y modificadores de los atributos.
* 
*  - Crea el constructor de la clave Vehículo que reciba 
*    como parámetros el color y el peso.
* 
*  - Modifica el método circula() para que muestre por pantalla “El vehículo está circulando”.
* 
*  - Modifica el método añadir_persona(peso_persona) de forma 
*    que cada vez que se ejecute se modifique el peso total del vehículo.
*
*  - Crea el fichero pruebaApartado2.php, dentro de este 
*    crea un vehículo rojo de 450 kg y hazlo circular.
*
*  - Añada dos personas de 50 kg y 60 kg, muestra el nuevo peso del vehículo.
*/

spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});

?>