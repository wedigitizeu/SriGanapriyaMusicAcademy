<?php
session_start();
include_once('../db/db.php');
?>

<?php

if(isset($_POST['sub']))
{
	 $email=$_POST['email'];
	 $pwd=$_POST['pwd'];
	
	$sel="SELECT * FROM `login` WHERE (email='$email') AND (password='$pwd')";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)>0)
	{
		$data=mysqli_fetch_assoc($exe);
		
		$_SESSION["uname"]=$data['name'];
		$obj->url("dashboard.php");
	}
	else
	{
		$_SESSION["invalid"]='Invalid User';
		$obj->url("index.php");
	}
	
}


?>
