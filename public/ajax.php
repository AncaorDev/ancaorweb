<?php 

if ($_POST) {  
    if (isset($_GET['mode']) ? $_GET['mode'] : null) {
    	$m = $_GET['mode'];
    	require('../ajax/ajaxManager.php');
    	$ajax = new ajax\ajaxManager();    	
      	$ajax -> ejecutar('ajax'.ucfirst($m));
    } 
} else {
   echo "Acceso Denegado";
}

