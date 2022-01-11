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

<h2>Ejercicio 3 - POO - Métodos especiales</h2>
<ul>
    <li><a href="./ejercicio3.php"><h3 class="nopad">ejercicio3.php</h3></a></li>
    <ul>
        <li>Utiliza el código del <b>ejercicio2.php</b> para crear un método especial <b>__toString</b> en la clase <b>Persona</b>, de forma que devuelva una cadena con todos los atributos.</li>
        <li>Crea un objeto <b>Persona</b> y muestralo con echo.</li>
        <li>Crea otro método especial __toString en la clase <b>Trabajador</b> de forma que llame al método __toString de <b>Persona</b> y concatene la empresa del trabajador.</li>
        <li>Crea un objeto trabajador y muestralo con echo.</li>
    </ul>
</ul>

<h2>Ejercicio 4 - POO - Getters y Setters</h2>
<ul>
    <li><a href="./ejercicio4.php"><h3 class="nopad">ejercicio4.php</h3></a></li>
    <ul>
        <li> Desarrolla un nuevo código PHP para implementar la clase <b>Vivienda</b>, que contendrá 2 atributos:</li>
        <ul>
            <li><b>tipoVivienda</b>, que será una cadena de texto (String).</li>
            <li><b>valorMercado</b>, que será un número con decimales (Float o Double).</li>
        </ul>
        <li>Implementa los métodos especiales <b>__get()</b> y <b>__set()</b></li>
        <li>Módifica el método <b>__set()</b>, de manera que si el parámetro a modificar es valorMercado y el nuevo valor indicado es menor que 0, <b>no se actualice</b>. Utiliza la estructura switch.</li>
    </ul>
</ul>

<h2>Ejercicio 5 - POO - Interfaces</h2>
<ul>
    <li><a href="./ejercicio5.php"><h3 class="nopad">ejercicio5.php</h3></a></li>
    <ul>
        <li>A partir de la interfaz del final, desarrolla la clase <b>EquipoFutbol</b> que inmplemente dicha interfaz.</li>
        <ul>
            <li>Debe tener un atributo que sea el número de jugadores en plantilla</li>
            <li>Debe tener un atributo que sea el nombre del equipo</li>
            <li>Tendrá un método <b>juegaPartido</b> que devovlerá por pantalla el nombre del equipo y la palabra 'VICTORIA'.</li>
        </ul>
        <li>Desarrolla otra interfaz que sea <b>ICampeonato</b>, y en esa interfaz:</li>
        <ul>
            <li>Incluye un método que devuelva el nombre del campeonato.</li>
            <li>Modifica la clase <b>EquipoFutbol</b> para que también implemente la interfaz ICampeonato</li>
        </ul>
        <li><b>Interfaz IEquipoFutbol:</b></li>
        interface IEquipoFutbol{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;public function getNumeroJugadores();<br>
        &nbsp;&nbsp;&nbsp;&nbsp;public function juegaPartido();<br>
        }
    </ul>
</ul>

<h2>Ejercicio 6 - POO - Comprobar interfaz</h2>
<ul>
    <li><a href="./ejercicio6.php"><h3 class="nopad">ejercicio6.php</h3></a></li>
    <ul>
        <li>Utiliza el operador <b>instanceof</b> para comprobar que la clase EquipoFutbol del ejercicio anterior, es instancia de las dos interfacaes que implementa.</li>
    </ul>
</ul>

<h2>Ejercicio 7 - Jerarquía de clase</h2>
<ul>
    <li><a href="./ejercicio7.php"><h3 class="nopad">ejercicio7.php</h3></a></li>
    <ul>
        <li>Desarrolla el código PHP necesario para realizzar la siguiente jerarquía de clases.</li>
        <ul>
            <li><b>FiguraGeometrica</b> y sus métodos son abstactos.</li>
            <li><b>FiguraGeometrica</b> incluye un atributo que es el color</li>
            <li>El método <b>Dibuja</b> muestra por pantalla el tipo de figura y el color.</li>
            <li>El método <b>Area</b> devuelve el area de la figura geométrica, añade los atributos necesarios a cada clase. (Por ejemplo, para el cuadrado, tendremos que tener el tamaño del lado)</li>
            <li>Haz pruebas para comprobar que todo funciona correctamente y que los objetos creados son instancias de <b>FiguraGeometrica</b>.</li>
        </ul>
    </ul>
</ul>



   


</body>
</html>