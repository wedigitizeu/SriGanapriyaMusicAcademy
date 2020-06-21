<?php
if(isset($_POST['sub']))
{
	echo $keyword=implode($_POST['keyword']) ;
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sri Gaanapriya</title>
</head>
<body>
<form method="post" action="">
	
	<input type="text" name="keyword[]">
	<input type="submit" name="sub">

</form>

</body>
</html>