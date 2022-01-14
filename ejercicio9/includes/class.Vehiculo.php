<?php
abstract class Vehiculo{
    // Declaración de variables
    private string $color;
    private float $peso;
    static protected int $numero_cambio_color = 0;
    
    // Constructor de la clase Vehiculo
    public function __construct(string $color, float $peso, int $numero_cambio_color=0)
    {
        $this->color = $color;
        $this->peso = $peso;   
        $this->numero_cambio_color = $numero_cambio_color;         
    }

    // Setter (Modificador)
    public function __set($variable, $valor)
    {
        if ($this->peso > 2100){
            echo "El peso total del vehículo es mayor 2100kg, no se añadirá ninguna persona o algún otro tipo de peso";
            die();
        } else
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
        if(isset($obj->numero_cambio_color))
            echo "Nº de veces que ha cambiado de color: ".$obj->numero_cambio_color."<br>";
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