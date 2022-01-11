<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - POO - Comprobar Interfaz</title>
</head>
<body>
<?php
include "cabecera.php";
echo "<h2>Ejercicio 6</h2>";

include_once "funciones_ej6.php";

$Equipo = new EquipoFutbol("Sevilla", "38", "UEFA");

echo "<h3>Comprobación interfaz</h3>";
echo "<p>Con el método instanceof, podemos comprobar que las instancias que tiene la clase EquipoFutbol estén unidas.</p>";

$Pertenece = $Equipo instanceof IEquipoFutbol;
echo "<ul><li>Interfaz IEquipoFutbol: ";
var_dump($Pertenece); // True

$Pertenece = $Equipo instanceof ICampeonato;
echo "</li><li>Interfaz ICampeonato: ";
var_dump($Pertenece); // True

$Pertenece = $Equipo instanceof ILiga;
echo "</li><li>Interfaz ILiga: ";
var_dump($Pertenece); // Fals


?>
</body>
</html>