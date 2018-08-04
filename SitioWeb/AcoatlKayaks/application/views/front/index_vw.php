<?php
/**
  * Este archivo corresponde al módulo de Index o página principal. 
  * @category   Index.
  * @copyright  Copyright (c) 20018-2019 Smart Software. (http://www.smartsoftware.com) 
  * @license    http://www.copyright.mx/copyright-deposito-registro-mexico.html?offer=plan_web_offer 
  * @version    Release: @version_0.9.1@ 
  * @link       https://github.com/Sofi-BermudezS/AcoatlKayaks
*/
?>

<!--Index-->
<div class="about" id="conocenos">
		<div class="container">
			<div class="w3ls-heading">
				<h3 id="hola">¿Quiénes somos?</h3>
				<p> Turismo de Naturaleza / Diseño y fabricación </p>
			</div>
			<div class="agileits-about-grids">
				<div class="col-md-6 agileits-about-grid">
					<p>Empresa dedicada a la fabricación de Kayaks para agua plana (lagos, lagunas, presas, ríos lentos, etc) y al turismo de naturaleza y pesca deportiva de una manera segura, sustentable y social.</p>
				</div>
				<div class="col-md-6 agileits-about-grid">
					<p>Nuestra principal misión es popularizar el turismo de naturaleza y los recorridos enfocados en la integración de comunidades para activar su economía y que al mismo tiempo se conserven sus espacios naturales del sur de Guanajuato.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo-about-slide">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/G1.jpg" alt="" />
							<div class="about-grid-caption"> 
								<h4>La vida es hermosa</h4>
								<p> Si no lo parece explora</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/G2.jpg" alt="" />
							<div class="about-grid-caption"> 
								<h4>Acoatl</h4>
								<p>Kayaks</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/G5.jpg" alt="" />
							<div class="about-grid-caption">
								<h4>Ama</h4>
								<p>La vida</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/fot6.jpg" alt="" />
							<div class="about-grid-caption">
								<h4>Ama</h4>
								<p>La naturaleza</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/fot1.jpg" alt="" />
							<div class="about-grid-caption">
								<h4>Ama</h4>
								<p>Tu libertad</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/jj.jpg" alt="" />
							<div class="about-grid-caption">
								<h4>Ama</h4>
								<p>La amistad</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/viaje3.jpg" alt="" />
							<div class="about-grid-caption">	
								<h4>Ama</h4>
								<p>Explorar</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<!-- //Conocenos -->

	<!--Productos-->
	<div class="middle-bottom" id="productos">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Productos</h3>
           		 <div class="grid">
					<?php
        			foreach($productos as $al):
					?>

                	<figure class="col-md-3 col-xs-12 w3l-service-hover">
                    	<img src="<?=base_url();?>site/template/images/productos/<?=$al->imagen_producto;?>" alt="t1" class="img-responsive" />
						<h2 id="descripcion" class="nombre"><?=$al->nombre_producto;?></h2>
						<p><?=$al->descricion;?></p>
						<p>$<?=$al->precio;?></p>
						<p>Stock:<?=$al->stock;?></p>
                   			<figcaption>
								<form action="<?=base_url();?>index.php/control/index2/2">
								<button class="btn btn-warning btn-lg btn-block" type="submit" value="">Comprar</button>

								</form>
                    		</figcaption>
					</figure>
					
					<?php
        			endforeach;
    				?>	
            	</div>
        	</div>
    	</div>
    	<div class="w3-agile-blog-right-top" align="center">
    		<a href="<?=base_url();?>index.php/control/index2/2">Ver más...</a>
    	</div>
	</div>

	<!-- productos-->
	<!-- tours -->
	<div class="team" id="tours">
		<div class="container">
			<div class="w3ls-heading team-heading">
				<h3>Tours</h3>
				<p>Tours disponibles</p>
			</div>
			<div class="inner_w3l_agile_grids">
					
			<div id="horizontalTab">				
				<?php
        			foreach($tours as $al):
				?>
				
				<figure class="col-md-3 col-xs-12 w3l-service-hover white">
					<br>
						<div class="about-grid-info">
							<img src="<?=base_url();?>site/template/images/tours/<?=$al->imagen;?>" alt=" " class="img-responsive" />
							<h2 id="descripcion" class="nombre" align="center"><?=$al->nombre;?></h2>
						</div>
						<div class="w3-agile-blog-right-info" align="center">
							<p><?=$al->descripcion;?></p>
							<h4>Lugares disponibles: <?=$al->cupo;?></h4>
							<h4>Precio $<?=$al->precio;?></h4>
						</div>
						<div class="blog-left-right-top" align="center">
							<a href="#politicas">Politicas</a>
						</div>
						<div class="w3-agile-blog-right-info" align="right">
							<form action="<?=base_url();?>index.php/Tour_vista/inscripciones" method="post">
								<input type="hidden" name="tour" value="<?=$al->id_tour;?>">
								<input type="hidden" name="precio" value="<?=$al->precio;?>">
								<input type="hidden" name="tour_name" value="<?=$al->nombre;?>">

								<figcaption>
									<button class="btn btn-warning btn-lg btn-block" type="submit" value="">Inscribirme</button>
                    			</figcaption>
							
							</form>
							<br>
					</div>
				</figure>  		
				
				<?php
        			endforeach;
    			?>
							
			</div>
			</div>
		</div>
	</div>
	
	
	<!-- //Tours -->
	<!--Galeria-->
	<div class="portfolio" id="galeria">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Galería</h3>
				<p>Conoce nuestros increíbles lugares a explorar</p>
			</div>	
						
		<?php
		foreach($galeria as $al):
			?>
			<div class="agileits_portfolio_grids">
				<div class="col-md-3 agileits_portfolio_grid">
						 <div class="agileinfo_portfolio_grid hovereffect">
						<a class="cm-overlay" href="<?=base_url();?>site/template/images/galeria/<?=$al->imagen;?>">
							<img src="<?=base_url();?>site/template/images/galeria/<?=$al->imagen;?>" alt=" " class="img-responsive">
							<div class="overlay">
								<h4>Una nueva experiencia</h4>
								<p>La vida es un mundo lleno de libertad y amor.</p> 
							</div>
							</a>
							
						</div>
						
				</div>
			</div>
					
		<?php
		endforeach;
		?>			
		
	</div>
	</div>
	
	<!-- //Galeria-->

	<!--Politicas -->
	<div class="middle-bottom" id="politicas">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Políticas</h3>
				<p>De los Tours</p>
			</div>
			<div class="w3-agile-blog-grids">
				<div class="w3-agile-blog-grid">
					<div class="col-md-5 w3-agile-blog-left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?=base_url();?>site/template/images/ds.jpg" alt="" /></a>
					</div>
					<div class="col-md-6 w3-agile-blog-right">
						<div class="w3-agile-blog-right-top">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right-top" align="center">
								<h4><a href="#" data-toggle="modal" data-target="#myModal">Restricciones de los tours realizados</a></h4>
								<p>Hechas por <a href="#">AcoatlKayaks</a>&nbsp;11-06-2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-agile-blog-right-info">
							<p align="center" >El turismo de aventura o turismo de naturaleza debe ser una experiencia divertida, inolvidable y sobre todo segura, no pongas en riesgo a tu familia y amigos.</p>
							<p align="center">ACUDE CON LOS PROFESIONALES</p>
							<br>
							<a href="#" data-toggle="modal" data-target="#myModal">Ver más</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title"><span>Acoatl</span> Kayaks</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<h4 class="modal-title"><span>Políticas y restricciones</span> 
						<p>Todos los recorridos incluyen:</p>
						<p>• Transporte interno.</p>
						<p>• Guía certificado y guía auxiliar.</p>
						<p>• Kayak "Acoatl" tipo "sit on top" súper estable y ágil.</p>
						<p>• Remo ligero y chaleco especial para kayak.</p>
						<p>• Breve instrucción del uso del remo y chaleco salvavidas.</p>
						<p>• Snack ligero.</p>
						<p>• Seguro de actividad.</p>
						<p></p>
						<h4 class="modal-title"><span>OJO</span> 
						<p>• Reservar su recorrido con anticipación (al menos 4 días).</p>
						<p>• Dos participantes como minímo.</p>
						<p>• Asistir descansados y desayunados.</p>
						<p>• Se recomienda iniciar actividades antes de las 9:00 am.</p>
						<p>• El punto de salida es el hotel mesón del puente o algún punto cercano en la ciudad de Acámbaro.</p>
						<p>• Recorridos con distintos niveles de dificultad desde nivel de dificultad bajo (apto para todo público desde 3 a 80 años) hasta nivel de dificultad alto (no apto para personas con alergias a picadura de abeja, cardiopatías o problemas de espalda, buena condición física necesaria). </p>
						<p>• Las actividades en época de lluvia se realizan solo en horario matutino. (Devolución parcial del pago) En caso de cancelación por mal clima, con opción de re agendar. </p>
						<p>• Cantidad de participantes restringido en ciertos recorridos.</p>
						<p>• Algunos recorridos dependen de la temporada de lluvias y solo están disponibles 6 meses al año. </p>
						<p>• Actividades en época de alta radiación solar restringida en horarios de 11 am a 5 pm. </p>
						


					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
<!-- //Politicas -->

<!--ModalContacto-->
	<div class="modal about-modal fade" id="myModalCon" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" align="center"> <span>¿Alguna Duda? o ¿Más información? mandanos un mensaje y nos</span>  contactaremos</h4>
				</div> 
				<div class="modal-body">
					<div class="">
					<?=validation_errors();?>
						<form action="<?=base_url().'index.php/contacto/registroContacto';?>" method="post">
							<label>Nombre:</label>
								<input type="text" class="form-control" name="nombre_contacto" placeholder="Nombre" required="">
								<br>
							<label>E-mail:</label>
								<input class="form-control" type="email" class="email" name="email" placeholder="Email" required="">
								<br>
							<label>Mensaje:</label>
								<textarea class="form-control" placeholder="Message" name="mensaje" required=""></textarea>
								<br>
							<label>Comentario:</label>
							<input class="form-control" type="asunto" name="comentario" placeholder="Comentario" required="">
							<br>
							<input class="form-control" type="hidden" name="status" value="1" required="">
							<input class="form-control" type="hidden" name="usuarios_id_usuario" value="0" required="">
							<input align="center" type="submit" value="ENVIAR">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- //ModalContacto -->