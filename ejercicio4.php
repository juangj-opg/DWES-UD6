<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - POO - Getters y Setters</title>
</head>
<body>
<?php
include "cabecera.php";
echo "<h2>Ejercicio 4</h2>";

include_once "funciones_ej4.php";

echo "<h3>Creación clase Vivienda y obtener datos</h3>";
echo "<p>Se ha creado una nueva clase llamada Vivienda con dos atributos. También ahora estamos usando dos nuevos métodos especiales, __get() y __set().</p>";
echo "<p>Ambos métodos son para obtener o introducir información, pero reduciendo considerablemente el código.</p>";
echo "<p>Ejemplo de obtención de datos (Ej. de código: \$Vivienda1->tipoVivienda):</p>";

$Vivienda1 = new Vivienda("Piso",40500.50);
echo $Vivienda1->tipoVivienda." - ".$Vivienda1->valorMercado. "€ ";

echo "<h3>Modificación de datos</h3>";
echo "<p>También, como hemos mencionado, hemos añadido __set() para setear una nueva información.</p>";
echo "<p>Pero este tiene algo diferente, le hemos puesto una condición sobre valorMercado, de que si es menor que 0, no cambiará su valor.</p>";

echo "<p><b>Estado actual</b>:<br> $Vivienda1->tipoVivienda - $Vivienda1->valorMercado";

echo "<p>Cambiandole el <b>tipo de Vivienda</b> a Chalet.<br>";
$Vivienda1->tipoVivienda="Chalet";
echo "<b>Estado actual</b>:<br> $Vivienda1->tipoVivienda - $Vivienda1->valorMercado";

echo "<p>Cambiandole el <b>valor del Mercado</b> a 80000.<br>";
$Vivienda1->valorMercado="80000";
echo "<b>Estado actual</b>:<br> $Vivienda1->tipoVivienda - $Vivienda1->valorMercado";

echo "<p>Cambiandole el <b>valor del Mercado</b> a -50000.<br>";
$Vivienda1->valorMercado="-50000";
echo "<br><b>Estado actual</b>:<br> $Vivienda1->tipoVivienda - $Vivienda1->valorMercado";

echo "<p>Cómo podemos observar en el anterior cambio, al ser menos de 0, no se realiza ningún cambio sobre la vivienda.</p>";


?>
</body>
</html>