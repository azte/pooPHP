<?php 
/**
* Response String
*/
class ResponseString extends Response
{
	protected $string;
	
	function __construct($string)
	{
		$this->string = $string;
	}

	public function getString()
	{
		return $this->string;
	}

	public function execute()
	{
		$string = $this->getString();

		echo $string;

	}
}