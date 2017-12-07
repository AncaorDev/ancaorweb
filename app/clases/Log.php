<?php namespace app\clases;
/**
* 
*/
class Log 
{
	static function error($texto,$numero = 'err ::') { 
		$path = realpath(__DIR__.'/../log/error-'.date('Y-m-d').'.log');
		$ddf  = fopen($path,'a+'); 
		$data = "[".date("r")."] $numero:$texto\r\n";
		fwrite($ddf,$data);
		fclose($ddf); 
	} 
	// set_error_handler('error'); 
}