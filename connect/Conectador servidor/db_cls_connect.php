<?php
session_start();

Class dbObj{
	/* Database connection start */
	var $servername = "localhost";
	var $username = "id6693495_id6693495_lucario";
	var $password = "stampleton";
	var $dbname = "id6693495_bd_sistema_de_radio_taxis";
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