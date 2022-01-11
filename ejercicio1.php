<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - POO - Constructores</title>
</head>
<body>
<?php
include "cabecera.php";
echo "<h2>Ejercicio 1</h2>";

include_once "funciones_ej1.php";

$Persona1 = new Persona("Juan","12345678A","Masculino","85.3","1.75");

echo "<h3>Creación del objeto Persona</h3>";
echo "<p>Se ha creado un objeto Persona a través de una clase con varios datos.</p>";

echo $Persona1->Mostrar();

echo "<h3>Modificación del objeto Persona</h3>";
echo "<p>Se ha modificado un par de parametros sobre el mismo objeto Persona.</p>";
$Persona1->setNombre("David");
$Persona1->setDNI("87654321Z");
echo $Persona1->Mostrar();
?>
</body>
</html>