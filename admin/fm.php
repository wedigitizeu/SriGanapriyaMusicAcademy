<?php

function current_page_url()
  
  {
    $request="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url=str_replace("&","&amp",$request);
    return $url;
  }

echo current_page_url();
exit();
$dir = "gallery/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>