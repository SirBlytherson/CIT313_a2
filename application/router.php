<?php

	function autoload($class) {
		$pathLibs = './application/' . $class . '.class.php';
		$pathContorllers = './application/controllers/' . $class . '.class.php';
		$pathModels = './application/models/' . $class . '.class.php';
		
		if (file_exists($pathLibs)) {
			require_once $pathLibs;
		} else if (file_exists($pathContorllers)) {
			require_once $pathContorllers;
		} else if (file_exists($pathModels)) {
			require_once $pathModels;
		}
	}
	spl_autoload_register('autoload');
	
	new Controller();
?>