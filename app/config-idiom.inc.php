<?php
//Info de la base de datos
define('NOMBRE_SERVIDOR', 'localhost');
define('NOMBRE_USUARIO', 'al');
define('PASSWORD', '12345678');
define('NOMBRE_BD', 'blog');

//rutas de la web

define("SERVIDOR_ES", "http://portafolio.test/es");
define("RUTA_CONTACTO_ES", SERVIDOR_ES."/contactanos");


define("SERVIDOR", "http://portafolio.test");
define("RUTA_CONTACTO", SERVIDOR."/contactanos");;
/*
define("SERVIDOR", "http://portafolio.test");
define("RUTA_CONTACTO", SERVIDOR."/contactanos");
*/

//Recursos
define("RUTA_CSS", SERVIDOR ."/css/");
define("RUTA_JS", SERVIDOR ."/js/");
define("DIRECTORIO_RAIZ", realpath(__DIR__."/.."));
//define("DIRECTORIO_RAIZ", realpath(dirname(__FILE__)."/.."));
