<?php

/*
 * El frontend controller se encarga de
 * configurar nuestra aplicacion
 */
require 'config.php';
require 'helpers.php';

//Library
require 'library/Request.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';
require 'library/ResponseJson.php';
require 'library/ResponseString.php';
require 'library/RequestUrl.php';

//Llamar al controlador indicado

if (empty($_GET['url'])) 
{
	$url = '';
}
else
{
	$url = $_GET['url'];
}


$requestUrl = new RequestUrl($url);
$request = new Request($requestUrl);

$request->execute();
