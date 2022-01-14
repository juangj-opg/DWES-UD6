<?php
/* 
*  Ejercicio 9 - Apartado 4
*  - Convierte la clase Vehículo a abstracta, así como el método añadir_persona(peso_persona). ✓
* 
*  - Define el método añadir_persona(peso_persona) en la clase Dos_ruedas 
*    para que este método agregue el peso de la persona, más 1,5 kg del casco. ✓
*
*  - Define el método añadir_persona(peso_persona) en la clase Cuatro_ruedas 
*    para hacer lo mismo que en la clase vehículo. ✓
*
*  - Cree un método público estático en la clase Vehículo que se designe como ver_atributo. ✓
*
*  - Este método toma como argumento un objeto y muestra el valor de todos sus atributos (si existen),
*    es decir, el color, el peso, el número de puertas, la cilindrada, la longitud y el número de cadenas para la nieve. ✓
*
*  - Crea el fichero pruebaApartado4.php, crea un dos ruedas transparente de 1550 kg.✓
*
*  - Añada una persona de 70 kg y muestre su peso total. ✓
*
*  - Cambie a verde el color del objeto dos ruedas. Incluya una cilindrada de 1000. ✓
*
*  - Muestre todos los valores de los atributos del dos ruedas con la función ver_atributo. ✓
*
*  - Cree un camión blanco de 6000 kg. ✓
*
*  - Añada una persona de 84 kg. Vuelva a pintarlo, en color azul. Incluye 2 puertas. ✓
*
*  - Muestre todos los valores de los atributos del camión con la función ver_atributo. ✓
*/

// Función para cargar todos las clases del directorio includes
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});
echo "<h3>Nuevo objeto dos_ruedas </h3>";
$DR1 = new Dos_ruedas("transparente",1550.,120);
echo "<p>El peso actual de un vehículo de dos ruedas 1 ".$DR1->color." sin nadie es: ".$DR1->peso." kg.</p>";

$DR1->add_persona(70);

echo "<p>El peso actual de un vehículo de dos ruedas 1 ".$DR1->color." con una persona de 70kg es: ".$DR1->peso." kg y con una cilidnrada de ".$DR1->Get_Cilindrada().".</p>";

echo "<h3>Modificaciones al objeto dos_ruedas </h3>";
$DR1->color = "verde";
$DR1->Add_Cilindrada(1000);

$DR1->ver_atributo($DR1);

echo "<h3>Nuevo objeto camión </h3>";
$C1 = new Camion("blanco",6000.,4,550);

$C1->ver_atributo($C1);

echo "<h3>Modificaciones al objeto camión </h3>";
$C1->add_persona(84.);
$C1->repintar("azul");
$C1->Adder_Puertas(2);

$C1->ver_atributo($C1);


?>

