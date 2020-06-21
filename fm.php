<?php
include_once('db/db.php');

$dir = "gallery/";

// Open a directory, and read its contents

   $dh = opendir($dir);
  
    $i=0;
    while (($file_name = readdir($dh)) !== false)
    {
      
  
    $date=date('Y-m-d');
    $name="Gaana Sambrama 2019";
    $file_name;
    $query="INSERT INTO `gallery`(`date`, `title`, `photo_path`) VALUES ('$date','$name','$file_name')";
    $exe=mysqli_query($conn,$query);
    if($exe)
    {
      echo "Inserted<br>";
    }
    else
    {
      echo "Error";
    }

    
      
    }
    closedir($dh);
  

?>