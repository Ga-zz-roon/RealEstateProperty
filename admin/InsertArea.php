<!DOCTYPE html">
<html ">
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

	$CityName=$_POST['cmbCity'];
	$AreaName=$_POST['txtAreaName'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root","12345678");
	// Select Database
	mysql_select_db("pms", $con);
	// Specify the query to Insert Record
	$sql = "insert into Area_Master	(CityName,AreaName) values('".$CityName."','".$AreaName."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Area Inserted Succesfully");window.location=\'Area.php\';</script>';

?>
</body>
</html>
