<?php
abstract class Vehiculo{
    // Declaración de variables
    private string $color;
    private float $peso;
    
    // Constructor de la clase Vehiculo
    public function __construct(string $color, float $peso)
    {
        $this->color = $color;
        $this->peso = $peso;            
    }

    // Setter (Modificador)
    public function __set($variable, $valor)
    {
        $this->$variable = $valor;
    }

    // Getter (Consultador)
    public function __get($variable)
    {
        //return $this->$variable;
        if(property_exists(get_class(),$variable))
            return $this->$variable;
    }

    // Función circula()
    public function circula()
    {
        echo "El vehículo está circulando.";
    }
    
    // Función add_persona
    abstract function add_persona(float $peso_persona);

    // A4 - Función ver_atributo
    // Por ver: Si es coche, dos ruedas, cuatro ruedas, camion..
    // Saltado por ahora
    static public function ver_atributo($obj)
    {
        echo "<p>";
        if(isset($obj->color))
            echo "Color: ".$obj->color."<br>";
        if(isset($obj->peso))
            echo "Peso: ".$obj->peso."<br>";
        if($obj->numero_puertas != null)
            echo "Nº de puertas:: ".$obj->numero_puertas."<br>";
        if($obj->cilindrada != null)
            echo "Cilindrada: ".$obj->cilindrada."<br>";
        if($obj->numero_cadenas_nieve != null)
            echo "Nº de cadenas de nieve: ".$obj->numero_cadenas_nieve."<br>";
        if($obj->longitud != null)
            echo "Longitud: ".$obj->longitud."<br>";
        

        echo "</p>";

    }
}
?>