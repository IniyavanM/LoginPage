<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){


echo "<script>alert('Login Credentials verified')</script>";
echo "Welcome to My page ";

}else{
echo "<script type='text/javascript'>alert('Invalid')</script>";
echo "Invalid Login";
}
}
?>