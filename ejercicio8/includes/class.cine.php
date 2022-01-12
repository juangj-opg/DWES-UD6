<?php
class Cine extends LocalComercial{
    // Única variable que usa Cine
    private int $aforoSala;

    // Función __toString()
    public function __toString()
    {
        return "<p>".parent::__toString()."Aforo: $this->aforoSala</p>";
    }

    // Constructor de la clase Cine
    public function __construct(string $ciudad, string $calle, int $numeroDePlantas, Dimensiones $dimensiones, string $social, string $numeroLicencia, int $aforoSala)
    {
        parent::__construct($ciudad, $calle, $numeroDePlantas, $dimensiones, $social, $numeroLicencia);
        
        if (is_int($aforoSala) && $aforoSala > 0)
            $this->aforoSala = $aforoSala;
        else
            die();
    }
}
?>