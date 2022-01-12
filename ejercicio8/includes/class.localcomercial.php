<?php
class LocalComercial extends Local{ 
    // Definición de las variables
    private string $social;
    private string $numeroLicencia;

    // Función __toString()
    public function __toString()
    {
        return "<p>Razón Social: $this->social<br></p><p>Número de Licencia: $this->numeroLicencia<br>".parent::__toString()."</p>";
    }

    // Constructor clase LocalComercial
    public function __construct($ciudad, $calle, $numeroDePlantas, $dimensiones, string $social, string $numeroLicencia)
    {
        parent::__construct($ciudad, $calle, $numeroDePlantas, $dimensiones);
        if (is_string($social))
            $this->social = $social;
        else
            die();

        if (is_string($numeroLicencia))
            $this->numeroLicencia = $numeroLicencia;
        else
            die();
    }
}
?>