<?php
//cargamos las librerias base

require_once 'config/config.php';
//TODO: Corregir este codigo con autocarga de spl

//Carga de las clases de forma tradicional
/* require_once 'libs/Core.php'; //rutas o enrutador del framework 
require_once 'libs/Dbase.php'; //orm del framework
require_once 'libs/Controller.php'; //Controlador base*/

spl_autoload_register(function($nombreClase){
    require_once 'libs/' . $nombreClase . '.php';
});

