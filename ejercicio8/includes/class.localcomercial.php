<?php
class LocalComercial extends Local{ 
    // Definición de las variables
    private string $social;
    private string $numeroLicencia;

    // Función __toString()
    // Falta los datos de Local
    public function __toString()
    {
        return "<p>Razón Social: $this->social<br></p><p>Número de Licencia: $this->numeroLicencia<br>".parent::__toString()."</p>";
    }

    // Constructor clase LocalComercial
    public function __construct($ciudad, $calle, $numeroDePlantas, $area, string $social, string $numeroLicencia)
    {
        parent::__construct($ciudad, $calle, $numeroDePlantas, $area);
        $this->social = $social;
        $this->numeroLicencia = $numeroLicencia;
    }
}
?>