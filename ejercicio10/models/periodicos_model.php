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


?>