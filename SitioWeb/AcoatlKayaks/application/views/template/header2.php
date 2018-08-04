<?php
/**
  * Este archivo es el correspondiente al header2 para páginas específicas dentro  del Sitio Web. 
  * @category   Control.
  * @copyright  Copyright (c) 20018-2019 Smart Software. (http://www.smartsoftware.com) 
  * @license    http://www.copyright.mx/copyright-deposito-registro-mexico.html?offer=plan_web_offer
  * @version    Release: @version_0.9.1@ 
  * @link       https://github.com/Sofi-BermudezS/AcoatlKayaks
  * @since      Class available since Release 0.8.1
  * @deprecated Class deprecated in Release 1.9.0 
*/
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>Acoatl Kayaks </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<link rel="icon" href="<?=base_url();?>site/Proyecto/template/images/a.png" type="image/x-icon"/>
<link href="<?=base_url();?>site/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url();?>site/template/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url();?>site/template/css/owl.carousel.css" type="text/css" media="all">
<link href="<?=base_url();?>site/template/css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?=base_url();?>site/template/css/cm-overlay.css" />
<link href="<?=base_url();?>site/template/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/> <!--Our Project-->
<link href="<?=base_url();?>site/template/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>

	<div class="loader"></div>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="<?=base_url();?>index.php/control/index"><img src="<?=base_url();?>site/template/images/acok.png"></a>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="<?=base_url();?>#conocenos">Conocenos</a></li>
									<li><a href="<?=base_url();?>#productos">Productos</a></li>
									<li><a href="<?=base_url();?>#tours">Tours</a></li>
									<li><a href="<?=base_url();?>#galeria">Galería</a></li>
									<li><a href="<?=base_url();?>index.php/control/index2/">FAQs</a></li>
									<li><a href="<?=base_url();?>index.php/control/index2/3">Promociones</a></li>
									<li><a href="<?=base_url();?>index.php/control/index2/4">Datos Interesantes</a></li>
									<li><a data-toggle="modal" data-target="#myModalCon">Contacto</a></li>
									<?php
									$id= $this->session->userdata('user_id');   
									if($id){ ?>
					
									 <!-- /.dropdown --> 
									<?php
									}else{
									?>
										<li><a href="<?=base_url();?>index.php/control/login" class="glyphicon glyphicon-user"></a></li>	
									<?php
									} 
									?>
									
									<?php  
									$id= $this->session->userdata('user_id'); 
									if($id){ ?>
									
									<li><a href="<?=base_url();?>index.php/Catalogo/carrito"><i class="fa fa-cart-arrow-down "></i>Mi Carrito</a></li>
									             
                						<!-- /.dropdown -->
										<li class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
												<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
											</a>
											<ul class="dropdown-menu negro">       
												<li></li>

												<?php
												$p= $this->session->userdata('user_privileges');   
												if($p != 1){ ?>

												<li><a href="<?=base_url();?>index.php/Control/cuenta"><i class="glyphicon glyphicon-user"></i> Mi Cuenta</a></li>
												
												<?php
												}
												?>
												
												<li><a href="<?=base_url();?>index.php/Usuario/user_logout"><i class="fa fa-sign-out "></i> Cerrar Sesión</a></li>
												<?php
												$id= $this->session->userdata('user_privileges');   
												if($id==1){ ?>
												<li><a href="<?=base_url();?>index.php/Control_admin/index"><i class="fa fa-coffee"></i>C-panel</a></li>
												<?php
												}
												?>
											
											</ul>
											<!-- /.dropdown-user -->
										</li>
										<!-- /.dropdown -->
									
									<?php
									}
									?>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		 
				</div>
				<!-- w3-banner -->
				<div class="w3-banner">
					<div id="typer"></div>
					<div class="top-banner-right">
						<ul>
							<li><a class="facebook" href="https://www.facebook.com/acoatlkayaks/?ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a class="facebook" href="https://www.instagram.com/acoatlkayaks/?hl=es-la"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="w3ls-phone">
						<h2><i class="fa fa-phone" aria-hidden="true"></i> 417 123 4567</h2>
					</div>
				</div>
				<!-- //w3-banner -->
			</div>
		</div>
	</div>
	<!-- //banner --> 
	
	<!--Modal-->
	<div class="modal about-modal fade" id="myModalCon" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" align="center"> <span>¿Alguna Duda? o ¿Más información? mandanos un mensaje y nos</span>  contactaremos</h4>
				</div> 
				<div class="modal-body"> 
					<div class="">
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
