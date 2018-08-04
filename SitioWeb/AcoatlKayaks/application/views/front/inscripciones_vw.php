<div class="container"> 
 	<div class="col-xs-12 col-sm-6 form " >
							 <?=validation_errors();?>
            					<form action="<?=base_url().'index.php/Inscripciones/insertar';?>" method="POST" class="login-form">
      								<div class="log">
                						<h1>Proceso de Inscripción</h1>
                						<br>
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
            								<input type="text" name="direccion" class="form-control" placeholder="Dirección">
          								</div>

                                        <label for="Nombre">Ciudad</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-home">
            								</i></span>
            								<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
          								</div>

                                          <label for="Nombre">Estado</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-home">
            								</i></span>
            								<input type="text" name="estado" class="form-control" placeholder="Estado">
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
                                          <label for="Nombre">Precio</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-eur">
            								</i></span>
            								<input type="number" name="precio" class="form-control" value="<?php echo $precio;?>" placeholder="Precio" readonly>
          								</div>

                                          <label for="Nombre">Método de Pago</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-saved">
            								</i></span>
											<select name="metodo_pago_id_metodo_pago" class="form-control">
											<option value="">Selecciona un Metodo de Pago</option>
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

                                          <label for="Nombre">Tour</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-plane">
            								</i></span>
            								<input type="text" name="tour_name" class="form-control" value="<?php echo $tour_name;?>" placeholder="Tour" readonly>
										  </div>
										  <input type="hidden" name="tours_id_tour"  value="<?php echo $id_tour;?>" >
										  <input type="hidden" name="usuarios_id_usuario"  value="<?php echo $id;?>" >
                                          <button class="btn btn-info btn-lg btn-block" type="submit" value="">Inscribirme</button>
                  						<br>
										<label><a href="<?=base_url();?>index.php/control/index/#tours">&nbsp;Ver Tours</a></label>
      								</div>
							    </form>   
							</div>   
                            <div class="col-xs-12 col-sm-6 form " >
		
			<div class="w3ls-heading team-heading">
				<br><br><br><br>
				<h3 class="negro">Tours</h3>
				<pclass="negro">Tours disponibles</p>
			</div>
			<div class="inner_w3l_agile_grids">
					
					<div id="horizontalTab">	
							
					<?php
        			foreach($tours as $al):
					 ?>
					 		<ul class="resp-tabs-list">
							<figure class="col-md-6 col-xs-12 w3l-service-hover">

							<img src="<?=base_url();?>site/template/images/tours/<?=$al->imagen;?>" alt="t1" class="img-responsive" />
							<h2 id="descripcion" class="nombre white"><?=$al->nombre;?></h2>
							<h4>Lugares disponibles: <?=$al->cupo;?></h4>
							<h4>Precio $<?=$al->precio;?></h4>
									<div class="w3-agile-blog-right-info" align="right">
										<form action="<?=base_url();?>index.php/Tour_vista/inscripciones" method="post">
										<input type="hidden" name="tour" value="<?=$al->id_tour;?>">
										<input type="hidden" name="precio" value="<?=$al->precio;?>">
										<input type="hidden" name="tour_name" value="<?=$al->nombre;?>">
										<figcaption>
							   			<button class="btn btn-warning btn-lg btn-block" type="submit" value="">Inscribirme</button>
                    					</figcaption>
										</form>
									</div>
							</figure> 
							</u>
					
					<?php
        			endforeach;
    				?>
							
					</div>
			</div>
		
            					 
	</div>   
</div>
			

    	   