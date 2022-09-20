<?php include "database.php";

    $table = "CREATE TABLE if not exists users(
            ID INT(5) PRIMARY KEY,
            Name VARCHAR(15) NOT NULL UNIQUE,
            Password VARCHAR(20) NOT NULL  UNIQUE,
            Email VARCHAR(15) NOT NULL UNIQUE,
            Mobile_NO VARCHAR(10) NOT NULL UNIQUE,
            Status VARCHAR(10) NOT NULL)";

    $query = mysqli_query($connection, $table);
    // if ($query) {
    //     echo "<br> Table created."; 
    // } else {
    //     echo "<br> Something went wrong.";
    // }
?>

<!-- # Userid should unique.
    # Name
    # Email
    # Mobile No
    # Status -->