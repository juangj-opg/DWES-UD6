<?php
class Dos_ruedas extends Vehiculo{
    // Declaración de variables
    private int $cilindrada;

    // Constructor de la clase Dos_ruedas
    public function __construct(string $color, float $peso, int $cilindrada)
    {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    // Getter para cilindrada
    public function Get_Cilindrada()
    {
        return $this->cilindrada;
    }

    // Función poner_gasolina(litros)
    public function poner_gasolina(float $litros)
    {
        $this->peso = $this->peso + ($litros * 1.5);
    }
}
?>