
  <?php
  $ID_taxi = $_POST['ID_taxi'];require('../conector/conexion.php');  
  
  $query = mysql_query("DELETE FROM `taxi` WHERE `ID_taxi` =$ID_taxi");
  ?>
   <div class='alert alert-info' role='alert'>
   <strong>CORRECTO!! </strong> Se elimino el dato correctamente
   </div><?php
  
  ?>
  
