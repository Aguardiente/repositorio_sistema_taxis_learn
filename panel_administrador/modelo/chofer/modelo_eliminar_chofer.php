
  <?php
  $ID_chofer = $_POST['idChfElim'];
  include("../../conector/conectadorSQL.php");
  
  $query = mysqli_query($conectador,"DELETE FROM `chofer` WHERE `ID_chofer` =$ID_chofer");
  
  echo "<script>verChoferes();</script>";

  ?>
  
