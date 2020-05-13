<!DOCTYPE html">
<html ">
<head>
<title>Real Estate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #869629}
-->
</style>
</head>
<body>
<div class="main">
  <?php
  ///////////////////////////////// role based //////////////
//if user is visitor
if(!isset($_SESSION["user_role"]) == "visitor"){
	
	echo '<script type="text/javascript">alert("Login required to access this page");</script>';
    header("location: ../index.php");
	
    exit;
}
  
  include "Headermenu.php"
  ?>

  <div class="content">
    <div class="innercontent">
      <?php
	  include "left.php"
	  ?>
      <div class="rightpannel">
      <div>
<h2 class="style3">WELCOME TO ADMIN CONTROL PANNEL</h2>
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
</body>
</html>
