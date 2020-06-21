<?php include_once('../db/db.php');
session_start();
?>
<?php
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$date=date('d-m-Y');
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$blog_id=$_SESSION['blog_id'];

	
	$query="INSERT INTO `blog-comments`(`date`, `name`, `email`, `comment`,`blog_id`,`status`) VALUES 
	('$date','$name','$email','$comment','$blog_id','1')";
	$exe=mysqli_query($con,$query);
	if($exe)
	{
		
			$output="<h3>Posted Successfully</h3>";
			
			echo $output;
			
		
	}

	else
	{
		echo "Error";
	}
}
?>