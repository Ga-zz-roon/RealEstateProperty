
<!DOCTYPE html ">
<html ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_POST['txtCityId'];
$Name=$_POST['txtCityName'];
$State=$_POST['cmbState'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root","12345678");
// Select Database
mysql_select_db("pms", $con);
// Specify the query to Update Record
$sql = "Update City_Master set CityName='".$Name."',StateName='".$State."' where CityId=".$Id."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("City Updated Succesfully");window.location=\'City.php\';</script>';
?>
</body>
</html>
