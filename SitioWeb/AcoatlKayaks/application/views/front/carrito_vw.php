

<div class="middle-bottom">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Carrito de la compra</h3>
           		 <div class="grid">
					<?php
            //si el carrito contiene productos los mostramos
            $names = "";
            if ($carrito = $this->cart->contents()) {
                ?> 
               <div class="col-xs-12"></div>
 							<div class="col-xs-12" >
                    <table class="table table-hover table-responsive">
                       <legend>Disfruta los mejores productos</legend>
                        <tr>
                            <th>Nombre</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Eliminar</th>
                        </tr>
                    <?php
                    foreach ($carrito as $item) {
                        ?>
                        <tr>
                            <td><?= ucfirst($item['name']) ?></td>
                            <td><img  src="<?=base_url();?>site/template/images/productos/<?= $item['imagen'] ?>" width="100 " height="140"></td>
                           
                                <?php
                                $nombres = array('nombre' => ucfirst($item['name']));
                                $precio = array();
                                $precio = $item['price'];
                                ?>
                         
                            <td>$<?= $item['price'] ?></td>
                            <td><?= $item['qty'] ?></td>
                            <td>$<?= $item['price'] * $item['qty']?></td>
                            <!--creamos el enlace para eliminar el producto
                            pulsado pasando el rowid del producto-->
                            <td id="eliminar"><?= anchor('../index.php/catalogo/eliminarProducto/' . $item['rowid'], 'Eliminar') ?></td>
                        </tr>
                       
                        <?php
                        //$names='';  
                        $names.=$item['name'];
                        $names.=',';
     
                    
                    }
                    ?>
                    <tr id="total">
                        <td><strong>Total:</strong></td>
                        <!--mostramos el total del carrito
                        con $this->cart->total()-->
                        <td colspan="1"><?= $this->cart->total() ?> MXP.</td>
                        <!--creamos un enlace para eliminar el carrito-->
                        <td colspan="2" id="eliminarCarrito"><?= anchor('../index.php/catalogo/eliminarCarrito', 'Vaciar carrito')?></td>
                        <td colspan="2">
                        <form action="<?=base_url().'index.php/Pedidos/listar';?>" method="POST">
                        <input type="hidden" name="productos" value="<?php echo $names;?>">
                        <input type="hidden" name="total" value="<?= $this->cart->total(); ?>">
                        <button class="btn btn-warning btn-lg btn-block" type="submit">Comprar ahora</button>
                        </form>
                        </td>
                    </tr>
                </table>
                </div>
            <?php
            }
            ?>
            <!--fin de nuestro carrito-->
            	</div>
        	</div>
    	</div>
	

