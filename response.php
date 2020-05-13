<?php
//include connection file 
include_once("config.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$role="visitor";
$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';
$empCls = new Employee($link);

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
		 header("location: welcome.php");
		if(isset($_POST['login-submit'])) {
			$user = mysqli_real_escape_string(trim($_POST['username']));
			$user_password = mysqli_real_escape_string(trim($_POST['password']));
				$sql = "SELECT * FROM users WHERE username='$user'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if(md5($user_password) == $row['password']){
				echo "1";
				// Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $row['id'];
                            $_SESSION["username"] = $row['username']; 
							$_SESSION["user_role"]=$row['role'];
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
			} else {
				echo "Ohhh ! Wrong Credential."; // wrong details
			}
		}
	}



	function logout() {
		unset($_SESSION['user_session']);
		if(session_destroy()) {
			header("Location: index.php");
		}
	}
}
?>
	