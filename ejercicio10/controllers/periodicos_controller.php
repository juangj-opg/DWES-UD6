<?php 
    
    // Ejercicio 12

    function listar()
    {
        // Se incluye el modelo
        require "models/periodicos_model.php"; 

        $periodicos = getPeriodicos();
        // La vista recibe un array para mostrarlo por pantalla
        include "views/periodicos_listar.php";
    }    
?>