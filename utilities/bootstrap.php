<?php

// Default controller
$controller = "news";
// Default method
$action = "index";
// Default arguments sent to the method
$query = null;

if(isset($_GET['load']) && !empty($_GET['load'])) {
	// Grab the entire required path
	$params = explode("/", $_GET['load']);

	// Find out which one is the controller
	$controller = ucwords($params[0]);

	// Grab the method, if exists
	if(isset($params[1]) && !empty($params[1])) {
		$action = $params[1];
	}

	// Grab the query, if exists
	if(isset($params[2]) && !empty($params[2])) {
		$query = $params[2];
	}
}

$modelName = $controller;
// Controller's sufix
$controller .= 'Controller';

if(!class_exists($controller))
	die('Error: '. $controller .' does not exist.');

$load = new $controller($modelName, $action);

// Check if the current controller knows how to deal with this action
if(method_exists($load, $action)) {
	echo $load->$action($query);
}
else {
	die('Invalid method (action). Please check your URL.');
}

?>