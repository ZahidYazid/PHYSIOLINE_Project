<?php

<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $Reference = $_POST['Reference'];
        $Name = $_POST['Name'];
        $Category = $_POST['Category'];
         $Labels = $_POST['Labels'];
        $Characteristics = $_POST['Characteristics'];

    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "PHYSIO_DATA";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO Product (Reference, Name, Category, Labels, Characteristics) VALUES ('0', '$Reference', '$Name', '$Category', '$Category', '$Labels', '$Characteristics')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);


?>