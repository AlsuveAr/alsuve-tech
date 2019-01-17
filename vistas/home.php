<?php
require_once("app/config.inc.php");
$titulo= "Al-Tech";
require("plantillas/doc-start.inc.php");
require("plantillas/navbar.inc.php");
?>	
	<section>
		<div id="header" class="animated fadeIn delay-1s">
			<div class="leading-text animated fadeIn delay-3s">
				<h1 class="titu">All Code Tech</h1>
				<h3>Primero lo primero</h3>
			</div>	
		</div>
	</section>
	<div class="pading somos"> 
		<br>
		<br>
		<br>

		<!-- //////////////// QUIENES SOMOS ////////////////////// -->

		<div class="container border">
			<div class="row border"> 
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 border wow fadeInUp"> 
					<img src="img/team4.png" data-wow-delay="5s" class="img-fluid rounded mt-5 mr-5 ml-5 mb-5" alaing="center" alt="log"> 
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 wow fadeInRight">  
					<h3 align="center" class="mr-5 ml-5 titu"  > 
						¿Quienes Somos? 
					</h3> 		
					<p align="center" class="hcm" > AlsuveTech es un equipo conformado por dos jovenes ingenieros freelance enfocados en el diseño de páginas Web para ofrecer servicios personalizados de alta calidad de acuerdo a las necesidades de nuestros clientes.
					</p> 
					<p align="center" class="hcm"> Nuestra empresa ofrece tecnología HTML5 Animado y PHP en la página web, haciendo que su sitio en Internet sea mas dinámico y llamativo, distinto a los tradicionales sitios sin animación; todo esto junto a un estupendo diseño grafico.
					</p> 
				</div>
			</div>
		</div>
	</div>    

	<div class="pading hacemos"> 
			<br>
		<br>
		<br>
		<br>
		<br>
		<!-- ///////////////////QUE HACEMOS ///////////////////////////////////// -->

		<div class="container fadeInUpBig" >
		 	<div class="row justify-content-around"> 
				<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ml-4 wow fadeInUpBig" data-wow-delay="1s"> 
					<div class="ih-item circle effect1b">
						<a href="#info">
	        				<div class="spinner"></div>
	        				<div class="img">
	        					<img class="mx-auto d-block" src="img/webd11.png" alt="img">
	        				</div>
	        				<div class="info">
	         					 <div class="info-back">
						           	<h3>Crea tu web</h3>
						            <p>estilos personalizados</p>
	          					</div>
	        				</div>
	        			</a>
	        		</div>
	        		<br>
	        		<p align="center" class="hcm"> Crea junto a nosostros una web profesional avanzada para aumentar el prestigio de tu marca
					</p>
	    		</div>
				
			
				<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ml-4 wow fadeInUpBig" data-wow-delay="1.5s">
					<div class="ih-item circle effect1c">
						<a href="#info">
	        				<div class="spinner"></div>
	        				<div class="img">
	        					<img class="mx-auto d-block" src="img/seo5.png" alt="img">
	        				</div>
	        				<div class="info">
	         					 <div class="info-back">
						           	<h3>Crea tu web</h3>
						            <p>estilos personalizados</p>
	          					</div>
	        				</div>
	        			</a>
	        		</div>
	        		<br>
					<p align="center" class="hcm"> Aplicamos SEO a tu pagina para que tenga un posicionamiento y tu marca cresca efectivamente
					</p>
				</div>

				<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ml-4 wow fadeInUpBig" data-wow-delay="2s">
					<div class="ih-item circle effect1">
						<a href="<?php print RUTA_CONTACTO?>">
	        				<div class="spinner"></div>
	        				<div class="img">
	        					<img class="mx-auto d-block" src="img/contact3.png" alt="img">
	        				</div>
	        				<div class="info">
	         					 <div class="info-back">
						           	<h3>Crea tu web</h3>
						            <p>estilos personalizados</p>
	          					</div>
	        				</div>
	        			</a>
	        		</div>
	        		<br>
					<p align="center" class="hcm"> Si no sabes como crear tu pagina nosotros te ayudamos, planteanos tus dudas!
					</p>

				</div>
			</div>
		</div>
	</div>    

	<div class="portafolio" id="port">
		<br>
		<br>
		<br>
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
					<div class="col-12 col-md-6 mb-2 mt-2 wow fadeInRight">
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
					<div class="col-12 col-md-6 mb-2 mt-2 wow fadeInRight" data-wow-delay="0.5s">
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
					<div class="col-12 col-md-4 mb-2 mt-2 wow fadeInRight" data-wow-delay="1s">
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
					<div class="col-12 col-md-4 mb-2 mt-2 wow fadeInRight" data-wow-delay="1.5s">
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
					<div class="col-12 col-md-4 mb-2 mt-2 wow fadeInRight" data-wow-delay="2s">
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
	<!--
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
-->
	
<?php
require('plantillas/footer.inc.php');
require('plantillas/doc-end.inc.php');
?>