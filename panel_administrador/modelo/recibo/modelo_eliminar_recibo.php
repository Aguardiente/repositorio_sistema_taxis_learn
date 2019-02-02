
  <?php
  $ID_Factura = $_POST['idRecElim'];
  include("../../conector/conectadorSQL.php"); 
  
  $query = mysqli_query($conectador,"DELETE FROM `Factura` WHERE `ID_Factura` =$ID_Factura");
  echo "<script>verRecibos();</script>";
  ?>
  
