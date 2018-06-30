
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>AcoatlKayaks</title>
	<link rel="icon" href="<?=base_url();?>site/template/images/a.png" type="image/x-icon"/>
    <!-- Bootstrap Styles-->
    <link href="<?=base_url();?>template_admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?=base_url();?>template_admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?=base_url();?>template_admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?=base_url();?>template_admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <script src="<?=base_url();?>template_admin/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?=base_url();?>template_admin/assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>template_admin/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?=base_url();?>template_admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?=base_url();?>template_admin/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="<?=base_url();?>template_admin/assets/js/custom-scripts.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Acoatl Kayaks</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">       
                        <li></li>
                        <li><a href="<?=base_url();?>index.php/Control_admin/salir"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="<?=base_url();?>index.php/Control_admin"><i class="fa fa-dashboard"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>index.php/Control_admin/tours"><i class="fa fa-desktop"></i> Tours</a>
                    </li>
					<li>
                        <a href="<?=base_url();?>index.php/Control_admin/productos"><i class="fa fa-bar-chart-o"></i> Productos</a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>index.php/Control_admin/contacto"><i class="fa fa-qrcode"></i> Contacto </a>
                    </li>
                    
                    <li>
                        <a href="<?=base_url();?>index.php/Control_admin/galeria"><i class="fa fa-table"></i> Galeria</a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>index.php/Control_admin/faqs"><i class="fa fa-edit"></i> Faqs </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Metodo:<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=base_url();?>index.php/Control_admin/pago">Pago</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>index.php/Control_admin/envio">Envío</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url();?>index.php/Control_admin/pedidos"><i class="fa fa-fw fa-file"></i>Pedidos</a>
					</li>
					<li>
                        <a href="<?=base_url();?>index.php/Control_admin/inscripciones"><i class="fa fa-fw fa-file"></i>Inscripciones</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
