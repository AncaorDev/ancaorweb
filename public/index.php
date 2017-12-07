<?php 

/** Archivo que controla toda la web. 
* @ Index
**/ 
require_once(realpath(__DIR__ . '/../app/server.php'));
app\Server::Time(); 
/* ---------------------------------------------------
Archivo Gestor de dependencias 
--------------------------------------------------- */
require_once(realpath(__DIR__  . '/../vendor/autoload.php'));
/* ---------------------------------------------------
  Archivo de registro y lectura de información
--------------------------------------------------- */
require_once(realpath(__DIR__ . '/../app/core.php')); 

use app\Core;
use app\manager\Request;
use app\clases\Log;

class Index 
{  
  public static function ejecutar(){    
    // Ejecutamos core para obtener toda información necesaria para el uso de la APP
    new Core();
    // Ejecutamos Request para mostrar resultados según la URL
    new Request(); 
  }
}
Index::ejecutar();
app\Server::endTime();