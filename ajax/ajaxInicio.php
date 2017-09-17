<?php namespace ajax;
/**
* 
*/

use controllers\page\inicioController;

class ajaxInicio extends inicioController 
{
	public function Retorno($datos="") {
		return parent::obtenerFrase();
	}
}

