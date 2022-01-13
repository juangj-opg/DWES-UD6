<?php
class Camion extends Cuatro_ruedas{
    // Declaración de variables
    private float $longitud;

    // Constructor de la clase Camion
    public function __construct(float $longitud)
    {
        $this->longitud = $longitud;
    }

    // Función add_remolque(longitud_remolque);
    public function add_remolque(float $longitud_remolque)
    {
        
    }
}
?>