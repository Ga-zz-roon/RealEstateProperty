<!DOCTYPE html">
<html ">
<head>
<title>Real Estate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #869629}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
-->
</style>
</head>
<body>
<div class="main">
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
  include "Headermenu.php"
  ?>
  
  <div class="content">
    <div class="innercontent">
      <?php
	  include "left.php"
	  ?>
      <div class="rightpannel">
      <div>
      <br/>
<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="33" bgcolor="#D36101"><span class="style10">Edit Record</span></td>
  </tr>
  <tr>
    <td>
    <?php
$Id=$_GET['StateId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("pms", $con);
// Specify the query to execute
$sql = "select * from State_Master where Stateid=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['StateId'];
$Name=$row['StateName'];
}
?>
<form Method="POST" Action="UpdateState.php">
<table width="100%" border="0">
<tr>
<td height="32"><span class="style8">State Id</span></td>
<td><span id="sprytextfield1">
  <label>
  <input name="txtStateId" type="text" id="txtStateId" value="<?php echo $Id;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">State Name:</span></td>
<td><span id="sprytextfield2">
  <label>
  <input name="txtStateName" type="text" id="txtStateName" value="<?php echo $Name;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td></td>
<td> <input type="submit" Name="submit" value="Update Record" /></td>
</tr>
</table>
</form>
<?php
// Close the connection
mysql_close($con);
?>
</table>

    </td>
  </tr>
</table>
<h2 class="style3">&nbsp;</h2>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      </div>
        
      </div>
    </div>
  </div>
  <div>
   <?php
   include "footer.php"
   ?>
  </div>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
