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
    
    // Getter (Consultador)
    public function __get($variable)
    {
        //return $this->$variable;
        if(property_exists(get_class(),$variable))
            return $this->$variable;
        else
            return parent::__get($variable);
    }

    // Getter para numero_puertas
    public function Get_Puertas()
    {
        return $this->numero_puertas;
    }

    // Adder para numero_puertas
    public function Adder_Puertas(int $V)
    {
        $this->numero_puertas = $this->numero_puertas + $V;
    }

    // Función repintar(color)
    public function repintar(string $color)
    {
        $this->color = $color;
    }

    // Función add_persona
    public function add_persona(float $peso_persona)
    {
        $this->peso = $this->peso + $peso_persona;
    }
}
?>