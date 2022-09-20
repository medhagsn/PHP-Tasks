<!-- TASK 3: Create PHP Script to add records in DB is not exist the same  -->

<?php 
   include "db-connection.php"; include "create-table.php";
   if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO test (username, password) VALUES ('$username','$password')";
        $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query failed.");
            } else {
                echo "<br> One record inserted.";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add records</title>
</head>
<body>
    <div class="container">
        <div class="col-sm-3">

            <form action="add-records.php" method="post">
                <div class="form-group"><br>
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>

   

