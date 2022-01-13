<?php
/* 
*  Ejercicio 9 - Apartado 2
*  - Utiliza los métodos especiales para crear los métodos 
*    consultores y modificadores de los atributos. ✓
* 
*  - Crea el constructor de la clave Vehículo que reciba 
*    como parámetros el color y el peso. ✓
* 
*  - Modifica el método circula() para que muestre por pantalla “El vehículo está circulando”. ✓
* 
*  - Modifica el método añadir_persona(peso_persona) de forma 
*    que cada vez que se ejecute se modifique el peso total del vehículo. ✓
*
*  - Crea el fichero pruebaApartado2.php, dentro de este 
*    crea un vehículo rojo de 450 kg y hazlo circular.  ✓
*
*  - Añada dos personas de 50 kg y 60 kg, muestra el nuevo peso del vehículo. ✓
*/

// Función para cargar todos las clases del directorio includes
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});

// Creación de un objeto Vehículo y hacerlo circular.
$V1 = new Vehiculo("rojo", 450.);
$V1->circula();

// Añadir dos personas de 50 y 60kg.

// Peso original
echo "<p>El peso actual del coche sin nadie es: ".$V1->peso." kg.</p>";

// Añadir una persona de 50Kg.
$V1->add_persona(50.);
echo "<p>El peso actual del coche con una persona de 50kg es: ".$V1->peso." kg.</p>";

// Añadir otra persona de 60Kg.
$V1->add_persona(60.);
echo "<p>El peso actual del coche añadiendo otra persona de 60kg es: ".$V1->peso." kg.</p>";




?>