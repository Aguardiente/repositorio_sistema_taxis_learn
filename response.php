<?php
//include connection file 
include_once("connect/db_cls_connect.php");
$db = new dbObj();
$connString =  $db->getConnstring();

$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';
$empCls = new Employee($connString);

switch($action) {
 case 'login':
	$empCls->login();
 break;
 case 'logout':
	$empCls->logout();
 break;
 default:
 return;
}


class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	function login() {
		if(isset($_POST['login-submit'])) {
			$usuario = $_POST['username'];
			$user_password = $_POST['password'];
			$sql = "SELECT * FROM usuario_administrador WHERE email='$usuario'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if(md5($user_password) == $row['password']){
				echo "1";
				$_SESSION['id_administrador'] = $row['ID_usuario_administrador'];
				$_SESSION['usuario'] = $row['email'];
				$_SESSION['contrasena'] = $row['password'];				
				$_SESSION['cargo'] = $row['cargo'];
				$_SESSION['alias'] = $row['alias'];				
			} else {
				echo "Ohhh ¡Datos incorrectos!"; // wrong details
			}
		}
	}
	function logout() {
		unset($_SESSION['usuario']);
		if(session_destroy()) {
			header("Location: index.php");
		}
	}
}
?>
	