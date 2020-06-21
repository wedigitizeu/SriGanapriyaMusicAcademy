<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

<?php

$mobile=$_POST['mobile'];

$sel="SELECT * FROM `review_booster` WHERE mobile='$mobile'";
$exe=mysqli_query($conn,$sel);
if(mysqli_num_rows($exe)>0)
{
	echo "<h3>Already invited to comment </h3>";
}
else
{
	$query="INSERT INTO `review_booster`(`mobile`, `status`, `sms_counter`) VALUES 
	('$mobile','1','1')";
	if($obj->insertQuery($query))
	{
		global $mobile;
		$msg="We value your opinion, would you be willing to take a few minutes to leave us a review?.\nhttps://g.co/kgs/efRakn\nService and maintained by https://www.wedigitizeu.com";
		
		
		if($obj->textLocal($mobile,$msg))
		{
			echo "<h3>Message Sent</h3>";
		}
		else
		{
			echo "<h3>Message Sent</h3>"; 
		}
		
	}
	else
	{
		echo "<h3>Please Contact Service Provider</h3>";
	}
		
}


?>