<?php
class Vehiculo{
    // Declaración de variables
    private string $color;
    private float $peso;
    
    // Constructor de la clase Vehiculo
    public function __construct(string $color, float $peso)
    {
        $this->color = $color;
        $this->peso = $peso;            
    }

    // Setter (Modificador)
    public function __set($variable, $valor)
    {
        $this->$variable = $valor;
    }

    // Getter (Consultador)
    public function __get($variable)
    {
        return $this->$variable;
    }

    // Función circula()
    public function circula()
    {
        echo "El vehículo está circulando.";
    }

    // Función add_persona
    public function add_persona(float $peso_persona)
    {
        $this->peso = $this->peso + $peso_persona;
    }
}
?>