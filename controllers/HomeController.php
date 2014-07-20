<?php

class HomeController {
	
	public function indexAction()
	{
		$view = new View('home', ['titulo' => 'Jelou!!!', 'language'=>'Javascript']);
		return $view;
		// return ['nombre' => 'ubaldo', 'apellidoPaterno' => 'Omaña', 'apellidoMaterno' => 'Montalvo'];
		// return 'ubaldo miguel omaña montalvo';

	}

	
	
}