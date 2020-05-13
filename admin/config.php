<?php
$con = mysql_connect("localhost", "root", "12345678") or die("Failed to connect to MySql.");
mysql_select_db("pms", $con) or die("Failed to connect to database");
?>