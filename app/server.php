<?php namespace app;
/**
* 
*/
class Server
{
	
	public static function Time()
	{
		$tiempo_inicio = microtime(true);
		DEFINE('TIME_INICIO', $tiempo_inicio);		
	}
	public static function endTime()
	{
		$tiempo_fin = microtime(true);
		$total = bcsub($tiempo_fin, TIME_INICIO, 3);
		$html = "<div style='background: black;text-align:center;color:white;'><p style='margin:0;'>";
		$html .= "Esta página fue generada en {$total} segundos. </p></div>";
		print($html);
	}
}