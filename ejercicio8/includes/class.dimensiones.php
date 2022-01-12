<?php
class Dimensiones{
    // Definición de las tres variables, alto, ancho y largo
    private float $alto;
    private float $ancho;
    private float $largo;

    // Constructor de la clase Dimensiones con las tres variables. Al pasarlo así, está llamadno al Setter.
    public function __construct(float $alto, float $ancho, float $largo)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;    
    }

    // Set y Getter
    
    public function __set($variable, $valor)
    {
        // Comprobaciones del Setter, si es Float y mayor que 1.
        if (is_float($valor)) {
            if($valor > 1){
                $this->$variable = $valor;
            } else {
                echo "El valor de la $variable es erróneo.";
            }
        } else {
            echo "El valor insertado no es un float.";
        }
    }

    public function __get($variable)
    {
        return $this->$variable;
    }

    // Funcion __toString()

    public function __toString()
    {
        return "alto=".$this->alto.",ancho=".$this->ancho.",largo=".$this->largo;
    }
}
?>