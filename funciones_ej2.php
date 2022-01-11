<?php
// Aquí se realizará la definición de la clase y constructor Persona
class Persona{

    protected $nombre;
    protected $dni;
    protected $sexo;
    protected $peso;
    protected $altura;

    // Constructor del objeto Persona con sus variables
    public function __construct($nombre, $dni, $sexo, $peso, $altura)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }
    // Fin constructor del objeto Persona

    // Get y setter (consultor y modificador) de cada una de las variables

    // Variable nombre

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

    // Variable DNI

        public function getDNI(){
            return $this->dni;
        }

        public function setDNI($dni){
            $this->dni = $dni;
        }

    // Variable sexo

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

    // Variable peso

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso){
            $this->peso = $peso;
        }

    // Variable altura

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

    // Fin Get y Setters de las variables

    // Funcion mostrar en el que muestre una línea con todos los atributos

    public function Mostrar(){
        return "$this->nombre, con DNI $this->dni, sexo $this->sexo, $this->peso kg y $this->altura m";
    }

}

// Clase Trabajador, subclase de Persona 
class Trabajador extends Persona{
    protected $nombreEmpresa;
    

    // Constructor de Trabajador, implementado el de Persona en este.
    public function __construct($nombre, $dni, $sexo, $peso, $altura, $nombreEmpresa)
    {
        Persona::__construct($nombre, $dni, $sexo, $peso, $altura);
        $this->nombreEmpresa = $nombreEmpresa;
    }
    // Fin Constructor de Trabajador

    // Get y Setter para la nueva variable de Trabajador

    public function getNombreEmpresa(){
        return $this->nombreEmpresa;
    }

    public function setNombreEmpresa($nombreEmpresa){
        $this->nombreEmpresa = $nombreEmpresa;
    }

    // Fin definicion de las funciones del Get Y Setter

    // Función Mostrar en Trabajador, que se encarga de llamar a la función que hay en Persona.

    public function Mostrar()
    {
        return Persona::Mostrar();
    }
    // Función para mostrar toda la info, incluyendo la de la clase Persona.

    public function MostrarTodo(){
        return "$this->nombre, trabajador de $this->nombreEmpresa, con DNI $this->dni, sexo $this->sexo, $this->peso kg y $this->altura m.";
    }
}



?>