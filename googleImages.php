<?php
//include class file
include("GoogleImages.class.php");

//create class instance
$gimage = new GoogleImages();

/*****************************
call get_images method by providing 3 parameters
1.) query - what should be searched for
2.) cols - number of images per row
3.) rows - number of rows
*****************************/
$gimage->get_images("周杰伦", 4, 5);

?>