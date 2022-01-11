<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - POO - Subclases</title>
</head>
<body>
<?php
include "cabecera.php";
echo "<h2>Ejercicio 2</h2>";

include_once "funciones_ej2.php";

$Trabajador1 = new Trabajador("Juan","12345678A","Masculino","85.3","1.75","OPGames");

echo $Trabajador1->getNombre();

?>
</body>
</html>