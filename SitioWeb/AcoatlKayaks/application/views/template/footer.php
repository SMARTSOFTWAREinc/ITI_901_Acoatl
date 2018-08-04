<?php
/**
  * Este archivo es el correspondiente al footer del Sitio Web. 
  * @category   Control.
  * @copyright  Copyright (c) 20018-2019 Smart Software. (http://www.smartsoftware.com) 
  * @license    http://www.copyright.mx/copyright-deposito-registro-mexico.html?offer=plan_web_offer
  * @version    Release: @version_0.9.1@ 
  * @link       https://github.com/Sofi-BermudezS/AcoatlKayaks
  * @since      Class available since Release 0.8.1
  * @deprecated Class deprecated in Release 1.9.0 
*/
?>

	<div class="footer">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="https://www.facebook.com/acoatlkayaks/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/acoatlkayaks/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="border"></div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2018 Acoatl Kayaks</a></p>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
 	<script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
	<script src="<?=base_url();?>site/template/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url();?>site/template/js/bootstrap.js"></script>
	<script src="<?=base_url();?>site/template/js/responsiveslides.min.js"></script>
	<script src="<?=base_url();?>site/template/js/SmoothScroll.min.js"></script>
	<script src="<?=base_url();?>site/template/js/jarallax.js"></script>
	<script type="text/javascript" src="<?=base_url();?>site/template/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url();?>site/template/js/easing.js"></script>
	<script src='<?=base_url();?>site/template/js/jquery.typer.js'></script>
	<script src="<?=base_url();?>site/template/js/owl.carousel.js"></script>  
	<script src="<?=base_url();?>site/template/js/easy-responsive-tabs.js"></script>
	<script src="<?=base_url();?>site/template/js/jquery.tools.min.js"></script>
	
				<script src="<?=base_url();?>site/template/js/jquery.mobile.custom.min.js"></script>
				<script src="<?=base_url();?>site/template/js/jquery.cm-overlay.js"></script>
				<script>
					$(document).ready(function(){
						$('.cm-overlay').cmOverlay();
					});
				</script>

	
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