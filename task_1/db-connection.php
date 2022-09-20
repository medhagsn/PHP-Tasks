<!-- TASK 1: Create a PHP script to make a database connection. -->

<?php
$connection = mysqli_connect('localhost','root','','trial1');
    if($connection){
        echo "Connected to database.";
    } else{
        die("Database connection failed.");
    }
?>
