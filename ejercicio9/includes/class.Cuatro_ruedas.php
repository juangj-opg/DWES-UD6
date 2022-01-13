<?php
class Cuatro_ruedas extends Vehiculo{
    // Declaración de variables
    private int $numero_puertas;

    // Constructor de la clase Cuatro_ruedas
    public function __construct(string $color, float $peso, int $numero_puertas)
    {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

    // Getter para numero_puertas
    public function Get_Puertas()
    {
        return $this->numero_puertas;
    }

    // Función repintar(color)
    public function repintar(string $color)
    {
        $this->color = $color;
    }
}
?>