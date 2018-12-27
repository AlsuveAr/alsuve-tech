<?php
	$titulo= "Portafolio";
	require("plantillas/doc-start.inc.php");
	//require("plantillas/navbar.inc.php");
	//require_once("app/config.inc.php");
?>	
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-trans" id="menu">
		  	<a class="navbar-brand" href="#">
			    <img src="" width="30" height="30" class="d-inline-block align-top" alt="log">
			    Alsuve Tech
		  	</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse justify-content-end text-center" id="navbarNavAltMarkup">
		    	<div class="navbar-nav">
		      		<a class="nav-item nav-link active hvr-grow-rotate" href="#">Home <span class="sr-only">(current)</span></a>
		      		<a class="nav-item nav-link  hvr-grow-rotate" href="#">Features</a>
		      		<a class="nav-item nav-link hvr-grow-rotate" href="#portafolio">Nuestros trabajos</a>
		    	</div>
		  	</div>
		</nav>
	</header>
	<section>
		<div id="header" class="animated fadeIn delay-1s">
			<div class="leading-text animated fadeIn delay-3s">
				<h1>Alsuve-Tech</h1>
				<h3>Primero lo primero</h3>
			</div>	
		</div>
	</section>
	<br>
	<br>
	<br>
	<div class="pading"> 
		<div class="container">
			<div class="row"> 
				<div class="col-sm-6"> 
					<img src="img/codmin.jpg"  class="img-fluid d-inline-block align-top wow fadeInUp" alt="log"> 
				</div>

				<div class="col-sm-6"> 
					<p class="wow fadeInRight delay-1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

				LUn doasadsafsit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

				LUn doasadsafsit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				</p> 
				</div>
			</div>
		 </div>
	</div>    
	<br>
	<br>
	<br>
	<div class="pading"> 
		<div class="container">
			<div class="row"> 
				<div class="col-sm-6"> 
					<p class="wow fadeInLeft delay-1s">Super Luna ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p> 
				</div>

				<div class="col-sm-6"> 
					<img src="img/codmin.jpg" width="450" height="160" class="d-inline-block align-top wow fadeInUp" alt="log"> 
				</div>
			</div>
		 </div>
	</div>   
	<br> 
	<br> 
	<div class="portafolio" id="portafolio">
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="text-center">
					<br>
					<h2 >Portafolio</h2>
					<br>
				</div>			
			</div>
			<div class="d-flex justify-content-around">
				<div class="row align-items-center">
					<!--Primer-->
					<div class="col-12 col-md-6">
						<div class="btn01">
							<img src="img/cod.jpg" >
							<div class="ovrly"></div>
							<div class="buttons">
								<a href="#" class="fa fa-link fa-2x"></a>
                                <a href="#portafolio" class="fa fa-search fa-2x" data-toggle="modal" data-target="#Primer"></a>
							</div>
						</div>
					</div>
					<!--Segundo-->
					<div class="col-12 col-md-6">
						<div class="btn02">
							<img src="img/plant.jpg" >
							<div class="ovrly"></div>
							<div class="buttons">
								<a href="#" class="fa fa-link fa-2x"></a>
                                <a href="#portafolio" class="fa fa-search fa-2x" data-toggle="modal" data-target="#Segundo"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="d-flex justify-content-around">
				<div class="row align-items-center">
					<!--Tercero-->
					<div class="col-12 col-md-4">
						<div class="btn03">
							<img src="img/plant.jpg" >
							<div class="ovrly"></div>
							<div class="buttons">
								<a href="#" class="fa fa-link fa-2x"></a>
                                <a href="#" class="fa fa-search fa-2x" data-toggle="modal" data-target="#Tercero"></a>
							</div>
						</div>
					</div>
					<!--Cuarto-->
					<div class="col-12 col-md-4">
						<div class="btn04">
							<img src="img/banner.jpg" class="img-fluid">
							<div class="ovrly"></div>
							<div class="buttons">
								<a href="#" class="fa fa-link fa-2x"></a>
                                <a href="#" class="fa fa-search fa-2x" data-toggle="modal" data-target="#Cuarto"></a>
							</div>
						</div>
					</div>
					<!--Quinto-->
					<div class="col-12 col-md-4">
						<div class="btn05">
							<img src="img/keyboard.jpg" class="img-fluid">
							<div class="ovrly"></div>
							<div class="buttons">
								<a href="#" class="fa fa-link fa-2x"></a>
                                <a href="#" class="fa fa-search fa-2x" data-toggle="modal" data-target="#Quinto"></a>
                                hola	
							</div>
						</div>
						<!--<img src="img/keyboard.jpg" class="img-fluid" width="375px" height="250px" >-->
					</div>
				</div>
			</div>
			<br>
			
		</div>
		<br>
		<!-- Modal -->
		<!--Primer-->
		<div class="modal fade bd-example-modal-lg" id="Primer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  	<div class="modal-dialog modal-lg">
		    	<div class="modal-content">
		    		<!--Carrousel Primero-->
		    		<div id="carouselPrimero" class="carousel slide" data-ride="carousel">
					  	<ol class="carousel-indicators">
					    	<li data-target="#carouselPrimero" data-slide-to="0" class="active"></li>
					    	<li data-target="#carouselPrimero" data-slide-to="1"></li>
					    	<li data-target="#carouselPrimero" data-slide-to="2"></li>
					  	</ol>
					  	<div class="carousel-inner">
					    	<div class="carousel-item active">
					      		<img class="d-block w-100" src="img/cod.jpg" alt="First slide">
					    	</div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100" src="img/plant.jpg" alt="Second slide">
					    	</div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100" src="img/banner.jpg" alt="Third slide">
					    	</div>
					  	</div>
					  	<a class="carousel-control-prev" href="#carouselPrimero" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#carouselPrimero" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>
		    	</div>
		  	</div>
		</div>
		<!--Segundo-->
		<div class="modal fade bd-example-modal-lg" id="Segundo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		    	<!--Carrousel Segundo-->
		    	<div id="carouselSegundo" class="carousel slide" data-ride="carousel">
				  	<ol class="carousel-indicators">
				    	<li data-target="#carouselSegundo" data-slide-to="0" class="active"></li>
				    	<li data-target="#carouselSegundo" data-slide-to="1"></li>
				    	<li data-target="#carouselSegundo" data-slide-to="2"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img class="d-block w-100" src="img/keyboard.jpg" alt="First slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/banner.jpg" alt="Second slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/plant.jpg" alt="Third slide">
				    	</div>
				  	</div>
				  	<a class="carousel-control-prev" href="#carouselSegundo" role="button" data-slide="prev">
				    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				 	</a>
				  	<a class="carousel-control-next" href="#carouselSegundo" role="button" data-slide="next">
				    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
		    </div>
		  </div>
		</div>
		<!--Tercero-->
		<div class="modal fade bd-example-modal-lg" id="Tercero" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <!--Carrousel Tercero-->
		    	<div id="carouselTercero" class="carousel slide" data-ride="carousel">
				  	<ol class="carousel-indicators">
				    	<li data-target="#carouselTercero" data-slide-to="0" class="active"></li>
				    	<li data-target="#carouselTercero" data-slide-to="1"></li>
				    	<li data-target="#carouselTercero" data-slide-to="2"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img class="d-block w-100" src="img/keyboard.jpg" alt="First slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/banner.jpg" alt="Second slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/plant.jpg" alt="Third slide">
				    	</div>
				  	</div>
				  	<a class="carousel-control-prev" href="#carouselTercero" role="button" data-slide="prev">
				    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				 	</a>
				  	<a class="carousel-control-next" href="#carouselTercero" role="button" data-slide="next">
				    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
		    </div>
		  </div>
		</div>
		<!--Cuarto-->
		<div class="modal fade bd-example-modal-lg" id="Cuarto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <!--Carrousel Cuarto-->
		    	<div id="carouselCuarto" class="carousel slide" data-ride="carousel">
				  	<ol class="carousel-indicators">
				    	<li data-target="#carouselCuarto" data-slide-to="0" class="active"></li>
				    	<li data-target="#carouselCuarto" data-slide-to="1"></li>
				    	<li data-target="#carouselCuarto" data-slide-to="2"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img class="d-block w-100" src="img/keyboard.jpg" alt="First slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/banner.jpg" alt="Second slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/plant.jpg" alt="Third slide">
				    	</div>
				  	</div>
				  	<a class="carousel-control-prev" href="#carouselCuarto" role="button" data-slide="prev">
				    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				 	</a>
				  	<a class="carousel-control-next" href="#carouselCuarto" role="button" data-slide="next">
				    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
		    </div>
		  </div>
		</div>
		<!--Quinto-->
		<div class="modal fade bd-example-modal-lg" id="Quinto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <!--Carrousel Quinto-->
		    	<div id="carouselQuinto" class="carousel slide" data-ride="carousel">
				  	<ol class="carousel-indicators">
				    	<li data-target="#carouselQuinto" data-slide-to="0" class="active"></li>
				    	<li data-target="#carouselQuinto" data-slide-to="1"></li>
				    	<li data-target="#carouselQuinto" data-slide-to="2"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img class="d-block w-100" src="img/keyboard.jpg" alt="First slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/banner.jpg" alt="Second slide">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100" src="img/plant.jpg" alt="Third slide">
				    	</div>
				  	</div>
				  	<a class="carousel-control-prev" href="#carouselQuinto" role="button" data-slide="prev">
				    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				 	</a>
				  	<a class="carousel-control-next" href="#carouselQuinto" role="button" data-slide="next">
				    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
		    </div>
		  </div>
		</div>
		<!--
		<div class="modal fade" id="expandete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered" role="document">
		    	<div class="modal-content modal-lg">
		      	<div class="modal-body">
		      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
		        	<img src="img/cod.jpg" class="img-fluid" width="auto" height="auto">
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        	<button type="button" class="btn btn-primary">Save changes</button>
		      	</div>
		    	</div>
		  	</div>
		</div>-->
	</div>
	<br>
	<br>
	<div id="contacto">
		<div class="container wow fadeInUpBig">
			<div class="row">
				<div class="col-12 center">
					<h2 >Contactanos</h2>
				</div>
				<div class="col-6 offset-3">
					<form>
						<label for="name">Nombre</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="Ingrese su nombre">
						<br>
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" placeholder="yourmail@example.com" id="email">
						<br>
						<label for="description">Descripción del proyecto</label>
						<textarea class="form-control" rows="3" id="description"></textarea>
						<br>
						<button type="submit" class="btn btn-primary btn-block btn-large">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
	</div>
<?php
	require_once('plantillas/doc-end.inc.php');
?>