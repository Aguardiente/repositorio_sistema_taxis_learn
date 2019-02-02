<?php
/*
Archivo quee establece la conexión con la BD
*/
$conectador=mysqli_connect("Localhost","root");
mysqli_query($conectador,"SET NAMES 'utf8'");
mysqli_select_db($conectador,"bd_radio_taxis");
?>