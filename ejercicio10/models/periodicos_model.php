<?php
function getConnection(){
    $user='developer';
    $password = 'developer';
    $db = new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password); 
    return $db;   
}

// Ejercicio 12

function getPeriodicos(){
    $db = getConnection();
    $result = $db->query('SELECT nombre, fecha FROM periodicos');
    $perodicos = array();
    while ($periodico = $result->fetch())
        $periodicos[] = $periodico;
    return $periodicos;
}

// Ejercicio 13

function getPeriodico($id){
    $db = getConnection();
    $result = $db->query('SELECT nombre, fecha FROM periodicos WHERE id='.$id);
    $result->execute();
    $periodico = $result->fetch(\PDO::FETCH_ASSOC);
    return $periodico;
}

?>