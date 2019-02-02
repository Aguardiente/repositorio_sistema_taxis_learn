<?php
/*
Este archivo verifica si el correo ya existe en la BD, si es así evuelve a la misma pagina sino comienza a actualizar la BD
y envia a la pagina de usuario
*/
session_start();
include("../../Modelo/conectadorSQL.php");
$usuario=$_GET["usuario"];
$password=$_GET["password"];

//Se hace la consulta para saber si ese correo ya esta en la BD
$queryCorreo = mysqli_query($conectador, "SELECT correo FROM usuario WHERE correo='$correo' and contrasena='$password' and estado='habilitado'");

//Si esta...
		if(mysqli_num_rows($queryCorreo)==1)
			{
				$n=0;
				while($fila=mysqli_fetch_array($result))
				{
				$_SESSION['infoTablasAdmin'][$n]=$fila;
					$n++;
				}

				header("Location:../paginador/redireccionarUsuario.php?pag=interfaz principal de usuario");		

			}
//Si no está...
		else
			{
				header("Location:../../Vista/visitante/ingresar.php?pag=recuperar");
			}


?>