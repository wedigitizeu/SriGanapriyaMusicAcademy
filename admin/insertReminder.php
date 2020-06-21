<?php
session_start();
include_once('../db/db.php');
?>

<?php
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	
	$time=$_POST['time'];
	$conv=$_POST['conv'];
	$note=$_POST['note'];
	$status=0;
	
	$query="INSERT INTO `reminder`(`name`, `mobile`, `email`, `date`, `time`, `conv`, `note`, `status`) VALUES
	('$name','$mobile','$email','$date','$time','$conv','$note','$status')";

	if($obj->insertQuery($query))
	{
		$_SESSION["msg"]='Reminder Set Successfully';
		$obj->url("page-error.php");
		
		
	}
	else
	{
		
		$_SESSION["msg"]='Something Went Wrong';
		$obj->url("page-error.php");
	}
}
?>