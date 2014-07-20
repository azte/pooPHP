pooPHP
======
<h2>C2 - Actividades para la clase 3</h2>

<h4>Nivel básico</h4>
● Creen nuevos controladores, acciones y vistas para probar el mini framework

<h4>Nivel intermedio</h4>
● Mejoren la clase View, creando getters como por ejemplo "getTemplateFileName" similar a lo que hicimos en la clase Request, de forma que quede más POO y profesional.

<h4>Nivel avanzado</h4>
● Creen nuevos objetos de tipo Response (similar a View) pero para Json, Strings, u otros formatos<br>
● Separen los métodos de Request que permiten analizar una url en otra clase llamada RequestUrl, Request obtendría todos los datos de la URL del objeto RequestUrl, ej:

<code>
$requestUrl = new RequestUrl($url);\n
$request = new Request($requestUrl);
</code>

<h4>Bonus Task:</h4>
Integren bootstrap en el layout.tpl.php
