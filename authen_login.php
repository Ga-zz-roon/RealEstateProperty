<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
echo $username;
echo $password;
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
echo $count;

if ($count ){

//echo "Login Credentials verified";
echo "Login Credentials verified";

}else{
echo "Invalid Login Credentials";
//echo "Invalid Login Credentials";
}
}
?>