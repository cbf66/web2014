<?php
//Include the main page
include("../../rec/main.php");
//Send the image headers
header('Content-Description: Secure user image transfer');
header('Content-Type: image/jpg');
header('Cache-Control: must-revalidate');
//Must be logged in
if(!$loggedin) {
	readfile("pictures/denied.jpg");
	die();
}
//Must be activated
if(!$user['activated']) {
	readfile("pictures/denied.jpg");
	die();
}
//Clean the image path
if(isSet($_GET['img'])) {
	$img = str_replace("/", "", $_GET['img']);
} else {
	$img = "X";
}
if(!file_exists("pictures/" . $img)) {
	readfile("pictures/notfound.jpg");
	die();
}
readfile("pictures/" . $img);
die();
?>