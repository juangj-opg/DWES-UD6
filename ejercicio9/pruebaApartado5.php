<?php
/*
*  Ejercicio 9 - Apartado 5
*  - Crea un constructor en la clase Cuatro_ruedas que tome como argumento el color, el peso y el número de puertas. ✓
*
*  - Modifica el método público añadir_persona(peso_persona) en la clase Coche. 
*    Este método ejecuta el método añadir_persona(peso_persona) de la clase Cuatro_ruedas y 
*    da como resultado "Atención, ponga 4 cadenas para la nieve." si el peso total del 
*    vehículo es mayor o igual a 1500 kg  y si hay 2 cadenas para la nieve o menos. ✓
*
*  - Añada un atributo estático protegido en la clase Vehículo que se llame numero_cambio_color e inicialice a 0. ✓
* 
*  - Este atributo representa el número de veces que va a cambiar el color, 
*    sea cual sea el objeto al que cambia de color. Este cambio de color se realiza con el método setColor(). ✓
*
*  - Cambie el acceso setPeso() de la clase Vehículo para que el peso total del coche tenga como máximo 2100 kg. ✓
*
*  - Crea el fichero pruebaApartado5.php, crea un coche verde de 2100 kg con 4 puertas. ✓
*  
*  - Añade 2 cadenas para la nieve y una persona de 80 kg. ✓
*  
*  - Cambie el color del coche a azul. ✓
*  
*  - Quita 4 cadenas para la nieve. ✓
*   
*  - Vuelve a pintar el coche en color negro. ✓
*  
*  - Muestra todos los atributos del coche y el número de veces que se cambia el color con el método ver_atributo. ✓
*/

// Función para cargar todos las clases del directorio includes
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});

echo "<h3>Creación de un objeto Coche </h3>";
$C1 = new Coche("verde",2100.,4,2);
$C1->ver_atributo($C1);

// Añadir 2 cadenas y 1 persona de 80kg.
$C1->add_cadenas(2);
$C1->add_persona(80);


// Cambiar el color azul.

$C1->repintar("azul");

// Quitar 4 cadenas para la nieve
$C1->quitar_cadenas_nieve(4);

// Pintar el coche en color negro.
$C1->repintar("negro");

// Mostrar mensaje en pantalla.
echo "<h3>Modificaciones al objeto Coche </h3>";
$C1->ver_atributo($C1);


?>