<?php namespace app;
/**
* 
*/
class Server
{
	
	function __construct()
	{
		
	}
	public static function Time($value='')
	{
		$tiempo_inicio = microtime(true);
		DEFINE('TIME_INICIO', $tiempo_inicio);		
	}

	public static function endTime($value='')
	{
		$tiempo_fin = microtime(true);
		$total = bcsub($tiempo_fin, TIME_INICIO, 3);
		echo "<div style='background: black;text-align:center;color:white;'>
			<p style='margin:0;'>Esta página fue generada en {$total} segundos. </p>
			</div>";
	}
}