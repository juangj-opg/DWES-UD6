<?php
/* 
*  Ejercicio 9 - Apartado 4
*  - Convierte la clase Vehículo a abstracta, así como el método añadir_persona(peso_persona).
* 
*  - Define el método añadir_persona(peso_persona) en la clase Dos_ruedas 
*    para que este método agregue el peso de la persona, más 1,5 kg del casco.
*
*  - Define el método añadir_persona(peso_persona) en la clase Cuatro_ruedas 
*    para hacer lo mismo que en la clase vehículo.
*
*  - Cree un método público estático en la clase Vehículo que se designe como ver_atributo.
*
*  - Este método toma como argumento un objeto y muestra el valor de todos sus atributos (si existen),
*    es decir, el color, el peso, el número de puertas, la cilindrada, la longitud y el número de cadenas para la nieve.
*
*  - Crea el fichero pruebaApartado4.php, crea un dos ruedas transparente de 1550 kg.
*
*  - Añada una persona de 70 kg y muestre su peso total.
*
*  - Cambie a verde el color del objeto dos ruedas. Incluya una cilindrada de 1000.
*
*  - Muestre todos los valores de los atributos del dos ruedas con la función ver_atributo.
*
*  - Cree un camión blanco de 6000 kg.
*
*  - Añada una persona de 84 kg. Vuelva a pintarlo, en color azul. Incluye 2 puertas.
*
*  - Muestre todos los valores de los atributos del camión con la función ver_atributo.
*/

// Función para cargar todos las clases del directorio includes
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});


?>

