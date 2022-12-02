<?php
// Check for empty fields
if(empty($_POST['email']) 		||
   empty($_POST['password'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$email = $_POST['email'];
$password = $_POST['password'];
// login code
// (contact db etc)
echo "Trying to login";
return true;
?>
