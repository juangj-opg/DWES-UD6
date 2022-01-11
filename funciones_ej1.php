<?php
// Aquí se realizará la definición de la clase y constructor Persona
class Persona{

    // Constructor del objeto Persona con sus variables
    public function __construct($nombre, $dni, $sexo, $peso, $altura)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }
}



?>