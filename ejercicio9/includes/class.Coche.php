<?php
class Coche extends Cuatro_ruedas{
    // Declaración de las variables
    private int $numero_cadenas_nieve;

    // Constructor de la clase Coche
    public function __construct(string $color, float $peso, int $numero_puertas, int $numero_cadenas_nieve)
    {
        parent::__construct($color, $peso, $numero_puertas);
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }

    // Función add_cadenas(num)
    public function add_cadenas(int $num)
    {
        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve + $num;
    }

    // Función quitar_cadenas_nieve(num)
    public function quitar_cadenas_nieve(int $num)
    {
        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve - $num;
    }
}
?>