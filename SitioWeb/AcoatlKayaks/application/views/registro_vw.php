<?php
/**
  * Este archivo esta asociado con el módulo de registro. 
  * @category   Registro.
  * @copyright  Copyright (c) 20018-2019 Smart Software. (http://www.smartsoftware.com) 
  * @license    http://www.copyright.mx/copyright-deposito-registro-mexico.html?offer=plan_web_offer
  * @version    Release: @version_0.9.1@ 
  * @link       https://github.com/Sofi-BermudezS/AcoatlKayaks
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Acoatl Kayaks </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">


<link rel="icon" href="<?=base_url();?>site/template/images/a.png" type="image/x-icon"/>
<link href="<?=base_url();?>site/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url();?>site/template/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url();?>site/template/css/owl.carousel.css" type="text/css" media="all">
<link href="<?=base_url();?>site/template/css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?=base_url();?>site/template/css/cm-overlay.css" />
<link href="<?=base_url();?>site/template/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
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
							<a src="index.php"><img src="<?=base_url();?>site/template/images/acok.png"></a>
                        </h1>

					<div align="center" class="container">   
						<div class="col-xs-12 col-sm-4"></div>
 							<div class="col-xs-12 col-sm-4 form form_regis" >
							 <?=validation_errors();?>
            					<form action="<?=base_url().'index.php/Usuario/registro';?>" method="POST" class="login-form">
      								<div class="log">
                						<h1>Registrate</h1>
                						<br>
               							<label for="Nombre">Nombre Completo</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            								<input type="text" name="nombre_usuario" maxlength="200" class="form-control" placeholder="Nombre">
          								</div>
										  <label for="Nombre">Apellido</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            								<input type="text" name="apellido" maxlength="200" class="form-control" placeholder="Apellido">
          								</div>
                  						<label for="Nombre">Correo Electronico</label>
                  						<div class="input-group">
                    						<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                    						<input type="text" name="email" maxlength="200" class="form-control" placeholder="correo">
                  						</div>
                  						<label for="Nombre">Contraseña</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-lock">
            								</i></span>
            								<input type="password" name="contrasena" class="form-control" placeholder="Contraseña">
          								</div>
										  <input type="hidden" name="status" class="form-control" value="1">
										  <input type="hidden" name="privilegios" class="form-control" value="2">
										<button class="btn btn-info btn-lg btn-block" type="submit" value="">Registrarme</button>
                  						<br>
										<label>¿Ya tienes cuenta?<a href="<?=base_url();?>index.php/control/login">&nbsp;Iniciar Sesión</a></label>
										<label><a href="<?=base_url();?>index.php/control/index">&nbsp;Inicio</a></label>
      								</div>
							    </form>   
							</div>   
						</div>
					</div>
				</div>
			</div>
        
<br>
<br>
    <div class="footer">
		<div class="container">
			<div class="border"></div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2018 Acoatl Kayaks</a></p>
			</div>
		</div>
	</div>

	<script src="<?=base_url();?>site/template/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url();?>site/template/js/bootstrap.js"></script>
	<script src="<?=base_url();?>site/template/js/responsiveslides.min.js"></script>
	<script src="<?=base_url();?>site/template/js/SmoothScroll.min.js"></script>
	<script src="<?=base_url();?>site/template/js/jarallax.js"></script>
	<script src="<?=base_url();?>site/template/js/move-top.js"></script>
	<script src="<?=base_url();?>site/template/js/easing.js"></script>
	<script src='<?=base_url();?>site/template/js/jquery.typer.js'></script>
	<script src="<?=base_url();?>site/template/js/owl.carousel.js"></script>  
	<script src="<?=base_url();?>site/template/js/easy-responsive-tabs.js"></script>

	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay:true,
				items : 3,
				itemsDesktop : [640,5],
				itemsDesktopSmall : [414,4]
			});
		}); 
	</script>
	
	<script type="text/javascript">
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	
	<script>
		var win = $(window),
		foo = $('#typer');
		foo.typer(['Turismo', 'Kayaks', 'Pesca deportiva']);
		win.resize(function(){
		var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

			foo.css({
				fontSize: fontSize * .8 + 'px'
			});
		}).resize();
	</script>
	
	<script type="text/javascript">
		$(document).ready(function() {		
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

	
	<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
		type: 'default',       
		width: 'auto',
		fit: true,
		closed: 'accordion',
	activate: function(event) {
		var $tab = $(this);
		var $info = $('#tabInfo');
		var $name = $('span', $info);
		$name.text($tab.text());
		$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
		});
		});
	</script>
</body>	
</html>
