<?php
class Dos_ruedas extends Vehiculo{
    // Declaración de variables
    private int $cilindrada;

    // Constructor de la clase Dos_ruedas
    public function __construct(string $color, float $peso,  int $cilindrada)
    {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
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
    

    // Getter para cilindrada
    public function Get_Cilindrada()
    {
        return $this->cilindrada;
    }

    // Setter para cilindrada
    public function Set_Cilindrada($V)
    {
        $this->cilindrada = $V;
    }

    // Adder para cilindrada
    public function Add_Cilindrada($V)
    {
        $this->cilindrada = $this->cilindrada + $V;
    }

    // Función poner_gasolina(litros)
    public function poner_gasolina(float $litros)
    {
        $this->peso = $this->peso + ($litros * 1.5);
    }

    // Función add_persona del A4
    public function add_persona(float $peso_persona)
    {
        $this->peso = $this->peso + $peso_persona + 1.5;
    }
}
?>