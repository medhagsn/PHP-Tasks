<!-- TASK 2: create table if not exist in DB using PHP script. -->

<?php include "db-connection.php";
    $table = "CREATE TABLE if not exists test(
            ID INT(5) AUTO_INCREMENT PRIMARY KEY,
            Username VARCHAR(15) NOT NULL UNIQUE,
            -- Username VARCHAR(15) NOT NULL UNIQUE,
            Password VARCHAR(15) NOT NULL UNIQUE)";
    $query = mysqli_query($connection, $table);
    if ($query) {
        echo "<br> Table created."; 
    } else {
        echo "<br> Something went wrong.";
    }
?>



