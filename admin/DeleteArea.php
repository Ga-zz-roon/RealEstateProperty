
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


	$Id=$_GET['AreaId'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root","12345678");
	// Select Database
	mysql_select_db("pms", $con);
	// Specify the query to Insert Record
	$sql = "delete from Area_Master where AreaId='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Area Deleted Succesfully");window.location=\'Area.php\';</script>';

?>
</body>
</html>
