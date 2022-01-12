<?php
class Local{

    // Definición de las variables

    private string $ciudad;
    private string $calle;
    private int $numeroDePlantas;
    
    // Duda sobre las dos variables de Dimensiones, area y dimensiones
    private Dimensiones $dimensiones;

    // Constructor de Local

    public function __construct($ciudad, $calle, $numeroDePlantas, $dimensiones)
    {
        $this->ciudad = $ciudad;
        $this->calle = $calle;
        $this->numeroDePlantas = $numeroDePlantas;
        $this->dimensiones = $dimensiones ;
    }

    // Setters y Getters

    public function __get($variable)
    {
        return $this->$variable;
    }

    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    public function __set($variable, $valor)
    {
        $this->$variable = $valor;
    }

    // Funcion __toString()
    // Incompleto, falta lo de las dimensiones.
    public function __toString()
    {
        return "<p>Ciudad: $this->ciudad<br></p><p>Calle: $this->calle</p><p>Plantas: $this->numeroDePlantas</p><p>Dimensiones: ($this->dimensiones)<br></p>";
    }
    
    public function ___clone(){
        $this->dimensiones = clone $this->dimensiones;
    }
}
/*
$obj = new Local("a","a",3,new Dimensiones(10,15,3));
var_dump($obj);
echo $obj;
*/
?>