<?php

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$created_at = $_POST['created_at'];

$servername = "localhost";
$username = "root";
$password = "root";
$db = "PHYSIO_DATA";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sqli = "INSERT INTO 'Users' ('user_id', 'username', 'email', 'password', 'full_name', 'created_at') VALUES ('$user_id', '$username','$email','$password', '$full_name', '$created_at')";

if ($conn->query($sqli) === TRUE) {
    echo "ADDED: ".$user_id.", ".$username.", ".$email.", ".$password.", ".$full_name.", ".$created_at.";
} else {
    echo "Error: ".$sqli."<br>".$conn->error;
}

$conn->close();

?>