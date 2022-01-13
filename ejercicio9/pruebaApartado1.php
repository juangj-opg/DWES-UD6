<?php
spl_autoload_register(function($clase){
    require_once('./includes/class.'.$clase.'.php');
});
?>