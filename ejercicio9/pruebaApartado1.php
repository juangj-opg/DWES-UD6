<?php
/* 
*  Ejercicio 9 - Apartado 1
*  Desarrolla las clases del esquema dentro de la carpeta includes 
*  dentro del proyecto. Los métodos se consideran públicos y los atributos privados. 
*  El resto de ficheros (pruebaApartadoX.php) se deberán ubicar fuera de la carpeta includes.
*/ 
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});
?>