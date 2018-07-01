<?php
/**
  * Este archivo esta asociado con el módulo de Iniciar Sesión. 
  * @category   Iniciar Sesión. 
  * @copyright  Copyright (c) 20018-2019 Smart Software. (http://www.smartsoftware.com) 
  * @license    http://www.copyright.mx/copyright-deposito-registro-mexico.html?offer=plan_web_offer
  * @version    Release: @version_0.9.1@ 
  * @link       https://github.com/Sofi-BermudezS/AcoatlKayaks
*/ 
?>


<link href="<?=base_url();?>site/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url();?>site/template/css/style.css" type="text/css" media="all" />
<link rel="icon" href="<?=base_url();?>site/template/images/a.png" type="image/x-icon"/>


<div class="container" align="center">
	<a><img src="<?=base_url();?>site/template/images/s.png"></a>  
	<div align="center" class="container">  
    	<div class="col-xs-12 col-sm-4"></div>

			<div class="col-xs-12 col-sm-4 form form_regis" >
            	<form action="<?=base_url().'index.php/Usuario/login';?>" method="POST" class="login-form">
                <h1 class="ini">Iniciar Sesión</h1>
                <br>
      				<div class="login-wrap">
          				<div class="input-group">
            				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            				<input type="text" name="email" maxlength="200" class="form-control" placeholder="Usuario" required>
          				</div>
          				<div class="input-group">
            				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            				<input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>
          				</div>
         				 <button class="btn btn-success btn-lg btn-block" type="submit" value="">Iniciar Sesión</button>
          				<a type="button" class="btn btn-info btn-lg btn-block" href="<?=base_url();?>index.php/control/reg">Registrarme</a>
      				</div>
			</form>   
		</div>   
    	<div class="col-xs-12 col-sm-4"></div>
	</div>
</div>