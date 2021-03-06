<?php namespace app\clases;
	class View {
		public function __construct(){

		}
		public static function renderPage($ruta , $listapage = "",$l = ""){
			// $datos = $l;
			$ruta = self::verificarRuta($ruta);
			// $loader = new \Twig_Loader_Filesystem(__DIR__.'/../../resources/views/');
			// $twig = new \Twig_Environment($loader,array(
			// 	'debug' => false,
			// 	'cache' => false
			// ));
			// $twig->addGlobal('BASE', BASE);
			// $twig->addGlobal('WEBSITE', WEBSITE);
			// $twig->addGlobal('AUTHOR', AUTHOR);
			// $twig->addGlobal('DIR_LIBS', DIR_LIBS);

			// // $layout = $twig->load(__DIR__.'/../../../resources/views/base.twig');
			// // print_r($datos);
			// $twig->display($ruta.'twig',compact('datos'));
			PugToTwig::convert(file_get_contents($ruta.'my-pug-input.pug'));
		}
		public function render($c ,$p , $datos=""){
			$datos=$datos;
			$loader = new Twig_Loader_Filesystem('../resources/views/');
			$twig = new Twig_Environment($loader,array(
				'debug' => true,
				'cache' => '../resources/cache/'
			));
			$twig->addGlobal('BASE', BASE);
			// $layout = $twig->load(__DIR__.'/../../../resources/views/base.twig');
			// print_r($datos);
			$twig->display($c.'/'.$p.'.twig',compact('datos'));
		}

		public static function verificarRuta($ruta){
			try {
				if (!empty($ruta)) {
					$arrayData = explode(".", $ruta);
					$arrayCant = count($arrayData);
					$newArrayData = [];
					$ruta = $arrayData[0];
					if ($arrayCant > 1) {
						for ($i=0; $i+1 < $arrayCant; $i++) {
							$ruta .= '/'.$arrayData[$i+1];
						}
					}
				return $ruta.'.';
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}
 ?>