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

echo "<h3>Creación de la subclase Trabajador</h3>";
echo "<p>Se ha creado una subclase llamada 'Trabajador' de la clase Persona, en el cual hemos incluido una nueva variable, el nombre de la empresa.</p>";
echo "<p>Para comprobar que funciona correctamente la nueva subclase, llamaremos a la función <b>Mostrar()</b> de <b>Persona</b> para que muestre los datos que se podían ver en el ejercicio 1:</p>";
echo "<h4>Función Mostrar()</h4>";

echo $Trabajador1->Mostrar();

echo "<h3>Mostrar todo de Trabajador</h3>";
echo "<p>La frase anterior solo mostraba los datos de la persona, pero no la nueva variable, para eso se ha creado una nueva función llamada <b>MostrarTodo()</b> dentro de <b>Trabajador</b>.</p>";

echo $Trabajador1->MostrarTodo();

?>
</body>
</html>