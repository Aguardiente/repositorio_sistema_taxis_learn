
  <?php
  $ID_empresa = $_POST['idEmpElim'];require('../../conector/conectadorSQL.php');  
  
  $query = mysqli_query($conectador,"DELETE FROM `empresa` WHERE `ID_empresa` =$ID_empresa");

  echo "<script>verEmpresas();</script>";
  ?>

