<?php

$folder=opendir("../gallery");

while($images=readdir($folder)!==FALSE)
{
	echo $image;
}
?>