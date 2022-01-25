<?php 
    
    // Ejercicio 10

    function listar()
    {
        // Se incluye el modelo
        require "models/libros_model.php"; 
        // En $libros tenemos un array con todos los libros gracias al modelo
        $libros = getLibros();
        // La vista recibe un array para mostrarlo por pantalla
        include "views/libros_listar.php";
    }

    // Ejercicio 11

    function obtener()
    {
        
        // Se incluye el modelo
        require "models/libros_model.php";

        // Para conseguir la ID
        if ( !empty ( $_GET[ 'id' ] ) )
        {
            $id = $_GET [ 'id' ];
            $libro = getLibro($id); // En el modelo, se encuentra la función que te retorna el libro que se busca 
        } 
        else
            throw new Exception ('No existe ningun libro con esa ID.');
        

        // La vista recibe un array para mostrarlo por pantalla
        include "views/libros_obtener.php";
    }

    
?>