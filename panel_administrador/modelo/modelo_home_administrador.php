<?php
session_start();
 ?>

 
    <div class='col-lg-12 col-xs-12' style='background:#29500d; padding:10px; margin:0px; color:black;'>
       
	    <div class="text-center">
	      <p style='margin:0px; margin-bottom:3px;'><h3 style='font-family:"Cooper Black"  '><?php echo "Hola ".$_SESSION['usuario']." bienvenido al panel de administrador del sistema."; ?></h3></p>    	
	    </div>

    </div>
		   	<div class="owl-carousel">
	          <div class="text-center">
	        	  <a href="#">
	        	  	<img src="../images/taxiDriver.jpg" class="img-responsive" alt="Image">	
	        	  <p>Sistema de taxi modelo 1</p>
	        	  </a>
	          </div>
	          <div class="text-center">
	        	  <a href="#">
	        	  	<img src="../images/taxiDriver.jpg" alt="Image">	
	        	  <p>Sistema de taxi modelo 2</p>
	        	  </a>
	          </div>
	          <div class="text-center">
	        	  <a href="#">
	        	  	<img src="../images/tazmania.png" class="img-responsive" alt="Image">	
	        	  <p>Sistema de taxi modelo 3</p>
	        	  </a>
	          </div>
	        </div>
	        <script>
	            $(document).ready(function(){
		            var owl = $('.owl-carousel');
		            owl.owlCarousel({
		                items:3,
		                loop:true,
		                margin:10,
		                autoplay:true,
		                autoplayTimeout:3000
		            });
		            //$owl.is(':visible');
	            });
	        </script>