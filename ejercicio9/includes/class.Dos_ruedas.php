<?php
class Dos_ruedas extends Vehiculo{
    // Declaración de variables
    private string $cilindrada;

    // Constructor de la clase Dos_ruedas
    public function __construct(string $cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }

    // Función poner_gasolina(litros)
    public function poner_gasolina(float $litros)
    {

    }
}
?>