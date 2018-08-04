
<div class="">
		<div class="container">
			<div class="w3ls-heading">
				<br>
				<h3>Datos Interesantes</h3
				<p>Acerca de los viajes y lugares Turísticos</p>
			</div>
			<div class="inner_w3l_agile_grids">
					
			<div id="horizontalTab">	
				<?php
        			foreach($datos_interesantes as $al):
				?>
					 		
				<figure class="col-md-3 col-xs-12 w3l-service-hover white">
					<img src="<?=base_url();?>site/template/images/datos/<?=$al->imagen_dato;?>" alt="t1" class="img-responsive" />
					<h2 id="descripcion"><?=$al->nombre_dato;?></h2>
					<h3>Descripcion: <?=$al->descripcion_dato;?></h3>
				</figure>
							
					
				<?php
        			endforeach;
    			?>
							
			</div>
			</div>
		</div>
		<br>
	</div>
	
	
