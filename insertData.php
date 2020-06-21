<?php
include_once('db/db.php');
?>
<?php

 $name=htmlspecialchars($_POST['name']);
 $mobile=htmlspecialchars($_POST['mobile']);
 $email=htmlspecialchars($_POST['email']);
 $category=htmlspecialchars($_POST['category']);
 
 $date=Date('d-m-Y');

 $query="INSERT INTO `enquiry`(`date`, `name`, `email`, `mobile`, `category`) VALUES ('$date','$name','$email','$mobile','$category')";

if($obj->insertQuery($query))
{

?>
	<script>
		$(document).ready(function()
			{
				$("#res").hide(3000);
			});
		

	</script>
	<br>
	  <h2 id="res">Thank You</h2>
<?php
}
else
{
	?>

	<script>
		$(document).ready(function()
			{
				$("#res1").hide(3000);
			});
		

	</script>
	<br>

	<h2 id="res1">Error</h2>
<?php
}
?>