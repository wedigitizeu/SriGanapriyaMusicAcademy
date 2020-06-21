<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

<?php 
// Adding New Category
 if(isset($_POST['cat']))
 {
 
		$category=$_POST['category'];
		$query="INSERT INTO `blog_category`(`category`, `status`)VALUES ('$category','1')"; 
			
			if($obj->insertQuery($query))
			{
					$_SESSION['msg']="Category Added";
					$obj->url("page-error.php");
					
					
			}
			else
			{
					$_SESSION['msg']="Please contact to service provider";
					$obj->url("page-error.php");
			}
	 
			
	 
	 
	
	
 }

?>

<?php

if(isset($_POST['sub']))
{
	$folder ="blog-images/";
	$_FILES["image"];
	$filename=$_FILES["image"]["name"];
	$temp_name= $_FILES["image"]["tmp_name"];
	$folder ="blog-images/".$filename;
	move_uploaded_file($temp_name,$folder);
	$date=date('d-m-Y');
	$title=$_POST['title'];
	$image=$filename;
	$category=$_POST['cate'];
	$blog=$_POST['blog'];
	
	
	
	$query="INSERT INTO `blog`( `date`, `title`, `image`, `category`, `blog`, `status`) VALUES 
	('$date','$title','$image','$category','$blog','1')";
	if($obj->insertQuery($query))
	{
		$_SESSION['msg']="Success";
		$obj->url("page-error.php");		
	
	}
	else
	{
		$_SESSION['msg']="Something went wrong";
		$obj->url("page-error.php");	
	}
	
	
	
	
}


?>
