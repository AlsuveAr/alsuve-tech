	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php print RUTA_JS?>wow.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.6.0/js/all.js" integrity="sha384-z9ZOvGHHo21RqN5De4rfJMoAxYpaVoiYhuJXPyVmSs8yn20IE3PmBM534CffwSJI" crossorigin="anonymous"></script>
	<script>
	      $(window).scroll(function() {
	        if ($("#menu").offset().top > 56) {
	            $("#menu").addClass("bg-dark");
	        } else {
	            $("#menu").removeClass("bg-dark");
	        }
	      });
	</script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	<script type="text/javascript">
		$("#porone").hover(function(){
		  	$(this).css("background", "yellow");
			}, function(){
		  	$(this).css("background", "pink");
		});
	</script>
</body>
</html>