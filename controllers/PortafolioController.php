<?php 

class PortafolioController {
	public function indexAction() 
	{
		// $view = new View('portafolio');
		// return $view;

		$array = array(
    		'work_1' => 'foo',
    		'work_2' => 'bar',
    		'work_3'   => 'alpha',
    		'work_4'  => 'omega'
		);

		return $array;
	}
	
}