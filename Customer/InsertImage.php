<!DOCTYPE html ">
<html ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//////////////////////////// role based //////////////
//if user is visitor 
if(!isset($_SESSION["user_role"]) == "visitor" ){
	
	echo '<script type="text/javascript">alert("Login required to access this page");</script>';
    header("location: ..\index.php");
	
    exit;
}
	////////////////////////////////////////
	$PId=$_POST['cmbProperty'];
	$Title=$_POST['txtTitle'];
	$Path1=$_FILES["txtFile"]["name"];
	
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"../upload/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root","12345678");
	// Select Database
	mysql_select_db("pms", $con);
	// Specify the query to Insert Record
	$sql = "insert into property_image(PropertyId,Title,ImagePath) values('".$PId."','".$Title."','".$Path1."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Image Uploaded Succesfully");window.location=\'Image.php\';</script>';

?>
</body>
</html>
