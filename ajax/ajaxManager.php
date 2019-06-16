<?php namespace ajax;
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
use app\manager\Loader;

class ajaxManager
{
	function __construct()
	{
		new Core();
	}
	public function ejecutar($modelo){
		if (file_exists(__DIR__.'/' . $modelo . '.php')) {
        	require(__DIR__.'/'. $modelo .'.php');
        	$datos = [];
			// Registramos todas las variables Post
			foreach($_POST as $nombre_campo => $valor){
			   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
			   $datos[$nombre_campo] = $valor;
			   eval($asignacion);
			}
			$modelo = "ajax\\".$modelo;
			$om = new $modelo();
        	return $om->Retorno($datos);
      	} else {
      		$data['error'] = "File not found";
      		return $data;
      	}
	}
}
