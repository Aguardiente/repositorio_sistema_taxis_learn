<?php 
session_start();
date_default_timezone_set('Canada/Atlantic');
include("../../conector/conectadorSQL.php");
$qry= "DELETE FROM `cliente` WHERE `ID_CLIENTE` = ".$_POST['idCliElim'];
mysqli_query($conectador,$qry);
echo "<script>verClientes();</script>";

//echo $qry;

?>