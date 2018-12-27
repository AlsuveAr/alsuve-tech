<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
		if (!isset($titulo) || empty($titulo)){
			$titulo = 'Portafolio';
		}

		echo "<title>$titulo</title>";
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php print RUTA_CSS?>estilo.css">
	<link rel="stylesheet" type="text/css" href="<?php print RUTA_CSS?>animate.css">
	<link href="<?php print RUTA_CSS?>hover.css" rel="stylesheet" media="all">
</head>
<body>