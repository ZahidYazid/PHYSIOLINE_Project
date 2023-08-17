<?php 

$email = $_POST['email'];
$password = $_POST['password'];

//fetch this from database using select statement
//Selct pass from usr_table WHERE usr='$un';

$a = "admin";
$pas = "admin123";


if (($Email = $a) && ($pass = $pas))
{
	header('Location: http://localhost:8888/PHYSIOLINE.html');
	echo "<br>".$email;
	exit();
}
else
{
	echo "You are not the admin";
}

?>