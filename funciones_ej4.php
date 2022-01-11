<?php

// Ejercicio 4 - Getter y Setters
class Vivienda{
    protected string $tipoVivienda;
    protected float $valorMercado;

    // Constructor de la clase Vivienda con sus dos variables
    public function __construct(string $tipoVivienda , float $valorMercado){
        $this->tipoVivienda = $tipoVivienda;
        $this->valorMercado = $valorMercado; 
    }
    // Fin Constructor

    // Get y setter
    public function __get($variable){
        return $this->$variable;
    }

    public function __set($variable, $valor){
        // Condicional para valorMercado con Switch si es menor que 0.
        if ($variable == "valorMercado"){
            switch($valor){
                case ($valor <= 0):
                    echo "El valor es menor que 0, no se hará ningún cambio.";
                    break;
                case ($valor > 0):
                    $this->$variable=$valor;
            }
        } else {
            $this->$variable=$valor;
        }
    }
    // Fin Get y Setter

}
?>