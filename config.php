<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'pms');
//session_start();

//$_SESSION['user_role'] = $user_role;
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	echo "ERROR: Could not connect. ";
}
 $con = mysql_connect("localhost", "root", "12345678") or die("Failed to connect to MySql.");
mysql_select_db("pms", $con) or die("Failed to connect to database");

/////////////////////////////////////////////////
Class dbObj{
	/* Database connection start */
	
	var $conn;
	function getConnstring() {
$cons = mysql_connect("localhost", "root", "12345678") or die("Failed to connect to MySql.");
mysql_select_db("pms", $cons) or die("Failed to connect to database");
		/* check connection */
		
			$this->conn = $cons;
		
		return $this->conn;
	}
}
	
?>