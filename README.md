pooPHP
======
<h2>C2 - Actividades para la clase 3</h2>

<a href="http://dev.montalvomiguel.net">http://dev.montalvomiguel.net</a>

<h4>Nivel básico</h4>
● Creen nuevos controladores, acciones y vistas para probar el mini framework

<h4>Nivel intermedio</h4>
● Mejoren la clase View, creando getters como por ejemplo "getTemplateFileName" similar a lo que hicimos en la clase Request, de forma que quede más POO y profesional.

<h4>Nivel avanzado</h4>
● Creen nuevos objetos de tipo Response (similar a View) pero para Json, Strings, u otros formatos<br>
● Separen los métodos de Request que permiten analizar una url en otra clase llamada RequestUrl, Request obtendría todos los datos de la URL del objeto RequestUrl, ej:

<pre>
$requestUrl = new RequestUrl($url);
$request = new Request($requestUrl);
</pre>

<h4>Bonus Task:</h4>
Integren bootstrap en el layout.tpl.php
