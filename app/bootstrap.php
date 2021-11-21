<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// carga de archivo de configuracion 
require_once 'config/config.php';
// carga de archivos helpers
require_once 'helpers/urlHelper.php';
require_once 'helpers/sessionHelper.php';



// carga automática de nuestros archivos de la carpeta libraries-> bibliotecas base
spl_autoload_register( function($className){
    require_once 'libraries/'. $className .'.php';
});

