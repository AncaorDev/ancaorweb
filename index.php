<?php
require("base/base.php");
	if (isset($_GET['page'])) {
		if (file_exists('base/controller/' . strtolower($_GET['page']) . 'Controller.php')) {
			include('base/controller/' . strtolower($_GET['page']) . 'Controller.php');
		} else {
			include('base/controller/errorController.php');
		}
	} else {
		include('base/controller/indexController.php');
	}
?>
