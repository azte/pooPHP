<?php 

//clases estáticas o funciones de utilerìa solo eso (No se instancian)
class Inflector {
	
	//es necesario usar la palabra static y podemos llamarlo con los :: y listo :D
	public static function camel($value)
	{
		$segments = explode('-', $value);
		
		array_walk($segments, function(&$item) {
			$item = ucfirst($item);
		});
		
		return implode('', $segments);
	}
	
	public static function lowerCamel($value)
	{
		return lcfirst(static::camel($value));
	}
	
}