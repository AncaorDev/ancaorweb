<?php namespace app\clases;
/**
* 
*/
class Log 
{
	static function error($texto,$numero = 'err :: ') { 
		try {
			$path = __DIR__.'/../log/error-'.date('Y-m-d').'.log'; 
			$ddf  = fopen($path,'a+'); 
			$data = "[".date("r")."] ".__LINE__ ." $numero :$texto\r\n";
			if (!fwrite($ddf,$data)) {
				throw new \Exception("No se creo archivo Log");	
			} 
			fclose($ddf); 
		} catch (Exception $e) {
			echo  $e->getMessage();
		}
	} 
	// set_error_handler('error'); 
}