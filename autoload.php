<?php
 
spl_autoload_register('autoloader');

function autoloader( $NombreClase ) {
    include_once 'config/' . $NombreClase . '.php';
}

?>