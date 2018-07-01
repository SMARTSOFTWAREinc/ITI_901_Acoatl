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
				<h3>Productos</h3>
           		 <div class="grid">
					<?php
        			foreach($productos as $al):
					?>
	
                	<figure class="col-md-3 col-xs-6 w3l-service-hover">
					<h2 id="descripcion" class="nombre"><?=$al->nombre_producto;?></h2>
						<img src="<?=base_url();?>site/template/images/productos/<?=$al->imagen_producto;?>" alt="t1" class="img-responsive" />
						<p><?=$al->descricion;?></p>
						<p>$<?=$al->precio;?></p>
						<p>Stock:<?=$al->stock;?></p>
                   			<figcaption>
                        		<h4>Comprar</h4>
                    		</figcaption>
                	</figure>
        
					
					<?php
        			endforeach;
    				?>
            	</div>
        	</div>
    	</div>
	</div>

<!-- productos-->
	<div class="containerp" align="center">
		<ul class="pagination">
    		<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    		<li class="active"><a href="#!">1</a></li>
    		<li class="waves-effect"><a href="#!">2</a></li>
    		<li class="waves-effect"><a href="#!">3</a></li>
    		<li class="waves-effect"><a href="#!">4</a></li>
    		<li class="waves-effect"><a href="#!">5</a></li>
    		<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  		</ul>
	</div>
	<br>