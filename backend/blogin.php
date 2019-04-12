<?php
session_start();
include('DBConfig.php');	


$username = $_POST['name'];
$password = $_POST['password'];


$username = stripcslashes($username);
$password = stripcslashes($password);

$result = mysqli_query($con,"select * from users where username = '$username' and pass = '$password'")
or die("Failed to query database".mysql_error());

if($row = mysqli_fetch_array($result))
{
	    $_SESSION['LOGIN_ID']=$row["id"];
        $_SESSION['username']=$row["username"];
		// $_SESSION['role']=$row["role"];

		header("Location:../dashboard.php");
}
else
{
	echo "<script type='text/javascript'>alert('Invalid User Name Or Password ☺ Try Again ☻');</script>";
    // sleep(2);
	header("Location:../index.php");
}

?>