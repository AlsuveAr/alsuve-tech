<?php
include_once 'app/config.inc.php';

$componentes_url = parse_url($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);

$ruta = $componentes_url['path'];

$partes_ruta = explode("/", $ruta);  /*Separa las rutas justo en el caracter barra espasiva (/)*/ 
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0); /*Separador de arrays arreglos*/

$ruta_elegida = 'vistas/404.php';

if ($partes_ruta[0] == 'portafolio.test') {
	if (count($partes_ruta) == 1) {
		$ruta_elegida = "vistas/home.php";
	} else if (count($partes_ruta) == 2) {
		switch ($partes_ruta[1]) {
			case 'contactanos';
				$ruta_elegida = 'vistas/contactanos.php';
				break;
			case 'logout';
				$ruta_elegida = 'vistas/logout.php';
				break;
			case 'registro';
				$ruta_elegida = 'vistas/registro.php';
				break;
			case 'gestor';
				$ruta_elegida = 'vistas/gestor.php';
				$gestor_actual = '';
				break;	
			case 'relleno-sql';
				$ruta_elegida = 'scripts/relleno.php';
				break;
			case 'nueva-entrada';
				$ruta_elegida = 'vistas/nueva-entrada.php';
				break;
			case 'borrar-entrada';
				$ruta_elegida = 'scripts/borrar-entrada.php';
				break;
			case 'editar-entrada';
				$ruta_elegida = 'vistas/editar-entrada.php';
				break;
			case 'recuperar-clave';
				$ruta_elegida = 'vistas/recuperar-clave.php';
				break;	
			case 'recuperar-clave-correcto';
				$ruta_elegida = 'vistas/recuperar-clave-correcto.php';
				break;	
			case 'generar-url-secreta';
				$ruta_elegida = 'scripts/generar-url-secreta.php';
				break;
			case 'mail';
				$ruta_elegida = 'vistas/prueba-mail.php';
				break;
			case 'recuperacion-clave-correcto';
				$ruta_elegida = 'vistas/recuperacion-clave-correcto.php';
				break;
			case 'buscar';
				$ruta_elegida = 'vistas/buscar.php';
				break;
			case 'perfil';
				$ruta_elegida = 'vistas/perfil.php';
				break;
		}
	} else if (count($partes_ruta) == 3) {
		if ($partes_ruta[1] == 'registro-correcto') {
			$nombre = $partes_ruta[2];
			$ruta_elegida = 'vistas/registro-correcto.php';
		}
		if ($partes_ruta[1] == 'entrada') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$entrada = RepositorioEntrada::obtener_entrada_por_url(Conexion::obtener_conexion(), $url);

			if ($entrada != null) {
				$autor = RepositorioUsuario::obtener_usuario_por_id(Conexion::obtener_conexion(), $entrada -> obtener_autor_id());

				$comentarios = RepositorioComentario::obtener_comentarios(Conexion::obtener_conexion(), $entrada -> obtener_autor_id());

				$entradas_azar = RepositorioEntrada::obtener_entradas_al_azar(Conexion::obtener_conexion(), 3);

				$ruta_elegida = 'vistas/entrada.php';
			}
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

		if ($partes_ruta[1] == 'recuperacion-clave') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'vistas/recuperacion-clave.php';
		}
	}
}

include_once $ruta_elegida;
