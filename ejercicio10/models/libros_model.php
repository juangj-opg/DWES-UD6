<?php
function getConnection(){
    $user='developer';
    $password = 'developer';
    $db = new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password); 
    return $db;   
}

// Ejercicio 10

function getLibros(){
    $db = getConnection();
    $result = $db->query('SELECT titulo, precio FROM libros');
    $libros = array();
    while ($libro = $result->fetch())
        $libros[] = $libro;
    return $libros;
}

// Ejercicio 11

function getLibro($id){
    $db = getConnection();
    $result = $db->query('SELECT titulo, precio FROM libros WHERE id='.$id);
    $result->execute();
    $libro = $result->fetch(\PDO::FETCH_ASSOC);
    return $libro;
}

?>