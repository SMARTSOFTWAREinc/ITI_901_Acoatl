<?php
/**
  * Este archivo esta asociado con el módulo de catalogo de Productos. 
  * @category   Catalogo de Productos. 
  * @copyright  Copyright (c) 20018-2019 Smart Software. (http://www.smartsoftware.com) 
  * @license    http://www.copyright.mx/copyright-deposito-registro-mexico.html?offer=plan_web_offer
  * @version    Release: @version_0.9.1@ 
  * @link       https://github.com/Sofi-BermudezS/AcoatlKayaks
*/
?>

<!--Productos-->
<div class="middle-bottom">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Promociones</h3>
           		 <div class="grid">
					<?php
        			foreach($promociones as $al):
					?>
	
                	<figure class="col-md-3 col-xs-12 w3l-service-hover white">
					<h2 id="descripcion" class="nombre"><?=$al->nombre_promocion;?></h2>
						<img src="<?=base_url();?>site/template/images/promos/<?=$al->imagen_promocion;?>" alt="t1" class="img-responsive" />
						<p><?=$al->descripcion_promocion;?></p>
                   			<figcaption>
                    		</figcaption>
                	</figure>
        
					
					<?php
        			endforeach;
    				?>
            	</div>
        	</div>
    	</div>
	</div>


	<br>