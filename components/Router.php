<?php

class Router{

	private $routes;//массив

	public function __construct(){
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath); 
	}

	// получения урла из адрессной строки запроса
	private function getURI(){
		if(!empty($_SERVER['REQUEST_URI'])){
			return trim($_SERVER['REQUEST_URI'], '/');
		}

	}

	public function run(){

		$uri = $this->getURI();

		foreach ($this->routes as $uriPattern => $path) {
			if(preg_match("~$uriPattern~", $uri))
			{

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				$segment = explode('/', $internalRoute);

				$controllerlName = ucfirst(array_shift($segment)).'Controller';
				
				$actionName = 'action'.ucfirst(array_shift($segment));
				
				$param = $segment;
				
				$controllerFille = ROOT . '/controllers/' . $controllerlName . '.php';
				if(file_exists($controllerFille)){
					include_once($controllerFille);
				}
				
				$controllObj = new $controllerlName();
				$result = call_user_func_array(array($controllObj, $actionName), $param);

				if ($result != null) {
					break;
				}
			}

		}
	}
}

?>