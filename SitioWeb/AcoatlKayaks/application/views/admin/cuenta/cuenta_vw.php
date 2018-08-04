<div align="center" class="container">   
						<div class="col-xs-12 col-sm-4"></div>
 							<div class="col-xs-12 col-sm-4 form form_regis" >
							<?php
                  			$error_msg=$this->session->flashdata('error_msg');
                  				if($error_msg){
                    				echo $error_msg;
                  				}
                   			?>
							 <?=validation_errors();?>
            					<form action="<?=base_url().'index.php/Usuario/modificar_admin';?>" method="POST" class="login-form">
      								<div class="log">
                						<h1>Mi Cuenta</h1>
                						<br>
               							<label for="Nombre">Nombre Completo</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            								<input type="text" name="nombre_usuario" maxlength="200" class="form-control"  value="<?php echo $name;?>" placeholder="Nombre">
          								</div>
										  <label for="Nombre">Apellido</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            								<input type="text" name="apellido" maxlength="200" class="form-control"  value="<?php echo $lastname;?>" placeholder="Apellido">
          								</div>
                  						<label for="Nombre">Correo Electronico</label>
                  						<div class="input-group">
                    						<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                    						<input type="text" name="email" maxlength="200" class="form-control"  value="<?php echo $email;?>" placeholder="correo">
                  						</div>
                  						<label for="Nombre">Contraseña</label>
          								<div class="input-group">
            								<span class="input-group-addon"><i class="glyphicon glyphicon-lock">
            								</i></span>
            								<input type="password" name="contrasena" class="form-control" value="<?php echo $item;?>" placeholder="Contraseña">
          								</div>
										  <input type="hidden" name="status" class="form-control" value="<?php echo $status;?>">
										  <input type="hidden" name="privilegios" class="form-control" value="<?php echo $privileges;?>">
										  <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">
										<button class="btn btn-info btn-lg btn-block" type="submit" value="">Actualizar Información</button>
                  						<br>
										
      								</div> 
							    </form>   
							</div>   
					</div>
					