pooPHP
======
C2 - Actividades para la clase 3

Nivel básico
● Creen nuevos controladores, acciones y vistas para probar el mini framework

Nivel intermedio
● Mejoren la clase View, creando getters como por ejemplo "getTemplateFileName" similar a lo que hicimos en la clase Request, de forma que quede más POO y profesional.

Nivel avanzado
● Creen nuevos objetos de tipo Response (similar a View) pero para Json, Strings, u otros formatos
● Separen los métodos de Request que permiten analizar una url en otra clase llamada RequestUrl, Request obtendría todos los datos de la URL del objeto RequestUrl, ej:

$requestUrl = new RequestUrl($url);
$request = new Request($requestUrl);

Bonus Task:
Integren bootstrap en el layout.tpl.php
