<?php
class Local{

    // Definición de las variables

    private string $ciudad;
    private string $calle;
    private int $numeroDePlantas;
    
    // Duda sobre las dos variables de Dimensiones, area y dimensiones
    private Dimensiones $area;

    // Constructor de Local

    public function __construct($ciudad, $calle, $numeroDePlantas, $area)
    {
        $this->ciudad = $ciudad;
        $this->calle = $calle;
        $this->numeroDePlantas = $numeroDePlantas;
        $this->area = $area ;
    }

    // Setterse y Getters

    public function __get($variable)
    {
        var_dump($this);
        foreach ($this as $V) {
            echo "$V<br>";
        }
        $this->$variable;
    }

    // Funcion __toString()
    // Incompleto, falta lo de las dimensiones.
    public function __toString()
    {
        return "<p>Ciudad: $this->ciudad<br></p><p>Calle: $this->calle</p><p>Plantas: $this->numeroDePlantas</p><p>Dimensiones: $this->area<br></p>";
    }

    // No sé como funciona.
    public function __clone()
    {
        $this->area = clone $this->Dimesiones;
    }
}
/*
$obj = new Local("a","a",3,new Dimensiones(10,15,3));
var_dump($obj);
echo $obj;
*/
?>