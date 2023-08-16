<?php 

$Email = $_POST['uname'];
$pass = $_POST['psw'];

//fetch this from database using select statement
//Selct pass from usr_table WHERE usr='$un';

$a = "admin";
$pas = "admin123";


if (($Email = $a) && ($pass = $pas))
{
	header('Location: http://localhost:8888/PHYSIOLINE.html');
	echo "<br>".$Email;
	exit();
}
else
{
	echo "You are not the admin";
}

?>