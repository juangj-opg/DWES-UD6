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

}




?>