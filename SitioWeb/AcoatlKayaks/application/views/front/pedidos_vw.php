<div class="container"> 
 	<div class="col-xs-12 col-sm-6 form " >
							 <?=validation_errors();?>
            					<form action="<?=base_url().'index.php/Pedidos/insertar';?>" method="POST" class="login-form">
      								<div class="log">
                						<h1>Proceso de Compra</h1>
                						<br>
										<label for="Nombre">Productos</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            								<input type="text" name="productos" maxlength="200" class="form-control" value="<?php echo $products;?>" placeholder="Productos" readonly>
          								</div>
										  <label for="Nombre">Total</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-eur">
            								</i></span>
            								<input type="number" name="total" class="form-control" value="<?php echo $total;?>" placeholder="Total" readonly>
          								</div>
               							<label for="Nombre">Email</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            								<input type="text" name="email" maxlength="200" class="form-control" value="<?php echo $email;?>" placeholder="Email">
          								</div>
										  <label for="Nombre">Nombre</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            								<input type="text" name="nombre" maxlength="200" class="form-control" value="<?php echo $name;?>" placeholder="Nombre">
          								</div>
                  						<label for="Nombre">Apellido</label> 
                  						<div class="input-group">
                    						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    						<input type="text" name="apellido" maxlength="200" class="form-control" value="<?php echo $lastname;?>" placeholder="Apellido">
                  						</div>
                  						<label for="Nombre">Dirección</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-road">
            								</i></span>
            								<input type="text" name="direccion" class="form-control" value="" placeholder="Dirección">
          								</div>
										  <label for="Nombre">País</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-road">
            								</i></span>
            								<input type="text" name="pais" class="form-control" placeholder="País">
          								</div>
										  <label for="Nombre">Estado</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-home">
            								</i></span>
            								<input type="text" name="estado" class="form-control" placeholder="Estado">
          								</div>
                                        <label for="Nombre">Ciudad</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-home">
            								</i></span>
            								<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
          								</div>
                                          <label for="Nombre">Código Postal</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-home">
            								</i></span>
            								<input type="number" name="cp" class="form-control" placeholder="Código Postal">
          								</div>

                                        <label for="Nombre">Teléfono</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-earphone">
            								</i></span>
            								<input type="number" name="telefono" class="form-control" placeholder="Teléfono">
          								</div>
                                          
										  <input type="hidden" name="status" value="En proceso" class="form-control">
                                          
										  <label for="Nombre">Método de Envío</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-saved">
            								</i></span>
											<select name="id_envio" class="form-control">
											<option value="">Selecciona un Método de Envío</option>
											<?php foreach ($metodo_envio as $item) { ?>
											<option value="<?php echo $item->id_envio ;?>"><?php echo $item->nombre_envio ;?></option>
											<?php } ?>
											</select>
          								</div>

										  <label for="Nombre">Método de Pago</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-saved">
            								</i></span>
											<select name="metodo_pago_id_metodo_pago" class="form-control">
											<option value="">Selecciona un Método de Pago</option>
											<?php foreach ($metodo_pago as $item) { ?>
											<option value="<?php echo $item->id_metodo_pago ;?>"><?php echo $item->nombre_pago ;?></option>
											<?php } ?>
											</select>
          								</div>

                                        <label for="Nombre">Usuario</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-user">
            								</i></span>
            								<input type="Text" name="" class="form-control" value="<?php echo $name;?>" placeholder="Usuario" readonly>
          								</div>

                
										  <input type="hidden" name="usuarios_id_usuario"  value="<?php echo $id;?>" >
                                          <button class="btn btn-info btn-lg btn-block" type="submit" value="">Comprar</button>
                  						<br>
										<label><a href="<?=base_url();?>index.php/control/index2/2">&nbsp;Ver Productos</a></label>
      								</div>
							    </form>   
							</div>   
	<div class="col-xs-12 col-sm-6 form " >
			
	</div>   
</div>
			
