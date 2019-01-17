<?php
include_once 'app/config.inc.php';
include 'app/Redireccion.inc.php';

$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
print $idioma;


$componentes_url = parse_url($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);

$ruta = $componentes_url['path'];

$partes_ruta = explode("/", $ruta);  /*Separa las rutas justo en el caracter barra espasiva (/)*/ 
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0); /*Separador de arrays arreglos*/

$ruta_elegida = 'vistas/404.php';

/*switch ($idioma) {
	
	case 'en':*/
		if ($partes_ruta[0] == 'portafolio.test' ) {
			if (count($partes_ruta) == 1) {
				$ruta_elegida = "vistas/en/home.php";
			} else if (count($partes_ruta) == 2) {
				switch ($partes_ruta[1]) {
					case 'contactanos';
						$ruta_elegida = 'vistas/en/contactanos.php';
						break;
				}
			} else if (count($partes_ruta) == 3) {
				if ($partes_ruta[1] == 'es') {
					switch ($partes_ruta[2]) {
						case 'contactanos':
							$ruta_elegida = 'vistas/es/contactanos.php';
							break;

					}
				}
			}
		}
		/*break;
	case 'es':
*/
		if (count($partes_ruta) == 2) {
			if ($partes_ruta[1] == 'es') {
				
				$ruta_elegida = 'vistas/es/home.php';
					
			}
		} else if (count($partes_ruta) == 3) {
			if ($partes_ruta[1] == 'es') {
				switch ($partes_ruta[2]) {
					case 'contactanos':
						$ruta_elegida = 'vistas/es/contactanos.php';
						break;
					
					default:
						# code...
						break;
				}
			}
		}
		break;
	default:
		if ($partes_ruta[0] == 'portafolio.test' ) {
			if (count($partes_ruta) == 1) {
				$ruta_elegida = "vistas/en/home.php";
			} else if (count($partes_ruta) == 2) {
				switch ($partes_ruta[1]) {
					case 'contactanos';
						$ruta_elegida = 'vistas/en/contactanos.php';
						break;
				}
			}
		}
		break;
}
/*
if ($partes_ruta[0] == 'portafolio.test' ) {
	if (count($partes_ruta) == 1) {
		$ruta_elegida = "vistas/en/home.php";
	} else if (count($partes_ruta) == 2) {
		switch ($partes_ruta[1]) {
			case 'contactanos';
				$ruta_elegida = 'vistas/contactanos.php';
				break;

			case 'es';
				$ruta_elegida = 'vistas/es/contactanos.php';
				break;
		}
	} else if (count($partes_ruta) == 3) {
		if ($partes_ruta[1] == 'registro-correcto') {
			$nombre = $partes_ruta[2];
			$ruta_elegida = 'vistas/registro-correcto.php';
		}

		if ($partes_ruta[1] == 'gestor'){
			switch ($partes_ruta[2]) {
				case 'entradas':
					$gestor_actual = 'entradas';
					$ruta_elegida = 'vistas/gestor.php';
					break;
				case 'comentarios':
					$gestor_actual = 'comentarios';
					$ruta_elegida = 'vistas/gestor.php';
					break;
				case 'favoritos':
					$gestor_actual = 'favoritos';
					$ruta_elegida = 'vistas/gestor.php';
					break;	
				
			}
		}
	}
}
*/

include_once $ruta_elegida;
