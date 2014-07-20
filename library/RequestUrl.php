<?php 

class RequestUrl {

	protected $url;
	protected $controller;
	protected $action;
	protected $defaultController = 'home';
	protected $defaultAction = 'index';
	protected $params = array();
	
	public function __construct($url) 
	{
		$this->url = $url;
		
		//team/about/cvander
		//team/about/freddier
		//team
		
		$segments = explode('/', $this->getUrl());

		$this->resolveController($segments);
		$this->resolveAction($segments);
		$this->resolveParams($segments);
		
		
	}
	
	public function resolveController(&$segments) 
	{
		$this->controller = array_shift($segments); 
		
		if (empty($this->controller)) {
			$this->controller = $this->defaultController;
		}
	}	
	
	public function resolveAction(&$segments)
	{
		$this->action = array_shift($segments);

		if (empty($this->action))
		{
			$this->action = $this->defaultAction;
			
		}
			
	}
	
	public function resolveParams(&$segments)
	{
		$this->params = $segments;
	}
	
	
	
	public function getUrl() 
	{
		return $this->url;
	}
	
	public function getController()
	{
		return $this->controller;
	}
	
	public function getControllerClassName()
	{
		return Inflector::camel($this->getController()) . 'Controller';
	}
	
	public function getControllerFilename()
	{
		return 'controllers/' . $this->getControllerClassName() . '.php';
	}
	
	public function getAction() 
	{
		return $this->action;
		
	}
	
	public function getActionMethodName()
	{
		return Inflector::lowerCamel($this->getAction()) . 'Action';
	}
	
	public function getParams()
	{
		return $this->params;
	}

}