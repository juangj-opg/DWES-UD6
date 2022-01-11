<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera</title>
</head>
<!-- Estilos usados -->
<link rel="stylesheet" href="styles.css">
<!-- WireFrame usado -->
<!-- https://wireframe.cc/sqRwM5 -->
<body>

<!-- Cabecera -->

<div id="cabecerapadre">
 <div id="cabecerahijo">
     <a href="./index.php">
        <h1 id="titulo">DWS</h1>
        <h2 id="titulo">Ejercicios UD6</h2>
    </a>
 </div>
</div>
<div id="contenedor">

<!-- Fin Cabecera -->

<!-- Menú -->
<?php
        $Ruta = $_SERVER['PHP_SELF'];
        $Nombre = explode("/",$Ruta);
        //  echo $Nombre[2]; // Es la última ruta
?>

<div style="width: 25%; float:left" id="menu">
    <ul>
    <li><a <?php if($Nombre[2] == "index.php" ) { echo "class='active'"; } ?> href="./index.php">Inicio</a></li>
    <li><a <?php if($Nombre[2] == "ejercicio1.php" ) { echo "class='active'"; } ?> href="./ejercicio1.php">Ej. 1 - POO - Constructores</a></li>
    <li><a <?php if($Nombre[2] == "ejercicio2.php" ) { echo "class='active'"; } ?> href="./ejercicio2.php">Ej. 2 - POO - Subclases</a></li>
    <li><a <?php if($Nombre[2] == "ejercicio3.php" ) { echo "class='active'"; } ?> href="./ejercicio3.php">Ej. 3 - POO - Métodos especiales</a></li>
    <li><a <?php if($Nombre[2] == "ejercicio4.php" ) { echo "class='active'"; } ?> href="./ejercicio4.php">Ej. 4 - POO - Getter y Setter</a></li>
    <li><a <?php if($Nombre[2] == "ejercicio5.php" ) { echo "class='active'"; } ?> href="./ejercicio5.php">Ej. 5 - POO - Interfaces</a></li>
    </ul>
</div>




<!-- Fin Menú -->

<!-- Contenido -->

<div style="width: 74%; float:right">
        