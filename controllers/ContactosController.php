<?php

class ContactosController {
	public function indexAction()
	{
		// $view = new View('contactos');
		// return $view;
		return "twitter.com/imontalvomiguel";
	}
	
	public function ciudadAction($ciudad) 
	{
		exit($ciudad . ' yeiii!');
	}
	
}