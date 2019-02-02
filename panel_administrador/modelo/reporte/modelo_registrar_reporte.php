
 <?php
 
  $id_cliente= $_POST['id_cliente']; 
  $celular= $_POST['celular']; 
  $telefono= $_POST['telefono']; 
  $fecha_inicio= $_POST['fecha_inicio']; 
  $fecha_fin= $_POST['fecha_fin']; 
  //$hora= $_POST['hora']; //$fecha = cambiaf_a_mysql($fecha);
   
  require('../conector/conexion.php');
    date_default_timezone_set('America/Caracas');
  $sql=mysql_query("INSERT INTO `reporte` (`ID_reporte`,`id_cliente` ,`celular` ,`telefono` ,`fecha_inicio` ,`fecha_fin` ,`hora` ) VALUES (NULL, '$id_cliente' , '$celular' , '$telefono' , '$fecha_inicio' , '$fecha_fin' , '".date('g:ia')."' )"); 

    if($sql == TRUE )
    {
      echo '<center> <h3> <label> Registro Correcto </label> </h3></center>';
    }
    else
    {
      echo '<center> <h3> <label> No se Registro!! Volver a intentar </label> </h3></center>';
    }

    function cambiaf_a_mysql($fecha){

        ereg( '([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})', $fecha, $mifecha);
        $lafecha=$mifecha[3].'-'.$mifecha[2].'-'.$mifecha[1];
        return $lafecha;
     } 

    ?>
