<?php
class Cine extends LocalComercial{
    // Única variable que usa Cine
    private $aforoSala;

    // Función __toString()
    public function __toString()
    {
        return "<p>".parent::__toString()."Aforo: $this->aforoSala</p>";
    }

    // Constructor de la clase Cine
    public function __construct($ciudad, $calle, $numeroDePlantas, $area, string $social, string $numeroLicencia, $aforoSala)
    {
        parent::__construct($ciudad, $calle, $numeroDePlantas, $area, $social, $numeroLicencia);
        $this->aforoSala = $aforoSala;
    }
    // Falta el Setter y otros parametros
}

/*$obj3 = new Cine('Alicante', 'Calle 1', 1, new Dimensiones(10., 10., 10.),'Razon 1', 'C0001A', 10);
echo $obj3;*/
?>