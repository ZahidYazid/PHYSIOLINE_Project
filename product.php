<?php

<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $product_id = $_POST['product_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $image_url = $_POST['image_url'];
        $brand = $_POST['brand'];
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
    $sql = "INSERT INTO Product (product_id, name, description, category, price, image_url, brand) VALUES ('0', '$product_id', '$name', '$description', '$category', '$price', '$image_url','$brand')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);


?>