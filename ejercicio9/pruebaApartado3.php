<?php
/* 
*  Ejercicio 9 - Apartado 3
*  - Modifica el método repintar(color) para que cambie el color definido en Vehículo. ✓
*
*  - Modifica el método poner_gasolina(litros) para que cambie el peso del 
*    Vehículo según la cantidad de litros que se reposte. (Un litro equivale a 1,5 kilos). ✓
*
*  - Modifica los métodos añadir_cadenas_nieve() y quitar_cadenas_nieve() 
*    modificando el atributo numero_cadenas_nieve. ✓
*
*  - Modifica el método añadir_remolque(longitud_remolque) modificando el atributo longitud.
*
*  - Crea el fichero pruebaApartado3.php, dentro de este crea un coche azul de 650kg.
*
*  - Añade una persona de 700 kg.
*
*  - Muestra el color y el peso.
*
*  - Repinta el coche a amarillo y añade 3 cadenas para la nieve.
*
*  - Muestra el color y el número de cadenas para la nieve.
*
*  - Crea un objeto Dos_ruedas marrón de 30 kg. Añada una persona de 2 kg. 
*    Ponga 2000 litros de gasolina.
*
*  - Muestre el color y el peso del dos ruedas.
*/

// Función para cargar todos las clases del directorio includes
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});

?>