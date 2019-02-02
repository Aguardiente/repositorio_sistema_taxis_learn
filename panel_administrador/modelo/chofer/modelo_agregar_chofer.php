
 <?php
 
  $nombre= $_POST['nombre']; 
  $apellido= $_POST['apellido']; 
  $tipo_taxi= $_POST['tipo_taxi']; 
  $direccion= $_POST['direccion']; 
  $celular= $_POST['celular']; 
  $telefono= $_POST['telefono']; 
  //$fecha= $_POST['fecha']; 
  //$hora= $_POST['hora']; //$fecha = cambiaf_a_mysql($fecha);
   
include("../../conector/conectadorSQL.php");
      date_default_timezone_set('America/Caracas');
  $sql=mysqli_query($conectador,"INSERT INTO `chofer` (`ID_chofer`,`nombre` ,`apellido` ,`tipo_taxi` ,`direccion` ,`celular` ,`telefono` ,`fecha` ,`hora` ) VALUES (NULL, '$nombre' , '$apellido' , '$tipo_taxi' , '$direccion' , '$celular' , '$telefono' , '".date('d/m/y')."' , '".date('g:ia')."' )"); 

  echo "<script>verChoferes();</script>";

    ?>
