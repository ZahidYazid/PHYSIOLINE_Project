<?php

$Email = $_POST['Email'];
$pass = $_POST['pass'];

$servername = "localhost";
$username = "root";
$password = "root";
$db = "PHYSIO_DATA";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sqli = "INSERT INTO 'Account' ('Email','pass') VALUES ('$Email','$pass')";

if ($conn->query($sqli) === TRUE) {
    echo "ADDED: ".$Email.", ".$pass.";
} else {
    echo "Error: ".$sqli."<br>".$conn->error;
}

$conn->close();

?>