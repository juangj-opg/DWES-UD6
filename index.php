<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<?php
include "cabecera.php";
?>
<h1 style="text-align: center;">Índice y explicación de los ejercicios del UD6</h1>
<h2>Ejercicio 1 - POO - Constructores</h2>
<ul>
    <li><a href="./ejercicio1.php"><h3 class="nopad">ejercicio1.php</h3></a></li>
    <ul>
        <li>Desarrollar el código PHP necesario para crear una clase de nombre <b>Persona</b> que almacene las siguientes variables:
        <ul>
            <li>Nombre</li>
            <li>DNI</li>
            <li>Sexo</li>
            <li>Peso</li>
            <li>Altura</li>
        </ul>   
        <li>Crea un constructor que reciba todos los valores necesario para inicializar el objeto.</li>
        <li>Añade los métodos <b>consultores</b> y </b>modificadores</b> de todos los atributos.</li>
        <li>Crea una función <b>mostrar</b> que muestre una línea con todos los atributos.</li>
        <li>Dentro del archivo, pero fuera de la clase, llama al constructor de la clase y al método mostrar.</li>
        <li>Llama a los métodos modificadores y vuelve a invocar al método mostrar.</li>
    </ul>
</ul>

<h2>Ejercicio 2 - POO - Subclases</h2>
<ul>
    <li><a href="./ejercicio2.php"><h3 class="nopad">ejercicio2.php</h3></a></li>
    <ul>
        <li>Utiliza el código del <b>ejercicio1.php</b> para crear una clase <b>Trabajador</b> que extienda a <b>Persona</b></li>
        <li>La clase Trabajador tendrá un único atirbuto que será el <b>nombre de la empresa</b> (nombreEmpresa).</li>
        <li>Realizar los Get y Set necesarios.</li>
        <li>Crea un método Mostrar que llame al método Mostrar de la clase padre (Persona).</li>
        <li>Crea un método MostrarCompleto que muestre toda la información del trabajador</li>
        <li>Probar ambos métodos.</li>
    </ul>
</ul>

<h3>Ejercicio 3 - POO - Métodos especiales</h3>
<ul>
    <li><a href="./ejercicio3.php"><h3 class="nopad">ejercicio3.php</h3></a></li>
    <ul>
        <li>Utiliza el código del <b>ejercicio2.php</b> para crear un método especial <b>__toString</b> en la clase <b>Persona</b>, de forma que devuelva una cadena con todos los atributos.</li>
        <li>Crea un objeto <b>Persona</b> y muestralo con echo.</li>
        <li>Crea otro método especial __toString en la clase <b>Trabajador</b> de forma que llame al método __toString de <b>Persona</b> y concatene la empresa del trabajador.</li>
        <li>Crea un objeto trabajador y muestralo con echo.</li>
    </ul>
</ul>


   


</body>
</html>