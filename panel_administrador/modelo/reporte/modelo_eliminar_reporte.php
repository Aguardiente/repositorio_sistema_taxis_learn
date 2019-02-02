
  <?php
  $ID_reporte = $_POST['ID_reporte'];require('../conector/conexion.php');  
  
  $query = mysql_query("DELETE FROM `reporte` WHERE `ID_reporte` =$ID_reporte");
  ?>
   <div class='alert alert-info' role='alert'>
   <strong>CORRECTO!! </strong> Se elimino el dato correctamente
   </div><?php
  
  ?>
  
