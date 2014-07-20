<?php 

class Request {

	protected $requestUrl;

	public function __construct($requestUrl)
	{
		$this->requestUrl = $requestUrl;
	}

	public function get_requestUrl()
	{
		return $this->requestUrl;
	}
	
	public function execute()
	{
		$requestUrl = $this->get_requestUrl();

		$controllerClassName = $requestUrl->getControllerClassName();
		$controllerFileName = $requestUrl->getControllerFileName();
		$actionMethodName = $requestUrl->getActionMethodName();
		$params = $requestUrl->getParams();
		
		if ( ! file_exists($controllerFileName) ) 
		{
			exit('El Controlador No Existe');
		}
		
		require $controllerFileName;
		
		$controller = new $controllerClassName();

		//valido que el método existe en el objeto controllerClassName
		if (method_exists($controller, $actionMethodName)) 
		{
			$response = call_user_func_array([$controller, $actionMethodName], $params);
		}
		else
		{
			exit('El método no existe');
		}
		
		
		$this->executeResponse($response);
		
		
	}
	
	public function executeResponse($response) 
	{
		
		if ($response instanceof Response) 
		{
			$response->execute();
		}
		elseif (is_string($response)) 
		{
			$responseString = new ResponseString($response);
			$responseString->execute();
		}
		elseif (is_array($response)) 
		{
			$responseJson = new ResponseJson($response);
			$responseJson->execute();
		}
		
		else 
		{
			exit('Invalid response');
		}
		
	}
	
}