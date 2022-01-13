<?php
// Ejercicio 9 - Apartado 1 
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});
?>