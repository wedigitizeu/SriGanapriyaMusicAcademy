<?php
if(isset($_POST['sub']))
{
	
	 
	 print_r($_FILES['photo']);
	 exit();
	 $size=$_FILES["photo"]["size"];
	 $error=$_FILES["photo"]["error"];
	 $file_name=$_FILES["photo"]["name"];
	 $temp_name=$_FILES["photo"]["tmp_name"];
	 $folder="../gallery/".$file_name;
	 move_uploaded_file($temp_name, $folder);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action=""  enctype="multipart/form-data">

<center>
		<input type="file" name="photo"><br><br>
		<input type="submit" name="sub">
</center>
	</form>
</body>
</html>