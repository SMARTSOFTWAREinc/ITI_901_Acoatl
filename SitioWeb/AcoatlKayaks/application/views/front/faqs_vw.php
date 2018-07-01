<?php
/**
  * Este archivo esta asociada al módulo de FAQS. 
  * @category   FAQS
  * @copyright  Copyright (c) 20018-2019 Smart Software. (http://www.smartsoftware.com) 
  * @license    http://www.copyright.mx/copyright-deposito-registro-mexico.html?offer=plan_web_offer 
  * @version    Release: @version_0.9.1@ 
  * @link       https://github.com/Sofi-BermudezS/AcoatlKayaks
*/
?>

<!--FAQS-->
<div align="center" class="middle-bottom" id="faqs">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Preguntas Frecuentes</h3>
		</div>
		<br>

		<?php
        foreach($faqs as $al):
		?>
		
		<div class="span12 aligncenter flyLeft">
			<hr>
			<p style="font-size:30px; font-weight:bold;"><?=$al->pregunta;?></p>
			<p style="font-size:20px; font-weight:bold;"><?=$al->respuesta;?></p>
			<hr>	
		</div>
		<?php
        endforeach;
    ?>				

		<div class="span12 aligncenter flyRight" align="center">
			<i class="icon-10x"><img src="<?=base_url();?>site/template/images/acok.png"></i>
		</div>			    

			</div>
	</div>
</div>
<!--FAQS -->




          
