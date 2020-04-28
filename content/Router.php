<?php 

/**
 * 
 */
class Router
{
	private $routes;

	public function run() {

		/*Контроллер и action по умолчанию*/
		$controllerName = "IndexController";
		$modelName = "IndexModel";
		$action = "actionIndex";

		$routes = explode("/", $_SERVER['REQUEST_URI']);

		/*Определяем контроллер*/
		if($routes[1] != '') {
			$controllerName = ucfirst($routes[1]. "Controller");
			$modelName = ucfirst($routes[1]. "Model");
		}

		require_once CONTROLLER_PATH . $controllerName . ".php"; //IndexController.php
		require_once MODEL_PATH . $modelName . ".php"; //IndexModel.php

		if(isset($routes[1]) && $routes[1] !='') {
			$action = "action". $routes[1];
		}

		$controller = new $controllerName();
		if(isset($routes[2]))
		{
			$controller->$action($routes[2]);
		}else if(isset($routes[3]))
		{
			$controller->$action($routes[3]);
		}else
		{	
			$id = $routes[1];
			$controller->$action($id);
		}

	}

	public function errorPage() {

	}
}