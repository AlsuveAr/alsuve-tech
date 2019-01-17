<?php
switch ($idioma) {
	case 'es':
		$nav_bg = "bg-dark";
		$servidor = SERVIDOR_ES;
		$contacto = RUTA_CONTACTO_ES;
		break;
	case 'en':
	default:
		$nav_bg = "bg-dark";
		$servidor = SERVIDOR;
		$contacto = RUTA_CONTACTO;
		break;
}
?>

<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-trans" id="menu">
	  	<a class="navbar-brand" href="<?php print $servidor?>">
		    <img src="" width="30" height="30" class="d-inline-block align-top" alt="log">
		    Alsuve Tech
	  	</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse justify-content-end text-center" id="navbarNavAltMarkup">
	    	<div class="navbar-nav bar">
	      		<a class="nav-item nav-link active hvr-pop" 
	      			href="<?php print $servidor?>">Inicio
	      		</a>
	      		
	      		<a class="nav-item nav-link hvr-pop" href="#port">Nuestros trabajos</a>
	      		<a class="nav-item nav-link hvr-pop" 
	      			href="
	      			<?php print $contacto?>">Contactanos
	      		</a>
	    	</div>
	  	</div>
	</nav>
</header>