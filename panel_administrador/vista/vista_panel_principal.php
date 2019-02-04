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
    <title>Panel Principal</title>
    <link rel="shortcut icon" href="../images/favicon.png">
  
    <!-- jQuery -->
    <script src="../librerias/jQuery/jquery.js" charset="utf-8"></script>
    <script type="text/javascript"> var $tablas = jQuery.noConflict(); </script>

    <!-- Bootstrap Core CSS -->
    <link href="../librerias/Bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core JavaScript -->
    <script src="../librerias/Bootstrap/bootstrap.min.js"></script>

    <!-- Datepicker -->
  	<script src="../librerias/Datepicker/js/bootstrap-datepicker.min.js" charset="utf-8"></script>
  	<link rel="stylesheet" href="../librerias/Datepicker/css/bootstrap-datepicker.css" charset="utf-8">
  	<script src="../librerias/Datepicker/locales/bootstrap-datepicker.es.min.js" charset="utf-8"></script>
    <script type="text/javascript"> var $calendario = jQuery.noConflict(); </script>

    <!-- DataTables JavaScript  -->
    <script src="../librerias/Datatables/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="../librerias/Datatables/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../librerias/Datatables/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../librerias/Datatables/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="../librerias/Datatables/datatables-buttons/buttons.flash.min.js"></script>
    <script src="../librerias/Datatables/datatables-buttons/jszip.min.js"></script>
    <script src="../librerias/Datatables/datatables-buttons/pdfmake.min.js"></script>
    <script src="../librerias/Datatables/datatables-buttons/vfs_fonts.js"></script>
    <script src="../librerias/Datatables/datatables-buttons/buttons.html5.min.js"></script>
    <script src="../librerias/Datatables/datatables-buttons/buttons.print.min.js"></script>
  
    <!-- jQuery min -->
    <script src="../librerias/jQuery/jquery.min.js"></script>
        
    <!-- Carrusel OWL JavaScript  -->
    <link rel="stylesheet" href="../librerias/Carrusel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../librerias/Carrusel/assets/animate.css">
    <script src="../librerias/Carrusel/owl.carousel.min.js"></script>

    <!-- Controladores -->
    <script type='text/javascript' src="../control/controlador_menu.js"></script>
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
    <nav class="menu-bar" >
      <div class="navbar navbar-default" style='background:yellow;'>
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
                      <p>Inicio</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Administradores" onclick="verUsuarios()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Perfil</p>
                    </div>
                  </div>
                </a>
              </li>              
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Administradores" onclick="verClientes()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Cliente</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Proveedores" onclick="verEmpresas()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Empresa</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Inventario" onclick="verRecibos()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Recibo</p>
                    </div>
                  </div>
                </a>
              </li>              
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verServicios()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Servicio</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verReportes()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Reporte</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verChoferes()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Chofer</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verTaxis()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Taxi</p>
                    </div>
                  </div>
                </a>
              </li>                                          
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Listar Clientes" onclick="verTipos()">
                  <div class="text-center">
                    <div class="menu-item">
                      <p>Tipo</p>
                    </div>
                  </div>
                </a>
              </li>   
              <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Sale de la sesion" onclick="salirSistema()">
                  <div class="text-center">
                    <div class="menu-item">
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

</body>

</html>
