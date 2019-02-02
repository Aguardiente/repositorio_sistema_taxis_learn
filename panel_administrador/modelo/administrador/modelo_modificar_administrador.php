<?php 
session_start();
include("../../conector/conectadorSQL.php");
$qry= "UPDATE `usuario_administrador` SET `PASSWORD` = '".md5($_POST['passAdminMod'])."', `CARGO` = '".$_POST['cargoAdminMod']."', `ALIAS` = '".$_POST['aliasAdminMod']."' WHERE `ID_USUARIO_ADMINISTRADOR` = ".$_POST['id'];
mysqli_query($conectador,$qry);
echo "<script>verUsuarios();</script>";
?>