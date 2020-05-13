
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	///////////////////////////// role based //////////////
//if user is customer 
	if(!isset($_SESSION["user_role"]) == "customer" ){
	
	echo '<script type="text/javascript">alert("Login required to access this page");</script>';
    header("location: ..\Customer\index.php");
	
    exit;
	}
	////////////////////////////////////////
///////////////////////////// role based //////////////
//if user is visitor 
if(!isset($_SESSION["user_role"]) == "visitor" ){
	
	echo '<script type="text/javascript">alert("Login required to access this page");</script>';
    header("location: ..\index.php");
	
    exit;
}
	////////////////////////////////////////
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root","12345678");
	// Select Database
	mysql_select_db("pms", $con);
	// Specify the query to Insert Record
	$sql = "insert into Login_Master	(UserName,Password) values('".$UserName."','".$Password."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';

?>
</body>
</html>
