<?php
    spl_autoload_register(function($clase){
        require_once('./includes/class.'.$clase.'.php');
    });
    $cines[0] = new Cine('Alicante', 'Calle 1', 1, new Dimensiones(10., 10., 10.),'Razon 1', 'C0001A', 10);
    $cines[1] = new Cine('Alicante', 'Calle 2', 2, new Dimensiones(20., 20., 20.),'Razon 2', 'C0002B', 20);
    $cines[2] = new Cine('Alicante', 'Calle 3', 3, new Dimensiones(30., 30., 30.),'Razon 3', 'C0001C', 30);

    foreach ($cines as $cine) {
        echo $cine."<br>";
    }
    
   $copia = clone $cines[1];

   $copia->dimensiones->alto = 70.;
   $copia->dimensiones->ancho = 50.;
   $copia->dimensiones->largo = 30.;

   echo $copia;
?>
