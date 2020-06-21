<?php?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


	$imageName=array("gaana1.jpg","gaana2.jpg","gaana3.jpg");

	foreach ($imageName as $img) 
	{

	?>
		<div>
			<img src="gallery/<?php echo $img; ?>">
		</div>
	<?php
}

?>


	



	

</body>
</html>