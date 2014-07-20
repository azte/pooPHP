<?php 

class NoticiasController {
	public function indexaction() 
	{
		$view = new View('noticias', ['title', 'Sección Noticias']);
		return $view;
		
	}
	
}

