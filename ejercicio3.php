<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - POO - Métodos especiales</title>
</head>
<body>
<?php
include "cabecera.php";
echo "<h2>Ejercicio 3</h2>";

include_once "funciones_ej3.php";

echo "<h3>Funcion __toString en clase Persona</h3>";

echo "<p>La función __toString se usa para llamar a la varible de la clase, en este caso \$Persona1, y devolverte una cadena de texto. </p>";
echo "<p>Podemos personalizarla como queramos para mostrar información o incluso ejecutar código. En caso de usar __toString, podría dar un fallo de que no puede convertirlo en String, pero gracias a esta función es posible.</p>";
echo "<p>Ejemplo de poner <b>echo \$Persona1</b> :</p>";

$Persona1 = new Persona("Juan","12345678A","Masculino","85.3","1.75");
echo $Persona1;

echo "<h3>Funcion __toString en clase Trabajador</h3>";

echo "<p>Aquí funciona casi igual que en la clase persona, pero concatenamos el texto que retorna de la clase Persona y le ponemos el atributo especial de Trabajador.</p>";
echo "<p>Ejemplo de poner <b>echo \$Trabajador1</b> :</p>";

$Trabajador1 = new Trabajador("David","87654321A","Masculino","72.8","1.72","OPGames");
echo $Trabajador1

?>
</body>
</html>