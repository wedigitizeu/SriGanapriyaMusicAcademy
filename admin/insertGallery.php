<?php
session_start();
include_once('../db/db.php');
?>

<?php


if(isset($_POST['sub']))
{
	
		
	
	
	$name=$_POST["title"];
	$date=$_POST["date"];
	$size=$_FILES["photo"]["size"];
	$error=$_FILES["photo"]["error"];
	$file_name=$_FILES["photo"]["name"];
	$temp_name=$_FILES["photo"]["tmp_name"];
	$folder="../gallery/".$file_name;
	move_uploaded_file($temp_name, $folder);

	$query="INSERT INTO `gallery`(`date`, `title`, `photo_path`) VALUES ('$date','$name','$file_name')";

	if($obj->insertQuery($query))
	{
		
		$_SESSION["msg"]='Successfully Added';
		//print_r($size=$_FILES["photo"]);
		$obj->url("page-error.php");

		
		
	}
	else
	{
		
		$_SESSION["msg"]='Something Went Wrong';
		$obj->url("page-error.php");
	}
}








?>