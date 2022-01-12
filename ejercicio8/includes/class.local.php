<?php
class Local{

    // Definición de las variables

    private string $ciudad;
    private string $calle;
    private int $numeroDePlantas;
    
    // Duda sobre las dos variables de Dimensiones, area y dimensiones
    private Dimensiones $dimensiones;

    // Constructor de Local y sus condiciones

    public function __construct(string $ciudad, string $calle, int $numeroDePlantas, Dimensiones $dimensiones)
    {
        if(is_string($ciudad))
            $this->ciudad = $ciudad;
        else {
            die();
        }
        
        if(is_string($calle))
            $this->calle = $calle;
        else
            die();
        
        if(is_int($numeroDePlantas) && $numeroDePlantas > 0 && $numeroDePlantas < 11)
            $this->numeroDePlantas = $numeroDePlantas; 
        else
            die();

        if($dimensiones instanceof Dimensiones)
            $this->dimensiones = $dimensiones;
        else
            die();
    }

    // Setters y Getters

    public function __get($variable)
    {
        return $this->$variable;
    }

    // Consultos únicamente de la propiedad Dimensiones
    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    public function __set($variable, $valor)
    {
        $this->$variable = $valor;
    }

    // Funcion __toString()
    public function __toString()
    {
        return "<p>Ciudad: $this->ciudad<br></p><p>Calle: $this->calle</p><p>Plantas: $this->numeroDePlantas</p><p>Dimensiones: <ul>$this->dimensiones</ul></p>";
    }
    
    public function ___clone(){
        $this->dimensiones = clone $this->dimensiones;
    }
}
?>