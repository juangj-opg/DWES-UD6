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
    
    // Ejercicio 13

    function obtener()
    {
        
        // Se incluye el modelo
        require "models/periodicos_model.php";

        // Para conseguir la ID
        if ( !empty ( $_GET[ 'id' ] ) )
        {
            $id = $_GET [ 'id' ];
            $periodico = getPeriodico($id); // En el modelo, se encuentra la función que te retorna el libro que se busca 
        } 
        else
            throw new Exception ('No existe ningun periódico con esa ID.');
        

        // La vista recibe un array para mostrarlo por pantalla
        include "views/periodicos_obtener.php";
    }
?>