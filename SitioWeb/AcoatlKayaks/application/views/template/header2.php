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
									<li><a data-toggle="modal" data-target="#myModalCon">Contacto</a></li>
									<li><a href="<?=base_url();?>index.php/control/login" class="glyphicon glyphicon-user"></a></li>
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
							<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a class="facebook" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
						<form method="post">
							<label>Nombre:</label>
								<input type="text" class="form-control" name="Name" placeholder="Nombre" required="">
								<br>
							<label>E-mail:</label>
								<input class="form-control" type="email" class="email" name="Correo electronico" placeholder="Email" required="">
								<br>
							<label>Asunto:</label>
								<input class="form-control" type="asunto" name="Asunto" placeholder="Asunto" required="">
								<br>
							<label>Mensaje:</label>
								<textarea class="form-control" placeholder="Message" name="Mensaje" required=""></textarea>
								<br>
							<input align="center" type="submit" value="ENVIAR">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //ModalContacto -->
