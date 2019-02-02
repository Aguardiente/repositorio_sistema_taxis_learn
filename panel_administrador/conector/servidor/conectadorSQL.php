<?php
/*
Archivo quee establece la conexión con la BD
*/
$conectador=mysqli_connect("localhost","id6693495_id6693495_lucario","stampleton");
mysqli_query($conectador,"SET NAMES 'utf8'");
mysqli_select_db($conectador,"id6693495_bd_sistema_de_radio_taxis");
?>