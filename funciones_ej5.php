<?php
// Interfaz que venía en el ejercicio 5
interface IEquipoFutbol{
    public function getNumeroJugadores();
    public function juegaPartido();
}

// Segunda interfaz que pide el ejercicio

interface ICampeonato{
    public function getNombreCampeonato();
}

// Clase principal EquipoFutbol que pide el ejercicio con sus modificaciones
class EquipoFutbol implements IEquipoFutbol, ICampeonato{
    
    protected string $nombreEquipo;
    protected int $numeroJugadores;

    protected string $nombreCampeonato; // Añadido al añadir la segunda interfaz

    public function __construct($nombreEquipo, $numeroJugadores, $nombreCampeonato)
    {
        $this->nombreEquipo = $nombreEquipo;
        $this->numeroJugadores = $numeroJugadores;
        $this->nombreCampeonato = $nombreCampeonato;
    }

    public function getNumeroJugadores()
    {
        return $this->numeroJugadores;
    }

    public function juegaPartido()
    {
        return $this->nombreEquipo." - VICTORIA";
    }

    // Añadido por la interfaz ICampeonato
    public function getNombreCampeonato()
    {
        return $this->nombreCampeonato;
    }
}
?>