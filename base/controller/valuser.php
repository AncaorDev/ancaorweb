	<?php
	/*Documentado por Anthony para ancaor.com
		consultas a ancaor_s1@hotmail.com
	Espero que les sirva este trabajo basico
	pueden modificarlo a su gusto.*/
	
	//Iniciamos una sesión para trabajar con variables de sesión
	session_start();
	//Obtenemos los datos enviados POST , en este caso mediante AJAX-JQUERY
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	//Validacion en casos que el navegador no reconozca el required de HTML5 - (Caso raro)
	//Puede probarse quitando el required de los input(s) del formulario
	if ($user=="" or $user==null && $pass=="" or $pass==null){
		echo "<h2>Por favor ingrese datos</h2>";
	}
	else {
		//Llamamos al archivo de nuestra conexión
		require_once '../models/gestionBD.php';
		//Nos conectamos
		$conbd=gestionBD::getInstance();
		//Buscamos el usuario
		$buscauser="SELECT * FROM user WHERE nom_User='$user' AND pass_user='$pass'";
		//Utilizamos nuestros metodos creados
			//$conbd->ejecutar($consulta) Ejecutara la consulta y lo almacenara en una variable
		$consul_user=$conbd->ejecutar($buscauser);
			//$conbd->obtener_rows($consulta-ejecutada) Obtiene la cantidad de filas
		$numuser=$conbd->obtener_rows($consul_user);
			//$conbd->obtener_array($consulta-ejecutada) Obtiene los datos de la consulta
		$array_user=$conbd->obtener_array($consul_user);

		if($numuser==0){
		// Si no encuentra ningun dato, quiere decir que no existe ningun usuario
		echo"<h3>".$user,$pass."</h3>";
		echo "<h3> Usuario o Contraseña Incorrecta  <br><span style='font-size:14px;'>Intentelo Nuevamente</span>  </h3>";
		} else {
		//de lo contario
		//Si es que lo encuentra agregamos un array con los datos
		$iduser=$array_user[0];
		$nickuser=$array_user[1];
		//$passuser=$array_user[2];
		$tipouser=$array_user[3];
		//Asignamos datos a nuestras variables 	de sesión
		$_SESSION['logged'] = 'yes';
		$_SESSION['nickuser'] = $nickuser;
		$_SESSION['iduser'] = $iduser;
		$_SESSION['tipouser'] = $tipouser;
		echo "2";
		}
}?>
