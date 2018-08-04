        <!--Productos-->
		<div class="middle-bottom">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Productos</h3>
                <?php
                //mostramos el mensaje de las sesiones flashdata dependiendo
                //de lo que hayamos hecho.
                $agregado = $this->session->flashdata('agregado');
                $destruido = $this->session->flashdata('destruido');
                $productoEliminado = $this->session->flashdata('productoEliminado');
                if ($agregado) {
                    ?>
                    <li class="grid_6" id="productoAgregado"><?= $agregado; ?></li>
                    <?php
                }elseif($destruido){
                    ?>
                    <li class="grid_6" id="productoAgregado"><?= $destruido; ?></li>
                    <?php
                }elseif($productoEliminado){
                    ?>
                    <li class="grid_6" id="productoAgregado"><?= $productoEliminado; ?></li>
                    <?php
                }
                ?>
                
           		 <div class="grid">
					<?php
        			foreach ($productos as $producto):
					?>
	
                	<figure class="col-md-3 col-xs-12 w3l-service-hover">
                    <?= form_open(base_url() . 'index.php/Catalogo/agregarProducto') ?>
					<h2 id="nombre" class="nombre"><?= ucfirst($producto->nombre_producto); ?></h2>
						<img id="imagen" src="<?=base_url();?>site/template/images/productos/<?= $producto->imagen_producto ?>"  class="img-responsive" />
						<p><?=$producto->descricion;?></p>
						<p>$<?=$producto->precio;?></p>
						<p>Stock:<?=$producto->stock;?></p>
                   		
                        <?= form_hidden('uri', $this->uri->segment(3)); ?>
                        <?= form_hidden('id', $producto->id_productos); ?>
                        <?= form_hidden('imagen', $producto->imagen_producto); ?>
                        <button class="btn btn-warning btn-lg btn-block" type="submit">Agregar al carrito </button>
                        <?= form_close() ?>
                    </figure>
					<?php
        			endforeach;
    				?>
            	</div>
        	</div>
    	</div>
	</div>
            <!--creamos los enlaces de la paginación-->
            <div class="grid_7">
                <?= $this->pagination->create_links() ?>
            </div>
        
      