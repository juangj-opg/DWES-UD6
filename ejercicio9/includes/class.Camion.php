<?php
class Camion extends Cuatro_ruedas{
    // Declaración de variables
    private float $longitud;

    // Constructor de la clase Camion
    public function __construct(string $color, float $peso, int $numero_puertas, float $longitud)
    {
        parent::__construct($color, $peso, $numero_puertas);
        $this->longitud = $longitud;
    }

    // Getter (Consultador)
    public function __get($variable)
    {
        //return $this->$variable;
        if(property_exists(get_class(),$variable))
            return $this->$variable;
        else
            return parent::__get($variable);
    }
    
    // Getter para longitud
    public function Get_Longitud()
    {
        return $this->longitud;
    }

    // Función add_remolque(longitud_remolque);
    public function add_remolque(float $longitud_remolque)
    {
        $this->longitud = $this->longitud + $longitud_remolque;
    }
}
?>