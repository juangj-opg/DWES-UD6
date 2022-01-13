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
*  - Modifica el método añadir_remolque(longitud_remolque) modificando el atributo longitud. ✓
*
*  - Crea el fichero pruebaApartado3.php, dentro de este crea un coche azul de 650kg. ✓
*
*  - Añade una persona de 700 kg. ✓
*
*  - Muestra el color y el peso. ✓
*
*  - Repinta el coche a amarillo y añade 3 cadenas para la nieve. ✓
*
*  - Muestra el color y el número de cadenas para la nieve. ✓
*
*  - Crea un objeto Dos_ruedas marrón de 30 kg. Añada una persona de 2 kg. ✓
*    Ponga 2000 litros de gasolina.
*
*  - Muestre el color y el peso del dos ruedas. ✓
*/

// Función para cargar todos las clases del directorio includes
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});

// Crear un coche azul de 650kg.
$C1 = new Coche("azul",650.,4,2);

// Añadir una persona de 70kg y mostrar el color y peso
echo "<p>El peso actual del coche 1 sin nadie es: ".$C1->peso." kg.</p>";

$C1->add_persona(700.);
echo "<p>El peso actual del coche 1 es ".$C1->color." con una persona de 700kg es: ".$C1->peso." kg.</p>";

// Repintar el coche a amarillo y añadir 3 cadenas al número de cadenas para la nieve y mostrarlo

echo "<p>El coche 1 es ".$C1->color." y tiene ".$C1->Get_Cadenas()." cadena/s de nieve.</p>";
$C1->repintar("amarillo");
$C1->add_cadenas(3);
echo "<p>El coche 1 es ".$C1->color." y tiene ".$C1->Get_Cadenas()." cadena/s de nieve.</p>";

// Crear un objeto Dos_ruedas marrón de 30 kg. Añadirle una persona de 2kg y 2000 L de Gasolina y mostrarlo en pantalla.
$R2 = new Dos_ruedas("marrón",30.,"120");
echo "<p>El peso actual de un vehículo de dos ruedas ".$R2->color." sin nadie es: ".$R2->peso." kg.</p>";

$R2->add_persona(2);
$R2->poner_gasolina(2000);

echo "<p>El peso actual de un vehículo de dos ruedas ".$R2->color." con una persona de 2kg y 2000L de gasolina es: ".$R2->peso." kg.</p>";




?>