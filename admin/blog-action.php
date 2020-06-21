<?php
include_once('../db/db.php');
session_start();
?>

<?php
$sl=$_POST['sl'];
if($sl==1)
{
	$blog_id=$_POST['id'];
	$query="DELETE FROM `blog` WHERE id='$blog_id'";
	if($obj->insertQuery($query))
		{
			echo "<script>
					window.location.href='blog-list.php'
				</script>";
		}
		
		else
		{
			echo "Error while deleting";
		}

}
else
{
	echo "Wrong serial Number";
}
?>