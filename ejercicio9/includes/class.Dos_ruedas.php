<?php
class Dos_ruedas extends Vehiculo{
    // Declaración de variables
    private string $cilindrada;

    // Constructor de la clase Dos_ruedas
    public function __construct(string $color, float $peso, string $cilindrada)
    {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    // Función poner_gasolina(litros)
    public function poner_gasolina(float $litros)
    {

    }
}
?>