<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="libs\scripts/jquery-1.12.4.js"></script>
    
    <link rel="stylesheet" href="libs\scripts/jquery-ui.css">

   <script src="libs\scripts/jquery-ui.js"></script>

   <script src="libs/jquery.js" charset="utf-8"></script>
    <script type="text/javascript">
            var $tablas = jQuery.noConflict();
    </script>


    <title>Panel Principal</title>
    <link rel="shortcut icon" href="../images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="social-buttons/social-buttons.css" rel="stylesheet">
        <link href="social-buttons/estiloedwin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="libs/bootstrap-datepicker/css/bootstrap-datepicker.css" charset="utf-8">
	<script src="libs/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js" charset="utf-8"></script>
      <script type="text/javascript">
            var $calendario = jQuery.noConflict();
    </script>

  <link rel="stylesheet" href="../dist/css/fuentes.css" type="text/css" />

<script src="../control/controlador_menu.js"></script>
<script type='text/javascript' src='../control/controlador_administrador.js'></script>
<script type='text/javascript' src='../control/controladores_cliente.js'></script>
<script type='text/javascript' src='../control/controladores_empresa.js'></script>
<script type='text/javascript' src='../control/controladores_recibo.js'></script>
<script type='text/javascript' src='../control/controladores_servicio.js'></script>
<script type='text/javascript' src='../control/controladores_reporte.js'></script>
<script type='text/javascript' src='../control/controladores_chofer.js'></script>
<script type='text/javascript' src='../control/controladores_taxi.js'></script>
<script type='text/javascript' src='../control/controladores_tipo.js'></script>

</head>

<body style='background:black;'>

    <!-- Begin Navbar -->
    <nav class="menu-bar">
      <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li>
                <img src="../../multimedia/imagenes/logo.png" >

                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Ir al inicio" onclick="verHome()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-home"></i>
                      <p>Inicio</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Administradores" onclick="verUsuarios()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-th"></i>
                      <p>Perfil</p>
                    </div>
                  </div>
                </a>
              </li>              
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Administradores" onclick="verClientes()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-th"></i>
                      <p>Cliente</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Proveedores" onclick="verEmpresas()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-globe"></i>
                      <p>Empresa</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Inventario" onclick="verRecibos()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-briefcase"></i>
                      <p>Recibo</p>
                    </div>
                  </div>
                </a>
              </li>              
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verServicios()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-user"></i>
                      <p>Servicio</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verReportes()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-user"></i>
                      <p>Reporte</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verChoferes()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-user"></i>
                      <p>Chofer</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verTaxis()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-user"></i>
                      <p>Taxi</p>
                    </div>
                  </div>
                </a>
              </li>                                          
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verTipos()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-user"></i>
                      <p>Tipo</p>
                    </div>
                  </div>
                </a>
              </li>   
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Sale de la sesion" onclick="salirSistema()">
                  <div class="text-center">
                    <div class="menu-item">
                      <i class="glyphicon glyphicon-off"></i>
                      <p>Salir</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
      </div>

    </nav>


    <div id="modals">

    </div>

    <div id="panel" class='row' style=' margin: 0px; padding: 20px;'>
  		<?php
        include("../modelo/modelo_home_administrador.php");
  		?>
    </div>


   


   <footer>

                <div align='center'>

                    Solidev &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados <i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-heart-o" aria-hidden="true"></i>.

                </div>

    </footer>

    <style>
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    color: #333;
    background-color: #42c1ff;
    }
    </style>
    <script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
    $('a.nosalto').click(function(e)
    {
    e.preventDefault();
    });
    </script>

    <!-- jQuery -->
    <!--<script src="../vendor/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	


</body>

</html>
