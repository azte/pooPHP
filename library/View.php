<?php 

/* una clase que extiende de una clase abstracta necesita implementar los métodos abstractos
* definidos por la interfaze o contrato (clase abstracta)
*/

class View extends Response {
	
	protected $template;
	protected $vars = array();
	
	public function __construct($template, $vars = array())
	{
		$this->template = $template;
		$this->vars = $vars;
		
	}
	
	public function getTemplate()
	{
		return $this->template;
	}
	
	public function getVars()
	{
		return $this->vars;
	}
	
	public function getTemplateFileName() 
	{
		//cojo el fragmento template
		return 'views/' . $this->getTemplate() . '.tpl.php'; 
	}

	//implementación del método abstracto
	public function execute() 
	{
		
		$vars = $this->getVars();
		$templateFileName = $this->getTemplateFileName();
		
		
		//encapsulo para solo pasarle las variables  a las cuales la funcion tendra acceso.
		call_user_func(function() use ($templateFileName, $vars){
			extract($vars);
			
			//para la salida hacia el frontend
			ob_start(); 
			 
			require $templateFileName;
			
			//guardo esa salida de texto en una variable
			$tpl_content = ob_get_clean(); 
			
			//llamo al layout
			
			require "views/layout.tpl.php";
			

		});
		
	}
		
	
} 
