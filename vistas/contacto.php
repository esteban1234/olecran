<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	<div class="contienetodo">
		<div class="header">
			<div class="menu-op">
				<i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
				<i class="fa fa-times fa-2x cerrar" aria-hidden="true"></i>
			</div>
	        <nav class="pull-left">
	            <ul>
	                <a href="../index.php">INICIO</a>
	                <a href="nosotros.php">NOSOTROS</a>
	                <a href="servicios.php">SERVICIOS</a>
	                <a class="select" href="contacto.php">CONTACTO</a>
	            </ul>
	        </nav>
	        <figure class="logo pull-right">
	            <img src="../img/olecran.png" alt="OLECRAM" class="img-responsive">
	        </figure>
	    </div>

	    <div class="contenformmap">
	    	<div class="container formu pull-left">
				<div class="row">
				    <div class="col-md-12">
						<div class="form_main">
				            <h4 class="heading"><strong>OLECRAM</strong> Contacto<span></span></h4>
				            <div class="form">
				                <form  method="post" id="contactFrm" name="contactFrm" onSubmit="return false">
				                    <input type="text" required="" placeholder="Escribe tu nombre completo" id="txtNOMBRE" value="" name="name" class="txt">
				                    <input type="text" required="" placeholder="Escribe tu numero telefonico completo" id="txtTELEFONO" value="" name="mob" class="txt">
				                    <input type="text" required="" placeholder="Escribe tu correo" id="txtCORREO" value="" name="email" class="txt">

				                	 <textarea required="" placeholder="Escribe tu comentario" id="txtCOMENTARIO" name="mess" type="text" class="txt_3"></textarea><br>
													 <div id="_AJAX_PRE_"></div>
				                     <input type="submit" value="Enviar" name="submit" class="txt2" onclick="sendCORREO()">
				                </form>
				            </div>
				        </div>
				    </div>
				</div>
			</div>

			<div class="datos pull-right">
			    <div class="container container-contacto">
				    <div class="row">
				    	<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="offer offer-default">
								<div class="shape">
									<div class="shape-text">
										<span class=""><i class="fa fa-street-view" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="offer-content">
									<h3 class="lead">
									Dirección:
									</h3>
									<p>
										 Av. Paseo de los Leones #1684 por C. 20VA Av. y Paseo de los Insurgentes. Col. Las Cumbres 1 Sector, Monterrey, N.L. C.P. 64610
										<br>

									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="offer offer-default">
								<div class="shape">
									<div class="shape-text">
										<span class=""><i class="fa fa-phone" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="offer-content">
									<h3 class="lead">
										 Teléfono:
									</h3>
									<p>
										PENDIENTE
										<br>

									</p>
								</div>
							</div>
						</div>
				    </div>

                    <div class="row">
				    	<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="offer offer-default">
								<div class="shape">
									<div class="shape-text">
										<span class=""><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="offer-content">
									<h3 class="lead">
									Correo:
									</h3>
									<p>
										 info@olecram.org
										<br>

									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="offer offer-default">
								<div class="shape">
									<div class="shape-text">
										<span class=""><i class="fa fa-clock-o" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="offer-content">
									<h3 class="lead">
										 Horario:
									</h3>
									<p>
										Lunes a Viernes de 9am a 6pm
										<br>

									</p>
								</div>
							</div>
						</div>
        			</div>
				</div>
			</div>
	    </div>

	    <div class="mapa">
	    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.1087032867467!2d-100.36804728075263!3d25.700824690662696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662966e9e0525c3%3A0xb5bf064757593be!2sAv+Paseo+de+los+Leones+1684%2C+Leones%2C+64610+Monterrey%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1498516711236" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	    </div>

	    <span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
	</div>



<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>
