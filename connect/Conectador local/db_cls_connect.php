<?php
session_start();
Class dbObj{
	/* Database connection start */
	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "sistema_inventario_bd";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			mysqli_query($con,"SET NAMES 'utf8'");
			$this->conn = $con;
		}
		return $this->conn;
	}
}

?>