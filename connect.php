<?php
$host = "localhost";  // Your database host (usually localhost)
$Username = "root";   // Your database username
$Password = "root";   // Your database password
$Database   = "PHYSIO_DATA";   // Your database name

// Create a database connection
$link = mysqli_connect($localhost, $root, $root, $PHYSIO_DATA);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

