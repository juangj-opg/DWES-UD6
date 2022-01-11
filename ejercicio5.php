<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - POO - Interfaces</title>
</head>
<body>
<?php
include "cabecera.php";
echo "<h2>Ejercicio 5</h2>";

include_once "funciones_ej5.php";

$Equipo = new EquipoFutbol("Sevilla", "38", "UEFA");

echo "<h3>Interfaz IEquipoFutbol</h3>";
echo "<p>Esta interfaz incluía dos métodos, juegaPartido(), el cual le hemos concatenado 'VICTORIA', y numeroJugadores().</p>";
echo $Equipo->juegaPartido() . " - ". $Equipo->getNumeroJugadores()." jugadores en toda la plantilla.";

echo "<h3>Interfaz ICampeonato</h3>";
echo "<p>Esta interfaz añade únicamente un método del cual nombra el campeonato que esté en el equipo (inventado).</p>";
echo $Equipo->getNombreCampeonato();

?>
</body>
</html>